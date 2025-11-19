<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pendaftaran</title>

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
        <div class="relative grid place-content-center min-h-screen p-10">
            <div class="absolute size-40 top-2/3 left-1/4 -translate-y-10 rounded-full bg-blue-300 blur-3xl"></div>
            <div
                class="absolute size-10 top-1/3 right-1/4 translate-x-20 -translate-y-20 rounded-full bg-blue-700 blur-xl animate-pulse">
            </div>
            <div
                class="absolute size-32 -top-10 -left-10 rounded-full bg-gradient-to-r from-indigo-400 via-blue-400 to-cyan-300 blur-xl opacity-80 animate-spin-slow">
            </div>
            <div class="absolute top-1/3 left-2/3 translate-y-2/3 -translate-x-1/2 w-48 h-48 rounded-full 
            bg-gradient-to-r from-blue-400 via-blue-500 to-cyan-400 
            blur-3xl opacity-40"></div>
            <div
                class="z-10 max-w-xl p-5 md:p-10 rounded-lg bg-white shadow-lg flex flex-col items-center gap-5 md:gap-10">
                <h1 class="font-bold text-xl md:text-3xl tracking-wide text-blue-900/90">Pendaftaran</h1>
                <form action="/pendaftaran/submit" method="post" enctype="multipart/form-data"
                    class="flex flex-col gap-2 md:gap-3">
                    <div>
                        <label for="name" aria-label="Nama Lengkap Input">
                            <input type="text" name="nama" placeholder="Nama Lengkap"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label for="tempat_lahir" aria-label="Tempat Lahir Input">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded">
                        </label>
                    </div>
                    <div>
                        <label for="tanggal_lahir" aria-label="Tanggal Lahir Input">
                            <input type="date" name="tanggal_lahir"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded">
                        </label>
                    </div>
                    <div>
                        <label for="hp" aria-label="Nomor Hp Input">
                            <input type="text" name="hp" placeholder="No HP"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label for="email" aria-label="Email Input">
                            <input type="email" name="email" placeholder="Email"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label for="nominal" aria-label="Nominal Transfer Input">
                            <input type="number" name="nominal" placeholder="Nominal Transfer"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label for="bank" aria-label="Nama Bank Input">
                            <input type="text" name="bank" placeholder="Nama Bank"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label for="anbank" aria-label="Atas Nama Rekening Input">
                            <input type="text" name="anbank" placeholder="Atas Nama Rekening"
                                class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                                required>
                        </label>
                    </div>
                    <div>
                        <label class="text-black/50 text-xs md:text-base" for="gambar"
                            aria-label="Bukti Transfer Input Image">Bukti Transfer (jpg, png, jpeg, pdf):
                        </label>
                        <input type="file" name="gambar"
                            class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                            required>
                    </div>
                    <div>
                        <label class="text-black/50 text-xs md:text-base" for="tanggal_transfer"
                            aria-label="Tanggal Transfer Input">Tanggal Transfer:
                        </label>
                        <input type="date" name="tanggal_transfer"
                            class="outline-none placeholder:text-black/50 text-black/50 text-xs md:text-base w-full border p-1 md:p-2 rounded"
                            required>
                    </div>
                    <button
                        class="mt-5 w-full bg-gradient-to-r from-indigo-500 via-blue-500 to-cyan-400 text-white font-bold text-lg md:text-xl p-1 md:p-3 rounded hover:shadow-lg">
                        Submit
                    </button>

                </form>
            </div>
        </div>
    </section>
</body>

</html>