@extends('admin.layout.app')
@section('title', 'Post')
@section('header', 'Post')

@section('main_content')
    <div class="card-body">
        <a href="{{ route('admin_post_create') }}" class="btn btn-sm btn-primary "> <i class="fas fa-plus"></i> Create
            Post</a>
        <table id="example2" class="table table-bordered table-striped " width="100%" cellspacing="10">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Image</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>category</th>
                    <th>sub category</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($post as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('uploads/img/' . $item->image) }}" alt="" style="width:200px;">
                        </td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->desc }}</td>
                        <td>{{ $item->rCategory->category }}</td>
                        <td>{{ $item->rSubCategory->sub_category }}</td>
                        <td class="">
                            <a href="{{ route('admin_post_edit', $item->id) }}" class="btn btn-sm btn-primary "> <i
                                    class="fas fa-edit"></i> Edit</a>
                            <a href="{{ route('admin_post_delete', $item->id) }}" class="btn btn-sm btn-primary"
                                onclick="return confirm('are u sure?')">
                                <ion-icon name="trash-outline"></ion-icon>
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Image</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>category</th>
                    <th>sub category</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
