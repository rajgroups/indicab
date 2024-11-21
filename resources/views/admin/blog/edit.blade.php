@extends('layouts.admin.app')
@section('content')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">   
@endpush
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Home /
                                    <strong class="text-primary small">Location/
                                        <strong class="text-primary small">create/
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
                                <a href="{{ route('admin.blog.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span></a><a href="{{ route('admin.blog.index') }}"
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
                                            <h4>Create Your Blog Content </h4>
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

                                        <form action="{{ route('admin.blog.update',$blog->id) }}" class="form-validate" method="post" id="location_form" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                     <!-- Location Name -->
                                                    <div class="form-group row">
                                                        <label for="title" class="col-sm-4 text-right col-form-label">Title <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="blog title" value="{{ old('title',$blog->title) }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('title')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Location Slug Name -->
                                                    <div class="form-group row">
                                                        <label for="slug" class="col-sm-4 text-right col-form-label">blog Slug <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Blog slug" value="{{ old('slug',$blog->slug) }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('slug')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>  
                                                    </div>

                                                     <!--Location Image -->
                                                     <div class="form-group row">
                                                        <label for="image" class="col-sm-4 text-right col-form-label">Image <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Service slug" value="{{ old('image') }}">
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('image')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>  
                                                    </div>

                                                    <!-- Service -->
                                                    <div class="form-group row">    
                                                        <label for="status" class="col-sm-4 text-right col-form-label">Service <i class="text-danger">* </i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="service_id" id="service_id" class="form-select @error('service_id') is-invalid @enderror" required>
                                                                @foreach ($services as $service)
                                                                    <option value="{{ $service->id }}" {{ old('service_id',$blog->service_id) == $service->name ? 'selected' : '' }}>{{ $service->name }}</option>    
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('service_id')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- Location Status -->
                                                    <div class="form-group row">
                                                        <label for="status" class="col-sm-4 text-right col-form-label">Status <i class="text-danger">* </i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                                                                <option value="active" {{ old('status',$blog->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                                <option value="inactive" {{ old('status',$blog->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                                            </select>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('status')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="Location Image" class="text-right col-form-label">Image <i class="text-danger">* </i>:</label>
                                                            <img src="{{ asset('blog/'.$blog->image) }}" alt="Location Image" id="location-image-preview">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="short_desc" class="text-right col-form-label">Short Description <i class="text-danger">* </i>:</label>
                                                                <textarea name="short_desc" id="short_desc" class="form-control short_desc" cols="30" rows="10" placeholder="Please Enter the short descripion" required>{{ $blog->short_desc }}</textarea>
                                                                {{-- <span class="invalid">This field is required.</span> --}}
                                                                <div class="valid-feedback"> Looks good! </div>
                                                                <div class="invalid-feedback">This field is required.</div>
                                                                @error('short_desc')
                                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="description" class="text-right col-form-label">Description <i class="text-danger">* </i>:</label>
                                                            <textarea name="description" id="description" class="form-control description" cols="30" rows="10" placeholder="Please Enter the location Description" required>{{ $blog->description }}</textarea>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('description')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <!-- Submit Buttons -->
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 text-right">
                                                            <button type="submit" class="btn btn-success">Save</button>
                                                            <a href="{{ route('admin.location.create') }}"></a> <button type="submit" class="btn btn-success" name="add-another">Save And Add Another</button>
                                                        </div>
                                                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function () {
        // Rich Text Area
        $('#description').summernote();

        $('#image').change(function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#location-image-preview')
                        .attr('src', e.target.result)
                        .css('display', 'block'); // Show the image
                };
                reader.readAsDataURL(file); // Read the file as a DataURL
            } else {
                $('#location-image-preview').css('display', 'none'); // Hide the preview if no file is selected
            }
        });
        
        $('#title').on('keyup', function () {
            var slug = $(this).val()
                .toLowerCase() // Convert to lowercase
                .replace(/[^a-z\s]/g, '') // Remove non-alphabetic characters
                .trim() // Remove leading and trailing spaces
                .replace(/\s+/g, '-'); // Replace spaces with hyphens

            $('#slug').val(slug);
        });

        $('#location_form').on('submit', function (e) {
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
