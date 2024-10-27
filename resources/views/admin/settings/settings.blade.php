@extends('layouts.admin.app')
@section('content')
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body mt-5">
            <div class="row" style=" margin-top: 79px; ">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">{{ __('messages.settings') }}</h4>
                            <div class="page-title-right mb-4">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Job list</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>
                        @endif
                        @if (Session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                                <strong>{{ Session('error') }}</strong>
                            </div>
                        @endif
                        @if (Session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>

                                <strong>{{ Session('success') }}</strong>
                            </div>
                        @endif
                        <form class="needs-validation" novalidate=""  method="POST" action="{{ route('admin.settings.update', 1) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label"
                                            for="validationCustom01">{{ __('messages.admin_sign') }}</label>
                                        <textarea name="admin_sign" id="admin_sign" cols="30" rows="10" class="form-control admin_sign @error('admin_sign') is-invalid @enderror">{{ $siteData->admin_sign }}</textarea>
                                        <div class="valid-feedback"> Looks good! </div>
                                        @if ($errors->has('admin_sign'))
                                            <div class="invalid-feedback"> {{ $errors->first('admin_sign') }} </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">{{ __('messages.volunteer_sign') }}</label>
                                        <textarea name="volunteer_sign" id="volunteer_sign" cols="30" rows="10" class="form-control volunteer_sign @error('volunteer_sign') is-invalid @enderror">{{ $siteData->volunteer_sign }}</textarea>
                                        <div class="valid-feedback"> Looks good! </div>
                                        @if ($errors->has('volunteer_sign'))
                                            <div class="invalid-feedback"> {{ $errors->first('volunteer_sign') }} </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="validationCustom02">{{ __('messages.logo') }}</label>
                                        <textarea name="logo" id="logo" cols="30" rows="10" class="form-control logo @error('logo') is-invalid @enderror">{{ $siteData->logo }}</textarea>
                                        <div class="valid-feedback"> Looks good! </div>
                                        @if ($errors->has('logo'))
                                            <div class="invalid-feedback"> {{ $errors->first('logo') }} </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection