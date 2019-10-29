@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/Userdashboard.css') }}">
</head>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase navbar-wrapper">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
                  
            <div class="collapse navbar-collapse navresponsive-wrapper" id="navbarResponsive"><span class="navbar-text">
                
                <ul class="nav navbar-nav ml-auto">
                    <li ><img src="https://i.postimg.cc/vH4SrdLB/logo.png" class="navimg-wrapper"   alt="..."></li>
                    <li class="nav-item navbaritem-wrapper"  role="presentation">
                        <a class="nav-link navbarlink-wrapper" href="#" >
                            <p class="navbarlinkp-wrapper">Plans</p>
                        </a>
                    </li>

                    <li class="nav-item mx-0 mx-lg-1 navbarlist-wrapper" role="presentation">
                        <a class="nav-link navbarlink-wrapper"  href="/login">
                            <p class="navbarlinkp-wrapper" >Logout</p>
                        </a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>

</nav>




<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-yellow" id="sidenav-main">
    <div class="container-fluid">
        
        <ul class="nav align-items-center d-md-none">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>
            </li>
        </ul>
       -->  <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ route('home') }}">
                            <img src="{{ asset('argon') }}/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="{{ __('Search') }}" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-search"></span>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Navigation -->
            <ul class="navbar-nav" >

                <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                        <img alt="Image placeholder" class="logoimage-wrapper"  src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                        </span>
                        <b>
                            <p class="logoimagep-wrapper">Hello Vrushang</p></b>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">{{ __('Welcome!') }}</h6>
                    </div>
                    <a href="{{ route('profile.edit') }}" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ __('My profile') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ __('Settings') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ __('Activity') }}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-support-16"></i>
                        <span>{{ __('Support') }}</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="ni ni-user-run"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                </div>

            </li>

                <li class="nav-item" class="sidebarlist-wrapper">
                    <a class="nav-link" class="sidebarlink-wrapper" href="{{ route('home') }}">
                        <img class="sidebarimage-wrapper" src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png">
                        <p class="sidebarp-wrapper">$10,000</p>

                        <p class="sidebarp2-wrapper">total wins</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" class="sidebarlink-wrapper" style="padding: 0 ; margin-left: 20px" href="{{ route('home') }}">
                        <img class="sidebar2image-wrapper" src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png">
                        <p  class="sidebarp-wrapper">$10,000</p>

                    <p class="sidebarp2-wrapper">total wins</p>
                    </a>
                </li>

                <li class="nav-item">
                    
                    <a class="nav-link" class="sidebarlink-wrapper" href="{{ route('home') }}">
                        <img style="width: 30px" src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png">
                        <p class="sidebarp-wrapper">$10,000</p>

                    <p class="sidebarp2-wrapper">total wins</p>
                    </a>
                </li>
                
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h3 class="recentwin-wrapper">Recents Wins:</h3>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                <li class="nav-item">
                    
                    <a class="nav-link recentwinlink-wrapper" href="{{ route('home') }}">

                        <img class="recentwinimage-wrapper"  src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png">

                    <p class="recentwinp-wrapper">amount $(won)</p>
                    </a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link recentwinlink-wrapper" href="{{ route('home') }}">

                        <img class="recentwinimage-wrapper" src="https://cdn.pixabay.com/photo/2019/02/19/19/45/thumbs-up-4007573_960_720.png">

                    <p class="recentwinp-wrapper">amount $(won)</p>
                    </a>
                </li>
                <li class="nav-item">
                    

                 <button type="button" class="btn btn-primary recentwinbutton-wrapper"  data-toggle="modal" data-target="#exampleModal" bg-gradient-blue>
                             Recent Purchases
                            </button>
                <img class="recentwinpaypal-wrapper"  src="assets/img/paypal.svg">
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <h1 class="availableplans-wrapper">Available Plans</h1>
<hr style="margin-left: 40px" />
    
    <div class="row">

    <div class="card card-lift--hover shadow border-0 card-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4 ">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
          </div>          
                <div class="card card-lift--hover shadow border-0 card2-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
            </div>

                <div class="card card-lift--hover shadow border-0 card3-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
                

            </div>


            <div class="row">
                <div class="card card-lift--hover shadow border-0 card21-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>

                <div class="card card-lift--hover shadow border-0 card22-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>

                <div class="card card-lift--hover shadow border-0 card23-wrapper">
                  <div class="card-body py-5 ">
                    <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                      <i class="ni ni-check-bold"></i>
                    </div>
                    <h6 class="text-primary text-uppercase">Download Argon</h6>
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>

            </div>
</div>