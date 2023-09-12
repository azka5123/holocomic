<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="#">

    <title>Admin Panel</title>

    @include('admin.layout.styles')
    @include('admin.layout.scripts')
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <section class="section">
                <div class="container container-login">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                            <div class="card card-info border-box">
                                <div class="card-header card-header-auth">
                                    <h4 class="text-center">Reset Password</h4>
                                </div>
                                <div class="card-body card-body-auth">
                                    <form method="POST" action="{{ route('admin_reset_submit') }}">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="hidden" name="email" value="{{ $email }}">
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password">
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            {{-- @if (session()->get('error'))
                                                <div class="text-danger">{{ session()->get('error') }}</div>
                                            @endif --}}
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="retype-password"
                                                placeholder="retype Password">
                                            @error('retype-password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            {{-- @if (session()->get('error'))
                                                <div class="text-danger">{{ session()->get('error') }}</div>
                                            @endif --}}
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info btn-lg btn-block">
                                                Change Password
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            {{-- <div>
                                                <a href="{{ route('admin_login') }}">
                                                    Back to login page
                                                </a>
                                            </div> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    @include('admin.layout.script_footer')

</body>

</html>
