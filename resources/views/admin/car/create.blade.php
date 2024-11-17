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
                                    <strong class="text-primary small">Price /
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
                                <a href="{{ route('admin.car.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span></a><a href="{{ route('admin.car.index') }}"
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
                                            <h4>Add Car </h4>
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

                                        <form action="{{ route('admin.car.store') }}" class="form-validate" method="post" id="service_form" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            @method('POST')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <!-- Category Name -->
                                                    <div class="form-group row">
                                                        <label for="name" class="col-sm-4 text-right col-form-label">Car Name(Title)<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Price Name title" value="{{ old('name') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('name')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- price Details -->
                                                     <div class="form-group row">
                                                        <label for="price" class="col-sm-4 text-right col-form-label">Price<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price" placeholder="price" value="{{ old('price') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('price')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- Item Ratio Details -->
                                                     <div class="form-group row">
                                                        <label for="item_ratio" class="col-sm-4 text-right col-form-label">item Ratio<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="item_ratio" class="form-control @error('item_ratio') is-invalid @enderror" id="item_ratio" placeholder="item_ratio" value="{{ old('item_ratio') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('item_ratio')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- Item Ratio Details -->
                                                     <div class="form-group row">
                                                        <label for="price_ratio" class="col-sm-4 text-right col-form-label">Price Ratio<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="price_ratio" class="form-control @error('price_ratio') is-invalid @enderror" id="price_ratio" placeholder="price_ratio" value="{{ old('price_ratio') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('price_ratio')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Service Slug Name -->
                                                    <div class="form-group row">
                                                        <label for="slug" class="col-sm-4 text-right col-form-label">Car Slug <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Price slug" value="{{ old('slug') }}" required>
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
                                                            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image" placeholder="Service slug" value="{{ old('image') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('image')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>  
                                                    </div>

                                                    <!--Location Image -->
                                                    <div class="form-group row">
                                                        <label for="icon" class="col-sm-4 text-right col-form-label">Icon <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" id="icon" placeholder="Service icon" value="{{ old('icon') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('icon')
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
                                                                    <option value="{{ $service->id }}" {{ old('service_id') == $service->name ? 'selected' : '' }}>{{ $service->name }}</option>    
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('service_id')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    
                                                    <!-- make Details -->
                                                    <div class="form-group row">
                                                        <label for="make" class="col-sm-4 text-right col-form-label">make<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="make" class="form-control @error('make') is-invalid @enderror" id="make" placeholder="make" value="{{ old('make') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('make')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                     <!-- model Details -->
                                                     <div class="form-group row">
                                                        <label for="model" class="col-sm-4 text-right col-form-label">model<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="model" placeholder="model" value="{{ old('model') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('model')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    
                                                     <!-- Year Details -->
                                                     <div class="form-group row">
                                                        <label for="year" class="col-sm-4 text-right col-form-label">year<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text
                                                            " name="year" class="form-control @error('year') is-invalid @enderror" id="year" placeholder="year" value="{{ old('year') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('year')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- color Details -->
                                                    <div class="form-group row">
                                                        <label for="color" class="col-sm-4 text-right col-form-label">color<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text
                                                            " name="color" class="form-control @error('color') is-invalid @enderror" id="color" placeholder="color" value="{{ old('color') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('color')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- color Details -->
                                                    <div class="form-group row">
                                                        <label for="engine_type" class="col-sm-4 text-right col-form-label">Engine type<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="engine_type" class="form-control @error('engine_type') is-invalid @enderror" id="engine_type" placeholder="engine type" value="{{ old('engine_type') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('engine_type')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- color Details -->
                                                    <div class="form-group row">
                                                        <label for="aircooling" class="col-sm-4 text-right col-form-label">Aircooling<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="aircooling" id="aircooling" class="form-select @error('aircooling') is-invalid @enderror" required>
                                                                <option value="ac" {{ old('aircooling') == 'ac' ? 'selected' : '' }}>Ac</option>
                                                                <option value="nonac" {{ old('aircooling') == 'nonac' ? 'selected' : '' }}>Non Ac</option>    
                                                            </select>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('aircooling')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> 

                                                    <!-- Passanger  Details -->
                                                    <div class="form-group row">
                                                        <label for="passanger" class="col-sm-4 text-right col-form-label">Passanger<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="number" name="passanger" class="form-control @error('passanger') is-invalid @enderror" id="passanger" placeholder="engine type" value="{{ old('passanger') }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('passanger')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> 

                                                     <!-- fuel_type  Details -->
                                                     <div class="form-group row">
                                                        <label for="fuel_type" class="col-sm-4 text-right col-form-label">Fuel type<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="fuel_type" id="fuel_type" class="form-select @error('fuel_type') is-invalid @enderror" required>
                                                                <option value="petrol" {{ old('fuel_type') == 'petrol' ? 'selected' : '' }}>petrole</option>
                                                                <option value="diesel" {{ old('fuel_type') == 'diesel' ? 'selected' : '' }}>diesel</option> 
                                                                <option value="electric" {{ old('fuel_type') == 'electric' ? 'selected' : '' }}>diesel</option>        
                                                                <option value="hybrid" {{ old('fuel_type') == 'hybrid' ? 'selected' : '' }}>diesel</option>    
                                                                <option value="other" {{ old('fuel_type') == 'other' ? 'selected' : '' }}>diesel</option>        
                                                            </select>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('fuel_type')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div> 
                                                    
                                                    <!-- transmission Details -->
                                                    <div class="form-group row">
                                                        <label for="transmission" class="col-sm-4 text-right col-form-label">Transmission<i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="transmission" id="transmission" class="form-select @error('transmission') is-invalid @enderror" required>
                                                                <option value="automatic" {{ old('transmission') == 'automatic' ? 'selected' : '' }}>Automatic</option>
                                                                <option value="manual" {{ old('transmission') == 'manual' ? 'selected' : '' }}>Manual</option>
                                                                <option value="semi-automatic" {{ old('transmission') == 'semi-automatic' ? 'selected' : '' }}>semi-automatic</option>
                                                            </select>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('transmission')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>   

                                                    <!-- Image Details -->
                                                    <div class="col-md-6">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="description" class="text-right col-form-label">Image <i class="text-danger">* </i>:</label>
                                                                <img src="{{ asset('location/default.png') }}" alt="Location Image" id="location-image-preview">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="short_description" class="text-right col-form-label">Short Description <i class="text-danger">* </i>:</label>
                                                                <textarea name="short_description" id="short_description" class="form-control short_description" cols="30" rows="10" placeholder="Please Enter the Price Description" required></textarea>
                                                                {{-- <span class="invalid">This field is required.</span> --}}
                                                                <div class="valid-feedback"> Looks good! </div>
                                                                <div class="invalid-feedback">This field is required.</div>
                                                                @error('short_description')
                                                                    <span class="invalid-feedback">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <label for="description" class="text-right col-form-label">Description <i class="text-danger">* </i>:</label>
                                                                <textarea name="description" id="description" class="form-control description" cols="30" rows="10" placeholder="Please Enter the location Description" required></textarea>
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
                                            </div>
                                            <!-- Submit Buttons -->
                                            <div class="form-group row mt-3">
                                                <div class="col-sm-6 text-right">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <a href="{{ route('admin.price.create') }}"></a> <button type="submit" class="btn btn-success" name="add-another">Save And Add Another</button>
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

        $('#name').on('keyup', function () {
            var slug = $(this).val()
                .toLowerCase() // Convert to lowercase
                .replace(/[^a-z0-9\s]/g, '') // Remove non-alphabetic characters
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
