<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Login - TensiCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    {{-- Google Fonts Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body { font-family: "Inter", sans-serif; }
    </style>
</head>
<body class="relative min-h-screen bg-white flex flex-col">

    {{-- BACKGROUND GRID --}}
    <div class="absolute inset-0
        bg-fixed
        bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)]
        bg-[size:14px_24px]
        [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]
        z-0">
    </div>

    {{-- NAVBAR --}}
    <nav class="relative z-20 w-full">
        <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Logo TensiCare" />
                <span class="text-2xl font-semibold text-black">TensiCare</span>
            </a>

            <a href="{{ url('/') }}"
               class="text-sm text-neutral-700 hover:text-blue-700">
                Kembali ke Beranda
            </a>
        </div>
    </nav>

    {{-- MAIN LOGIN --}}
    <main class="relative z-10 w-full flex-1 flex items-center">
        <div class="max-w-screen-xl mx-auto px-4
                    min-h-full
                    flex flex-col md:flex-row items-center justify-center gap-16">

            {{-- LEFT TEXT --}}
            <div class="space-y-6 max-w-xl" data-aos="fade-right">
                <h1 class="text-4xl md:text-5xl font-extrabold text-neutral-900 leading-tight">
                    Masuk ke Akun<br class="hidden md:block">TensiCare
                </h1>

                <p class="text-lg text-neutral-700">
                    Simpan dan pantau riwayat asupan natrium, catatan tekanan darah,
                    serta dapatkan edukasi yang dipersonalisasi sesuai kondisi Anda.
                </p>

                <div class="space-y-3 text-neutral-700">
                    <p class="font-semibold text-blue-700">Dengan akun TensiCare, Anda bisa:</p>
                    <ul class="space-y-1">
                        <li>• Memantau total natrium harian secara berkala.</li>
                        <li>• Menyimpan catatan tekanan darah dan aktivitas fisik.</li>
                        <li>• Mendapat tips diet rendah garam sesuai kebutuhan.</li>
                    </ul>
                </div>

                <a href="{{ url('/') }}" class="inline-flex items-center text-sm text-neutral-700 hover:text-blue-700 md:hidden">
                    ← Kembali ke halaman utama
                </a>
            </div>

            {{-- RIGHT CARD LOGIN --}}
            <div class="relative w-full max-w-md">
                {{-- glow --}}
                <div class="absolute inset-0 w-[120%] h-[120%] bg-white/50 blur-3xl rounded-full -z-10"></div>

                <div class="bg-white rounded-3xl shadow-xl border border-neutral-200 p-8" data-aos="fade-left">
                    <h2 class="text-2xl font-bold text-neutral-900 mb-1">Login</h2>
                    <p class="text-sm text-neutral-600 mb-6">
                        Masuk untuk melanjutkan pemantauan kesehatan Anda.
                    </p>

                    @if ($errors->any())
                        <div class="mb-4 rounded-xl bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-700">
                            <ul class="list-disc list-inside space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}" class="space-y-5">
                        @csrf

                        <div>
                            <label for="email" class="block mb-2 text-neutral-800 font-medium">Email</label>
                            <input id="email" type="email" name="email"
                                   value="{{ old('email') }}" required autofocus
                                   class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                   placeholder="Masukkan email">
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-neutral-800 font-medium">Password</label>
                            <input id="password" type="password" name="password" required
                                   class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
                                   placeholder="Masukkan password">
                        </div>

                        <div class="flex items-center justify-between text-sm text-neutral-700">
                            <label class="flex items-center gap-2">
                                <input type="checkbox" name="remember" class="rounded">
                                <span>Ingat saya</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="text-blue-700 hover:underline">
                                    Lupa password?
                                </a>
                            @endif
                        </div>

                        <button type="submit"
                                class="w-full px-6 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 transition">
                            Masuk
                        </button>

                        @if (Route::has('register'))
                            <p class="text-center text-sm text-neutral-700">
                                Belum punya akun?
                                <a href="{{ route('register') }}" class="text-blue-700 font-semibold hover:underline">
                                    Daftar sekarang
                                </a>
                            </p>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </main>

    <footer class="relative z-10 w-full py-6 text-center text-sm text-neutral-600">
        © {{ date('Y') }} TensiCare. Semua Hak Dilindungi.
    </footer>

</body>
    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 80
        });
    </script>
</html>
