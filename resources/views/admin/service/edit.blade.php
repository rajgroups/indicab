@extends('layouts.admin.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Home /
                                    <strong class="text-primary small">Service/
                                        <strong class="text-primary small">Edit/
                                        </strong>
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <!-- Show Authenticated User ID -->
                                        <li>User ID: <span class="text-base">{{ Auth::guard('admin')->user()->id }}</span></li>

                                        <!-- Show Authenticated User Created Date -->
                                        <li>Created Date: <span class="text-base">{{ Auth::guard('admin')->user()->created_at->format('d M, Y h:i A') }}</span></li>

                                        <!-- Example Last Login (Optional) -->
                                        <!-- Assuming you are tracking the last login in your database -->
                                        <li>Last Login: <span class="text-base">{{ Auth::guard('admin')->user()->last_login ? Auth::guard('admin')->user()->last_login->format('d M, Y h:i A') : 'N/A' }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.service.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span></a><a href="{{ route('admin.service.index') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div>
                    <div class="se-pre-con" style="display: none;"></div>
                    <div class="row">
                        <div class="col-sm-12 card">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading card-header">
                                        <div class="panel-title card-title">
                                            <h4>Edit Service </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body card-body">

                                        @if(session('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ session('success') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        @if(session('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ session('error') }}
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <!-- Display validation errors -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                            </div>
                                        @endif

                                        <form action="{{ route('admin.service.update',$service->id) }}" class="form-validate" method="post" id="service_form" novalidate="novalidate" >
                                            @csrf
                                            @method('PUT')
                                            <!-- Category Name -->
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 text-right col-form-label">Service Name <i class="text-danger">*</i>:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Service Name" value="{{ old('name,',$service->name) }}" required>
                                                    {{-- <span class="invalid">This field is required.</span> --}}
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback">This field is required.</div>
                                                    @error('name')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                              <!-- Service Slug Name -->
                                              <div class="form-group row">
                                                <label for="slug" class="col-sm-2 text-right col-form-label">Service Slug <i class="text-danger">*</i>:</label>
                                                <div class="col-sm-4">
                                                    <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Service slug" value="{{ old('slug',$service->slug) }}" required>
                                                    {{-- <span class="invalid">This field is required.</span> --}}
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback">This field is required.</div>
                                                    @error('slug')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Status -->
                                            <div class="form-group row">
                                                <label for="status" class="col-sm-2 text-right col-form-label">Status <i class="text-danger">* </i>:</label>
                                                <div class="col-sm-4">
                                                    <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                                                        <option value="active" {{ old('status',$service->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                        <option value="inactive" {{ old('status',$service->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                    </select>
                                                    <div class="valid-feedback"> Looks good! </div>
                                                    <div class="invalid-feedback">This field is required.</div>
                                                    @error('status')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Submit Buttons -->
                                            <div class="form-group row">
                                                <div class="col-sm-6 text-right">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <a href="{{ route('admin.service.create') }}"></a> <button type="submit" class="btn btn-success" name="add-another">Save And Add Another</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
        $('#name').on('keyup', function () {
            var slug = $(this).val()
                .toLowerCase() // Convert to lowercase
                .replace(/[^a-z\s]/g, '') // Remove non-alphabetic characters
                .trim() // Remove leading and trailing spaces
                .replace(/\s+/g, '-'); // Replace spaces with hyphens

            $('#slug').val(slug);
        });

        $('#service_form').on('submit', function (e) {
            var $submitButtons = $(this).find('button[type="submit"]');

            // Disable the submit buttons to prevent multiple submissions
            $submitButtons.prop('disabled', true);

            // Optional: Check if the form is valid (client-side)
            if (!this.checkValidity()) {
                e.preventDefault(); // Prevent submission if invalid
                $submitButtons.prop('disabled', false); // Re-enable buttons
            }

            // Re-enable buttons after a short delay for failed submissions (useful for AJAX or backend validation)
            $(this).on('ajaxComplete error', function () {
                $submitButtons.prop('disabled', false);
            });
        });
    });
    </script>
@endpush
