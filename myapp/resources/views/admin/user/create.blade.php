@extends('admin.index')

@section('main')


    <div class="container">
        <legend>Thêm Người dùng</legend>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="table-title" style="margin-top:20px">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 style="color:black"></h2>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary" href="{{ route('user.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>

                    </div>
                </div>
            </div>
            <input type="hidden" asp-for="Id" />
            <div class="mb-3 mt-3">
                <label class="form-label"><b>Tên người dùng:</b></label>
                <input type="text" class="form-control"  name="name" placeholder="Input field"/>
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Email:</b></label>
                <input type="text" class="form-control" name="email" placeholder="Input field"/>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Mật khẩu:</b></label>
                <input type="text" class="form-control" name="password" placeholder="Input field"/>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="table-title" style="margin-top:20px">
                <div class="row">
                    <div class="col-sm-6">
                        <h2 style="color:black"></h2>
                    </div>
                    <div class="col-sm-6">
                        <a class="btn btn-primary" href="{{ route('user.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
