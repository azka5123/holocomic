@extends('user.layout.app')
@section('title', 'Detail')

@section('main-content')
    <div class="row">
        <div class="col col-12 d-flex justify-content-center">
            <div class="card shadow mt-5 mb-3" style="width: 40rem;" data-aos="fade-up">
                <img src="{{ asset('dist-front/tes.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text fw-bold">Some quick example text to build on the card title and make up
                        the bulk of
                        the card's content.</p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col col-12 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col col-12">
                                                <label class="form-label">Tambahkan Komentar</label>
                                            </div>
                                            <div class="col col-8">
                                                <input type="text" class="form-control form-control-sm">
                                            </div>
                                            <div class="col col-4">
                                                <button type="submit" class="btn btn-dark btn-sm">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12">
                            <p class="fs-5 fw-bold">Komentar...</p>
                        </div>
                        <div class="col col-12 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Agus</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Reiciendis, fugit optio laudantium accusamus saepe, amet similique, consequatur
                                        incidunt soluta sapiente voluptatem. Mollitia nihil beatae hic soluta accusamus odit
                                        animi fuga.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Agus</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Reiciendis, fugit optio laudantium accusamus saepe, amet similique, consequatur
                                        incidunt soluta sapiente voluptatem. Mollitia nihil beatae hic soluta accusamus odit
                                        animi fuga.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col col-12 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Agus</h6>
                                    <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Reiciendis, fugit optio laudantium accusamus saepe, amet similique, consequatur
                                        incidunt soluta sapiente voluptatem. Mollitia nihil beatae hic soluta accusamus odit
                                        animi fuga.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
