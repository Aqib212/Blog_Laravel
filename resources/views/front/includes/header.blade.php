<!-- navigation -->
<header>
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-inline text-lg-right text-center">
                        <li class="list-inline-item">
                            <a href="mailto:info@companyname.com">info@companyname.com</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="callto:1234565523">Call Us Now:
                                <span class="ml-2"> 123 456 5523</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" id="searchOpen">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- nav bar -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.html">
                    <img src="{{ asset('/') }}front/images/logo.png" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                Blog
                            </a>
                            <div class="dropdown-menu" >
                                <a class="dropdown-item" href="blog.html">Blog Page</a>
                                <a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a>
                                <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>

<!-- Search Form -->
<div class="search-form">
    <a href="#" class="close" id="searchClose">
        <i class="ti-close"></i>
    </a>
    <div class="container">
        <form action="#" class="row">
            <div class="col-lg-10 mx-auto">
                <h3>Search Here</h3>
                <div class="input-wrapper">
                    <input type="text" class="form-control" name="search" id="search" placeholder="Enter Keywords..." required>
                    <button>
                        <i class="ti-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- /navigation -->
