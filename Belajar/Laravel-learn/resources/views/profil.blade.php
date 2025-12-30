<!DOCTYPE html>
<html>
<head>
    <title>Profil Saya</title>
</head>
<body>

<h1>Nama Kamu</h1>
<p>Deskripsi singkat</p>

<h2>Skill</h2>

<ul>
@foreach ($skills as $skill)
    <li>
        {{ $skill->name }}
        <form action="/skill/{{ $skill->id }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </li>
@endforeach
</ul>

<form action="/skill" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Skill baru">
    <button type="submit">Tambah</button>
</form>

</body>
</html>
