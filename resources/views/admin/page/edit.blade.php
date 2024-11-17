{{-- @dd($page->show_faq); --}}
@extends('layouts.admin.app')
@section('content')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">   
<style>
   #strengthMeter, #descriptionMeter {
            height: 10px;
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
            margin-top: 5px;
        }

        .progress-bar {
            height: 100%;
            transition: width 0.3s;
        }

        .weak { background-color: red; }
        .average { background-color: orange; }
        .good { background-color: green; }
</style>    
@endpush
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Home /
                                    <strong class="text-primary small">Page /
                                        <strong class="text-primary small">create /
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
                                <a href="{{ route('admin.page.index') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex">
                                    <em class="icon ni ni-arrow-left"></em>
                                    <span>Back</span></a><a href="{{ route('admin.page.index') }}"
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
                                            <h4> <i class="fa fa-sticky-note" aria-hidden="true"></i> Add Page </h4>
                                            <small class="text-muted">Dynomic Page Create</small>
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

                                        <form action="{{ route('admin.page.update',$page->id) }}" class="form-validate" method="post" id="location_form" novalidate="novalidate" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <!-- SEO Meta Information -->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5> SEO Meta Data</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="seo_title" class="form-label">Page SEO Title <i class="text-danger">* </i></label>
                                                        <input type="text" name="seo_title" id="seo_title" class="form-control @error('seo_title') is-invalid @enderror" placeholder="Enter SEO Title" value="{{ old('seo_title',$page->seo_title) }}" required />
                                                        @error('seo_title')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="titleHelp" class="text-muted">SEO Title should be between 50 to 60 characters long.</small>
                                                        
                                                        <div id="strengthMeter" class="mt-2">
                                                            <div class="progress-bar"></div>
                                                        </div>
                                                        <small id="titleFeedback" class="text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="seo_description" class="form-label">Page Meta Description <i class="text-danger">* </i></label>
                                                        <textarea name="seo_description" id="seo_description" class="form-control @error('seo_description') is-invalid @enderror" rows="3" placeholder="Enter Meta Description" required>{{ old('seo_description',$page->seo_description) }}</textarea>
                                                        @error('seo_description')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="descriptionHelp" class="text-muted">Meta description should be between 150 to 160 characters long.</small>
                                            
                                                        <div id="descriptionMeter" class="mt-2">
                                                            <div class="progress-bar"></div>
                                                        </div>
                                                        <small id="descriptionFeedback" class="text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="seo_keywords" class="form-label">Page Meta Keyword <i class="text-danger">* </i></label>
                                                        <textarea name="seo_keywords" id="seo_keywords" class="form-control @error('seo_keywords') is-invalid @enderror" rows="3" placeholder="Enter Meta keywords" required>{{ old('seo_keywords',$page->seo_keywords) }}</textarea>
                                                        @error('seo_keywords')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="descriptionHelp" class="text-muted">Meta description should be between 150 to 160 characters long.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5> Target Area and City</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="area" class="form-label">Area Name<i class="text-danger">* </i></label>
                                                        <input type="text" name="area" id="area" class="form-control @error('area') is-invalid @enderror" value="{{ old('area',$page->area) }}" placeholder="Please enter target area name" required>
                                                        @error('area')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="descriptionHelp" class="text-muted"></small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="city" class="form-label">City Name<i class="text-danger">* </i></label>
                                                        <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror"  value="{{ old('city',$page->city) }}" placeholder="Please enter target City name" required>
                                                        @error('area')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="descriptionHelp" class="text-muted"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Social Media Meta Information -->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5> Social media Meta Tag</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="og_title" class="form-label">OG SEO Title</label>
                                                        <input type="text" name="og_title" id="og_title" class="form-control @error('og_title') is-invalid @enderror" placeholder="Enter SEO Title" value="{{ old('og_title',$page->og_title) }}" required />
                                                        @error('og_title')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="titleHelp" class="text-muted">SEO Title should be between 50 to 60 characters long.</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="og_image" class="form-label">Og Meta Image</label>
                                                        <input type="file" class="form-control @error('og_image') is-invalid @enderror" name="og_image" id="og_image" placeholder="Please Choose Meta OG Image" value="{{ old('og_title',$page->og_image) }}" />
                                                        @error('og_image')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <div id="fileHelpId" class="form-text"><b>Allowed:</b> JPG,PNG,JPEG,GIF</div>
                                                    </div>
                                                    <img src="{{ isset($page->og_image) ? asset('og_image/' . $page->og_image) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/640px-No-Image-Placeholder.svg.png' }}" alt="" id="og-image-preview" style="height: 175px">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Og Meta Desciption</label>
                                                        <textarea name="og_description" id="og_description" class="form-control @error('og_description') is-invalid @enderror" rows="3" placeholder="Enter Meta og_description" required>{{ old('og_description',$page->og_description) }}</textarea>
                                                        @error('og_description')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <div id="fileHelpId" class="form-text"><b>Allowed:</b> JPG,PNG,JPEG,GIF</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Banner Information -->
                                            <div class="card-header mt-2">
                                                <div class="card-title">
                                                    <h5> Banner Section</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="first_title" class="form-label">H1 Title <span class="text-danger">*</span> </label>
                                                        <input type="text" name="first_title" id="first_title" class="form-control @error('first_title') is-invalid @enderror" placeholder="Enter H1 Title" value="{{ old('first_title',$page->first_title) }}" required/>
                                                        @error('first_title')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <small id="titleHelp" class="text-muted">SEO Title should be between 50 to 60 characters long.</small>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">First Description <span class="text-danger">*</span>  </label>
                                                        <textarea name="first_description" id="first_description" class="form-control @error('first_description') is-invalid @enderror" rows="3" placeholder="Enter first_description" required>{{ old('first_description',$page->first_description) }}</textarea>
                                                        @error('first_description')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <div id="fileHelpId" class="form-text"><b>Should:</b> Minimum 10 to Maximum 23 word</div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Short tag <span class="text-danger">*</span> </label>
                                                        <textarea name="short_tag" id="short_tag" class="form-control @error('short_tag') is-invalid @enderror" rows="3" placeholder="Enter short_tag" required>{{ old('short_tag',$page->short_tag) }}</textarea>
                                                        @error('short_tag')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <div id="fileHelpId" class="form-text"><b>Should:</b> Minimum 10 word</div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Banner Image <span class="text-danger">*</span> </label>
                                                        <input type="file" class="form-control @error('banner_image') is-invalid @enderror" name="banner_image" id="banner_image" placeholder="Please Choose banner Image"/>
                                                        @error('banner_image')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                        <div id="fileHelpId" class="form-text"><b>Allowed:</b> JPG,PNG,JPEG,GIF</div>
                                                    </div>
                                                    <img src="{{ isset($page->banner_image) ? asset('og_image/' . $page->og_image) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/640px-No-Image-Placeholder.svg.png' }}" alt="" id="banner-image-preview" srcset="" style="height: 175px">
                                                </div>
                                            </div>
                                            <!-- Service Question Section Information -->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5>Service Section</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Do you want to show sub category service <i class="text-danger">*</i></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input @error('sub_category_service') is-invalid @enderror" type="radio" name="sub_category_service" value="yes" id="flexRadioDefault1" {{ ($page->show_sub_category_service ?? '') === 'yes' ? 'checked' : '' }}  required>
                                                        <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input @error('sub_category_service') is-invalid @enderror" type="radio" name="sub_category_service" value="no" id="flexRadioDefault2" {{ ($page->show_sub_category_service ?? '') === 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2"> No</label>
                                                      </div>
                                                        @error('sub_category_service')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Do you want to show Service Location <i class="text-danger">*</i></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input  @error('service_location') is-invalid @enderror" type="radio" name="service_location" value="yes" id="flexRadioDefault1" {{ ($page->show_service_location ?? '') === 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          Yes
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input  @error('service_location') is-invalid @enderror" type="radio" name="service_location" value="no" id="flexRadioDefault2" {{ ($page->show_service_location ?? '') === 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                          No
                                                        </label>
                                                      </div>
                                                        @error('service_location')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Do you want to show Price information <i class="text-danger">*</i></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input @error('price') is-invalid @enderror" type="radio" name="price" value="yes" id="flexRadioDefault1" {{ ($page->show_price_information ?? '') === 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input @error('price') is-invalid @enderror" type="radio" name="price" value="no" id="flexRadioDefault2" {{ ($page->show_price_information ?? '') === 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2"> No </label>
                                                      </div>
                                                        @error('price')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Do you want to show tesimonial <i class="text-danger">*</i></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input @error('tesimonial') is-invalid @enderror" type="radio" name="tesimonial" value="yes" id="flexRadioDefault1" {{ ($page->show_testimonial ?? '') === 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          Yes
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input @error('tesimonial') is-invalid @enderror" type="radio" name="tesimonial" value="no" id="flexRadioDefault2" {{ ($page->show_testimonial ?? '') === 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                          No
                                                        </label>
                                                      </div>
                                                        @error('tesimonial')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                        @enderror
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="form-label">Do you want to show FAQ <i class="text-danger">*</i></label>
                                                    <div class="form-check">
                                                        <input class="form-check-input @error('faq') is-invalid @enderror" type="radio" name="faq" value="yes" id="flexRadioDefault1" {{ ($page->show_faq ?? '') === 'yes' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                          Yes
                                                        </label>
                                                      </div>
                                                      <div class="form-check">
                                                        <input class="form-check-input @error('faq') is-invalid @enderror" type="radio" name="faq" value="no" id="flexRadioDefault2" {{ ($page->show_faq ?? '') === 'no' ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                          No
                                                        </label>
                                                      </div>
                                                      @error('faq')
                                                        <span class="invalid-feedback">{{ $message }}</span>
                                                     @enderror
                                                </div>
                                            </div>
                                            <!-- Content Section Information -->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5>Content Section</h5>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="first_content_title" class="form-label">Content title <i class="text-danger">*</i>:</label>
                                                            <input type="text" name="first_content_title" id="first_content_title" class="form-control @error('first_content_title') is-invalid @enderror" placeholder="Enter first_content_title" value="{{ old('first_content_title',$page->first_content_title) }}" required/>
                                                            @error('first_content_title')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                            <small id="titleHelp" class="text-muted">Should be between 5 to 7 word long.</small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">First Description <i class="text-danger">*</i>:</label>
                                                            <textarea name="first_content_description" id="first_content_description" class="form-control @error('first_content_description') is-invalid @enderror" rows="3" placeholder="Enter first_content_description" required>{{ old('first_content_description',$page->first_content_description) }}</textarea>
                                                            @error('first_content_description')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                            <div id="fileHelpId" class="form-text"><b>Should:</b> Minimum 10 to Maximum 23 word</div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Short tag <i class="text-danger">*</i>:</label>
                                                            <textarea name="content_short_tag" id="content_short_tag" class="form-control @error('content_short_tag') is-invalid @enderror" rows="3" placeholder="Enter short-tag" required>{{ old('content_short_tag',$page->content_short_tag) }}</textarea>
                                                            @error('content_short_tag')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                            <div id="fileHelpId" class="form-text"><b>Should:</b> Minimum 10 word</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Side Image <i class="text-danger">*</i>:</label>
                                                            <input type="file" class="form-control @error('side_image') is-invalid @enderror" name="side_image" id="side_image" placeholder=""aria-describedby="fileHelpId"/>
                                                            @error('side_image')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                            <div id="fileHelpId" class="form-text"><b>Allowed:</b> JPG,PNG,JPEG,GIF</div>
                                                        </div>
                                                        <img src="{{ isset($page->side_image) ? asset('side_image/' . $page->side_image) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/640px-No-Image-Placeholder.svg.png' }}" alt="" id="side-image-preview" srcset="" style="height: 175px">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Page Setting Section Information -->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h5>Page Setting Section</h5>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                     <!-- Location Name -->
                                                    <div class="form-group row">
                                                        <label for="name" class="col-sm-4 text-right col-form-label">Slug Name <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Slug Name" value="{{ old('name',$page->slug_name) }}" required>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('name')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- Location Slug Name -->
                                                    <div class="form-group row">
                                                        <label for="slug" class="col-sm-4 text-right col-form-label">Slug <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="URL slug" value="{{ old('slug',$page->slug) }}" required>
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
                                                        <label for="feature_image" class="col-sm-4 text-right col-form-label">Feature Image <i class="text-danger">*</i>:</label>
                                                        <div class="col-sm-8">
                                                            <input type="file" name="feature_image" class="form-control @error('feature_image') is-invalid @enderror" id="feature_image" placeholder="Feature Image" value="{{ old('feature_image',$page->feature_image) }}">
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('feature_image')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>  
                                                    </div>
                                                    <!-- Service Select -->
                                                    <div class="form-group row">
                                                        <label for="service" class="col-sm-4 text-right col-form-label">Select Service <i class="text-danger">* </i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="service" id="service" class="form-select @error('service') is-invalid @enderror" required>
                                                                @foreach ($services as $service)
                                                                    <option value="{{ $service->id }}" {{ old('service',$page->service) == $service->id ? 'selected' : '' }}>
                                                                        {{ $service->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('service')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- Location section -->
                                                    <div class="form-group row">
                                                        <label for="location" class="col-sm-4 text-right col-form-label">Select Location <i class="text-danger">* </i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="location" id="location" class="form-select @error('location') is-invalid @enderror" required>
                                                                @foreach ($locations as $location)
                                                                    <option value="{{ $location->id }}" {{ old('location',$page->location) == $location->id ? 'selected' : '' }}>
                                                                        {{ $location->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('location')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                     <!-- Location Status -->
                                                    <div class="form-group row">
                                                        <label for="status" class="col-sm-4 text-right col-form-label">Status <i class="text-danger">* </i>:</label>
                                                        <div class="col-sm-8">
                                                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                                                                <option value="active" {{ old('status',$page->status) == 'active' ? 'selected' : '' }}>Active</option>
                                                                <option value="inactive" {{ old('status',$page->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
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
                                                            <label for="description" class="text-right col-form-label">Image <i class="text-danger">* </i>:</label>
                                                            <img src="{{ isset($page->feature_image) ? asset('feature_image/' . $page->feature_image) : 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/640px-No-Image-Placeholder.svg.png' }}" alt="" id="side-image-preview" srcset="" style="height: 175px">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mb-3">
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label for="description" class="text-right col-form-label">Brief Your Description <i class="text-danger">* </i>:</label>
                                                            <textarea name="description" id="description" class="form-control description" cols="30" rows="10" placeholder="Please Enter the location Description" required>{{ $page->description }}</textarea>
                                                            {{-- <span class="invalid">This field is required.</span> --}}
                                                            <div class="valid-feedback"> Looks good! </div>
                                                            <div class="invalid-feedback">This field is required.</div>
                                                            @error('description')
                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                            <small id="matchFeedback" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">SEO Score</label>
                                                    <div class="progress">
                                                        <div id="seo-score" class="progress-bar" role="progressbar" style="width: 0%;" 
                                                             aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
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

        const $titleInput = $('#seo_title');
        const $descriptionInput = $('#seo_description');
        const $titleProgressBar = $('#strengthMeter .progress-bar');
        const $descriptionProgressBar = $('#descriptionMeter .progress-bar');
        const $titleFeedback = $('#titleFeedback');
        const $descriptionFeedback = $('#descriptionFeedback');

        function updateMeter(inputLength, maxLength, $progressBar, $feedback) {
            const percentage = (inputLength / maxLength) * 100;
            let feedback, strengthClass;

            if (inputLength < maxLength - 10) {
                strengthClass = 'weak';
                feedback = `Too short: ${inputLength} characters`;
            } else if (inputLength <= maxLength) {
                strengthClass = 'good';
                feedback = `Perfect length: ${inputLength} characters`;
            } else {
                strengthClass = 'average';
                feedback = `Too long: ${inputLength} characters`;
            }

            $progressBar
                .css('width', `${percentage}%`)
                .removeClass('weak average good')
                .addClass(strengthClass);

            $feedback.text(feedback);
        }

        $titleInput.on('input', function () {
            const length = $(this).val().length;
            updateMeter(length, 60, $titleProgressBar, $titleFeedback);
        });

        $descriptionInput.on('input', function () {
            const length = $(this).val().length;
            updateMeter(length, 160, $descriptionProgressBar, $descriptionFeedback);
        });

        // Rich Text Area
        $('#description').summernote({
            height: 300, // Set height (in pixels)
            minHeight: 200, // Set minimum height (in pixels)
            maxHeight: 500, // Set maximum height (in pixels)
            placeholder: 'Enter a detailed description...',
            // toolbar: [
            //     ['style', ['bold', 'italic', 'underline', 'clear']],
            //     ['font', ['strikethrough', 'superscript', 'subscript']],
            //     ['para', ['ul', 'ol', 'paragraph']],
            //     ['insert', ['link', 'picture', 'video']],
            //     ['view', ['fullscreen', 'codeview', 'help']]
            // ]
        });

        $('#feature_image').change(function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#feature_image-preview')
                        .attr('src', e.target.result)
                        .css('display', 'block'); // Show the image
                };
                reader.readAsDataURL(file); // Read the file as a DataURL
            } else {
                $('#feature_image-preview').css('display', 'none'); // Hide the preview if no file is selected
            }
        });

        $('#side_image').change(function(e){
            const file = e.target.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function (e){
                    $('#side-image-preview')
                    .attr('src', e.target.result)
                    .css('display', 'block'); // Show the image
                };
                reader.readAsDataURL(file); // Read the file as a DataURL
            }else{
                $('#side-image-preview').css('display', 'none'); // Hide the preview if no file is selected
            }
        });

        $('#banner_image').change(function(e){
            const file = e.target.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function (e){
                    $('#banner-image-preview')
                    .attr('src', e.target.result)
                    .css('display', 'block'); // Show the image
                };
                reader.readAsDataURL(file); // Read the file as a DataURL
            }else{
                $('#banner-image-preview').css('display', 'none'); // Hide the preview if no file is selected
            }
        });

        $('#og_image').change(function(e){
            const file = e.target.files[0];
            if(file){
                const reader = new FileReader();
                reader.onload = function (e){
                    $('#og-image-preview')
                    .attr('src', e.target.result)
                    .css('display', 'block'); // Show the image
                };
                reader.readAsDataURL(file); // Read the file as a DataURL
            }else{
                $('#og-image-preview').css('display', 'none'); // Hide the preview if no file is selected
            }
        });
        
        $('#name').on('keyup', function () {
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

        const $keywordsInput = $('#seo_keywords');
        const $descriptionInputdata = $('#description');
        const $feedback = $('#matchFeedback');
        const $seoScore = $('#seo-score');

        function calculateSEOScore() {
            const keywords = $keywordsInput.val().toLowerCase().split(',').map(kw => kw.trim());
            const content = $descriptionInputdata.val().toLowerCase();

            const matchedKeywords = keywords.filter(keyword => content.includes(keyword));
            const matchCount = matchedKeywords.length;
            const totalKeywords = keywords.length;

            let score = 0;
            if (totalKeywords > 0) {
                score = Math.round((matchCount / totalKeywords) * 100); // Calculate percentage
            }

            // Update feedback and progress bar
            $feedback.html(
                matchCount > 0 
                ? `Matched Keywords: <span class="match">${matchedKeywords.join(', ')}</span>` 
                : `<span class="no-match">No matching keywords found.</span>`
            );
            $seoScore.css('width', `${score}%`).attr('aria-valuenow', score).text(`${score}%`);

            if (score >= 70) {
                $seoScore.addClass('bg-success').removeClass('bg-warning bg-danger');
            } else if (score >= 40) {
                $seoScore.addClass('bg-warning').removeClass('bg-success bg-danger');
            } else {
                $seoScore.addClass('bg-danger').removeClass('bg-success bg-warning');
            }
        }

        // Trigger SEO score calculation on input change
        $keywordsInput.on('input', calculateSEOScore);
        $descriptionInputdata.on('input', calculateSEOScore);
    });
    </script>
@endpush
