
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="{{secure_url('/')}}">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="{{secure_url('about')}}">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="{{secure_url('contact')}}">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="{{secure_url('works')}}">
                <h2>Proyects</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="{{secure_url('/')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="{{secure_url('about')}}"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="{{secure_url('contact')}}"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="{{secure_url('works')}}"><i class="fa fa-comments"></i><span>Proyects</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->