<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Perpustakaan Digital') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-600 text-white p-8 rounded-lg mb-6 flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-bold">Selamat datang di Perpustakaan Digital</h1>
                    <h2 class="text-3xl font-bold">PONG PERPUS</h2>
                    <p class="mt-4 text-lg">Jelajahi ribuan buku yang tersedia dan temukan literasi yang dapat memperkaya pengetahuan Anda!</p>
                    <a href="{{ route('book') }}" class="inline-block mt-4 bg-white text-blue-600 px-6 py-2 rounded-lg">Mulai Menjelajah</a>
                </div>
                <div>
                    <img src="{{ asset('storage/images/pongperpus(1).png') }}" alt="Laptop" class="w-80 h-auto">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Total Buku Dipinjam</h3>
                    <p class="text-3xl font-bold text-blue-600">21</p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Pengguna Aktif</h3>
                    <p class="text-3xl font-bold text-blue-600">7</p>
                </div>

                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-200">Buku Terbaru</h3>
                    <ul class="mt-4 text-gray-600 dark:text-gray-400">
                        <li><strong>Dilan 1990</strong> - Dipinjam oleh 10 pengguna</li>
                        <li><strong>Buku Sakti HTML, CSS & Javascript</strong> - Dipinjam oleh 15 pengguna</li>
                        <li><strong>The Art of Computer Programming</strong> - Dipinjam oleh 8 pengguna</li>
                    </ul>
                </div>
            </div>

            <div id="books" class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg mb-6">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Rekomendasi Buku Untuk Anda</h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-4">
                    <div class="bg-blue-600 p-4 rounded-lg">
                        <img src="{{ asset('storage/cover_buku/cover_buku_1733923141.jpg') }}" alt="Buku 1" class="w-full h-[300px] object-cover rounded-t-lg">
                        <h4 class="text-lg font-semibold mt-2">Dilan 1990</h4>
                        <p class="text-white">Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri.</p>
                    </div>
                    <div class="bg-blue-600 p-4 rounded-lg">
                        <img src="{{ asset('storage/cover_buku/cover_buku_1733923708.png') }}" alt="Buku 2" class="w-full h-[300px] object-cover rounded-t-lg">
                        <h4 class="text-lg font-semibold mt-2">The Art of Computer Programming</h4>
                        <p class="text-white">The Art of Computer Programming adalah buku yang ditulis oleh Donald Knuth mengenai berbagai algoritme dan analisis pemrograman komputer. Knuth mulai menulis buku ini pada 1962. Tiga volume pertama diterbitkan pada 1968, 1969, dan 1973. Volume 4 rencananya akan diterbitkan pada awal 2007.</p>
                    </div>
                    <div class="bg-blue-600 p-4 rounded-lg">
                        <img src="{{ asset('storage/cover_buku/cover_buku_1733924790.jpg') }}" alt="Buku 3" class="w-full h-[300px] object-cover rounded-t-lg">
                        <h4 class="text-lg font-semibold mt-2">World War I & II</h4>
                        <p class="text-white">Peradaban manusia tidak dapat dipisahkan dari konflik skala besar dan berkepanjangan. Perang Dunia I dan II menjadi peristiwa paling berdarah dan kelam dalam sejarah umat manusia. Perebutan hegemoni negara-negara besar menjadi pemantik konflik yang menyebabkan jutaan nyawa melayang.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Aktivitas Terbaru</h3>
                <ul class="mt-4 space-y-2">
                    <li class="text-sm text-gray-600 dark:text-gray-400"><strong>{{ Auth()->user()->name }}</strong> meminjam buku <em>The Art of Computer Programming</em> pada 10 Desember 2024.</li>
                    <li class="text-sm text-gray-600 dark:text-gray-400"><strong>{{ Auth()->user()->name }}</strong> mengembalikan buku <em>Milea: Suara Dari Dilan</em> pada 9 Desember 2024.</li>
                    <li class="text-sm text-gray-600 dark:text-gray-400"><strong>{{ Auth()->user()->name }}</strong> menambahkan review untuk buku <em>World War I & II</em> pada 8 Desember 2024.</li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
