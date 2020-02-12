 <!-- BEGIN: Main Menu-->
 <div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal fixed-top navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('admin.dashboard')}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Pentacare</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <!-- include ../../../includes/mixins-->
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-home"></i><span data-i18n="Dashboard">Front Office</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : ''}}" data-menu=""><a class="dropdown-item" href="{{route('admin.dashboard')}}" data-toggle="dropdown" data-i18n="Analytics"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'patients.index' ? 'active' : ''}}" data-menu=""><a class="dropdown-item" href="{{route('patients.index')}}" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-users"></i>Patients</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'visitorbooks.index' ? 'active' : ''}}" data-menu=""><a class="dropdown-item" href="{{route('visitorbooks.index')}}" data-toggle="dropdown" data-i18n="Analytics"><i class="fa fa-users"></i>Visitors Book</a>
                        </li>
                        <li class="{{ Route::currentRouteName() == 'appointments.index' ? 'active' : ''}}" data-menu=""><a class="dropdown-item" href="{{route('appointments.index')}}" data-toggle="dropdown" data-i18n="Analytics"><i class="fa fa-calendar"></i> +Appointment</a>
                        </li>
                        <li data-menu=""><a class="{{ Route::currentRouteName() == 'complains.index' ? 'active' : ''}}" data-menu=""><a class="dropdown-item" href="{{route('complains.index')}}" data-toggle="dropdown" data-i18n="Analytics"><i class="fa fa-ticket"></i> complains</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">Apps</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-mail"></i>Email</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-message-square"></i>Chat</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown" data-i18n="Todo"><i class="feather icon-check-square"></i>Todo</a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="app-calender.html" data-toggle="dropdown" data-i18n="Calender"><i class="feather icon-calendar"></i>Calender</a>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Ecommerce"><i class="feather icon-shopping-cart"></i>Ecommerce</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="app-ecommerce-shop.html" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-circle"></i>Shop</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="app-ecommerce-details.html" data-toggle="dropdown" data-i18n="Details"><i class="feather icon-circle"></i>Details</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="app-ecommerce-wishlist.html" data-toggle="dropdown" data-i18n="Wish List"><i class="feather icon-circle"></i>Wish List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="app-ecommerce-checkout.html" data-toggle="dropdown" data-i18n="Checkout"><i class="feather icon-circle"></i>Checkout</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="User"><i class="feather icon-user"></i>User</a>
                            <ul class="dropdown-menu">
                                <li data-menu=""><a class="dropdown-item" href="app-user-list.html" data-toggle="dropdown" data-i18n="List"><i class="feather icon-circle"></i>List</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="app-user-view.html" data-toggle="dropdown" data-i18n="View"><i class="feather icon-circle"></i>View</a>
                                </li>
                                <li data-menu=""><a class="dropdown-item" href="app-user-edit.html" data-toggle="dropdown" data-i18n="Edit"><i class="feather icon-circle"></i>Edit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->
