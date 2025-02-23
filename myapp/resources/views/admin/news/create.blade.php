@extends('admin.index')

@section('main')
<div class="container">
<legend>Thêm tin tức</legend>
    <form action="{{ route('news.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('news.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
        <!-- Trường ẩn để lưu Id -->
        <input type="hidden" asp-for="Id" />

        <!-- Hộp chọn nhóm tin -->
        <div class="mb-3 mt-3">
            <label class="form-label">Nhóm tin:</label>
            <select id="categoryId" name="categoryId" class="form-control">
                <option value="">Chọn nhóm tin</option>
                @foreach($cat as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tiêu đề tin -->
        <div class="mb-3">
            <label class="form-label"><b>Tên tiêu đề:</b></label>
            <input type="text" class="form-control" name="name"/>
        </div>

        <!-- Hình ảnh -->
        <div class="mb-3">
            <div class="form-group">
                <label asp-for="Image" class="control-label"><strong>Hình ảnh</strong></label>
                <input  name="image" class="form-control" />
                <div>
                    <img src="" id="PictureView" width="100" />
                </div>
            </div>
        </div>
        <!-- Tóm tắt -->
        <div class="mb-3">
            <label class="form-label"><b>Chi tiết:</b></label>
            <textarea class="form-control" name="detail"></textarea>
            <span asp-validation-for="Detail" class="text-danger"></span>
        </div>

        <!-- Nội dung -->
        <div class="mb-3">
            <label class="form-label"><b>Nội dung:</b></label>
            <textarea class="form-control" name="content"></textarea>
        </div>

        <!-- Ngày đăng -->
        <div class="mb-3">
            <label class="form-label"><b>Ngày đăng:</b></label>
            <input type="date" class="form-control" name="date" />
        </div>

        <!-- Title Meta -->
        <div class="mb-3">
            <label class="form-label"><b>Title Meta:</b></label>
            <input type="text" class="form-control" name="title" />
        </div>

        <!-- Description Meta -->
        <div class="mb-3">
            <label class="form-label"><b>Description Meta:</b></label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <!-- Kích hoạt -->
        <div class="mb-3 mt-3">
            <label>
                <input type="radio" name="active" id="input" value="1" checked>
                Hiển thị
                <input type="radio" name="active" id="input" value="0" >
                Tạm ẩn
            </label>
        </div>

        <!-- Button -->
        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('news.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection