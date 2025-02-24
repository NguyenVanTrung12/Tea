
@extends('admin.index')

@section('main')
<div class="d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4 border-0" style="width: 60%;">
        <h3 class="text-center mb-4">Sửa Bình Luận</h3>
        <form action="{{ route('comment.update', $comment->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Bài viết</label>
                <select name="newId" id="newId" class="form-control">
                    <option value="">Chọn bài viết</option>
                    @foreach ($new as $n)
                        <option value="{{ $n->id }}" {{ $n->id == $comment->newId ? 'selected' : '' }}>
                            {{ $n->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $comment->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ $comment->email }}">
            </div>
            <div class="mb-3">
                <label for="comment" class="form-label">Bình luận</label>
                <input type="text" class="form-control" id="comment" name="comment" value="{{ $comment->comment }}">
                @error('comment')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Ngày</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $comment->date }}">
            </div>
            <div class="mb-3">
                <label for="rate" class="form-label">Đánh giá</label>
                <input type="number" class="form-control" id="rate" name="rate" min="0" max="5" value="{{ $comment->rate }}">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection