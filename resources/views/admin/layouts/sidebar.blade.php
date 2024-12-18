<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
        </a>
        </li>
        <li class="nav-item nav-category">Content</li>
        <li class="nav-item">
            <a class="nav-link" href="/admin/about">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">About</span>
            </a>
        </li>
        <div class="nav-item {{ Request::is('admin/services*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('services.index') }}">
                <i class="menu-icon mdi mdi-face-agent"></i>
                <span class="menu-title">Services</span>
            </a>
        </div>
        <div class="nav-item {{ Request::is('admin/sertificate*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('sertificate.index') }}">
                <i class="menu-icon mdi mdi-file-document-edit-outline"></i>
                <span class="menu-title">Sertificates</span>
            </a>
        </div>
        <div class="nav-item {{ Request::is('admin/company*') ? ' active' : '' }}">
            <a class="nav-link " href="{{ route('company.index') }}">
                <i class="menu-icon mdi mdi-domain"></i>
                <span class="menu-title">Company Logos</span>
            </a>
        </div>
        <div class="nav-item {{ Request::is('admin/portfolios*') ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('portfolios.index') }}">
                <i class="menu-icon mdi mdi-panorama"></i>
                <span class="menu-title">Gallery Portfolios</span>
            </a>
        </div>
        <div class="nav-item {{ Request::is('admin/news*') ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('news.index') }}">
                <i class="menu-icon mdi mdi-newspaper"></i>
                <span class="menu-title">News</span>
            </a>
        </div>
        <li class="nav-item nav-category">Inbox</li>
        <div class="nav-item {{ Request::is('admin/contact*') ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('contacts.index') }}">
                <i class="menu-icon mdi mdi-email-minus-outline"></i>
                <span class="menu-title">Contact</span>
            </a>
        </div>
    </ul>
</nav>
<!-- partial -->