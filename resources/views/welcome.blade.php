<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Undangan Metatah</title>
    <meta name="description" content="Undangan Upacara Metatah I Komang - 27 September 2026, Karangasem Bali">
    <meta property="og:title" content="Undangan Metatah - I Komang">
    <meta property="og:description" content="Undangan Upacara Metatah - 27 September 2026, Karangasem Bali">
    <meta property="og:image" content="{{ asset('assets/1.png') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=Great+Vibes&display=swap" rel="stylesheet">
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    @csrf
</head>
<body>

<div id="opening-overlay" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-maroon overflow-hidden" style="min-height:100dvh">
    <div class="absolute inset-0 opacity-20">
        <img src="{{ asset('assets/element/cover.jpg') }}" alt="" class="w-full h-full object-cover" loading="eager">
    </div>
    <div class="absolute inset-0 bg-gradient-to-b "></div>
    <div class="relative z-10 text-center px-6 max-w-md mx-auto">
        <div class="mb-4">
            {{-- <img src="{{ asset('assets/element/2.svg') }}" alt="" class="w-24 mx-auto opacity-70 animate-float"> --}}
        </div>
        <p class="text-gold text-lg tracking-[0.3em] uppercase font-serif mb-2">Dengan penuh rasa syukur</p>
        <h1 class="text-white text-3xl sm:text-4xl font-display mb-4">Om Swastyastu</h1>
        <div class="w-16 h-px bg-gold/50 mx-auto my-4"></div>
        <h2 class="text-white text-xl sm:text-2xl font-serif mb-1">Undangan</h2>
        <p class="text-gold text-sm tracking-widest uppercase mb-1">Mepandes</p>
        <p class="text-white/70 text-sm font-serif">27 September 2026</p>
        <div class="mt-8">
            <button id="btn-open" class="group relative inline-flex items-center justify-center px-8 py-3 bg-gold text-maroon font-semibold text-sm tracking-widest uppercase rounded-full hover:bg-gold-light transition-all duration-300 shadow-lg hover:shadow-xl hover:scale-105">
                <span>Buka Undangan</span>
                {{-- <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg> --}}
            </button>
        </div>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 opacity-50">
        {{-- <img src="{{ asset('assets/element/3.svg') }}" alt="" class="w-20 opacity-50 animate-float" style="animation-delay: 1s"> --}}
    </div>
</div>

<button id="btn-music" class="fixed bottom-6 right-6 z-40 w-12 h-12 rounded-full bg-maroon/80 backdrop-blur-sm text-gold shadow-lg flex items-center justify-center hover:bg-maroon transition-colors" aria-label="Toggle Musik">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>
</button>
<audio id="bg-music" loop preload="none">
    <source src="{{ asset('audio/musik.mp3') }}" type="audio/mpeg">
</audio>

<div id="main-content" style="display:none">

    <section class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 py-20 bg-gradient-to-b from-maroon to-maroon-light overflow-hidden">
        <div class="absolute inset-0 opacity-10"><img src="{{ asset('assets/element/cover.jpg') }}" alt="" class="w-full h-full object-cover"></div>
        <div class="relative z-10 max-w-lg mx-auto reveal">
            {{-- <img src="{{ asset('assets/element/5.svg') }}" alt="" class="w-20 mx-auto mb-6 opacity-60"> --}}
            <p class="text-gold text-lg tracking-[0.3em] uppercase font-serif mb-3">Om Swastyastu</p>
            <p class="text-white/80 text-base font-serif leading-relaxed mb-2">Dengan penuh rasa syukur,</p>
            <p class="text-white/70 text-sm font-serif leading-relaxed mb-6">kami mengundang Bapak/Ibu/Saudara/i untuk hadir dalam acara</p>
            <h2 class="text-gold text-3xl sm:text-4xl tracking-widest uppercase font-serif font-semibold mb-4">Metatah</h2>
            <div class="w-12 h-px bg-gold/40 mx-auto my-4"></div>
            <h1 class="text-white text-xl sm:text-3xl font-display  mb-4">Anak Agung Gde Ngurah Purnama Yoga <br/>
Anak Agung Istri Segara Andari <br/> <br/> Anak Agung Istri Bintang Mega Prastista <br/>
Anak Agung Gde Ngurah Mega Permana <br/><br> Anak Agung Gde Raka Prananta Dita <br/>
Anak Agung Gde Alit Damendra</h1>
            <p class="text-white/60 text-sm font-serif mb-6">27 September 2026</p>
            {{-- <img src="{{ asset('assets/1.png') }}" alt="Foto Utama Metatah" class="w-48 h-48 sm:w-56 sm:h-56 rounded-full object-cover border-4 border-gold/30 shadow-2xl mx-auto mt-4"> --}}
        </div>
        {{-- <img src="{{ asset('assets/element/2.svg') }}" alt="" class="absolute bottom-0 left-0 w-32 opacity-20"> --}}
        {{-- <img src="{{ asset('assets/element/2.svg') }}" alt="" class="absolute bottom-0 right-0 w-32 opacity-20 -scale-x-100"> --}}
    </section>

    <section class="py-20 px-6 bg-cream">
        <div class="max-w-md mx-auto text-center reveal">
            <p class="text-gold text-sm tracking-[0.2em] uppercase font-serif mb-2">Menuju Hari Pelaksanaan</p>
            <div class="w-12 h-px bg-gold/40 mx-auto my-4"></div>
            <div id="countdown" data-date="2026-09-27" data-time="14:00"></div>
        </div>
    </section>

    <section class="py-20 px-6 bg-white/50">
        <div class="max-w-lg mx-auto text-center">
            {{-- <img src="{{ asset('assets/element/3.svg') }}" alt="" class="w-16 mx-auto mb-6 opacity-40 reveal"> --}}
            <h2 class="text-2xl font-serif text-maroon mb-6 reveal">Tentang Metatah</h2>
            <div class="w-12 h-px bg-gold/40 mx-auto mb-6 reveal"></div>
            <p class="text-dark/70 font-serif text-base leading-relaxed mb-4 reveal">Metatah atau Mepandes merupakan bagian dari perjalanan kehidupan masyarakat Hindu Bali. Upacara ini memiliki makna yang berkaitan dengan kedewasaan serta pengendalian diri, sebagai simbol pemotongan Ibu Rawing atau anggava lolor yang merupakan bibit keburukan dalam diri manusia.</p>
            <p class="text-dark/50 font-serif text-sm italic reveal">Detail pelaksanaan upacara dapat mengikuti adat, keluarga, dan tradisi setempat.</p>
        </div>
    </section>

    <section class="py-20 px-6 bg-maroon text-white overflow-hidden">
        <div class="max-w-lg mx-auto text-center">
            {{-- <img src="{{ asset('assets/element/5.svg') }}" alt="" class="w-16 mx-auto mb-6 opacity-50 reveal-scale"> --}}
            <h2 class="text-gold text-2xl font-serif tracking-wider uppercase mb-4 reveal">Makna Metatah</h2>
            <p class="text-white/70 font-serif text-base italic mb-10 reveal">Sebuah perjalanan menuju kedewasaan dan pengendalian diri.</p>
            <div class="stagger-container grid grid-cols-3 gap-4 max-w-sm mx-auto">
                @foreach(['Kama', 'Lobha', 'Krodha', 'Mada', 'Moha', 'Matsarya'] as $ripu)
                    <div class="stagger-child bg-white/10 backdrop-blur-sm rounded-lg py-4 px-2 border border-gold/20">
                        <span class="text-gold font-serif text-sm">{{ $ripu }}</span>
                    </div>
                @endforeach
            </div>
            <p class="text-white/40 text-xs mt-8 font-serif reveal">Sad Ripu — enam musuh dalam diri</p>
        </div>
    </section>

    <section class="py-20 px-6 bg-cream">
        <div class="max-w-md mx-auto text-center">
            {{-- <img src="{{ asset('assets/element/10.svg') }}" alt="" class="w-16 mx-auto mb-6 opacity-40 reveal"> --}}
            <h2 class="text-2xl font-serif text-maroon mb-2 reveal">Waktu & Tempat</h2>
            <div class="w-12 h-px bg-gold/40 mx-auto my-4 reveal"></div>
            <div class="reveal bg-white/60 backdrop-blur-sm rounded-2xl p-8 border border-gold/20 shadow-sm space-y-4">
                <p class="text-maroon font-serif text-lg font-semibold">Minggu</p>
                <p class="text-dark font-serif text-lg">27 September 2026</p>
                <p class="text-gold font-serif text-base">14.00 WITA</p>
                <div class="w-8 h-px bg-gold/30 mx-auto my-2"></div>
                <p class="text-dark/70 font-serif text-base">Karangasem, Bali</p>
                <a href="https://maps.google.com/?q=Karangasem+Bali" target="_blank" rel="noopener" class="inline-flex items-center gap-2 mt-4 px-6 py-3 bg-gold text-maroon font-semibold text-sm tracking-wider uppercase rounded-full hover:bg-gold-light transition-all duration-300 shadow hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                    Buka Lokasi
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-white/50">
        <div class="max-w-lg mx-auto">
            <div class="text-center mb-10">
                {{-- <img src="{{ asset('assets/element/7.svg') }}" alt="" class="w-16 mx-auto mb-6 opacity-40 reveal"> --}}
                <h2 class="text-2xl font-serif text-maroon mb-2 reveal">Gallery</h2>
                <div class="w-12 h-px bg-gold/40 mx-auto reveal"></div>
            </div>
            <div class="space-y-8">
                @php
                    $photos = [
                        ['src' => 'assets/1.png', 'caption' => 'Anak Agung Gde Ngurah Purnama Yoga
Anak Agung Istri Segara Andari'],
                        ['src' => 'assets/2.png', 'caption' => 'Anak Agung Istri Bintang Mega Prastista
Anak Agung Gde Ngurah Mega Permana'],
                        ['src' => 'assets/3.png', 'caption' => 'Anak Agung Istri Bintang Mega Prastista
Anak Agung Gde Ngurah Mega Permana'],
                    ];
                @endphp
                @foreach($photos as $index => $photo)
                    <div class="gallery-item cursor-pointer group reveal-{{ $index % 2 == 0 ? 'left' : 'right' }}">
                        <div class="relative overflow-hidden rounded-2xl shadow-lg group-hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset($photo['src']) }}" alt="Gallery Metatah {{ $index + 1 }}" class="w-full aspect-[4/5] object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-maroon/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-white/90 font-serif text-sm" style="text-shadow: 0 2px 8px rgba(0,0,0,0.5)">{{ $photo['caption'] }}</span>
                            </div>
                        </div>
                        <p class="text-center mt-3 font-serif text-sm text-maroon/70">{{ $photo['caption'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 px-6 bg-cream">
        <div class="max-w-md mx-auto">
            <div class="text-center mb-10">
                {{-- <img src="{{ asset('assets/element/4.svg') }}" alt="" class="w-16 mx-auto mb-6 opacity-40 reveal"> --}}
                <h2 class="text-2xl font-serif text-maroon mb-2 reveal">Konfirmasi Kehadiran</h2>
                <div class="w-12 h-px bg-gold/40 mx-auto mb-4 reveal"></div>
                <p class="text-dark/50 font-serif text-sm reveal">Isi form di bawah untuk mengonfirmasi kehadiran dan mengirim ucapan</p>
            </div>

            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 rounded-xl p-4 mb-6 text-sm font-serif text-center">{{ session('success') }}</div>
            @endif

            <form id="rsvp-form" action="{{ route('guest.store') }}" method="POST" class="reveal bg-white/60 backdrop-blur-sm rounded-2xl p-6 sm:p-8 border border-gold/20 shadow-sm space-y-5">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-maroon mb-1.5">Nama Lengkap</label>
                    <input type="text" name="name" id="name" required maxlength="100" class="w-full px-4 py-3 rounded-xl border border-gold/30 bg-white/80 text-dark placeholder-dark/30 focus:outline-none focus:ring-2 focus:ring-gold/50 focus:border-gold transition font-serif" placeholder="Masukkan nama lengkap">
                    @error('name')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-maroon mb-2">Kehadiran</label>
                    <div class="flex gap-4">
                        <label class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-gold/30 bg-white/80 cursor-pointer has-[:checked]:bg-maroon has-[:checked]:text-white has-[:checked]:border-maroon transition-all">
                            <input type="radio" name="attendance" value="hadir" class="sr-only" required>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                            <span class="text-sm font-medium">Hadir</span>
                        </label>
                        <label class="flex-1 flex items-center justify-center gap-2 px-4 py-3 rounded-xl border border-gold/30 bg-white/80 cursor-pointer has-[:checked]:bg-maroon has-[:checked]:text-white has-[:checked]:border-maroon transition-all">
                            <input type="radio" name="attendance" value="tidak_hadir" class="sr-only">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                            <span class="text-sm font-medium">Tidak Hadir</span>
                        </label>
                    </div>
                    @error('attendance')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-maroon mb-1.5">Ucapan & Doa</label>
                    <textarea name="message" id="message" rows="4" required maxlength="1000" class="w-full px-4 py-3 rounded-xl border border-gold/30 bg-white/80 text-dark placeholder-dark/30 focus:outline-none focus:ring-2 focus:ring-gold/50 focus:border-gold transition font-serif resize-none" placeholder="Tulis ucapan dan doa..."></textarea>
                    @error('message')<p class="text-red-500 text-xs mt-1">{{ $message }}</p>@enderror
                </div>
                <button type="submit" class="w-full py-3 bg-maroon text-white font-semibold text-sm tracking-wider uppercase rounded-xl hover:bg-maroon-light transition-all duration-300 shadow hover:shadow-lg">Kirim</button>
            </form>
        </div>
    </section>

    <div class="max-w-2xl mx-auto my-8 p-6 bg-white/80 backdrop-blur-md rounded-2xl shadow-xl border border-amber-100">
    <div class="flex items-center justify-between pb-4 mb-6 border-b border-amber-100">
        <h2 class="text-2xl font-serif font-bold text-amber-950 tracking-wide flex items-center gap-2">
            <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
            </svg>
            Ucapan & Doa
        </h2>
        <span class="text-xs font-medium text-amber-800 bg-amber-50 px-3 py-1 rounded-full border border-amber-200">
            {{ $latestGuests->count() }} Ucapan
        </span>
    </div>

    <div class="space-y-4 max-h-[450px] overflow-y-auto pr-2 custom-scrollbar">
        @forelse ($latestGuests as $guest)
            <div class="p-4 rounded-xl bg-stone-50/80 hover:bg-amber-50/50 transition-all duration-200 border border-stone-200/60 shadow-sm hover:shadow">
                <div class="flex items-start justify-between gap-3 mb-2">
                    <div class="flex items-center gap-2.5">
                        <!-- Avatar Inisial -->
                        <div class="w-9 h-9 rounded-full bg-amber-800 text-amber-50 font-bold flex items-center justify-center text-sm shadow-sm">
                            {{ strtoupper(substr($guest->name, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="font-semibold text-stone-800 text-base leading-tight">{{ $guest->name }}</h4>
                            <span class="text-[11px] text-stone-400">{{ $guest->created_at->diffForHumans() }}</span>
                        </div>
                    </div>

                    <!-- Badge Kehadiran -->
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-2.5 py-1 rounded-full shrink-0 {{ $guest->attendance == 'hadir' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' }}">
                        <span class="w-1.5 h-1.5 rounded-full {{ $guest->attendance == 'hadir' ? 'bg-emerald-500' : 'bg-rose-500' }}"></span>
                        {{ $guest->attendance == 'hadir' ? 'Hadir' : 'Tidak Hadir' }}
                    </span>
                </div>

                <!-- Pesan Ucapan -->
                <p class="text-stone-600 text-sm leading-relaxed pl-11 whitespace-pre-line">
                    {{ $guest->message }}
                </p>
            </div>
        @empty
            <div class="text-center py-10 px-4 rounded-xl border border-dashed border-stone-200 bg-stone-50/50">
                <svg class="w-12 h-12 text-stone-300 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                </svg>
                <p class="text-stone-500 font-medium text-sm">Belum ada ucapan & doa.</p>
                <p class="text-stone-400 text-xs mt-1">Jadilah yang pertama mengirimkan doa untuk kedua mempelai/keluarga.</p>
            </div>
        @endforelse
    </div>
</div>

    <section class="py-20 px-6 bg-maroon text-white text-center">
        <div class="max-w-md mx-auto">
            {{-- <img src="{{ asset('assets/element/2.svg') }}" alt="" class="w-20 mx-auto mb-6 opacity-40 animate-float"> --}}
            <p class="text-gold font-display text-3xl mb-4">Om Shanti Shanti Shanti Om</p>
            <div class="w-12 h-px bg-gold/30 mx-auto my-6"></div>
            <p class="text-white/60 font-serif text-sm leading-relaxed mb-2">Atas kehadiran dan doa restu,</p>
            <p class="text-white/60 font-serif text-sm leading-relaxed">kami ucapkan terima kasih.</p>
            <div class="mt-8">
                <p class="text-white/30 text-xs font-serif">&copy; {{ date('Y') }} Undangan Metatah</p>
            </div>
        </div>
    </section>

</div>

{{-- <div id="lightbox-overlay" class="lightbox-overlay" data-photos='[{"src":"{{ asset("assets/1.png") }}","caption":"I Komang ardentara & iputu bagus arjuna"},{"src":"{{ asset("assets/2.png") }}","caption":"I Komang satia & iputu bagus aldi"},{"src":"{{ asset("assets/3.png") }}","caption":"I Komang widyana & iputu rembulan"}]'>
    <button class="lightbox-close" aria-label="Tutup">&times;</button>
    <button class="lightbox-nav lightbox-prev" aria-label="Sebelumnya">&#8249;</button>
    <button class="lightbox-nav lightbox-next" aria-label="Berikutnya">&#8250;</button>
    <img id="lightbox-img" src="" alt="">
    <div id="lightbox-caption" class="lightbox-caption"></div>
</div> --}}



</body>
</html>
