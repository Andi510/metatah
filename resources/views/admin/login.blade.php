<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Admin - Undangan Metatah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif
</head>
<body class="bg-cream min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-sm">
        <div class="text-center mb-8">
            <h1 class="font-display text-4xl text-maroon mb-2">Admin</h1>
            <p class="font-serif text-dark/50 text-sm">Panel Undangan Metatah</p>
        </div>
        @if($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 rounded-xl p-4 mb-6 text-sm text-center">{{ $errors->first() }}</div>
        @endif
        <form method="POST" action="{{ route('admin.login.post') }}" class="bg-white/60 backdrop-blur-sm rounded-2xl p-8 border border-gold/20 shadow-sm space-y-5">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-maroon mb-1.5">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus class="w-full px-4 py-3 rounded-xl border border-gold/30 bg-white/80 text-dark focus:outline-none focus:ring-2 focus:ring-gold/50 focus:border-gold transition font-serif" placeholder="admin@undanganmetatah.com">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-maroon mb-1.5">Password</label>
                <input type="password" name="password" id="password" required class="w-full px-4 py-3 rounded-xl border border-gold/30 bg-white/80 text-dark focus:outline-none focus:ring-2 focus:ring-gold/50 focus:border-gold transition font-serif" placeholder="Masukkan password">
            </div>
            <button type="submit" class="w-full py-3 bg-maroon text-white font-semibold text-sm tracking-wider uppercase rounded-xl hover:bg-maroon-light transition-all duration-300 shadow hover:shadow-lg">Masuk</button>
        </form>
        <p class="text-center mt-6 text-dark/40 text-xs font-serif">&copy; {{ date('Y') }} Undangan Metatah</p>
    </div>
</body>
</html>
