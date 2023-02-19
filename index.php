<?php include_once "header.php" ?>
<nav id="mainNavbar" class="navbar navbar-vertical navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="" class="navbar-brand-img logo-light logo-small" alt="..." width="19" height="25">
        </a>
    <div class="collapse navbar-collapse" id="sidenavCollapse">
        <ul class="navbar-nav mb-lg-7">
            <li class="nav-item">
                <a href="" class="nav-link active">
                    <span>CRM</span>
                    <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active" href="#dashboardsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboardsCollapse">
                    <span>Dashboards</span>
                </a>
                <div class="collapse show" id="dashboardsCollapse">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <span>Default</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link ">
                                <span>E-commerce</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./dashboard-crm.html" class="nav-link active">
                                <span>CRM</span>
                                <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M11.25,18.75a1.5,1.5,0,0,1-1.5-1.5V9.75a1.5,1.5,0,0,1,1.5-1.5h10.5a1.5,1.5,0,0,1,1.5,1.5v7.5a1.5,1.5,0,0,1-1.5,1.5h-1.5v4.5l-4.5-4.5Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M6.75,12.75l-3,3v-4.5H2.25a1.5,1.5,0,0,1-1.5-1.5V2.25A1.5,1.5,0,0,1,2.25.75h10.5a1.5,1.5,0,0,1,1.5,1.5v3" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Chat</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <hr>
            </li>
            <li class="nav-item">
                <a href="./docs/index.html" class="nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18"><path d="M22.627 14.87 15 22.5l-3.75.75.75-3.75 7.631-7.63a2.113 2.113 0 0 1 2.991 0l.009.008a2.116 2.116 0 0 1-.004 2.992zM8.246 20.25h-6a1.5 1.5 0 0 1-1.5-1.5V2.25a1.5 1.5 0 0 1 1.5-1.5h15a1.5 1.5 0 0 1 1.5 1.5V9m-10.5-3.75h6m-9 4.5h9m-9 4.5h7.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Documentation</span>
                    <span class="badge text-bg-primary rounded-pill ms-auto">v1.3</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="./docs/accordion.html" class="nav-link">
                    <svg viewBox="0 0 24 24" class="nav-link-icon" height="18" width="18" xmlns="http://www.w3.org/2000/svg"><path d="M22.91,6.953,12.7,1.672a1.543,1.543,0,0,0-1.416,0L1.076,6.953a.615.615,0,0,0,0,1.094l10.209,5.281a1.543,1.543,0,0,0,1.416,0L22.91,8.047a.616.616,0,0,0,0-1.094Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.758,12.75l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,12.75" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path><path d="M.758,17.25l10.527,5.078a1.543,1.543,0,0,0,1.416,0L23.258,17.25" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                    <span>Components</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<main>
    <header>

    </header>
    
</main>
<?php include_once "footer.php" ?>