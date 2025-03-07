@extends('admin.index')

@section('main')

<div class="container-fluid">
    <h4>Quản Lí <b>User</b></h4>
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('user.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
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
                    <th>Name </th>
                    <th>Mail</th>

                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $user as $con  )

                    <tr>
                        <td class="TableView_tdCenter">
                            <span class="custom-checkbox">
                                <input type="checkbox" id="checkbox1" name="options[]" value="1" />
                                <label for="checkbox1"></label>
                            </span>
                        </td>
                        <td class="TableView_Text">{{ $con->name }}</td>
                        <td class="TableView_Text">{{$con->email  }}</td>


                        <td class="TableView_Function">
                            <form id="delete-form-{{ $con->id }}" action="{{ route('user.destroy', $con->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <a asp-action="Add" asp-controller="Category" asp-route-strLevel="@cate.Level" class="add" data-toggle="modal"><i class="material-icons">&#xE147;</i></a>
                            <a href="{{ route('user.edit',$con->id)}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Sửa">&#xE254;</i></a>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $con->id }}').submit();" class="delete" onclick="return confirm('Bạn có chắc muốn xóa không?');" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Xóa">&#xE872;</i></a>
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
                    <a href="{{ route('user.create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm</span></a>
                    <a asp-controller="Category" asp-action="DeleteAll" onclick="return confirm('Bạn có chắc muốn xóa tất cả dữ liệu trong bảng không?');" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Xóa</span></a>
                    <a asp-controller="Category" asp-action="Index"  class="btn btn-primary" data-toggle="modal"><i class="fa-solid fa-arrows-rotate"></i> <span>Làm mới</span></a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
