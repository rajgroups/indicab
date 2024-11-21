<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-dark is-compact" data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="#" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('resource/admin/images/logo-dark.png') }}"
                    srcset="{{ asset('resource/admin/images/logo-dark.png') }} 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('resource/admin/images/logo-dark.png') }}"
                    srcset="{{ asset('resource/admin/images/logo-dark.png') }} 2x" alt="logo-dark">
            </a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                @if(Auth::guard('admin')->user()->role == 'admin')
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item"><a href="{{ url('admin/') }}" class="nk-menu-link"><span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em>
                        </span><span class="nk-menu-text">Dashboard</span></a>
                    </li>
                    {{-- Service Module system --}}
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon icon ni ni-puzzle"></em></span><span class="nk-menu-text">Service</span>
                        </a>
                        <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.service.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.service.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.service.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.service.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                    </li>

                    {{-- Sub Service Module system --}}
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-tile-thumb"></em></span><span class="nk-menu-text">Sub Service</span>
                        </a>
                        <ul class="nk-menu-sub">
                        <li class="nk-menu-item"><a href="{{ route('admin.subservice.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.subservice.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.subservice.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                        <li class="nk-menu-item"><a href="{{ route('admin.subservice.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                    </li>
                    
                    {{-- Price System --}}
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-invest"></em></span><span class="nk-menu-text">Price</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.price.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.price.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.price.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.price.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>

                     {{-- Location Module System --}}
                     <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-location"></em></span><span class="nk-menu-text">Location</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.location.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.location.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.location.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.location.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>

                      {{-- Page Module System --}}
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-layers-fill"></em></span><span class="nk-menu-text">Page</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.page.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>

                      {{-- Testimonial System --}}
                      <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-chat-msg"></em></span><span class="nk-menu-text">Testimonial</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.testimonial.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.testimonial.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.testimonial.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.testimonial.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>

                     {{-- Blog System --}}
                     <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-blogger-fill"></em></em></span><span class="nk-menu-text">Blog</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.blog.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.blog.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.blog.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.blog.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>
                     <li class="nk-menu-heading"><h6 class="overline-title text-primary-alt">Service</h6></li>
                     {{-- Packers System --}}
                     <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-package"></em></span><span class="nk-menu-text">Packers</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.page.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>
                     {{-- car System --}}
                     <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle"><span class="nk-menu-icon">
                            <em class="icon ni ni-truck"></em></span><span class="nk-menu-text">Car</span>
                        </a>
                        <ul class="nk-menu-sub">    
                           <li class="nk-menu-item"><a href="{{ route('admin.page.create') }}" class="nk-menu-link"><span class="nk-menu-text">Create</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.index') }}" class="nk-menu-link"><span class="nk-menu-text">List</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active</span></a></li>
                           <li class="nk-menu-item"><a href="{{ route('admin.page.inactive') }}" class="nk-menu-link"><span class="nk-menu-text">Inactive</span></a></li>
                        </ul>
                     </li>
                    @endif
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
