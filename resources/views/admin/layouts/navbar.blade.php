<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
        </button>
    </div>
    <div>
    </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top"> 
    <ul class="navbar-nav">
        <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
        <h1 class="welcome-text">Welcome back, <span class="text-black fw-bold">{{ auth()->user()->name }}</span></h1>
        <h3 class="welcome-sub-text">Company Profile Administration</h3>
        </li>
    </ul>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown d-none d-lg-block">
    
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
            <a class="dropdown-item py-3" >

            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Bootstrap Bundle </p>
                <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
            </div>
            </a>
            <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">Angular Bundle</p>
                <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
            </div>
            </a>
            <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">VUE Bundle</p>
                <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
            </div>
            </a>
            <a class="dropdown-item preview-item">
            <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark">React Bundle</p>
                <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
            </div>
            </a>
        </div>
        </li>
        <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
            <span class="input-group-addon input-group-prepend border-right">
            </span>
        </div>
        </li>
        <li class="nav-item">
        <form class="search-form" action="#">
        </form>
        </li>
        </li>
        <li class="nav-item dropdown"> 
        <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="icon-bell"></i>
            <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
            <a class="dropdown-item py-3">
            <p class="mb-0 font-weight-medium float-left">You have <span id="unread-mails">0</span> unread mails </p>
            <!-- <span class="badge badge-pill badge-primary float-right">View all</span> -->
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item preview-item">
            <!-- <div class="preview-thumbnail">
                <img src="{{ asset('templates') }}/admin-templates/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
            </div> -->
            <div class="preview-item-content flex-grow py-2">
                <p class="preview-subject ellipsis font-weight-medium text-dark" id="notification-name"></p>
                <p class="fw-light small-text mb-0" id="notification-msg"> </p>
            </div>
            </a>
            </a>
        </div>
        </li>
        <li class="nav-item dropdown d-none d-lg-block user-dropdown">
        <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="img-xs rounded-circle" src="{{ asset('default') }}/blank-user.png" alt="Profile image"> </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
            <div class="dropdown-header text-center">
            <img class="img-md rounded-circle" src="{{ asset('default') }}/blank-user.png" style="height:50px;" alt="Profile image">
            <p class="mb-1 mt-3 font-weight-semibold">{{ auth()->user()->name }}</p>
            </div>
            <a href="{{ route('profile-admin') }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile</a>
            <form action="/logout" method="post">
                @csrf
                    <button type="submit" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</button>
            </form>
        </div>
        </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
    </button>
    </div>
    </nav>