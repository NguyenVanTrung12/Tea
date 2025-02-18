<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width" />
    <title>@ViewBag.Title</title>
    <!--Chèn link css và js-->
    <link rel="stylesheet" href="{{ asset('lib/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css_admin.css') }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="~/js/site.js" asp-append-version="true"></script>
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
                                    <a class="" asp-area="" asp-controller="Config" asp-action="Edit">Config</a>
                                    <a class="" asp-area="" asp-controller="Page" asp-action="Index">Danh mục Menu</a>
                                    <a class="" asp-area="" asp-controller="Contact" asp-action="Index">Liên hệ, phản hồi</a>
                                    <a class="" asp-area="" asp-controller="Advertise" asp-action="Index">Quảng cáo</a>
                                    <a class="" asp-area="" asp-controller="UserAdmin" asp-action="Index">Người dùng</a>
                                    <a class="" asp-area="" asp-controller="User" asp-action="Index">Đổi mật khẩu</a>
                                    <a class="" asp-area="" asp-controller="PhieuDK" asp-action="Index">DS gửi phiếu đăng ký</a>
                                    <a class="" asp-area="" asp-controller="User" asp-action="Index">Báo cáo truy cập</a>
                                </div>
                            </div>
                            <div class="dropdown text-align-right">
                                <button class="dropbtn">Quản lý sản phẩm</button>
                                <div class="dropdown-content">
                                    <a href="{{ route('categories.index') }}">Danh mục sản phẩm</a>
                                    <a class="" asp-area="" asp-controller="Brand" asp-action="Index">Thương hiệu</a>
                                    <a class="" asp-area="" asp-controller="Supplier" asp-action="Index">Nhà cung cấp</a>
                                    <a class="" asp-area="" asp-controller="Color" asp-action="Index">Màu sắc</a>
                                    <a class="" asp-area="" asp-controller="Size" asp-action="Index">Kích cỡ</a>
                                    <a class="" asp-area="" asp-controller="ImageDetail" asp-action="Index">Hình ảnh</a>
                                    <a class="" asp-area="" asp-controller="Product" asp-action="Index">Sản phẩm</a>
                                </div>
                            </div>
                        </ul>
                        <div class="navbar-collapse collapse d-sm-inline-flex justify-content-end ">
                            <a class="dangnhap" asp-area="" asp-controller="" asp-action="">[ Trang quản trị ]</a>
                            <a class="dangnhap" asp-area="" asp-controller="" asp-action="">[ Đổi mật khẩu ]</a>
                            <a class="dangnhap" asp-controller="Logon" asp-action="Logout">[ Đăng xuất ]</a>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </header>
    <div class="container-fluid">
        @yield('main')
    </div>
</body>

</html>