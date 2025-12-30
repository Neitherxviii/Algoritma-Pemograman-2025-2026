@extends('layouts.app')

@section('title', 'Skill Saya')

@section('content')
<div class="card shadow">
    <div class="card-body">

        <h4>📋 Daftar Skill</h4>

        <form action="{{ route('skills.store') }}" method="POST" class="mb-3">
            @csrf
            <div class="input-group">
                <input type="text" name="name" class="form-control" placeholder="Contoh: Laravel" required>
                <button class="btn btn-primary">Tambah</button>
            </div>
        </form>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Skill</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($skills as $skill)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>
                        <form action="{{ route('skills.destroy', $skill->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Hapus skill?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/" class="btn btn-secondary mt-2">⬅ Kembali ke Profil</a>

    </div>
</div>
@endsection
