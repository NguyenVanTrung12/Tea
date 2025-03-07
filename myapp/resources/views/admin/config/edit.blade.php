@extends('admin.index')

@section('main')



<div class="container">
    <legend>Thêm Người dùng</legend>
    <form action="{{ route('config.update')}}" method="POST" role="form">
        @csrf
        @method('PUT')
        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <!-- <a class="btn btn-primary" href="{{ route('user.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a> -->
                    <button type="submit" class="btn btn-success" onclick="return confirm('Bạn có chắc muốn thay đổi không?');"><i class="fas fa-save"></i> Lưu lại</button>

                </div>
            </div>
        </div>
        <input type="hidden" asp-for="Id" />




        <div class="mb-3 mt-3">
            <label class="form-label"><b>Email</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->mail1}}" name="mail1" placeholder="">
            @error('mail1')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Liên hệ:</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->contact}}" name="contact" placeholder="">
            @error('contact')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Tiêu đề:</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->title}}" name="title" placeholder="">
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label class="form-label"><b>Miêu tả:</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->description}}" name="description" placeholder="">
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Số hotline:</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->hotline}}" name="hotline" placeholder="">
            @error('hotline')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label"><b>địa chỉ:</b></label>
            <input type="text" class="form-control" id="" value="{{ $confix->address}}" name="address" placeholder="">
            @error('address')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="table-title" style="margin-top:20px">
            <div class="row">
                <div class="col-sm-6">
                    <h2 style="color:black"></h2>
                </div>
                <div class="col-sm-6">
                    <!-- <a class="btn btn-primary" href="{{ route('user.index') }}">Trở lại<i class='fas'>&#xf3e5;</i></a> -->
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Lưu lại</button>
                </div>
            </div>
        </div>
    </form>
</div>






@endsection