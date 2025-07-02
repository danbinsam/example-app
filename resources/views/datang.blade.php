<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="h-screen flex justify-center">
        <div class="max-w-sm w-full mx-6 py-8 flex flex-col">
            <nav class="flex mb-auto">
                <a href="/jadwal">
                    <img src="{{asset('images/arrow-left.png')}}" alt="">
                </a>
                <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 mx-auto">
                    Presensi Datang
                </h1>
            </nav>

            <div id="alert-success" class="hidden fixed top-8 left-6 right-6 mx-auto max-w-sm z-50 flex items-center p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-lg" role="alert">
                <img src="{{asset('images/check-circle.png')}}" alt="">
                <div>
                    <span class="font-medium text-base text-gray-900 mx-3">Presensi Berhasil</span>
                </div>
            </div>

            <form id="presensi-form" action="/presensidatang" method="POST" class="flex flex-col flex-grow">
                @csrf
                <div class="flex-grow flex items-center justify-center">
                    <div class="w-full aspect-[3/4] rounded-lg overflow-hidden bg-gray-300">
                        <video id="camera-feed" class="w-full h-full object-cover" autoplay muted playsinline></video>
                    </div>
                </div>
                <button id="presensi-button" class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-base px-5 py-2.5 text-center" type="button">Presensi</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        const videoElement = document.getElementById('camera-feed');

        // Periksa apakah browser mendukung mediaDevices dan getUserMedia
        if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
            // Minta akses ke kamera pengguna (kamera depan)
            navigator.mediaDevices.getUserMedia({ video: { facingMode: 'user' } })
                .then(function (stream) {
                    // Atur sumber video ke stream dari kamera
                    videoElement.srcObject = stream;
                })
                .catch(function (error) {
                    console.error("Terjadi kesalahan saat mengakses kamera: ", error);
                });
        }

        const presensiButton = document.getElementById('presensi-button');
        const presensiForm = document.getElementById('presensi-form');
        const alertSuccess = document.getElementById('alert-success');

        if (presensiButton) {
            presensiButton.addEventListener('click', function() {
                // Tampilkan notifikasi sukses
                alertSuccess.classList.remove('hidden');

                // Atur timeout untuk mengirim form setelah 1 detik
                setTimeout(() => presensiForm.submit(), 1000);
            });
        }
    </script>
</body>
</html>