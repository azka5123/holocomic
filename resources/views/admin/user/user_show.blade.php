@extends('admin.layout.app')

@section('title', 'user')
@section('header', 'User')

@section('main_content')
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped " width="100%" cellspacing="10">
            <thead>
                <tr class="text-center">
                    <th>Username</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td class="">
                        <a href="#" class="btn btn-sm btn-primary px-3 "> <ion-icon name="trash-outline"></ion-icon>
                            Banned</a>
                        <a href="#" class="btn btn-sm btn-primary px-3 "> <ion-icon name="trash-outline"></ion-icon>
                            Delete</a>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr class="text-center">
                    <th>Username</th>
                    <th>Email</th>
                    <th>action</th>
                </tr>
            </tfoot>
        </table>
    </div>

@endsection
