@extends('admin.index')

@section('main')
    
<div class="container-fluid">
    <h4>Quản Lí <b>Danh Mục</b></h4>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a asp-controller="Category" asp-action="Add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                    <a asp-controller="Category" asp-action="DeleteAll" onclick="return confirm('Bạn có chắc muốn xóa tất cả dữ liệu trong bảng không?');" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                    <a asp-controller="Category" asp-action="Index"  class="btn btn-primary" data-toggle="modal"><i class="fa-solid fa-arrows-rotate"></i><span>Làm mới</span></a>
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
                    <th>Tên</th>
                    <th>Tiêu đề</th>
                    <th>Miêu tả</th>
                    <th>Hình ảnh</th>
                    <th>Thứ tự</th>
                    <th>Trạng thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cat as $cat)
                
                    <tr>
                        <td class="TableView_tdCenter">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1" />
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td class="TableView_Text">{{ $cat->name }}</td>
                        <td class="TableView_Text">{{$cat->title  }}</td>
                        <td class="TableView_Text">{{$cat->description  }}</td>
                        <td class="TableView_Img">
                            <img width="100px" src="@cate.Image" alt="@cate.Name" />
                        </td>
                        <td class="TableView_Number">{{$cat->ord  }}</td>
                        <td class="TableView_Number">
                            @if ($cat->active == 1)
                                <span class="status text-success">&bull;</span> Hiển thị
                            @else
                                <span class="status text-danger">&bull;</span> Tạm ẩn
                            @endif                                                 
                        </td>
                        <td class="TableView_Function">
                            <a asp-action="Add" asp-controller="Category" asp-route-strLevel="@cate.Level" class="add" data-toggle="modal"><i class="material-icons">&#xE147;</i></a>
                            <a asp-controller="Category" asp-action="Edit" asp-route-id="@cate.Id" asp-route-strLevel="@cate.Level" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
                            <a asp-action="Delete" asp-route-id="@cate.Id" class="delete" onclick="return confirm('Bạn có chắc muốn xóa không?');" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
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
                    <a asp-controller="Category" asp-action="Add" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                    <a asp-controller="Category" asp-action="DeleteAll" onclick="return confirm('Bạn có chắc muốn xóa tất cả dữ liệu trong bảng không?');" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                    <a asp-controller="Category" asp-action="Index"  class="btn btn-primary" data-toggle="modal"><i class="fa-solid fa-arrows-rotate"></i> <span>Làm mới</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


    



    
@endsection