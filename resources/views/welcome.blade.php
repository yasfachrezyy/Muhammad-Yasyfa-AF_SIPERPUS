<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PONG PERPUS - Perpustakaan Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-100 font-sans">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="flex items-center text-purple-400 text-xl font-bold">
                <img src="{{ asset('storage/images/pongperpus (2).png') }}" alt="Logo" class="h-10 w-auto mr-3">
                Perpustakaan Digital
            </a>
            <div class="space-x-4">
                <a href="/login" class="text-gray-100 hover:text-purple-400">Login</a>
                <a href="/register" class="text-gray-100 hover:text-purple-400">Register</a>
            </div>
        </div>
    </nav>

    <div class="hero bg-cover bg-center relative h-screen flex items-center justify-center" style="background-image: url('{{ asset('storage/images/pongperpus (3).png') }}');">
        <div class="bg-black bg-opacity-50 p-8 rounded-lg text-center">
            <img src="{{ asset('storage/images/pongperpus (4).png') }}" alt="Deskripsi Gambar" class="mb-6 w-1/4 mx-auto rounded-lg">
            <h1 class="text-4xl font-bold mb-4">Selamat Datang di PONG PERPUS</h1>
            <p class="text-lg mb-6">Platform Perpustakaan Online untuk Membaca dan Menjelajah Koleksi Buku Favorit Anda!</p>
            <a href="/books" class="px-6 py-3 bg-purple-500 text-gray-900 rounded-lg text-lg font-semibold hover:bg-purple-600">Jelajahi Koleksi</a>
        </div>
    </div>

    <footer class="bg-gray-800 p-4 mt-10">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 PONG PERPUS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
