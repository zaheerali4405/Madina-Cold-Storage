@extends ('layouts.app')

@section('title') Login @endsection

@section('content')
<div class="container-xxl p-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card bg-white shadow">

                <!-- Card Header -->
                <div class="card-header">
                    <div class="card-title">
                        <h1 class="d-flex align-items-center fw-bolder fs-3">Sign In</h1>
                    </div>
                </div>

                <form class="form" method="POST" action="{{ route('login') }}">
                    <!-- Card Body -->
                    <div class="card-body px-5">
                        @csrf
                        <div class="row g-4">
                            <div class="">
                                <label class="form-label fw-bold" for="email">Email Address</label>
                                <input class="form-control form-control-solid  @error('email') is-invalid @enderror"
                                    placeholder="Enter Email Address" type="email" name="email" required autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="">
                                <label class="form-label fw-bold" for="password">Password</label>
                                <input class="form-control form-control-solid @error('password') is-invalid @enderror"
                                    placeholder="Enter Your Password" type="password" name="password" required>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer py-3 d-flex justify-content-end">
                        <button type="button" class="btn btn-secondary me-3" onclick="window.history.back()">Cancel</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection