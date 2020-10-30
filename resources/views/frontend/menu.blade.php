<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="padding: 0">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.svg') }}" alt="" class="logo_width"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link color_menu" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                        <form class="form-inline my-2 my-lg-0 contain">
                            <a href="#" class="zoom"> <i class="fal fa-search"></i></a>
                            <input class="mr-sm-2 border-none" type="search" placeholder="Search for anything" aria-label="Search" style="width: 550px">
                        </form>
                        <li class="nav-item ">
                            <a class="nav-link color_menu" href="#">Udemy for Bussiness</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color_menu" href="#">Teach on Udemy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link color_menu" href="#"><i class="far fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item test pr-3">
                            <a class="nav-link login" href="#">Login</a>
                        </li>
                        <li class="nav-item test">
                            <a class="nav-link signup" href="#">Sign up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
