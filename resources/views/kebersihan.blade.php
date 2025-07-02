<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kebersihan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex justify-center">
        <div class="max-w-sm w-full mx-6 my-8 flex flex-col">
                <nav class="flex mb-12">
                    <a href="/">
                        <img src="{{asset('images/arrow-left.png')}}" alt="">
                    </a>
                    <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 mx-auto">
                        Kebersihan Harian
                    </h1>
                </nav>

                <div id="alert-success" class="hidden fixed top-8 left-6 right-6 mx-auto max-w-sm z-50 flex items-center p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-lg" role="alert">
                    <img src="{{asset('images/check-circle.png')}}" alt="">
                    <div>
                        <span class="font-medium text-base text-gray-900 mx-3">Kebersihan Berhasil</span>
                    </div>
                </div>

                <form id="kebersihan-form" action="/isikebersihan" method="POST" class="flex flex-col flex-grow">
                    @csrf
                    <div class="space-y-4">
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <label for="nama-tempat" class="font-medium text-base">Nama Tempat</label>
                            <select name="tempat" id="nama-tempat" class="block w-full border-gray-300 bg-gray-100 font-normal text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600">
                                <option selected disabled>Pilih Tempat</option>
                                <option class="text-gray-900" value="kamar 1">Kamar 1</option>
                                <option class="text-gray-900" value="kamar 2">Kamar 2</option>
                                <option class="text-gray-900" value="kamar 3">Kamar 3</option>
                                <option class="text-gray-900" value="kamar 4">Kamar 4</option>
                                <option class="text-gray-900" value="kamar 5">Kamar 5</option>
                            </select>
                        </div>
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <label for="catatan" class="font-medium text-base">Catatan</label>
                            <textarea id="catatan" name="catatan" rows="2" class="block w-full border-gray-300 bg-gray-100 font-normal text-gray-900 rounded-lg placeholder-gray-400" placeholder="Masukkan catatan kebersihan..."></textarea>
                        </div>
                    </div>
                    <button id="kebersihan-button" class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-base px-5 py-2.5 text-center mt-auto" type="submit">Kirim</button>
                </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        const kebersihanButton = document.getElementById('kebersihan-button');
        const kebersihanForm = document.getElementById('kebersihan-form');
        const alertSuccess = document.getElementById('alert-success');

        if (kebersihanButton) {
            kebersihanButton.addEventListener('click', function() {
                // Tampilkan notifikasi sukses
                alertSuccess.classList.remove('hidden');

                // Atur timeout untuk mengirim form setelah 1 detik
                setTimeout(() => kebersihanForm.submit(), 1000);
            });
        }
    </script>
</body>
</html>