@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4 text-center">
        <img src="{{ asset('images/profile.jpg') }}" class="profile-img mb-3">
    </div>

    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body">
                <h3>Rizky Fikry Fadillah</h3>
                <p class="text-muted">
                    Mahasiswa Program Studi Ilmu Komputer Universitas Djuanda.
                </p>

                <p>
                    Saya merupakan mahasiswa Ilmu Komputer yang memiliki ketertarikan
                    pada bidang teknologi informasi, pengembangan web, dan sistem informasi.
                    Website ini dibuat sebagai media profil pribadi sekaligus
                    implementasi CRUD menggunakan framework Laravel.
                </p>

                <ul>
                    <li><b>Kampus:</b> Universitas Djuanda</li>
                    <li><b>Program Studi:</b> Ilmu Komputer</li>
                    <li><b>Semester:</b> 1</li>
                </ul>

                <a href="{{ route('skills.index') }}" class="btn btn-primary mt-2">
                    Lihat Skill Saya
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
