<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Keeping Tempat</title>
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
                        House Keeping
                    </h1>
                </nav>

                <form action="/isihousekeeping-tempat" method="POST" class="flex flex-col flex-grow">
                    @csrf
                    <div class="space-y-4">
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <label for="nama-tempat" class="font-medium text-base">Tipe Camp</label>
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
                            <label class="font-medium text-base">Standard Operasional Prosedur (SOP)</label>
                            <ul class="space-y-4">
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-checkin" type="radio" value="" name="sop" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-checkin" class="w-full cursor-pointer font-medium text-base">SOP sebelum tamu check in</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-checkout" type="radio" value="" name="sop" class="h-4 w-4 border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-checkout" class="w-full cursor-pointer font-medium text-base">SOP sebelum tamu check out</label>
                                    </div>
                                </li>
                            </ul>
                            
                            
                        </div>
                    </div>
                    <button class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-base px-5 py-2.5 text-center mt-auto" type="submit">Selanjutnya</button>
                </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>