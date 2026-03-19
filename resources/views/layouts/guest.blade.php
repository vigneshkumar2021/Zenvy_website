<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ZenvY {{ $title ?? '' }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logoliked.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Tailwind Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        accent: {
                            50: '#f5f3ff',
                            100: '#ede9fe',
                            200: '#ddd6fe',
                            300: '#c4b5fd',
                            400: '#a78bfa',
                            500: '#8b5cf6',
                            600: '#7c3aed',
                            700: '#6d28d9',
                            800: '#5b21b6',
                            900: '#4c1d95',
                        }
                    }
                }
            }
        }
    </script>

    <style type="text/css">
        :root {
            --glass-bg: rgba(255, 255, 255, 0.7);
            --glass-border: rgba(255, 255, 255, 0.3);
            --luxury-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.15);
        }

        .glass {
            background: var(--glass-bg) !important;
            backdrop-filter: blur(16px) saturate(180%) !important;
            -webkit-backdrop-filter: blur(16px) saturate(180%) !important;
            border: 1px solid var(--glass-border) !important;
        }

        .glass-dark {
            background: rgba(15, 23, 42, 0.8) !important;
            backdrop-filter: blur(16px) saturate(180%) !important;
            -webkit-backdrop-filter: blur(16px) saturate(180%) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%) !important;
            color: white !important;
            font-weight: 700 !important;
            padding: 0.75rem 2rem !important;
            border-radius: 9999px !important;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            border: none !important;
            cursor: pointer !important;
            text-decoration: none !important;
            box-shadow: 0 10px 20px -5px rgba(14, 165, 233, 0.4) !important;
        }

        .btn-gradient:hover {
            transform: translateY(-4px) scale(1.02) !important;
            box-shadow: 0 20px 30px -10px rgba(14, 165, 233, 0.6) !important;
            filter: brightness(110%) !important;
        }

        .hero-gradient {
            background: radial-gradient(circle at top right, #4c1d95, #0f172a 70%),
                radial-gradient(circle at bottom left, #0ea5e9, transparent 50%) !important;
        }

        .text-gradient {
            background: linear-gradient(135deg, #0ea5e9 0%, #8b5cf6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        #main-nav {
            top: 1.5rem;
            max-width: 1400px;
            margin: 0 auto;
            border-radius: 9999px;
            left: 5%;
            right: 5%;
            width: 90%;
            transition: all 0.4s ease;
        }

        .nav-scrolled {
            top: 0.5rem !important;
            width: 95% !important;
            left: 2.5% !important;
            right: 2.5% !important;
            background: rgba(255, 255, 255, 0.8) !important;
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1) !important;
        }

        @media (max-width: 768px) {
            #main-nav {
                top: 1rem;
                left: 1rem;
                right: 1rem;
                width: calc(100% - 2rem);
            }
        }

        /* Preloader Styles */
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .preloader-content {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 150px;
            height: 150px;
        }

        .loader-logo {
            width: 80px;
            height: 80px;
            z-index: 10;
            object-fit: contain;
        }

        .loader-circle {
            position: absolute;
            width: 120px;
            height: 120px;
            border: 3px solid transparent;
            border-top-color: #0ea5e9;
            border-bottom-color: #8b5cf6;
            border-radius: 50%;
            animation: spin 1.5s linear infinite;
        }

        .loader-circle-inner {
            position: absolute;
            width: 100px;
            height: 100px;
            border: 3px solid transparent;
            border-left-color: #f43f5e;
            border-right-color: #fbbf24;
            border-radius: 50%;
            animation: spin-reverse 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes spin-reverse {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(-360deg);
            }
        }

        .preloader-hidden {
            opacity: 0 !important;
            visibility: hidden !important;
        }
    </style>
</head>

<body class="font-sans antialiased text-slate-900 bg-white">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-content">
            <div class="loader-circle"></div>
            <div class="loader-circle-inner"></div>
            <img src="{{ asset('images/Logoliked.ico') }}" alt="Zenvy Logo" class="loader-logo">
        </div>
        <div class="mt-4 text-slate-400 font-bold tracking-[0.3em] uppercase text-[10px] animate-pulse">Loading
            Excellence</div>
    </div>

    <!-- Navigation -->
    <nav class="fixed z-50 glass shadow-2xl shadow-indigo-500/10 transition-all duration-300" id="main-nav">
        <div class="px-8 py-2">
            <div class="flex justify-between items-center h-16 md:h-18">
                <!-- Mobile Menu Button -->
                <div class="flex items-center md:hidden">
                    <button id="mobile-menu-button" class="p-2.5 rounded-2xl bg-white/10 text-slate-900 hover:bg-white/20 transition-all">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <span class="text-3xl font-black text-slate-900 tracking-tighter">Zen<span
                                class="text-indigo-600">vY</span></span>
                    </a>
                </div>
                <div class="hidden md:flex items-center space-x-10">
                    <a href="{{ route('home') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">Home</a>
                    <a href="{{ route('projects') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">Services</a>
                    <a href="{{ route('courses') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">Courses</a>
                    <a href="{{ route('about') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">About</a>
                    <a href="{{ route('careers') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">Careers</a>
                    <a href="{{ route('contact') }}"
                        class="text-[15px] font-bold text-slate-700 hover:text-indigo-600 transition-colors">Contact</a>
                </div>
                <div class="flex items-center">
                    <a href="{{ route('contact') }}" class="btn-gradient !py-2.5 !px-8 text-sm">
                        Get Started <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Drawer -->
    <div id="mobile-menu" class="fixed inset-0 z-40 lg:hidden mobile-menu-hidden transition-all duration-500">
        <!-- Overlay -->
        <div id="mobile-menu-overlay" class="absolute inset-0 bg-slate-900/60 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>
        
        <!-- Drawer Content -->
        <div id="mobile-menu-content" class="absolute left-0 top-0 bottom-0 w-[80%] max-w-sm bg-white/90 backdrop-blur-xl shadow-2xl -translate-x-full transition-transform duration-500 ease-out p-8 flex flex-col pt-24">
            <div class="space-y-6">
                <a href="{{ route('home') }}" class="mobile-nav-link text-2xl font-black text-slate-900 block border-b border-slate-100 pb-4">Home</a>
                <a href="{{ route('projects') }}" class="mobile-nav-link text-2xl font-black text-slate-700 block border-b border-slate-100 pb-4">Services</a>
                <a href="{{ route('courses') }}" class="mobile-nav-link text-2xl font-black text-slate-700 block border-b border-slate-100 pb-4">Courses</a>
                <a href="{{ route('about') }}" class="mobile-nav-link text-2xl font-black text-slate-700 block border-b border-slate-100 pb-4">About</a>
                <a href="{{ route('careers') }}" class="mobile-nav-link text-2xl font-black text-slate-700 block border-b border-slate-100 pb-4">Careers</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link text-2xl font-black text-slate-700 block border-b border-slate-100 pb-4">Contact</a>
            </div>
            
            <div class="mt-auto">
                <a href="{{ route('contact') }}" class="btn-gradient w-full text-center py-5 text-xl">
                    Get Started
                </a>
            </div>
        </div>
    </div>

    <style>
        .mobile-menu-hidden { visibility: hidden; pointer-events: none; }
        .mobile-menu-visible { visibility: visible; pointer-events: auto; }
        .mobile-menu-visible #mobile-menu-overlay { opacity: 1; }
        .mobile-menu-visible #mobile-menu-content { transform: translateX(0); }
    </style>

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div class="col-span-1 md:col-span-1">
                    <h3 class="text-2xl font-bold text-white mb-6">Zenvy Solution</h3>
                    <p class="text-slate-400 leading-relaxed mb-6">Modern IT solutions for a digital future. Specializing in
                        software development and professional IT training.</p>
                    <div class="flex space-x-4">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/profile.php?id=61588457061267" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-blue-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" /></svg>
                        </a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/zenvy_solutions/" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-pink-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/in/zenvy-solutions-5234833b4/" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-blue-500 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <!-- YouTube -->
                        <a href="#" target="_blank" class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center text-slate-400 hover:bg-red-600 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.5 12 3.5 12 3.5s-7.505 0-9.377.55a3.015 3.015 0 0 0-2.122 2.136C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.55 9.376.55 9.376.55s7.505 0 9.377-.55a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Services</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('courses') }}" class="hover:text-white transition">IT Training</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-white transition">Project
                                Development</a></li>
                        <li><a href="{{ route('projects') }}" class="hover:text-white transition">College Projects</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Company</h4>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition">About Us</a></li>
                        <li><a href="{{ route('careers') }}" class="hover:text-white transition">Careers</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition">Contact Us</a></li>
                        <li><a href="#" class="hover:text-white transition">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-white mb-6">Contact Info</h4>
                    <ul class="space-y-4 text-slate-400">
                        <li>Email: hrzenvy@gmail.com</li>
                        <li>Phone: +91 9952355162</li>
                        <li>Address: Rajapalayam,Muhavoor 626111</li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 mt-16 pt-8 text-center text-sm">
                <p>&copy; {{ date('Y') }} Zenvy Solution. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Reveal on scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }
        window.addEventListener("scroll", reveal);
        window.addEventListener("load", reveal);
        document.addEventListener("DOMContentLoaded", reveal);

        // Preloader 
        window.addEventListener('load', function () {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.classList.add('preloader-hidden');
            }, 600); // Slight delay for smoother feel
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function () {
            const nav = document.getElementById('main-nav');
            if (window.scrollY > 50) {
                nav.classList.add('nav-scrolled');
            } else {
                nav.classList.remove('nav-scrolled');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const overlay = document.getElementById('mobile-menu-overlay');
        const menuIcon = document.getElementById('menu-icon');

        function toggleMenu() {
            const isOpen = mobileMenu.classList.contains('mobile-menu-visible');
            if (isOpen) {
                mobileMenu.classList.remove('mobile-menu-visible');
                menuIcon.setAttribute('d', 'M4 6h16M4 12h16m-7 6h7');
                document.body.style.overflow = '';
            } else {
                mobileMenu.classList.add('mobile-menu-visible');
                menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                document.body.style.overflow = 'hidden';
            }
        }

        if (menuBtn) {
            menuBtn.addEventListener('click', toggleMenu);
            overlay.addEventListener('click', toggleMenu);
            
            // Close menu on link click
            document.querySelectorAll('.mobile-nav-link').forEach(link => {
                link.addEventListener('click', toggleMenu);
            });
        }
    </script>
</body>

</html>