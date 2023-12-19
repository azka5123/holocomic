@extends('admin.layout.app')
@section('title', 'Kategori & Sub Kategori')
@section('header', 'Kategori & Sub Kategori')

@section('main_content')
    <div class="card-body">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kategori">
            <i class="fas fa-plus"></i> Create Kategori
        </button>
        <table id="example2" class="table table-bordered table-striped " width="100%" cellspacing="10">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Perusahaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cat as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->category }}</td>
                        <td class="">
                            <button type="button" class="btn btn-sm btn-primary test" data-bs-toggle="modal"
                                data-bs-target="#edit_kategori" data-id={{ $item->id }}>
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <a href="{{ route('admin_katsub_kategori_delete', $item->id) }}" class="btn btn-sm btn-primary"
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
                    <th>Nama Perusahaan</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- Modal  kategori-->
    <div class="modal fade" id="kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin_katsub_kategori_store') }}" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="company">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Edit kategori-->
    <div class="modal fade" id="edit_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="edit_data_company">
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control" name="edit_company" id="edit_company">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="card-body">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub_kategori">
            <i class="fas fa-plus"></i> Create Sub Kategori
        </button>
        <table id="example3" class="table table-bordered table-striped " width="100%" cellspacing="10">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Talent</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sub as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->rCategory->category }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td class="">
                            <button type="button" class="btn btn-sm btn-primary edit_sub" data-bs-toggle="modal"
                                data-bs-target="#edit_sub_kategori" data-id={{ $item->id }}>
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <a href="{{ route('admin_katsub_sub_kategori_delete', $item->id) }}"
                                class="btn btn-sm btn-primary" onclick="return confirm('are u sure?')">
                                <ion-icon name="trash-outline"></ion-icon>
                                Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Nama Perusahaan</th>
                    <th>Nama Talent</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>

        <!-- Modal sub kategori-->
        <div class="modal fade" id="sub_kategori" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('admin_sub_kategori_store') }}" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Talent</label>
                                <input type="text" class="form-control" name="talent">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <select class="form-select" name="pilih_kategori">
                                    @foreach ($cat as $item)
                                        <option value="{{ $item->id }}">{{ $item->category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal edit sub kategori-->
        <div class="modal fade" id="edit_sub_kategori" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="edit_data_talent">
                        <div class="modal-body">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Talent</label>
                                <input type="text" class="form-control" name="talent" id="talent">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Perusahaan</label>
                                <select class="form-select" name="pilih_kategori" id="pilih_company">
                                    @foreach ($cat as $item)
                                        <option value="{{ $item->id }}">{{ $item->category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
