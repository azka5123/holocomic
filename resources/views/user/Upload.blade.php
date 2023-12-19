@extends('user.layout.app')
@section('title', 'Detail')

@section('main-content')
    <div class="jarak"></div>
    <div class="row  justify-content-center">
        <div class="col col-12 col-lg-8">
            <div class="card shadow text-end">
                <div class="card-header">
                    <p class="text-center fs-4 fw-bold">UPLOAD</p>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 text-start">
                            <label class="form-label">Judul</label>
                            <input type="input" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3 text-start">
                            <label for="formFileSm" class="form-label">Masukan File</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div class="mb-3 text-start">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="" id="" rows="10" class="form-control form-control-sm"></textarea>
                        </div>
                        <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
