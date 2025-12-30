<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Website Profil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f6f9;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #0d6efd;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Website Profil Mahasiswa</span>
        <a href="{{ route('skills.index') }}" class="btn btn-outline-light btn-sm">
            Data Skill
        </a>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

<footer class="text-center mt-5 mb-3 text-muted">
    © {{ date('Y') }} | Rizky Fikry Fadillah - Ilmu Komputer Universitas Djuanda
</footer>

</body>
</html>
