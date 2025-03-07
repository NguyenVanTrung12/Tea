@extends('admin.index')

@section('main')


<div class="container">
<legend>Thêm danh mục</legend>
    <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('banner.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
        <!-- Trường ẩn để lưu Id -->
        <input type="hidden" asp-for="Id" />
        <div class="mb-3 mt-3">
        <label class="form-label"><b>Tên tiêu đề:</b></label>
            <input type="text" class="form-control" id="" name="name" >
        </div>
        
        <!-- Hình ảnh -->
        <div class="mb-3">
            <div class="form-group">
                <label for="name" class="control-label"><strong>Hình ảnh</strong></label>
                <input  name="image" id="image" type="file" class="form-control" />
                <div>
                    <img src="" id="PictureView" width="100" />
                </div>
            </div>
        </div>
        <!-- Kích hoạt -->
        <div class="mb-3 mt-3">
        <label>
                <input type="radio" name="status" id="input" value="1" checked>
                Hiển thị
                <input type="radio" name="status" id="input" value="0" >
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
                    <a class="btn btn-primary" href="{{ route('banner.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection






