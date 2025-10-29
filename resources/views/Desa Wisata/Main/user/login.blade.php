@extends('desa wisata.layout.master')

@section('title', 'Halaman Login')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1 class="login-title">SILAHKAN LOGIN</h1>
        </div>
    </div>
    
    <div class="login-container">
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        
        <div class="login-card p-4">
            <form action="{{ route('login.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" class="form-control login-form-control" id="username" name="username" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control login-form-control" id="password" name="password" required>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ url('/') }}" class="custom-btn btn">Kembali</a>
                    <button type="submit" class="custom-btn btn">Login</button>
                </div>
            </form>
        </div>
        
       
    </div>
</div>
@endsection