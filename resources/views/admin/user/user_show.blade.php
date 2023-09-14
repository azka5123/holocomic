@extends('admin.layout.app')

@section('title', 'user')
@section('header', 'User')

@section('main_content')
    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped " width="100%" cellspacing="10">
            <thead>
                <tr class="text-center">
                    <th>No.</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_hp }}</td>
                        <td class="">
                            <a href="#" class="btn btn-sm btn-primary "> <ion-icon name="ban-outline"></ion-icon>
                                Banned</a>
                            <a href="{{ route('admin_user_delete', $item->id) }}" class="btn btn-sm btn-primary"
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
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection
