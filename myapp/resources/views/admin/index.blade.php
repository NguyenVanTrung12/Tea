<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <title>Trang quản trị</title>
    <!--Chèn link css và js-->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_admin.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>

<body>
    <header>
        <div class="container-fluid" style="padding-left: 0 !important; padding-right: 0 !important;">
            <h3 style="background: linear-gradient(40deg, #2096ff, #05ffa3); padding: 35px 0px ; color : white ; text-align : center">PHẦN MỀM QUẢN LÝ</h3>
        </div>
        <div style="margin-top: -8px;">
            <nav class="navbar navbar-expand-sm navbar-dark" style="background-color : #4CAF50">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <div class="dropdown text-align-right">
                                <button class="dropbtn">Quản lý</button>
                                <div class="dropdown-content">
                                    <a href="{{ route('config.edit')}}">Config</a>
                                    <a href="{{ route('advertise.index') }}">Quảng cáo</a>
                                    <a href="{{ route(name: 'user.index') }}">Người dùng</a>
                                </div>
                            </div>
                            <div class="dropdown text-align-right">
                                <button class="dropbtn">Quản lý tin tức</button>
                                <div class="dropdown-content">
                                    <a href="{{ route('categories.index') }}">Danh mục tin tức</a>
                                    <a href="{{ route('news.index') }}">Tin tức</a>
                                    <a href="{{ route('comment.index') }}">Bình luận</a>
                                    <a href="{{ route('banner.index') }}">Baner</a>
                                </div>
                            </div>
                        </ul>

                        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-end ">
                            <a class="dangnhap">[ Trang quản trị ]</a>
                            <a class="dangnhap">[ Đổi mật khẩu ]</a>
                            @auth
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button class="dangnhap" style="background: transparent; border: none;" type="submit"
                                    onclick="return confirm('Bạn có chắc chắn muốn đăng xuất không?')">
                                    [ Đăng xuất ]
                                </button>
                            </form>
                            @endauth

                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <div class="container-fluid">
        <br>
        <div class="text-center">
            <h1>Xin chào {{ Auth::user()->name }} </h1>
        </div>

        @yield('main')
    </div>
</body>

</html>