@extends('admin.index')

@section('main')
<div class="d-flex justify-content-center align-items-center">
    <div class="card shadow-lg p-4 border-0" style="width: 60%">
        <h3 class="text-center mb-4">Sửa Quảng Cáo</h3>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
        </div>
        <form action="{{ route('advertise.update', $advertise->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Tên</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $advertise->name }}" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Hình ảnh</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $advertise->image }}">
                @if($advertise->image)
                <img src="{{ asset('storage/' . $advertise->image) }}" alt="{{ $advertise->name }}" width="100">
                @endif
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Nội dung</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{ $advertise->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Vị trí</label>
                <select class="form-select" id="position" name="position">
                    <option value="0" {{ $advertise->position == 0 ? 'selected' : '' }}>Banner</option>
                    <option value="1" {{ $advertise->position == 1 ? 'selected' : '' }}>Slide trang chủ</option>
                    <option value="2" {{ $advertise->position == 2 ? 'selected' : '' }}>Bên phải trang</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" id="active1" value="1" {{ $advertise->active == 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active1">Hiển thị</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" id="active0" value="0" {{ $advertise->active == 0 ? 'checked' : '' }}>
                    <label class="form-check-label" for="active0">Tạm ẩn</label>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary" style="margin: 0px 5px;">Lưu</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection