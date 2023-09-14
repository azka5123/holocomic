@extends('admin.layout.app')
@section('title', 'Edit Post')
@section('header', 'Edit Postingan');

@section('main_content')
    <form action="{{ route('admin_post_update', $edit->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <img src="{{ asset('uploads/img/' . $edit->image) }}" alt="" style="width:400px;">
            <input type="file" class="form-control" name="photo" aria-describedby="">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control" name="desc" rows="4">{{ $edit->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Nama Perusahaan</label>
            @foreach ($sub_kategori as $item)
                <select class="form-select" name="kategori">
                    <option value="{{ $item->rCategory->id }}">{{ $edit->rCategory->category }}</option>
                </select>
            @endforeach
        </div>
        <div class="form-group">
            <label for="">Nama Talent</label>
            @foreach ($sub_kategori as $item2)
                <select class="form-select" name="sub_kategori">
                    <option value="{{ $item2->id }}">{{ $item2->sub_category }}</option>
                </select>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
