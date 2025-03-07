@extends('admin.index')

@section('main')


    <form action="{{ route('config.store')}}" method="POST" role="form">
        @csrf
        <div class="container">
            <legend>Thêm config</legend>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" name="mail1" placeholder="Input field">
                @error('mail1')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Liên hệ</label>
                <input type="text" class="form-control" id="" name="contact" placeholder="Input field">
                @error('contact')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control" id="" name="title" placeholder="Input field">
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Miêu tả</label>
                <input type="text" class="form-control" id="" name="description" placeholder="Input field">
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Số hotline</label>
                <input type="text" class="form-control" id="" name="hotline" placeholder="Input field">
                @error('hotline')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">địa chỉ</label>
                <input type="text" class="form-control" id="" name="address" placeholder="Input field">
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
