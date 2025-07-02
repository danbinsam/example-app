<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Keeping SOP</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex justify-center">
        <div class="max-w-sm w-full mx-6 my-8">
                <nav class="flex mb-12">
                    <a href="/housekeeping-tempat">
                        <img src="{{asset('images/arrow-left.png')}}" alt="">
                    </a>
                    <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900 mx-auto">
                        House Keeping
                    </h1>
                </nav>

                <div id="alert-success" class="hidden fixed top-8 left-6 right-6 mx-auto max-w-sm z-50 flex items-center p-4 border border-gray-300 rounded-lg bg-gray-50 shadow-lg" role="alert">
                    <img src="{{asset('images/check-circle.png')}}" alt="">
                    <div>
                        <span class="font-medium text-base text-gray-900 mx-3">Housekeeping Berhasil</span>
                    </div>
                </div>

                <form id="housekeeping-form" action="/isihousekeeping-sop" method="POST" class="flex flex-col flex-grow">
                    @csrf
                    <div class="space-y-4">
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <div class="space-y-1">
                                <h3 Class="font-medium text-base">Tipe Camp</h3>
                                <h3 Class="font-reguler text-base text-[#404040]">Kamar 3</h3>
                            </div>
                            <div class="space-y-1">
                                <h3 Class="font-medium text-base">Standard Operasional Prosedur (SOP)</h3>
                                <h3 Class="font-reguler text-base text-[#404040]">SOP sebelum tamu check in</h3>
                            </div>
                        </div>
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <label class="font-medium text-base">Kamar Mandi</label>
                            <ul class="space-y-4">
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-kamarmandi-1" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-kamarmandi-1" class="w-full cursor-pointer font-medium text-base">SOP kamar mandi no 1</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-kamarmandi-2" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-kamarmandi-2" class="w-full cursor-pointer font-medium text-base">SOP kamar mandi no 2</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-kamarmandi-3" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-kamarmandi-3" class="w-full cursor-pointer font-medium text-base">SOP kamar mandi no 3</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-kamarmandi-4" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-kamarmandi-4" class="w-full cursor-pointer font-medium text-base">SOP kamar mandi no 4</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-kamarmandi-5" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-kamarmandi-5" class="w-full cursor-pointer font-medium text-base">SOP kamar mandi no 5</label>
                                    </div>
                                </li>
                            </ul>
                            
                            
                        </div>
                        <div class="rounded-lg border border-gray-300 p-5 space-y-4">
                            <label class="font-medium text-base">Ruang Kamar</label>
                            <ul class="space-y-4">
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-ruangkamar-1" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-ruangkamar-1" class="w-full cursor-pointer font-medium text-base">SOP ruang kamar no 1</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-ruangkamar-2" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-ruangkamar-2" class="w-full cursor-pointer font-medium text-base">SOP ruang kamar no 2</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-ruangkamar-3" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-ruangkamar-3" class="w-full cursor-pointer font-medium text-base">SOP ruang kamar no 3</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-ruangkamar-4" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-ruangkamar-4" class="w-full cursor-pointer font-medium text-base">SOP ruang kamar no 4</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center gap-3">
                                        <input id="sop-ruangkamar-5" type="checkbox" value="" name="sop" class="h-4 w-4 rounded-sm border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-600">
                                        <label for="sop-ruangkamar-5" class="w-full cursor-pointer font-medium text-base">SOP ruang kamar no 5</label>
                                    </div>
                                </li>
                            </ul>
                            
                            
                        </div>
                    </div>
                    <button id="housekeeping-button" class="w-full text-white bg-primary-600 hover:bg-primary-700 font-medium rounded-lg text-base px-5 py-2.5 text-center mt-12" type="submit">Kirim</button>
                </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        const housekeepingButton = document.getElementById('housekeeping-button');
        const housekeepingForm = document.getElementById('housekeeping-form');
        const alertSuccess = document.getElementById('alert-success');

        if (housekeepingButton) {
            housekeepingButton.addEventListener('click', function() {
                // Tampilkan notifikasi sukses
                alertSuccess.classList.remove('hidden');

                // Atur timeout untuk mengirim form setelah 1 detik
                setTimeout(() => housekeepingForm.submit(), 1000);
            });
        }
    </script>
</body>
</html>