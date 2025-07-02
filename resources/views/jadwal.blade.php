<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal</title>
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
                        Presensi Datang
                    </h1>
                </nav>
                <form action="/pilihjadwal" method="POST" class="flex flex-col flex-grow">
                    @csrf
                    <div class="space-y-4">
                        <div class="flex items-center justify-between rounded-lg border border-gray-300 p-5 transition-all has-[:checked]:border-primary-600 has-[:checked]:ring-1 has-[:checked]:ring-primary-600">
                            <label for="shift-pagi" class="w-full cursor-pointer font-medium text-base">Jadwal Pagi</label>
                            <input id="shift-pagi" type="radio" value="" name="shift" class="h-6 w-6 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                        </div>
                        <div class="flex items-center justify-between rounded-lg border border-gray-300 p-5 transition-all has-[:checked]:border-primary-600 has-[:checked]:ring-1 has-[:checked]:ring-primary-600">
                            <label for="shift-siang" class="w-full cursor-pointer font-medium text-base">Jadwal Siang</label>
                            <input id="shift-siang" type="radio" value="" name="shift" class="h-6 w-6 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                        </div>
                    </div>
                    <button class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-base px-5 py-2.5 text-center mt-auto" type="submit">Selanjutnya</button>
                </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>