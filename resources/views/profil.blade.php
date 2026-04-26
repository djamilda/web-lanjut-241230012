<!DOCTYPE html>
<html>
<head>
    <title>Profil Mahasiswa</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>
    <p>Nama: {{ $data['nama'] }}</p>
    <p>NIM: {{ $data['nim'] }}</p>
    <p>Jurusan: {{ $data['jurusan'] }}</p>
    <p>Email: {{ $data['email'] }}</p>
</body>
</html>
