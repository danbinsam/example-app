<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                    <img class="w-8 h-8 rounded-full" src="{{asset('images/jokowi.jpg')}}" alt="profile">
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
                        <a href="" class="block aspect-square rounded-lg bg-[#fffbf3] border border-[#FDEED4]">
                            <div class="p-4 flex flex-col justify-between h-full">
                                <h5 class="text-xl font-medium text-primary-600">Presensi<br>Datang</h5>
                                <div class="flex justify-between">
                                    <h5 class="text-xs font-normal text-primary-600">06:57</h5>
                                    <img class="w-7 h-7" src="{{asset('images/icon-datang.png')}}" alt="icon presensi datang">
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