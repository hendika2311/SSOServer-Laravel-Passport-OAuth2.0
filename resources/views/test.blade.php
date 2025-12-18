<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSO Server</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .btn-register {
            transition: all 0.3s ease;
        }
        .btn-register:hover {
            background-color: #3182ce; /* Warna biru ketika hover */
            transform: scale(1.05); /* sedikit efek pembesaran */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* efek bayangan */
        }
    </style>
</head>
<body class="antialiased bg-gray-100">
    <div class="relative min-h-screen flex flex-col justify-center items-center bg-cover bg-gradient-to-r from-indigo-400 via-blue-300 to-teal-200">
        <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Soft Overlay -->

        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6 drop-shadow-lg">TEST</h1>
            <p class="text-lg md:text-xl mb-8 font-light">Satu akun untuk mengakses berbagai layanan dengan aman</p>

            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="px-6 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-lg shadow-lg transition duration-300">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="px-6 py-3 bg-blue-600 hover:bg-blue-800 text-white font-semibold rounded-lg shadow-lg transition duration-300">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 px-6 py-3 bg-emerald-500 hover:bg-emerald-600 text-white font-semibold rounded-lg shadow-lg transition duration-300 btn-register">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</body>
</html>
