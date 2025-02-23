@extends('admin.index')

@section('main')


<form action="{{ route('categories.update', $category->id) }}" enctype="multipart/form-data"  method="POST" role="form">
    @csrf @method('PUT')
    
    <div class="container">
        <legend>Sửa danh mục</legend>
        
    <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary" href="{{ route('categories.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
        <!-- Trường ẩn để lưu Id -->
        <input type="hidden" asp-for="Id" />
        <div class="mb-3 mt-3">
        <label class="form-label"><b>Tên tiêu đề:</b></label>
            <input type="text" value="{{ $category->name }}" class="form-control" id="" name="name" >
        </div>
        

        <!-- Tiêu đề tin -->
        <div class="mb-3">
            <label class="form-label"><b>Tiêu đề:</b></label>
            <input type="text" value="{{ $category->title }}" class="form-control" name="title"/>
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Miêu tả</b></label>
            <input type="text" value="{{ $category->description }}" class="form-control" id="" name="description" >
        </div>
        <!-- Hình ảnh -->
        <div class="mb-3">
            <div class="form-group">
            <label for="image" class="form-label">Hình ảnh:</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($category->image)
                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" width="100">
            @endif
            </div>
        </div>
        <!-- Kích hoạt -->
        <div class="mb-3 mt-3">
            <label>
                <input type="radio" name="active" id="input" value="1" {{ $category -> active == 1 ? 'checked' : '' }}>
                Hiển thị
                <input type="radio" name="active" id="input" value="0" {{ $category -> active == 0 ? 'checked' : '' }}>
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
                    <a class="btn btn-primary" href="{{ route('categories.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
    
</form>








@endsection