@extends('admin.layout.app')
@section('title', 'Create Post')
@section('header', 'Create Post')

@section('main_content')
    <form action="{{ route('admin_post_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Masukan gambar</label>
            <input type="file" class="form-control" name="photo" aria-describedby="">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea class="form-control" name="desc" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Nama Perusahaan</label>
            @foreach ($sub_kategori as $item)
                <select class="form-select" name="kategori">
                    <option value="{{ $item->rCategory->id }}">{{ $item->rCategory->category }}</option>
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
