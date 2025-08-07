<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-300 p-6">
    <x-card>
        <div class="flex items-center space-x-4">
            <img src="{{ $student['foto'] }}" alt="" class="w-24 h-24 rounded-full">
                <h1 class="text-xl font-bold">{{ $student['nama'] }}</h1>
                <p class="text-gray-500">{{ $student['username'] }}</p>
                <p class="text-gray-600 mt-1">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
        </div>

        <div class="mt-4">
            <h2 class="text-xl font-semibold">Deskripsi</h2>
            <p class="mt-2">{{ $student['deskripsi'] }}</p>
        </div>

        <div class="mt-4 flex space-x-2">
            <x-button>
                <a href="">Edit Profile</a>
            </x-button>

            <x-button class="hover:bg-red-500">
                <a href="">Delete Account</a>
            </x-button>

        
        </div>
    </x-card>

</body>
</html>