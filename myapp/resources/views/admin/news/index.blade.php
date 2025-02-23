<!-- filepath: /d:/Code/Lam_Lai_Laravel/myapp/resources/views/admin/news/index.blade.php -->
@extends('admin.index')

@section('main')

<div class="container-fluid">
    @csrf @method('DELETE')
    <h4>Quản Lí <b>Tin Tức</b></h4>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                <form action="{{ route('news.index') }}" method="GET" class="form-inline">
                        <div class="form-group mb-2">
                            <input type="text" name="search" class="form-control" placeholder="Tìm kiếm tiêu đề hoặc tên..." value="{{ request('search') }}">
                        </div>
                        <div class="form-group mx-sm-3 mb-2">
                            <select name="status" class="form-control">
                                <option value="">Tất cả trạng thái</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Hiển thị</option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Tạm ẩn</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Lọc</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('news.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                    <a href="#" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa tất cả dữ liệu trong bảng không?');"><i class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                    <a href="{{ route('news.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate"></i><span>Làm mới</span></a>
                </div>
            </div>
        </div>
        <table class="table table-bordered table-hover">
            <thead class="table-success">
                <tr>
                    <th>
                        <span class="custom-checkbox">
                            <input type="checkbox" id="selectAll" />
                            <label for="selectAll"></label>
                        </span>
                    </th>
                    <th>Tên tiêu đề</th>
                    <th>Tiêu đề</th>
                    <th>Nhóm tin</th>
                    <th>Hình ảnh</th>
                    <th>Ngày đăng</th>
                    <th>Trạng thái</th>
                    <th style="text-align:center">Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $newsItem)
                <tr>
                    <td class="TableView_tdCenter">
                        <span class="custom-checkbox">
                            <input type="checkbox" id="checkbox{{ $newsItem->id }}" name="options[]" value="{{ $newsItem->id }}" />
                            <label for="checkbox{{ $newsItem->id }}"></label>
                        </span>
                    </td>
                    <td class="TableView_Text">{{ $newsItem->name }}</td>
                    <td class="TableView_Text">{{ $newsItem->title }}</td>
                    <td class="TableView_Text">{{ optional($newsItem->category)->name }}</td>
                    <td class="TableView_Img">
                        <img width="100px" src="{{ $newsItem->image }}" alt="{{ $newsItem->title }}" />
                    </td>
                    <td class="TableView_Text">{{ $newsItem->created_at }}</td>
                    <td class="TableView_Number">
                        @if ($newsItem->active == 1)
                        <span class="badge bg-success">Hiển thị</span>
                        @else
                        <span class="badge bg-danger">Tạm ẩn</span>
                        @endif
                    </td>
                    <td class="TableView_Function">
                        <form id="delete-form-{{ $newsItem->id }}" action="{{ route('news.destroy', $newsItem->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                        <a href="{{ route('news.create') }}" class="add" data-toggle="modal"><i class="material-icons">&#xE147;</i></a>
                        <a href="{{ route('news.edit', $newsItem->id) }}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
                        <a href="{{ route('news.destroy', $newsItem->id) }}" class="delete" onclick="event.preventDefault();
                            document.getElementById('delete-form-{{ $newsItem->id }}').submit();"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="clearfix">
            </div>
        </div>
        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('news.create') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                    <a href="#" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa tất cả dữ liệu trong bảng không?');"><i class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                    <a href="{{ route('news.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate"></i> <span>Làm mới</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection