<?php include_once "header.php" ?>
<nav id="mainNavbar" class="navbar-vertical scrollbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="img/ucup.png" class="navbar-brand-img logo-light logo-small" alt="..." width="50" height="50">
            <h6 class="h6-brand">Ucup <span class="span-brand color-brand">D.</span> Maun </h6>
        </a>
    </div>
    <div class="navbar-collapse" id="sidenavCollapse">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link active">
                    <i class="fa-solid fa-pager"></i>
                    <span>Home</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#dashboardsCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="dashboardsCollapse">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Dashboards</span>
                  
                </a>
                <div class="collapse" id="dashboardsCollapse">
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
                            <a href="" class="nav-link">
                                <span>CRM</span>
                                <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" href="#pageCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="pageCollapse">
                    <i class="fa-solid fa-globe"></i>
                    <span>Page</span>
                </a>
                <div class="collapse" id="pageCollapse">
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
                            <a href="" class="nav-link">
                                <span>CRM</span>
                                <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">
                    <i class="fa-solid fa-comment"></i>
                    <span>Chat</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <hr>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#documentasiCollapse" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="documentasiCollapse">
                    <i class="fa-solid fa-house-chimney"></i>
                    <span>Documentaion</span>
                  
                </a>
                <div class="collapse" id="documentasiCollapse">
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
                            <a href="" class="nav-link">
                                <span>CRM</span>
                                <span class="badge text-bg-success rounded-pill ms-auto">New</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item logout">
                <a href="./docs/accordion.html" class="nav-link">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <span>Logout</span>
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