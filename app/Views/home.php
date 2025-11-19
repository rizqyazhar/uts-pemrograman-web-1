<?php if (session()->getFlashdata('success')): ?>
    <div id="toast-success"
        class="fixed top-5 right-5 z-50 flex items-center px-3 py-2 bg-white border border-gray-200 rounded-lg shadow-md text-gray-700 animate-slide-in-right">
        <span class="text-sm font-bold">
            ✅ Pendaftaran berhasil!
        </span>
    </div>

    <script>
        setTimeout(() => {
            const toast = document.getElementById('toast-success');
            if (toast) toast.remove();
        }, 3000);
    </script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <!-- browser desktop -->
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/favicon-16x16.png">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Apple Touch Icon (iOS / iPadOS) -->
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon.png">

    <!-- Android / Chrome on mobile -->
    <link rel="icon" type="image/png" sizes="192x192" href="/icons/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="/icons/android-chrome-512x512.png">

    <!-- Manifest  -->
    <link rel="manifest" href="/icons/site.webmanifest">

    <!-- link tailwindcss -->
    <link rel="stylesheet" href="/css/output.css" />
</head>

<body>
    <section class="bg-blue-50">
        <div class="container">
            <div class="relative min-h-screen grid place-content-center">
                <div class="absolute size-40 top-2/3 left-1/4 -translate-y-10 rounded-full bg-blue-300 blur-3xl"></div>
                <div
                    class="absolute size-32 -top-20 -left-10 rounded-full bg-gradient-to-r from-indigo-400 via-blue-400 to-cyan-300 blur-xl opacity-80 animate-spin-slow">
                </div>
                <div
                    class="absolute size-10 top-1/3 right-1/4 translate-x-20 -translate-y-20 rounded-full bg-blue-700 blur-xl animate-pulse">
                </div>
                <div
                    class="absolute top-1/3 left-1/3 -translate-y-14 -translate-x-7 md:-translate-x-12 lg:-translate-y-20 lg:-translate-x-2 xl:translate-x-20">
                    <svg class="size-5 text-blue-900/80 -rotate-12" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"
                            d="M5.98 10.761C8.608 5.587 9.92 3 12 3c2.08 0 3.393 2.587 6.02 7.761l.327.645c2.182 4.3 3.274 6.45 2.287 8.022C19.648 21 17.208 21 12.327 21h-.654c-4.88 0-7.321 0-8.307-1.572c-.987-1.572.105-3.722 2.287-8.022l.328-.645Z" />
                    </svg>
                </div>
                <div
                    class="absolute top-1/2 right-1/3 translate-y-28 translate-x-16 md:translate-y-14 md:translate-x-28 lg:translate-y-14 lg:translate-x-14">
                    <svg class="size-7 text-blue-900/80 rotate-12" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 1024 741">
                        <path fill="currentColor"
                            d="M421.5 602.5Q384 565 384 512t38-91L966 59L603 603q-37 37-90.5 37t-91-37.5zM512 62q-91 0-174.5 36T194 194T98.5 337T63 511q0 106 48 202l-56 28Q0 632 0 512q0-105 40.5-199.5t109-163T313 40.5T512 0q161 0 293 92l-57 38Q639 62 512 62zm421 158q91 132 91 292q0 120-55 229l-56-29q48-95 48-201q0-125-66-234z" />
                    </svg>
                </div>
                <div class="max-w-xs md:max-w-lg lg:max-w-2xl text-center z-50">
                    <div class="space-y-2.5 md:space-y-5">
                        <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-blue-900/90">
                            Pendaftaran Online Lebih Mudah & Cepat
                        </h1>
                        <p class="text-[13px] md:lg lg:text-xl text-blue-900/80">
                            Daftarkan diri Anda hanya dengan beberapa klik. Proses cepat,
                            aman, dan dapat dilakukan di mana saja.
                        </p>
                    </div>
                    <div class="mt-7 md:mt-10">
                        <a href="<?= site_url('/pendaftaran') ?>"
                            class="inline-flex items-center gap-3 px-3 py-1 outline-none bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 rounded-xl uppercase tracking-wider text-white text-sm md:text-lg font-bold shadow-lg hover:scale-105 transition-all duration-300">
                            <span>Daftar</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>