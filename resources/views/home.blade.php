<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="min-h-screen flex justify-center">
        <div class="w-full max-w-sm m-6">
            <nav class="flex justify-between">
                <h1 class="text-lg font-bold leading-tight tracking-tight text-gray-900">
                    Linggarjati
                </h1>
                <div class="flex gap-3">
                    <h1 class="text-lg font-medium text-[#737373]">
                        Hai, Jokowi
                    </h1>
                    <div class="relative">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-end" class="w-8 h-8 rounded-full cursor-pointer" src="{{asset('images/jokowi.jpg')}}" alt="User dropdown">

                        <!-- Dropdown menu -->
                        <div id="userDropdown" class="z-10 hidden w-max bg-white rounded-lg shadow border border-gray-300">
                            <ul class="text-sm text-gray-700" aria-labelledby="avatarButton">
                              <li>
                                <form method="POST" action="/logout" class="w-full">
                                    @csrf
                                    <button type="submit" class="flex items-center gap-2 w-full rounded-lg px-3 py-2 text-left hover:bg-gray-100">
                                        <img src="{{asset('images/icon-logout.png')}}" class="w-5 h-5" alt="icon logout">
                                        <span class="text-lg font-medium text-[#737373] whitespace-nowrap">Logout</span>
                                    </button>
                                </form>
                              </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <h1 class="text-lg font-medium text-[#737373] mt-16">
                {{ \Carbon\Carbon::now()->locale('id_ID')->translatedFormat('l, d F Y') }}
            </h1>
            <h1 id="clock" class="text-8xl font-bold text-black mb-8">
                00:00
            </h1>
            <div>
                <div class="grid grid-cols-2 gap-4 ">
                        <a href="/jadwal" class="block aspect-square rounded-lg bg-[#fffbf3] border border-[#FDEED4]">
                            <div class="p-4 flex flex-col justify-between h-full">
                                <h5 class="text-xl font-medium text-primary-600">Presensi<br>Datang</h5>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-normal text-primary-600">06:57</h5>
                                    <img class="w-7 h-7" src="{{asset('images/icon-datang.png')}}" alt="icon presensi datang">
                                </div>
                            </div>
                        </a>
                        <a href="/pulang" class="block aspect-square rounded-lg bg-[#FEF2F2] border border-[#FEE2E2]">
                            <div class="p-4 flex flex-col justify-between h-full">
                                <h5 class="text-xl font-medium text-[#dc2626]">Presensi<br>Pulang</h5>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-normal text-[#dc2626]">16:03</h5>
                                    <img class="w-7 h-7" src="{{asset('images/icon-pulang.png')}}" alt="icon presensi pulang">
                                </div>
                            </div>
                        </a>
                        <a href="" class="block aspect-square rounded-lg bg-[#F2FDF5] border border-[#D3F3DF]">
                            <div class="p-4 flex flex-col justify-between h-full">
                                <h5 class="text-xl font-medium text-[#16A34A]">Kebersihan<br>Harian</h5>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-normal text-[#16A34A]"></h5>
                                    <img class="w-7 h-7" src="{{asset('images/icon-kebersihan.png')}}" alt="icon kebersihan harian">
                                </div>
                            </div>
                        </a>
                        <a href="" class="block aspect-square rounded-lg bg-[#EFF6FF] border border-[#BFDBFE]">
                            <div class="p-4 flex flex-col justify-between h-full">
                                <h5 class="text-xl font-medium text-[#2563EB]">House<br>Keeping</h5>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-normal text-[#2563EB]"></h5>
                                    <img class="w-7 h-7" src="{{asset('images/icon-housekeeping.png')}}" alt="icon house keeping">
                                </div>
                            </div>
                        </a>
                </div>
            </div>
        </div>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    
    <script>
        function updateClock() {
            const clockElement = document.getElementById('clock');
            if (clockElement) {
                const now = new Date();
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                clockElement.textContent = `${hours}:${minutes}`;
            }
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately on load
        updateClock();
    </script>
</body>
</html>