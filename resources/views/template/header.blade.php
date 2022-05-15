<header >
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav sn-bg-1 custom-scrollbar sidenav">
        <!-- Logo -->
        <li class="logo-sn d-block waves-effect">
            <div class="text-center mt-1">
                <a class="pl-0" >
                   <img src="{{asset('images/Logo_Ankira.png')}}" height="50" alt="">
                </a>
            </div>
        </li>

        <!-- Side navigation links -->
        <li>
            <ul class="collapsible collapsible-accordion">
                <li> 
                    <a class="collapsible-header waves-effect" href="#inicio" >
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Inicio
                        </span>
                    </a>
                </li>

                <li>
                    <a class="collapsible-header waves-effect" href="#cepillo-de-jabali">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Cepillo de cerdas de Jabali
                        </span>
                    </a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect" href="#tonico-capilar">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Tónico Capilar
                        </span>
                    </a>
                </li>
                <li>
                    <a class="collapsible-header waves-effect" href="#shampoo">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Shampoo
                        </span>
                    </a>
                </li>
                <li >
                    <a class="collapsible-header waves-effect" href="#tecnicas">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Consejos de cepillado
                        </span>
                    </a>

                </li>
                <li >
                    <a class="collapsible-header waves-effect" href="#cepilla-correctamente">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                           Aprende a cepillar correctamente tu cabello
                        </span>
                    </a>

                </li>
                
                <li>
                    <a class="collapsible-header waves-effect"  href="#contacto">
                        <span class="clearfix  d-sm-inline-block spacing-4">
                            Contacto
                        </span>
                    </a>
                </li>
                
            </ul>
        </li>
        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar ouble-nav">
        <!-- SideNav slide-out button -->

        <div class="float-left">
            <a  data-activates="slide-out" class="button-collapse sidenav text-dark"><i class="fa fa-bars"></i></a></div>
        <!-- Breadcrumb-->
        <div class="breadcrumb-dn mr-auto px-5">
            <img src="{{asset('images/Logo_Ankira.png')}}" height="45" alt="">
        </div>
        <ul class="nav navbar-nav nav-flex-icons ml-auto">
            <li class="nav-item nav-sup pl-5">
                <a class="nav-link text-dark" href="#inicio">
                    <span class="clearfix d-none d-sm-inline-block spacing-4">
                        INICIO
                    </span>
                </a>
            </li>

            <li class="nav-item dropdown nav-sup pl-5">
                <a class="nav-link text-dark  dropdown-toggle" href="#" id="product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="clearfix d-none d-sm-inline-block spacing-4"> 
                        PRODUCTO
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="product">
                    <a class="dropdown-item" href="#cepillo-de-jabali">
                        Cepillo de cerdas de jabali
                    </a>
                    <a class="dropdown-item" href="#tonico-capilar">
                        Tónico capilar
                    </a>
                    <a class="dropdown-item" href="#shampoo">
                        Shampoo
                    </a>
                </div>
            </li>
            <li class="nav-item  dropdown nav-sup pl-5">
                <a class="nav-link text-dark dropdown-toggle" href="#" id="links" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="clearfix d-none d-sm-inline-block spacing-4"> 
                        LINKS DE INTERES
                    </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="links">
                    <a class="dropdown-item" href="#tecnicas">
                        Consejos de cepillado
                    </a>
                    <a class="dropdown-item" href="#beneficios">
                        Beneficios de un buen cepillado
                    </a>
                    <a class="dropdown-item" href="#razones">
                       Razones por las cuales usar cepillos de pelo de jabalí
                    </a>
                    <a class="dropdown-item" href="#cepilla-correctamente">
                        Aprende a cepillar correctamente tu cabello
                    </a>
                </div>
            </li>
            
            <li class="nav-item nav-sup pl-5">
                <a class="nav-link text-dark" href="#contacto">
                    <span class="clearfix d-none d-sm-inline-block spacing-4">
                        CONTACTO
                    </span>
                </a>
            </li>
            
            <!--<links class="visible-sm">
                <button class="btn btn-outline-success btn-sm my-0 waves-light" type="submit" mdbWavesEffect  data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-desktop"></i> 
                </button>
            </links> -->
        </ul>
    </nav>
    <!-- /.Navbar -->
</header>
<!--/.Double navigation-->