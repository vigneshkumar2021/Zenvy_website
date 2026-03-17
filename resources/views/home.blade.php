<x-guest-layout title="Home">
    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animation-delay-2000 {
            animation-delay: 2s;
        }
    </style>
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center hero-gradient text-white overflow-hidden pt-44 pb-24">
        <!-- Floating shapes -->
        <div class="absolute top-1/4 left-10 w-64 h-64 bg-primary-500/20 rounded-full blur-[100px] animate-pulse"></div>
        <div
            class="absolute bottom-1/4 right-10 w-96 h-96 bg-accent-500/10 rounded-full blur-[120px] animation-delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="reveal">
                    <div
                        class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                        </span>
                        <span class="text-xs font-bold tracking-wider uppercase opacity-90">Zenv

                            Solutions</span>
                    </div>

                    <h1 class="text-6xl md:text-8xl font-display font-black leading-[0.95] mb-10 tracking-tight">

                        <span class="text-gradient">ZenvY</span> <br />
                        Solution
                    </h1>

                    <p class="text-xl text-slate-300 mb-12 leading-relaxed max-w-lg font-medium">
                        Empowering businesses through cutting-edge web development, cloud architecture, and strategic
                        digital transformation.
                    </p>

                    <div class="flex flex-wrap gap-6">
                        <a href="{{ route('contact') }}" class="btn-gradient">
                            Launch Project
                            <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('projects') }}"
                            class="px-8 py-4 rounded-full border border-white/20 font-bold hover:bg-white/10 transition-all backdrop-blur-sm flex items-center">
                            Explore Services
                        </a>
                    </div>

                    <div
                        class="mt-16 flex items-center space-x-8 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-black">500+</span>
                            <span
                                class="text-xs font-bold uppercase tracking-widest leading-none">Projects<br />Delivered</span>
                        </div>
                        <div class="w-px h-8 bg-white/20"></div>
                        <div class="flex items-center space-x-2">
                            <span class="text-2xl font-black">98%</span>
                            <span
                                class="text-xs font-bold uppercase tracking-widest leading-none">Client<br />Retention</span>
                        </div>
                    </div>
                </div>

                <div class="relative reveal group">
                    <!-- Main Image Card -->
                    <div
                        class="relative rounded-[3.5rem] overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,0.5)] border border-white/10 transform -rotate-3 group-hover:rotate-0 transition-all duration-1000">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&q=80"
                            alt="Advanced Technology"
                            class="w-full h-auto scale-110 group-hover:scale-100 transition-transform duration-1000">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-slate-900 via-transparent to-transparent opacity-60">
                        </div>
                    </div>

                    <!-- Floating Performance Card -->
                    <div
                        class="absolute -top-12 -right-6 lg:-right-12 glass p-6 rounded-[2.5rem] shadow-luxury animate-float max-w-[200px]">
                        <div
                            class="bg-primary-500/10 w-12 h-12 rounded-2xl flex items-center justify-center text-primary-500 mb-4">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div class="text-3xl font-black text-slate-900 leading-none mb-1">99.9%</div>
                        <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">System Uptime</div>
                    </div>

                    <!-- Floating Support Card -->
                    <div
                        class="absolute -bottom-10 -left-6 lg:-left-12 glass p-5 rounded-[2.5rem] shadow-luxury animate-float animation-delay-2000 flex items-center space-x-4">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop"
                                alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop"
                                alt="">
                            <img class="w-10 h-10 rounded-full border-2 border-white object-cover"
                                src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop"
                                alt="">
                        </div>
                        <div>
                            <div class="text-sm font-black text-slate-900">Expert Support</div>
                            <div class="text-[10px] font-bold text-slate-500 uppercase tracking-widest">Available 24/7
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-32 bg-slate-50 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-slate-200 to-transparent">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-24 reveal">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 font-bold text-xs mb-6 tracking-[0.2em] uppercase">Our
                    Expertise</span>
                <h2 class="text-5xl md:text-7xl font-display font-black text-slate-900 mb-8 tracking-tight">
                    Solutions for <br />
                    <span class="text-gradient">Your Idea's</span>
                </h2>
                <p class="text-xl text-slate-500 max-w-2xl mx-auto font-medium leading-relaxed">
                    We bridge the gap between complex technology and business success with tailored IT solutions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Training Card -->
                <div class="reveal group h-full">
                    <div
                        class="relative h-full p-10 rounded-[3rem] bg-white border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-primary-500/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700">
                        </div>

                        <div
                            class="w-16 h-16 bg-primary-50 rounded-2xl flex items-center justify-center text-primary-600 mb-10 group-hover:bg-primary-600 group-hover:text-white transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.582.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                        </div>

                        <h3 class="text-3xl font-black mb-6 text-slate-900">Professional Training</h3>
                        <p class="text-lg text-slate-500 mb-10 leading-relaxed font-medium">
                            Master industry-leading technologies with our expert-led courses designed for career growth.
                        </p>

                        <a href="{{ route('courses') }}"
                            class="inline-flex items-center text-primary-600 font-bold group/link">
                            Explore Curriculum
                            <svg class="ml-2 w-5 h-5 group-hover/link:translate-x-2 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Projects Card -->
                <div class="reveal group h-full">
                    <div
                        class="relative h-full p-10 rounded-[3rem] bg-slate-900 border border-slate-800 shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-accent-500/10 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700">
                        </div>

                        <div
                            class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center text-white mb-10 group-hover:bg-white group-hover:text-slate-900 transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                </path>
                            </svg>
                        </div>

                        <h3 class="text-3xl font-black mb-6 text-white text-gradient">Project Excellence</h3>
                        <p class="text-lg text-slate-400 mb-10 leading-relaxed font-medium">
                            From robust backend systems to stunning frontends, we deliver high-performance software.
                        </p>

                        <a href="{{ route('projects') }}"
                            class="inline-flex items-center text-white font-bold group/link">
                            View Portfolio
                            <svg class="ml-2 w-5 h-5 group-hover/link:translate-x-2 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Cloud Card -->
                <div class="reveal group h-full">
                    <div
                        class="relative h-full p-10 rounded-[3rem] bg-white border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-primary-500/5 rounded-full -mr-16 -mt-16 group-hover:scale-150 transition-transform duration-700">
                        </div>

                        <div
                            class="w-16 h-16 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 mb-10 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>

                        <h3 class="text-3xl font-black mb-6 text-slate-900">Cloud Strategies</h3>
                        <p class="text-lg text-slate-500 mb-10 leading-relaxed font-medium">
                            Scale your business globally with our secure, resilient and cost-effective cloud
                            architectures.
                        </p>

                        <a href="{{ route('about') }}"
                            class="inline-flex items-center text-primary-600 font-bold group/link">
                            Learn More
                            <svg class="ml-2 w-5 h-5 group-hover/link:translate-x-2 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Stack & Stats -->
    <section class="py-32 bg-white overflow-hidden relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span
                        class="inline-block px-4 py-1.5 rounded-full bg-slate-100 border border-slate-200 text-slate-600 font-bold text-xs mb-6 tracking-[0.2em] uppercase">Tech
                        Ecosystem</span>
                    <h2 class="text-5xl md:text-7xl font-display font-black text-slate-900 mb-10 tracking-tight">
                        Built with the <br />
                        <span class="text-gradient">Latest Technologies</span>
                    </h2>
                    <p class="text-xl text-slate-500 leading-relaxed mb-12 font-medium">
                        We leverage industry-leading frameworks and cloud providers to ensure your solutions are
                        scalable, secure, and future-proof.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        @foreach(['Laravel', 'React', 'Flutter', 'Python', 'AWS', 'Node.js'] as $tech)
                            <div
                                class="flex items-center space-x-3 p-5 rounded-3xl bg-slate-50 border border-slate-100 group hover:border-primary-200 hover:bg-white hover:shadow-xl hover:shadow-primary-500/5 transition-all duration-300">
                                <div
                                    class="w-2.5 h-2.5 rounded-full bg-primary-500 group-hover:scale-150 transition-transform duration-300">
                                </div>
                                <span class="font-bold text-slate-700 tracking-tight">{{ $tech }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="reveal relative">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="space-y-8 pt-12">
                            <div
                                class="p-10 rounded-[3rem] bg-primary-600 text-white shadow-2xl shadow-primary-200 transform hover:-translate-y-2 transition-transform duration-500">
                                <div class="text-4xl font-black mb-2 font-display">99%</div>
                                <p class="text-xs font-bold opacity-80 uppercase tracking-widest">Uptime Delivery</p>
                            </div>
                            <div
                                class="p-10 rounded-[3rem] bg-white border border-slate-100 shadow-xl transform hover:-translate-y-2 transition-transform duration-500">
                                <div class="text-4xl font-black mb-2 text-slate-900 font-display">24/7</div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Global Support</p>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div
                                class="p-10 rounded-[3rem] bg-white border border-slate-100 shadow-xl transform hover:-translate-y-2 transition-transform duration-500">
                                <div class="text-4xl font-black mb-2 text-slate-900 font-display">250+</div>
                                <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Tech Partners</p>
                            </div>
                            <div
                                class="p-10 rounded-[3rem] bg-slate-900 text-white shadow-2xl transform hover:-translate-y-2 transition-transform duration-500">
                                <div class="text-4xl font-black mb-2 text-gradient font-display">Prime</div>
                                <p class="text-xs font-bold opacity-80 uppercase tracking-widest">Security Layer</p>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative background glow -->
                    <div
                        class="absolute -z-10 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-primary-500/5 blur-[100px] rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-dark p-12 md:p-20 rounded-[4rem] text-center shadow-2xl relative overflow-hidden group">
                <!-- Background decorative element -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/10 rounded-full blur-3xl -mr-32 -mt-32">
                </div>

                <h2 class="text-4xl md:text-6xl font-display font-black text-white mb-8 leading-tight">
                    Ready to <span class="text-gradient">Accelerate</span> <br />
                    Your Digital Journey?
                </h2>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto font-medium">
                    Join hundreds of successful businesses that have transformed their operations with our IT expertise.
                </p>

                <div class="flex flex-wrap justify-center gap-6">
                    <a href="{{ route('contact') }}" class="btn-gradient !px-12 !py-5 text-lg">
                        Start Your Project
                    </a>
                    <a href="{{ route('about') }}"
                        class="px-12 py-5 rounded-full border border-white/10 text-white font-bold hover:bg-white/5 transition-all">
                        Our Process
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom section background -->
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-slate-50 -z-10"></div>
    </section>

    <script>
        // Trigger reveal manually for hero
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.reveal').forEach(el => {
                setTimeout(() => el.classList.add('active'), 100);
            });
        });
    </script>
</x-guest-layout>