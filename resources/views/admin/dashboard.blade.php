<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - Undangan Metatah</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Great+Vibes&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css'])
    @endif
</head>
<body class="bg-cream min-h-screen">
    <nav class="bg-white/80 backdrop-blur-sm border-b border-gold/20 sticky top-0 z-30">
        <div class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
            <h1 class="font-display text-2xl text-maroon">Admin Metatah</h1>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="text-sm text-dark/50 hover:text-maroon transition font-serif">Lihat Undangan</a>
                <form method="POST" action="{{ route('admin.logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-sm text-red-500 hover:text-red-700 transition font-serif">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="max-w-5xl mx-auto px-4 py-8">
        @if(session('success'))
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6 text-sm text-center">{{ session('success') }}</div>
        @endif

        <div class="grid grid-cols-3 gap-4 mb-8">
            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-gold/20 text-center">
                <p class="text-3xl font-bold text-maroon font-serif">{{ $total }}</p>
                <p class="text-xs text-dark/50 mt-1 uppercase tracking-wider">Total</p>
            </div>
            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-green-200 text-center">
                <p class="text-3xl font-bold text-green-600 font-serif">{{ $hadir }}</p>
                <p class="text-xs text-dark/50 mt-1 uppercase tracking-wider">Hadir</p>
            </div>
            <div class="bg-white/60 backdrop-blur-sm rounded-xl p-6 border border-red-200 text-center">
                <p class="text-3xl font-bold text-red-500 font-serif">{{ $tidakHadir }}</p>
                <p class="text-xs text-dark/50 mt-1 uppercase tracking-wider">Tidak Hadir</p>
            </div>
        </div>

        <div class="bg-white/60 backdrop-blur-sm rounded-2xl border border-gold/20 overflow-hidden">
            <div class="px-6 py-4 border-b border-gold/10">
                <h2 class="font-serif text-lg text-maroon">Daftar Tamu</h2>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-maroon/5">
                        <tr>
                            <th class="px-6 py-3 text-left font-serif text-maroon font-medium">#</th>
                            <th class="px-6 py-3 text-left font-serif text-maroon font-medium">Nama</th>
                            <th class="px-6 py-3 text-left font-serif text-maroon font-medium">Kehadiran</th>
                            <th class="px-6 py-3 text-left font-serif text-maroon font-medium">Ucapan</th>
                            <th class="px-6 py-3 text-left font-serif text-maroon font-medium">Tanggal</th>
                            <th class="px-6 py-3 text-center font-serif text-maroon font-medium">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gold/10">
                        @forelse($guests as $i => $guest)
                            <tr class="hover:bg-maroon/5 transition">
                                <td class="px-6 py-4 text-dark/50">{{ $i + 1 }}</td>
                                <td class="px-6 py-4 font-medium text-dark">{{ $guest->name }}</td>
                                <td class="px-6 py-4">
                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $guest->attendance === 'hadir' ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-700' }}">
                                        {{ $guest->attendance === 'hadir' ? 'Hadir' : 'Tidak Hadir' }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-dark/60 max-w-xs truncate">{{ $guest->message }}</td>
                                <td class="px-6 py-4 text-dark/50 text-xs">{{ $guest->created_at->format('d M Y H:i') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <form method="POST" action="{{ route('admin.guests.destroy', $guest) }}" onsubmit="return confirm('Yakin hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-400 hover:text-red-600 transition text-xs font-medium">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center text-dark/40 font-serif">Belum ada data tamu.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
