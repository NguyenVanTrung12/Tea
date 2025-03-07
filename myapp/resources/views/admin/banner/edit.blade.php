@extends('admin.index')

@section('main')


<form action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data"  method="POST" role="form">
    @csrf @method('PUT')
    
    <div class="container">
        <legend>Sửa banner</legend>
        
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
            <input type="text" value="{{ $banner->name }}" class="form-control" id="" name="name" >
        </div>
        
        <!-- Hình ảnh -->
        <div class="mb-3">
            <div class="form-group">
            <label for="image" class="form-label">Hình ảnh:</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($banner->image)
                <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->name }}" width="100">
            @endif
            </div>
        </div>
        <!-- Kích hoạt -->
        <div class="mb-3 mt-3">
            <label>
                <input type="radio" name="status" id="input" value="1" {{ $banner -> status == 1 ? 'checked' : '' }}>
                Hiển thị
                <input type="radio" name="status" id="input" value="0" {{ $banner -> status == 0 ? 'checked' : '' }}>
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
    </div>
    
</form>








@endsection