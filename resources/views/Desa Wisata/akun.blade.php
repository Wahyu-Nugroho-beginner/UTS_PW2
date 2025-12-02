@extends('Desa Wisata.Layout.master')

@section('title', 'Profile')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Profil Akun</h4>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="row mb-4">
                            <div class="col-md-4 text-center">
                                <div class="profile-img-container mb-3">
                                    <img src="{{ asset('images/blank profile.png') }}" alt="Default Profile Picture"
                                        class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tr>
                                        <th>Username</th>
                                        <td>{{ $user->username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Bergabung Sejak</th>
                                        <td>{{ date('d F Y', strtotime($user->created_at)) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('home.index2') }}" class="btn btn-primary me-2">
                                <i class="ke-home"></i>Kembali
                            </a>

                            <a href="{{ route('profile.edit') }}" class="btn btn-primary me-2">
                                <i class="bi bi-pencil-square"></i> Edit Profil
                            </a>
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-box-arrow-right"></i> Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <style>
    .card {
        border: none;
        border-radius: 15px;
    }

    .card-header {
        border-radius: 15px 15px 0 0;
    }

    .profile-img-container {
        padding: 20px;
    }

    .table th {
        width: 40%;
        font-weight: 600;
        color: #666;
    }

    .btn {
        padding: 8px 20px;
        border-radius: 8px;
    }

    .alert {
        border-radius: 8px;
    }
    </style> -->
@endsection