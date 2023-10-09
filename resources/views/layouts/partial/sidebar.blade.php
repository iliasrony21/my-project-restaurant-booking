<div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-menu-trigger">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
        <div class="nk-sidebar-brand">
            <a href="{{route('admin.dashboard')}}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{asset('backend')}}/images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{asset('backend')}}/images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
            </a>
        </div>
    </div>
    <!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element nk-sidebar-body">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>

                    <!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <a href="{{route('slider.index')}}" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                            <span class="nk-menu-text">Manage Slider</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('slider.index')}}" class="nk-menu-link"><span class="nk-menu-text">All slider</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('slider.create')}}" class="nk-menu-link"><span class="nk-menu-text">Create slider</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Manage Category</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('category.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Category</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('category.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Category</span></a>
                            </li>

                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    {{-- .nk-menu-item --}}
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Manage Item</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item ">
                                <a href="{{route('item.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Items</span></a>
                            </li>
                            <li class="nk-menu-item ">
                                <a href="{{route('item.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add item</span></a>
                            </li>

                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                            <span class="nk-menu-text">Manage Reservation</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('reservation.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Reservation</span></a>
                            </li>
                            {{-- <li class="nk-menu-item">
                                <a href="html/kyc-details-regular.html" class="nk-menu-link"><span class="nk-menu-text">KYC Details - Regular</span></a>
                            </li> --}}
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Manage Chefs</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('chef.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Chefs</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('chef.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Chef</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                    {{-- <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Manage Gallery</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('gallery.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Image</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{route('gallery.create')}}" class="nk-menu-link"><span class="nk-menu-text">Add Image</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li> --}}

                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Manage Contact</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{route('contact.index')}}" class="nk-menu-link"><span class="nk-menu-text">All Contact</span></a>
                            </li>
                        </ul>
                        <!-- .nk-menu-sub -->
                    </li>
                    <!-- .nk-menu-item -->
                </ul>
                <!-- .nk-menu -->
            </div>
            <!-- .nk-sidebar-menu -->
        </div>
        <!-- .nk-sidebar-content -->
    </div>
    <!-- .nk-sidebar-element -->
</div>

{{--    --}}
