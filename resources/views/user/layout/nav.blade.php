{{-- nav --}}
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#" data-aos="flip-left">V-Com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link active text-light" aria-current="page" href="/"><i
                            class="bi bi-house-fill"></i> Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-light" href="#"><i class="bi bi-clipboard-data"></i> Trending</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-light" href="{{ route('upload') }}"><i
                            class="bi bi-cloud-arrow-up-fill"></i>
                        Upload</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link text-light" href="#" data-bs-toggle="modal" data-bs-target="#login"><i
                            class="bi bi-box-arrow-in-right"></i>
                        Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- end nav --}}

{{-- modal login --}}
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">LOG IN</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <a href="#" class="text-decoration-none">Forget password?</a>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- end modal login --}}
