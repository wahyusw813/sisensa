<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Sisensa</title>
</head>
<body>
  <div class="min-h-full">
    <x-navbarnone></x-navbarnone>
    <x-header>Login</x-header>
    <main class="flex items-center justify-center mt-12">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-4xl flex">
            <!-- Informasi tentang SISENSA -->
            <div class="w-1/2 pr-6">
                <h1 class="text-3xl font-bold text-gray-900 mb-4">Apa Itu <span class="text-indigo-600">SISENSA?</span></h1>
                <p class="text-gray-700 mb-4">Selamat datang di platform presensi digital yang modern dan efisien. Sistem kami memungkinkan Anda untuk:</p>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Melakukan presensi dengan mudah dan cepat</li>
                    <li>Memantau kehadiran secara real-time</li>
                    <li>Mengakses laporan kehadiran yang terperinci</li>
                    <li>Mengelola izin dan cuti dengan sistem yang terintegrasi</li>
                </ul>
            </div>
    
            <!-- Form Login -->
            <div class="w-1/2">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Masuk ke Akun Anda</h2>
                <form method="POST" action="{{ route('login.process') }}">
                    @csrf
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan email Anda" required
                               class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Masukkan password Anda" required
                               class="w-full px-4 py-2 mt-1 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <!-- Lupa Password -->
                    <div class="text-right mb-4">
                        <a href="#" class="text-sm text-indigo-600 hover:underline">Lupa Password?</a>
                    </div>
                    <!-- Tombol Masuk -->
                    <button type="submit" class="w-full py-2 px-4 bg-yellow-400 text-white font-bold rounded-lg hover:bg-yellow-500">
                        Masuk
                    </button>
                </form>
                <!-- Daftar -->
                <p class="mt-4 text-sm text-center text-gray-600">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-indigo-600 font-semibold hover:underline">Daftar disini</a>
                </p>
            </div>
        </div>
    </main>
    <x-footer></x-footer>
  </div>  
</body>
</html>