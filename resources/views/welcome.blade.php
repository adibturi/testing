<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>TensiCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">

    {{-- Google Fonts Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Inter", sans-serif;
        }
    </style>
</head>
<body class="relative min-h-screen">

    {{-- CONTAINER UTAMA + BACKGROUND GRID --}}
    <div class="relative min-h-screen w-full">

        {{-- BACKGROUND GRID --}}
        <div class="absolute inset-0
            bg-fixed
            bg-[linear-gradient(to_right,#4f4f4f2e_1px,transparent_1px),linear-gradient(to_bottom,#4f4f4f2e_1px,transparent_1px)]
            bg-[size:14px_24px]
            [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]
            z-0">
        </div>

        {{-- NAVBAR --}}
        <nav class="absolute top-0 left-0 w-full bg-transparent z-20 !backdrop-blur-0 !bg-opacity-100">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

                {{-- Logo --}}
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Logo TensiCare" />
                    <span class="self-center text-2xl font-semibold text-black">
                        TensiCare
                    </span>
                </a>

                <div class="flex md:order-2 items-center gap-2">
                    <a href="/login"
                       class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">
                        Login
                    </a>

                    <button
                        data-collapse-toggle="navbar-cta"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-black rounded-lg md:hidden hover:bg-gray-200 focus:ring-2 focus:ring-gray-300"
                    >
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 17 14" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>

                {{-- Menu --}}
                <div id="navbar-cta" class="items-center hidden w-full md:flex md:w-auto md:order-1">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 md:flex-row md:space-x-8">
                        <li><a href="/" class="block py-2 px-3 text-black hover:text-blue-700">Home</a></li>
                        <li><a href="#dash-diet" class="block py-2 px-3 text-black hover:text-blue-700">Diet Rendah Garam</a></li>
                        <li><a href="#monitoring" class="block py-2 px-3 text-black hover:text-blue-700">Monitoring Garam</a></li>
                        <li><a href="#aktivitas" class="block py-2 px-3 text-black hover:text-blue-700">Aktivitas Fisik</a></li>
                        <li><a href="#contact" class="block py-2 px-3 text-black hover:text-blue-700">Kontak</a></li>
                        <li><a href="#" class="block py-2 px-3 text-black hover:text-blue-700">Kuis</a></li>
                    </ul>
                </div>

            </div>
        </nav>

        {{-- SPACER NAVBAR --}}
        <div class="h-24"></div>

        {{-- HERO SECTION --}}
        <section class="relative z-10 w-full py-24">
            <div class="max-w-screen-xl mx-auto px-4 pt-2 md:pt-2 grid md:grid-cols-2 gap-12 items-center">

                {{-- TEXT LEFT --}}
                <div class="space-y-6" data-aos="fade-right">
                    <h1 class="text-4xl md:text-6xl font-extrabold text-neutral-900 leading-tight">
                        Pantau Asupan Garammu Hari Ini!
                    </h1>

                    <p class="text-lg text-neutral-700 max-w-md">
                        Blog ini hadir untuk membantu Anda memahami cara mengontrol jumlah garam harian,
                        mengenali risiko hipertensi, serta memberikan edukasi mengenai pola makan sehat
                        dan gaya hidup yang lebih baik.
                    </p>

                    <div class="space-y-2 text-neutral-700">
                        <p><strong class="text-blue-700">Tujuan edukasi kami:</strong></p>
                        <ul class="space-y-1">
                            <li>• Memberikan pengetahuan tentang kandungan natrium pada makanan.</li>
                            <li>• Mendorong kebiasaan makan rendah garam secara bertahap.</li>
                            <li>• Membantu Anda memantau asupan harian melalui fitur interaktif.</li>
                        </ul>
                    </div>

                    <div>
                        <a href="#monitoring"
                           class="inline-flex px-6 py-3 bg-blue-700 hover:bg-blue-800 text-white rounded-lg text-md">
                            Mulai Pantau Sekarang
                        </a>
                    </div>
                </div>

                {{-- IMAGE RIGHT --}}
                <div class="flex justify-center relative" data-aos="fade-left">
                    <div class="absolute inset-0 w-[120%] h-[120%] bg-white/40 blur-2xl rounded-full"></div>
                    <img src="{{ asset('images/123.png') }}"
                         alt="Pantau Asupan Garam"
                         class="relative w-full max-w-lg rounded-2xl mix-blend-lighten">
                </div>

            </div>
        </section>

        {{-- DASH DIET SECTION --}}
        <section id="dash-diet" class="py-20 bg-white scroll-mt-24">
            <div class="max-w-6xl mx-auto px-6">
                <h2 class="text-4xl font-bold text-center text-blue-900 mb-4" data-aos="fade-up">
                    Diet Rendah Garam (DASH Diet)
                </h2>

                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed"
                   data-aos="fade-up" data-aos-delay="150">
                    DASH Diet adalah pola makan yang dirancang untuk menurunkan tekanan darah
                    dengan mengurangi natrium dan meningkatkan konsumsi buah, sayur, gandum utuh,
                    serta sumber protein sehat.
                </p>

                <div class="grid md:grid-cols-3 gap-10">
                    {{-- Card 1 --}}
                    <div class="bg-blue-50 border border-blue-200 p-8 rounded-3xl shadow-sm"
                         data-aos="zoom-in" data-aos-delay="150">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4">Apa Itu DASH?</h3>
                        <p class="text-gray-700 leading-relaxed">
                            DASH menekankan pola makan rendah natrium dengan fokus pada:
                        </p>
                        <ul class="mt-4 space-y-2 text-gray-700">
                            <li>• Buah & sayuran segar</li>
                            <li>• Protein rendah lemak (ikan, ayam, kacang-kacangan)</li>
                            <li>• Gandum utuh</li>
                            <li>• Produk susu rendah lemak</li>
                            <li>• Membatasi makanan olahan & tinggi garam</li>
                        </ul>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-white border border-gray-200 p-8 rounded-3xl shadow-sm"
                         data-aos="zoom-in" data-aos-delay="300">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4">Contoh Menu Harian</h3>
                        <ul class="space-y-4 text-gray-700 leading-relaxed">
                            <li>
                                <strong>🍽 Sarapan:</strong><br>
                                Oatmeal + pisang, yogurt rendah lemak.
                            </li>
                            <li>
                                <strong>🥗 Makan Siang:</strong><br>
                                Nasi merah + dada ayam panggang + sayur kukus.
                            </li>
                            <li>
                                <strong>🍛 Makan Malam:</strong><br>
                                Ikan panggang + brokoli + kentang rebus.
                            </li>
                            <li>
                                <strong>🍎 Camilan:</strong><br>
                                Buah segar, kacang tanpa garam.
                            </li>
                        </ul>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-blue-50 border border-blue-200 p-8 rounded-3xl shadow-sm"
                         data-aos="zoom-in" data-aos-delay="450">
                        <h3 class="text-2xl font-bold text-blue-900 mb-4">Tips Belanja Rendah Garam</h3>
                        <ul class="space-y-3 text-gray-700 leading-relaxed">
                            <li>• Pilih makanan fresh, bukan olahan.</li>
                            <li>• Baca label: pilih <strong>&lt; 140 mg natrium</strong> per porsi.</li>
                            <li>• Hindari bumbu instan & saus pabrikan.</li>
                            <li>• Gunakan rempah alami (bawang, lemon, lada hitam).</li>
                            <li>• Pilih snack tanpa garam.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- DIVIDER --}}
        <div class="relative z-10">
            <div class="max-w-screen-xl mx-auto px-4">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>
            </div>
        </div>

        {{-- MONITORING SECTION --}}
        <section id="monitoring" class="relative z-10 w-full py-20 bg-white/60 backdrop-blur-sm scroll-mt-24">
            <div class="max-w-6xl mx-auto px-6">

                <h2 class="text-4xl font-bold text-center text-blue-900 mb-4" data-aos="fade-up">
                    Monitoring Asupan Natrium
                </h2>

                <p class="text-center text-gray-600 max-w-3xl mx-auto mb-12 leading-relaxed"
                data-aos="fade-up">
                    Catat makanan yang Anda konsumsi setiap hari untuk memantau estimasi asupan natrium.
                    Fitur sederhana ini membantu Anda lebih sadar terhadap pola makan dan menjaga tekanan darah.
                </p>

                <div class="bg-white shadow-lg rounded-3xl p-10 border border-gray-200">

                    {{-- FORM --}}
                    <div class="space-y-6" data-aos="fade-up" data-aos-delay="100">

                        {{-- BARIS 1: IDENTITAS & WAKTU --}}
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                            {{-- Nama --}}
                            <div>
                                <label class="font-semibold text-gray-700">Nama Anda</label>
                                <input id="userName"
                                    type="text"
                                    class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                                    placeholder="Masukkan nama Anda">
                            </div>

                            {{-- Tanggal --}}
                            <div>
                                <label class="font-semibold text-gray-700">Tanggal</label>
                                <input id="intakeDate"
                                    type="date"
                                    class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600">
                            </div>

                            {{-- Waktu makan --}}
                            <div>
                                <label class="font-semibold text-gray-700">Waktu Makan</label>
                                <select id="mealTime"
                                        class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600">
                                    <option value="">Pilih waktu makan</option>
                                    <option value="Pagi">Pagi</option>
                                    <option value="Siang">Siang</option>
                                    <option value="Malam">Malam</option>
                                    <option value="Camilan">Camilan</option>
                                </select>
                            </div>
                        </div>

                        {{-- BARIS 2: DATA MAKANAN --}}
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

                            {{-- Nama Makanan --}}
                            <div>
                                <label class="font-semibold text-gray-700">Nama Makanan</label>
                                <input id="foodName"
                                    type="text"
                                    class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                                    placeholder="Contoh: Nasi goreng">
                            </div>

                            {{-- Jumlah Porsi --}}
                            <div>
                                <label class="font-semibold text-gray-700">Jumlah Porsi</label>
                                <input id="portion"
                                    type="number"
                                    min="0.25"
                                    step="0.25"
                                    class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                                    placeholder="Misal: 1">
                            </div>

                            {{-- Natrium --}}
                            <div>
                                <label class="font-semibold text-gray-700">Perkiraan Natrium (mg)</label>
                                <input id="sodiumAmount"
                                    type="number"
                                    min="0"
                                    step="1"
                                    class="w-full mt-2 p-3 rounded-xl border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                                    placeholder="Misal: 500">
                            </div>

                            {{-- Tombol --}}
                            <div class="flex items-end">
                                <button
                                    onclick="addSodium()"
                                    type="button"
                                    class="w-full p-3 bg-blue-700 hover:bg-blue-800 text-white rounded-xl font-semibold transition">
                                    Tambahkan
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- LIST & TOTAL tetap seperti punyamu sebelumnya --}}
                    <div class="mt-10" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="text-2xl font-semibold text-blue-900 mb-4">Daftar Asupan Hari Ini</h3>

                        <ul id="foodList" class="space-y-3"></ul>

                        <div class="mt-8 p-6 bg-blue-50 rounded-2xl border border-blue-200">
                            <p class="text-lg font-bold text-blue-900">
                                Total Natrium Hari Ini:
                                <span id="totalSodium" class="font-extrabold">0</span> mg
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>



        {{-- DIVIDER --}}
        <div class="relative z-10">
            <div class="max-w-screen-xl mx-auto px-4">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>
            </div>
        </div>

        {{-- AKTIVITAS FISIK --}}
        <section id="aktivitas" class="relative z-10 w-full py-32 scroll-mt-24">
            <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-16 items-center">

                <div class="space-y-6" data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-neutral-900 leading-tight">
                        Aktivitas Fisik Sehat
                    </h2>

                    <p class="text-lg text-neutral-700 max-w-md">
                        Olahraga ringan sangat dianjurkan bagi penderita hipertensi untuk menjaga tekanan darah tetap stabil.
                        Aktivitas fisik yang rutin membantu melancarkan sirkulasi darah, menguatkan jantung, serta mengurangi stres.
                    </p>

                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-neutral-900">Tips Olahraga Ringan</h3>
                        <ul class="space-y-2 text-neutral-700">
                            <li>• Jalan kaki 20–30 menit per hari.</li>
                            <li>• Peregangan tubuh 10 menit setiap pagi.</li>
                            <li>• Bersepeda santai 2–3 kali seminggu.</li>
                            <li>• Hindari olahraga intens yang terlalu berat.</li>
                            <li>• Lakukan pemanasan dan pendinginan agar jantung tidak kaget.</li>
                        </ul>
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-xl font-semibold text-neutral-900">Contoh Jadwal Mingguan</h3>
                        <div class="p-5 rounded-xl bg-white/70 shadow-sm border border-gray-200">
                            <ul class="space-y-1 text-neutral-700">
                                <li><strong>Senin:</strong> Jalan kaki 30 menit</li>
                                <li><strong>Selasa:</strong> Peregangan + yoga ringan (20 menit)</li>
                                <li><strong>Rabu:</strong> Bersepeda santai 30 menit</li>
                                <li><strong>Kamis:</strong> Jalan santai 25 menit</li>
                                <li><strong>Jumat:</strong> Senam ringan 20 menit</li>
                                <li><strong>Sabtu:</strong> Bersepeda atau renang santai</li>
                                <li><strong>Minggu:</strong> Istirahat aktif (jalan-jalan ringan)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center relative" data-aos="fade-left">
                    <div class="absolute inset-0 w-[120%] h-[120%] bg-white/40 blur-3xl rounded-full"></div>
                    <img src="{{ asset('images/123456.png') }}"
                         alt="Aktivitas Fisik"
                         class="relative w-full max-w-md rounded-2xl mix-blend-lighten">
                </div>

            </div>
        </section>

        {{-- DIVIDER --}}
        <div class="relative z-10">
            <div class="max-w-screen-xl mx-auto px-4">
                <div class="h-px bg-gradient-to-r from-transparent via-blue-300 to-transparent"></div>
            </div>
        </div>

        {{-- CONTACT / KONSULTASI --}}
        <section id="contact" class="relative z-10 w-full py-32 bg-white/40 backdrop-blur-sm scroll-mt-24">
            <div class="max-w-screen-xl mx-auto px-4">

                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-neutral-900" data-aos="fade-up">
                        Konsultasi Ahli Gizi
                    </h2>
                    <p class="text-neutral-700 mt-4 max-w-2xl mx-auto">
                        Hubungi ahli gizi kami untuk mendapatkan panduan kesehatan, tanya jawab,
                        serta konsultasi terkait hipertensi dan gaya hidup sehat.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 gap-16 items-start">

                    {{-- LEFT INFO --}}
                    <div class="space-y-8">
                        <div class="p-6 bg-white rounded-2xl shadow-xl border border-neutral-200" data-aos="fade-right">
                            <h3 class="text-2xl font-bold text-neutral-900 mb-3">Kontak Ahli Gizi</h3>
                            <p class="text-neutral-700">
                                Konselor gizi kami siap membantu Anda memahami pola makan sehat,
                                mengelola tekanan darah, dan memberikan rekomendasi nutrisi terbaik.
                            </p>

                            <ul class="mt-6 space-y-3 text-neutral-700">
                                <li><strong>Nama:</strong> Ibu Sinta Pratiwi, S.Gz</li>
                                <li><strong>Jam Konsultasi:</strong> 08.00 – 20.00 WIB</li>
                                <li><strong>Email:</strong>
                                    <a href="mailto:ahligizi@example.com" class="text-blue-700 hover:underline">
                                        ahligizi@example.com
                                    </a>
                                </li>
                                <li><strong>WhatsApp:</strong>
                                    <a href="https://wa.me/6281234567890" class="text-green-600 font-semibold hover:underline">
                                        +62 812-3456-7890
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="https://wa.me/6281234567890"
                               class="px-6 py-3 w-full bg-green-600 text-white rounded-lg text-center font-medium hover:bg-green-700">
                                Chat via WhatsApp
                            </a>

                            <a href="mailto:ahligizi@example.com"
                               class="px-6 py-3 w-full bg-blue-700 text-white rounded-lg text-center font-medium hover:bg-blue-800">
                                Kirim Email
                            </a>
                        </div>
                    </div>

                    {{-- FORM --}}
                    <div class="p-8 bg-white rounded-2xl shadow-xl border border-neutral-200" data-aos="fade-left">
                        <h3 class="text-2xl font-bold text-neutral-900 mb-6">
                            Formulir Pertanyaan
                        </h3>

                        <form
                            id="consultForm"
                            action="https://formsubmit.co/adibturi16@gmail.com"
                            method="POST"
                            class="space-y-6"
                            novalidate
                        >
                            {{-- HIDDEN SETTINGS UNTUK FORMSUBMIT --}}
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_template" value="box">
                            <input type="hidden" name="_subject" value="Pesan Baru dari Formulir Hipertensi Care">
                            {{-- NOTE: _next sebaiknya pakai URL publik ketika sudah deploy --}}
                            <input type="hidden" name="_next" value="http://127.0.0.1:8000/">

                            <div>
                                <label class="block mb-2 text-neutral-800 font-medium">Nama Lengkap</label>
                                <input type="text"
                                       name="nama"
                                       required
                                       class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500"
                                       placeholder="Masukkan nama Anda">
                            </div>

                            <div>
                                <label class="block mb-2 text-neutral-800 font-medium">Email</label>
                                <input type="email"
                                       name="email"
                                       required
                                       class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500"
                                       placeholder="contoh@email.com">
                            </div>

                            <div>
                                <label class="block mb-2 text-neutral-800 font-medium">Pertanyaan</label>
                                <textarea rows="5"
                                          name="pesan"
                                          required
                                          class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500"
                                          placeholder="Tulis pertanyaan Anda..."></textarea>
                            </div>

                            <button
                                id="consultSubmitBtn"
                                type="submit"
                                class="w-full px-6 py-3 bg-blue-700 text-white rounded-lg font-semibold hover:bg-blue-800 flex items-center justify-center gap-2"
                            >
                                Kirim Pertanyaan
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>

    </div> {{-- END MAIN WRAPPER --}}

    {{-- FOOTER --}}
    <footer class="relative z-10 w-full py-16 mt-20 bg-blue-900 text-white border-t border-blue-800" data-aos="fade-up">
        <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-3 gap-12">

            <div class="space-y-4">
                <h3 class="text-2xl font-bold">TensiCare</h3>
                <p class="text-blue-100 max-w-sm">
                    Platform edukasi kesehatan untuk membantu masyarakat memahami hipertensi,
                    mengelola pola makan rendah natrium, dan menjaga gaya hidup sehat.
                </p>
            </div>

            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Navigasi</h3>
                <ul class="space-y-2 text-blue-100">
                    <li><a href="#" class="hover:text-white">Beranda</a></li>
                    <li><a href="#monitoring" class="hover:text-white">Monitoring Garam</a></li>
                    <li><a href="#dash-diet" class="hover:text-white">Diet Rendah Garam</a></li>
                    <li><a href="#aktivitas" class="hover:text-white">Aktivitas Fisik</a></li>
                    <li><a href="#contact" class="hover:text-white">Kontak</a></li>
                    <li><a href="#" class="hover:text-white">Kuis</a></li>
                </ul>
            </div>

            <div class="space-y-4">
                <h3 class="text-xl font-semibold">Kontak</h3>
                <ul class="space-y-2 text-blue-100">
                    <li>
                        Email:
                        <a href="mailto:konselor@hipertensi.id" class="hover:text-white">
                            konselor@hipertensi.id
                        </a>
                    </li>
                    <li>
                        WhatsApp:
                        <a href="https://wa.me/6281234567890" class="hover:text-white">
                            +62 812-3456-7890
                        </a>
                    </li>
                </ul>

                <div class="flex space-x-6 pt-2">
                    {{-- Facebook --}}
                    <a href="#" class="hover:opacity-80 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="w-7 h-7 text-white" viewBox="0 0 16 16">
                            <path d="M8.94 6.36V4.66c0-.38.25-.47.42-.47h1.56V2.03L8.97 2c-2.2 0-2.7 1.64-2.7 2.69v1.67H4.31v2.3h1.96v5h2.67v-5h1.77l.28-2.3H8.94z"/>
                        </svg>
                    </a>

                    {{-- Instagram --}}
                    <a href="#" class="hover:opacity-80 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             class="w-7 h-7 text-white" viewBox="0 0 16 16">
                            <path d="M8 5.38A2.62 2.62 0 1 0 10.62 8 2.62 2.62 0 0 0 8 5.38zm0 4.31A1.69 1.69 0 1 1 9.69 8 1.69 1.69 0 0 1 8 9.69z"/>
                            <path d="M11.66 0H4.34A4.35 4.35 0 0 0 0 4.34v7.32A4.35 4.35 0 0 0 4.34 16h7.32A4.35 4.35 0 0 0 16 11.66V4.34A4.35 4.35 0 0 0 11.66 0zM15 11.66A3.34 3.34 0 0 1 11.66 15H4.34A3.34 3.34 0 0 1 1 11.66V4.34A3.34 3.34 0 0 1 4.34 1h7.32A3.34 3.34 0 0 1 15 4.34z"/>
                            <circle cx="12.3" cy="3.7" r="1.1"/>
                        </svg>
                    </a>
                </div>
            </div>

        </div>

        <div class="border-t border-blue-700 mt-10 pt-6 text-center text-blue-200 text-sm">
            © 2025 TensiCare. Semua Hak Dilindungi.
        </div>
    </footer>

    {{-- JS LIBRARIES --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    {{-- Monitoring Natrium JS --}}
    <script>
        let totalSodium = 0;

        function addSodium() {
            console.log('addSodium terpanggil');

            const userInput    = document.getElementById("userName");
            const foodInput    = document.getElementById("foodName");
            const sodiumInput  = document.getElementById("sodiumAmount");
            const foodList     = document.getElementById("foodList");
            const totalDisplay = document.getElementById("totalSodium");

            if (!userInput || !foodInput || !sodiumInput || !foodList || !totalDisplay) {
                alert("Elemen input tidak ditemukan di halaman.");
                return;
            }

            const userName = userInput.value.trim();
            const foodName = foodInput.value.trim();
            const sodium   = parseInt(sodiumInput.value);

            if (userName === "" || foodName === "" || isNaN(sodium) || sodium < 0) {
                alert("Mohon isi nama, nama makanan, dan jumlah natrium dengan benar.");
                return;
            }

            const li = document.createElement("li");
            li.className = "p-4 bg-gray-100 rounded-xl flex justify-between items-center shadow-sm";

            li.innerHTML = `
                <div class="flex flex-col">
                    <span class="font-semibold">${userName}</span>
                    <span class="text-sm text-gray-700">${foodName} — ${sodium} mg</span>
                </div>
                <button type="button"
                    class="px-3 py-1 bg-red-500 text-white rounded-lg text-sm hover:bg-red-600">
                    Hapus
                </button>
            `;

            li.querySelector("button").addEventListener("click", function () {
                li.remove();
                totalSodium -= sodium;
                totalDisplay.textContent = totalSodium;
            });

            foodList.appendChild(li);

            totalSodium += sodium;
            totalDisplay.textContent = totalSodium;

            foodInput.value = "";
            sodiumInput.value = "";
        }
    </script>

    {{-- FormSubmit + Loading Button --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('consultForm');
            const btn  = document.getElementById('consultSubmitBtn');

            if (!form || !btn) return;

            form.addEventListener('submit', function (e) {
                if (!form.checkValidity()) {
                    e.preventDefault();
                    form.reportValidity();
                    return;
                }

                btn.disabled = true;
                btn.classList.add('opacity-80', 'cursor-not-allowed');
                btn.innerHTML = `
                    <svg class="w-5 h-5 animate-spin" viewBox="0 0 24 24" fill="none">
                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                              d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                    </svg>
                    <span>Mengirim...</span>
                `;
            });
        });
    </script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 80
        });
    </script>

</body>
</html>
