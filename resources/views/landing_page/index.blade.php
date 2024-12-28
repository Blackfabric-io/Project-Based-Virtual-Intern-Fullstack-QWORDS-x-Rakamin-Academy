@extends('layouts.main')

@section('title', 'Cloud Web Hosting Indonesia - Domain & Hosting Terbaik')
@section('meta_description', 'QWords - Leading Cloud Hosting Provider in Indonesia offering reliable web hosting, VPS, dedicated servers with 24/7 support and guaranteed uptime.')
@section('meta_keywords', 'Cloud Hosting Indonesia, Web Hosting, VPS Hosting, Dedicated Server, Domain Name, SSL Certificate')

@section('content')
    <!-- Hero Section -->
    <section class="relative">
        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-white/70 to-white/50"></div>
            <img src="{{ asset('images/background-hero.png') }}"
                 alt="Hero Background Pattern"
                 class="absolute inset-0 w-full h-full object-cover object-center opacity-[0.9]">
        </div>
        <div class="relative z-10">
            <x-hero />
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 relative overflow-hidden">

        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-3xl font-bold text-center mb-12">Paket Hosting Terbaik</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($products as $index => $product)
                    <x-product-card :product="$product" :index="$index" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="py-16 relative bg-white overflow-hidden">
        <!-- Background Image with Opacity -->
        <div class="absolute inset-0 z-0 bg-white">
            <img src="{{ asset('images/background-service.png') }}"
                 alt="Background Pattern"
                 class="absolute inset-0 w-full h-full object-contain opacity-[0.17]"
                 style="background-blend-mode: multiply;">
        </div>

        <!-- Content -->
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Lihat Layanan Kami Yang Lain</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($services as $service)
                    <x-service-card :service="$service" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Feature Overview Section -->
    <section class="py-16 relative overflow-hidden">
        <!-- Decorative Background Pattern -->
        <div class="absolute inset-0 z-0">
            <!-- Base Gradient -->
            <div class="absolute inset-0 bg-gradient-to-br from-orange-100 via-orange-50 to-white"></div>

            <!-- Stronger Blurred Circles -->
            <div class="absolute inset-0 opacity-20">
                <div class="absolute -top-24 -left-24 w-[600px] h-[600px] bg-orange-500 rounded-full mix-blend-multiply filter blur-3xl animate-pulse"></div>
                <div class="absolute top-1/2 -right-24 w-[600px] h-[600px] bg-orange-400 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 2s;"></div>
                <div class="absolute -bottom-24 left-1/2 w-[600px] h-[600px] bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl animate-pulse" style="animation-delay: 4s;"></div>
            </div>

            <!-- Enhanced Dot Pattern -->
            <div class="absolute inset-0"
                 style="background-image:
                    radial-gradient(circle at 1px 1px, rgba(249, 115, 22, 0.2) 1px, transparent 0),
                    radial-gradient(circle at 4px 4px, rgba(249, 115, 22, 0.1) 1.5px, transparent 0);
                    background-size: 24px 24px, 48px 48px;">
            </div>

            <!-- Additional Decorative Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-32 h-32 border-4 border-orange-200 rounded-full opacity-20 animate-spin-slow"></div>
                <div class="absolute bottom-1/4 right-1/4 w-24 h-24 border-4 border-orange-300 rounded-full opacity-20 animate-spin-slow-reverse"></div>
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Alasan Qwords Sebagai Provider Web Hosting Terbaik</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords
                </p>
            </div>

            <!-- First Row - 3 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                <x-feature-overview-card
                    icon="fas fa-headset"
                    title="Layanan 24/7"
                    description="Tim Technical Support dan Customer Service aktif 24/7"
                    benefits="Respon cepat via live chat, call center, email dan support ticket" />

                <x-feature-overview-card
                    icon="fas fa-book"
                    title="Panduan Manual Lengkap"
                    description="Dilengkapi dengan knowledge base dan tutorial"
                    benefits="Panduan pengelolaan website dan hosting mudah diakses dan solutif" />

                <x-feature-overview-card
                    icon="fas fa-server"
                    title="Uptime 99.99%"
                    description="Jaminan uptime server di atas 99.99%"
                    benefits="Downtime minimal<br>Konfigurasi server tepat<br>Manajemen jaringan profesional<br>Multiple peering untuk stabilitas" />
            </div>

            <!-- Second Row - 3 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-8">
                <x-feature-overview-card
                    icon="fas fa-shield-alt"
                    title="Jaminan Keamanan"
                    description="Fokus utama pada keamanan sistem"
                    benefits="Pembaruan keamanan berkala<br>Standar keamanan terverifikasi<br>Pemantauan berkelanjutan" />

                <x-feature-overview-card
                    icon="fas fa-network-wired"
                    title="Clustered DNS"
                    description="DNS Server terhubung satu dengan lainnya"
                    benefits="Backup otomatis server<br>Akses DNS selalu tersedia" />

                <x-feature-overview-card
                    icon="fas fa-hdd"
                    title="High Enterprise Server"
                    description="Menggunakan standar server kelas enterprise"
                    benefits="Hardware berkualitas tinggi<br>Software terkini<br>Performa optimal" />
            </div>

            <!-- Third Row - 2 Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:w-2/3 mx-auto">
                <x-feature-overview-card
                    icon="fas fa-project-diagram"
                    title="Tier 1 Network"
                    description="Jaringan tanpa transit network"
                    benefits="Jalur routing efisien<br>Ketersediaan backup network<br>Koneksi cepat" />

                <x-feature-overview-card
                    icon="fas fa-globe-asia"
                    title="Peering Network"
                    description="Terhubung ke public peering (OpenIXP dan IIX)"
                    benefits="Latency rendah<br>Waktu tunggu minimal<br>Transfer data cepat" />
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Apa Kata Mereka?</h2>
                <p class="text-gray-600 max-w-3xl mx-auto">
                    Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.
                </p>
            </div>
            <div class="mt-16">
                <x-testimonial-timeline :testimonials="$testimonials" />
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Dan Masih Banyak yang Lainnya
                </p>
            </div>

            <!-- Partners Horizontal Scroll -->
            <div class="relative overflow-hidden">
                <!-- Gradient Overlays -->
                <div class="absolute left-0 top-0 h-full w-16 bg-gradient-to-r from-white to-transparent z-10"></div>
                <div class="absolute right-0 top-0 h-full w-16 bg-gradient-to-l from-white to-transparent z-10"></div>

                <!-- Scrolling Container -->
                <div class="partners-scroll flex space-x-8 py-8">
                    @foreach($partners as $partner)
                        <div class="partner-item flex-none">
                            <x-partner-logo :partner="$partner" />
                        </div>
                    @endforeach
                    <!-- Duplicate partners for seamless loop -->
                    @foreach($partners as $partner)
                        <div class="partner-item flex-none">
                            <x-partner-logo :partner="$partner" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Add custom styles for partners scroll animation -->
    @push('styles')
    <style>
        .partners-scroll {
            animation: scroll 40s linear infinite;
            width: max-content;
        }

        .partner-item {
            width: 240px;
            height: 160px;
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(-50%);
            }
        }

        /* Pause animation on hover */
        .partners-scroll:hover {
            animation-play-state: paused;
        }

        /* Line clamp for descriptions */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    @endpush

    <!-- FAQ Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">Pertanyaan yang Sering Diajukan</h2>
            <div class="max-w-3xl mx-auto">
                <x-f-a-q-accordion :faqs="$faqs" />
            </div>
        </div>
    </section>

    <!-- Payment Methods Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">Metode Pembayaran</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Berbagai metode pembayaran untuk memudahkan Anda bertransaksi
                </p>
            </div>
            <div class="max-w-4xl mx-auto">
                <div class="flex flex-wrap justify-center items-center gap-8">
                    @foreach($paymentMethods as $method)
                        <div class="w-16 h-16 flex items-center justify-center p-2 bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 hover:scale-110">
                            <img src="{{ asset($method->logo) }}"
                                 alt="{{ $method->name }}"
                                 class="w-full h-full object-contain"
                                 loading="lazy">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Add custom animations -->
    @push('styles')
    <style>
        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        @keyframes spin-slow-reverse {
            from {
                transform: rotate(360deg);
            }
            to {
                transform: rotate(0deg);
            }
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        .animate-spin-slow-reverse {
            animation: spin-slow-reverse 15s linear infinite;
        }

        .animate-pulse {
            animation: pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 0.2;
            }
            50% {
                opacity: 0.3;
            }
        }
    </style>
    @endpush
@endsection

@push('scripts')
<script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
@endpush
