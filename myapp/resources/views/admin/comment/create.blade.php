@extends('admin.index')

@section('main')
<div class="d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4 border-0" style="width: 60%;">
        <h3 class="text-center mb-4">Thêm Bình Luận</h3>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
        </div>
        <form action="{{ route('comment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Bình luận</label>
                <input type="text" class="form-control" id="comment" name="comment">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Rate</label>
                <input type="number" class="form-control" id="rate" name="rate" min="0" max="5">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection