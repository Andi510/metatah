document.addEventListener('DOMContentLoaded', () => {
    initOpening();
    initCountdown();
    initScrollReveal();
    initLightbox();
    initForm();
    initMusic();
});

function initOpening() {
    const overlay = document.getElementById('opening-overlay');
    const mainContent = document.getElementById('main-content');
    const btnOpen = document.getElementById('btn-open');
    if (!overlay || !btnOpen || !mainContent) return;

    btnOpen.addEventListener('click', () => {
        overlay.style.transition = 'opacity 0.8s ease';
        overlay.style.opacity = '0';
        setTimeout(() => {
            overlay.style.display = 'none';
            mainContent.style.display = 'block';
            mainContent.classList.add('animate-fade-in');
            playMusic();
            window.scrollTo(0, 0);
        }, 800);
    });
}

function initMusic() {
    const audio = document.getElementById('bg-music');
    const btn = document.getElementById('btn-music');
    if (!audio || !btn) return;

    btn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/></svg>';
        } else {
            audio.pause();
            btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5L6 9H2v6h4l5 4V5z"/><line x1="23" y1="9" x2="17" y2="15"/><line x1="17" y1="9" x2="23" y2="15"/></svg>';
        }
    });
}

function playMusic() {
    const audio = document.getElementById('bg-music');
    if (!audio) return;
    audio.volume = 0.4;
    audio.play().catch(() => {});
}

function initCountdown() {
    const el = document.getElementById('countdown');
    if (!el) return;

    const eventDateStr = el.dataset.date;
    const eventTimeStr = el.dataset.time;
    if (!eventDateStr) return;

    const [year, month, day] = eventDateStr.split('-').map(Number);
    const [hours, minutes] = (eventTimeStr || '14:00').split(':').map(Number);
    const target = new Date(year, month - 1, day, hours, minutes, 0);

    function update() {
        const now = new Date();
        const diff = target - now;

        if (diff <= 0) {
            el.innerHTML = '<p class="text-lg font-serif text-maroon">Acara telah berlangsung</p>';
            return;
        }

        const days = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hrs = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const secs = Math.floor((diff % (1000 * 60)) / 1000);

        el.innerHTML = `
            <div class="flex justify-center gap-4 sm:gap-6">
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-maroon/10 flex items-center justify-center border border-gold/40">
                        <span class="text-2xl sm:text-3xl font-bold text-maroon font-serif">${String(days).padStart(2, '0')}</span>
                    </div>
                    <span class="text-xs mt-2 block text-gold font-medium tracking-wider uppercase">Hari</span>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-maroon/10 flex items-center justify-center border border-gold/40">
                        <span class="text-2xl sm:text-3xl font-bold text-maroon font-serif">${String(hrs).padStart(2, '0')}</span>
                    </div>
                    <span class="text-xs mt-2 block text-gold font-medium tracking-wider uppercase">Jam</span>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-maroon/10 flex items-center justify-center border border-gold/40">
                        <span class="text-2xl sm:text-3xl font-bold text-maroon font-serif">${String(mins).padStart(2, '0')}</span>
                    </div>
                    <span class="text-xs mt-2 block text-gold font-medium tracking-wider uppercase">Menit</span>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-full bg-maroon/10 flex items-center justify-center border border-gold/40">
                        <span class="text-2xl sm:text-3xl font-bold text-maroon font-serif">${String(secs).padStart(2, '0')}</span>
                    </div>
                    <span class="text-xs mt-2 block text-gold font-medium tracking-wider uppercase">Detik</span>
                </div>
            </div>`;
    }

    update();
    setInterval(update, 1000);
}

function initScrollReveal() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

    document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale, .stagger-child').forEach(el => {
        observer.observe(el);
    });

    const staggerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const children = entry.target.querySelectorAll('.stagger-child');
                children.forEach((child, i) => {
                    setTimeout(() => child.classList.add('active'), i * 150);
                });
            }
        });
    }, { threshold: 0.15 });

    document.querySelectorAll('.stagger-container').forEach(el => {
        staggerObserver.observe(el);
    });
}

function initLightbox() {
    const overlay = document.getElementById('lightbox-overlay');
    const img = document.getElementById('lightbox-img');
    const caption = document.getElementById('lightbox-caption');
    if (!overlay) return;

    let currentIndex = 0;
    const photos = JSON.parse(overlay.dataset.photos || '[]');

    document.querySelectorAll('.gallery-item').forEach((item, index) => {
        item.addEventListener('click', () => {
            currentIndex = index;
            showPhoto(index);
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    overlay.querySelector('.lightbox-close')?.addEventListener('click', closeLightbox);
    overlay.addEventListener('click', (e) => {
        if (e.target === overlay) closeLightbox();
    });

    overlay.querySelector('.lightbox-prev')?.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex - 1 + photos.length) % photos.length;
        showPhoto(currentIndex);
    });

    overlay.querySelector('.lightbox-next')?.addEventListener('click', (e) => {
        e.stopPropagation();
        currentIndex = (currentIndex + 1) % photos.length;
        showPhoto(currentIndex);
    });

    let touchStartX = 0;
    overlay.addEventListener('touchstart', (e) => { touchStartX = e.touches[0].clientX; });
    overlay.addEventListener('touchend', (e) => {
        const diff = touchStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
            if (diff > 0) {
                currentIndex = (currentIndex + 1) % photos.length;
            } else {
                currentIndex = (currentIndex - 1 + photos.length) % photos.length;
            }
            showPhoto(currentIndex);
        }
    });

    document.addEventListener('keydown', (e) => {
        if (!overlay.classList.contains('active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') { currentIndex = (currentIndex - 1 + photos.length) % photos.length; showPhoto(currentIndex); }
        if (e.key === 'ArrowRight') { currentIndex = (currentIndex + 1) % photos.length; showPhoto(currentIndex); }
    });

    function showPhoto(index) {
        if (!photos[index]) return;
        img.src = photos[index].src;
        img.alt = photos[index].caption;
        caption.innerHTML = photos[index].caption;
    }

    function closeLightbox() {
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }
}

function initForm() {
    const form = document.getElementById('rsvp-form');
    if (!form) return;

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const btn = form.querySelector('button[type="submit"]');
        if (!btn || btn.disabled) return;

        const originalText = btn.innerHTML;
        btn.disabled = true;
        btn.innerHTML = '<span class="animate-pulse">Mengirim...</span>';

        try {
            const formData = new FormData(form);
            const response = await fetch(form.action || '/guest', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]')?.value || '',
                    'Accept': 'application/json',
                },
            });

            const data = await response.json();

            if (data.success) {
                showToast(data.message || 'Terima kasih atas konfirmasi dan ucapan yang diberikan.');
                form.reset();
                loadGuests(); // Panggil fungsi loadGuests setelah kirim
            } else {
                showToast('Terjadi kesalahan. Silakan coba lagi.');
            }
        } catch (err) {
            showToast('Terjadi kesalahan jaringan. Silakan coba lagi.');
        } finally {
            btn.disabled = false;
            btn.innerHTML = originalText;
        }
    });
}

function loadGuests() {
    // PERBAIKAN: Ubah /get-guests menjadi /guests/latest
    fetch('/guests/latest', {
        headers: { 'Accept': 'application/json' },
    })
    .then(r => r.json())
    .then(guests => {
        const container = document.querySelector('.custom-scrollbar');
        if (!container) return;

        if (guests.length === 0) {
            container.innerHTML = `
                <div class="text-center py-10 px-4 rounded-xl border border-dashed border-stone-200 bg-stone-50/50">
                    <p class="text-stone-500 font-medium text-sm">Belum ada ucapan & doa.</p>
                    <p class="text-stone-400 text-xs mt-1">Jadilah yang pertama mengirimkan doa untuk kedua mempelai/keluarga.</p>
                </div>`;
            return;
        }

        container.innerHTML = guests.map(g => `
            <div class="p-4 rounded-xl bg-stone-50/80 hover:bg-amber-50/50 transition-all duration-200 border border-stone-200/60 shadow-sm hover:shadow mb-4">
                <div class="flex items-start justify-between gap-3 mb-2">
                    <div class="flex items-center gap-2.5">
                        <div class="w-9 h-9 rounded-full bg-amber-800 text-amber-50 font-bold flex items-center justify-center text-sm shadow-sm">
                            ${g.name.charAt(0).toUpperCase()}
                        </div>
                        <div>
                            <h4 class="font-semibold text-stone-800 text-base leading-tight">${escapeHtml(g.name)}</h4>
                            <span class="text-[11px] text-stone-400">${timeAgo(g.created_at)}</span>
                        </div>
                    </div>
                    <span class="inline-flex items-center gap-1.5 text-xs font-medium px-2.5 py-1 rounded-full shrink-0 ${g.attendance === 'hadir' ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200'}">
                        <span class="w-1.5 h-1.5 rounded-full ${g.attendance === 'hadir' ? 'bg-emerald-500' : 'bg-rose-500'}"></span>
                        ${g.attendance === 'hadir' ? 'Hadir' : 'Tidak Hadir'}
                    </span>
                </div>
                <p class="text-stone-600 text-sm leading-relaxed pl-11 whitespace-pre-line">${escapeHtml(g.message)}</p>
            </div>
        `).join('');
    })
    .catch(err => console.error('Error loading guests:', err));
};

// Event Listener dipisah secara independen di luar fungsi
document.addEventListener('DOMContentLoaded', () => {
    initOpening();
    initCountdown();
    initScrollReveal();
    initLightbox();
    initForm();
    initMusic();
    loadGuests(); // Berjalan saat halaman pertama kali dibuka
});

function escapeHtml(str) {
    const div = document.createElement('div');
    div.textContent = str;
    return div.innerHTML;
}

function timeAgo(dateStr) {
    const now = new Date();
    const date = new Date(dateStr);
    const diff = Math.floor((now - date) / 1000);

    if (diff < 60) return 'Baru saja';
    if (diff < 3600) return `${Math.floor(diff / 60)} menit yang lalu`;
    if (diff < 86400) return `${Math.floor(diff / 3600)} jam yang lalu`;
    if (diff < 604800) return `${Math.floor(diff / 86400)} hari yang lalu`;

    return date.toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric' });
}

function showToast(message) {
    let toast = document.getElementById('app-toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'app-toast';
        toast.className = 'toast';
        document.body.appendChild(toast);
    }
    toast.textContent = message;
    toast.classList.add('show');
    setTimeout(() => toast.classList.remove('show'), 4000);
}

