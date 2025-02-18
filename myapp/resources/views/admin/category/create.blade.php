@extends('admin.index')

@section('main')


<form action="" method="POST" role="form">
    <legend>Thêm danh mục</legend>
    <div class="col-md-4">
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" name="name" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Tiêu đề</label>
            <input type="text" class="form-control" id="" name="title" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Miêu tả</label>
            <input type="text" class="form-control" id="" name="description" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Hình ảnh</label>
            <input type="text" class="form-control" id="" name="image" placeholder="Input field">
        </div>
        <div class="form-group">
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="input" value="1" checked="checked">
                    Hiển thị
                    <input type="radio" name="active" id="input" value="0">
                    Tạm ẩn
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>








@endsection