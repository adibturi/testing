<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Terima Kasih - Hipertensi Care</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
        z-0">
    </div>

    {{-- NAV --}}
    <nav class="relative z-10 w-full">
        <div class="max-w-screen-xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ url('/') }}" class="flex items-center space-x-3">
                <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Logo" />
                <span class="text-2xl font-semibold text-black">TensiCare</span>
            </a>

            <a href="{{ url('/') }}" class="text-sm text-neutral-700 hover:text-blue-700">
                Kembali ke Beranda
            </a>
        </div>
    </nav>

    {{-- MAIN --}}
    <main class="relative z-10 flex-1 flex items-center">
        <div class="max-w-screen-xl mx-auto px-4 flex justify-center">
            <div class="w-full max-w-xl bg-white/90 backdrop-blur-sm border border-neutral-200 rounded-3xl shadow-xl p-10 text-center">

                <div class="mx-auto mb-6 w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center">
                    <svg class="w-8 h-8 text-blue-700" viewBox="0 0 24 24" fill="none">
                        <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </div>

                <h1 class="text-3xl md:text-4xl font-extrabold text-neutral-900 mb-3">
                    Terima kasih 🙌
                </h1>
                <p class="text-neutral-700 mb-4">
                    Pertanyaan Anda telah terkirim ke tim ahli gizi kami.
                </p>
                <p class="text-neutral-600 mb-8">
                    Kami akan membalas melalui email yang Anda cantumkan secepat mungkin.
                    Tetap jaga pola makan rendah garam dan kesehatan Anda.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/') }}"
                       class="px-6 py-3 rounded-lg border border-blue-700 text-blue-700 font-medium hover:bg-blue-50">
                        Kembali ke Beranda
                    </a>
                    <a href="{{ url('/#contact') }}"
                       class="px-6 py-3 rounded-lg bg-blue-700 text-white font-medium hover:bg-blue-800">
                        Kirim Pertanyaan Lagi
                    </a>
                </div>
            </div>
        </div>
    </main>

    {{-- FOOTER SINGKAT --}}
    <footer class="relative z-10 w-full py-6 text-center text-sm text-neutral-600">
        © {{ date('Y') }} Hipertensi Care. Semua Hak Dilindungi.
    </footer>

</body>
</html>
