<x-guest-layout title="Careers">
    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center hero-gradient text-white overflow-hidden pt-44 pb-24">
        <div class="absolute top-1/4 left-10 w-64 h-64 bg-primary-500/20 rounded-full blur-[100px] animate-pulse"></div>
        <div class="absolute bottom-1/4 right-10 w-96 h-96 bg-accent-500/10 rounded-full blur-[120px]"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="text-center reveal">
                <span class="inline-flex items-center space-x-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 backdrop-blur-md mb-8">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
                    </span>
                    <span class="text-xs font-bold tracking-wider uppercase opacity-90">Careers at ZenvY</span>
                </span>
                <h1 class="text-6xl md:text-8xl font-display font-black leading-[0.95] mb-10 tracking-tight">
                    Build the <span class="text-gradient">Future</span> <br />
                    With Us
                </h1>
                <p class="text-xl text-slate-300 mb-12 leading-relaxed max-w-2xl mx-auto font-medium">
                    Join a team of passionate innovators dedicated to transforming businesses through cutting-edge technology and creative digital solutions.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="reveal">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-primary-50 border border-primary-100 text-primary-600 font-bold text-xs mb-6 tracking-[0.2em] uppercase">Our Culture</span>
                    <h2 class="text-5xl md:text-6xl font-display font-black text-slate-900 mb-10 tracking-tight">
                        Why Work at <br />
                        <span class="text-gradient">ZenvY Solution?</span>
                    </h2>
                    <p class="text-xl text-slate-500 leading-relaxed mb-12 font-medium">
                        We believe in empowering our team members, fostering creativity, and maintaining a culture of continuous learning and excellence.
                    </p>

                    <div class="space-y-8">
                        @foreach([
                            ['title' => 'Innovative Environment', 'desc' => 'Work with the latest technologies and solve complex real-world problems.'],
                            ['title' => 'Growth & Mentorship', 'desc' => 'Direct access to industry experts and personalized career growth paths.'],
                            ['title' => 'Work-Life Balance', 'desc' => 'We value results and well-being over hours spent at a desk.']
                        ] as $benefit)
                            <div class="flex items-start space-x-6">
                                <div class="w-12 h-12 bg-primary-50 rounded-2xl flex-shrink-0 flex items-center justify-center text-primary-600">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold text-slate-900 mb-2">{{ $benefit['title'] }}</h4>
                                    <p class="text-slate-500 font-medium">{{ $benefit['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="relative reveal">
                    <div class="relative rounded-[3.5rem] overflow-hidden shadow-luxury border border-slate-100">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800&q=80" alt="Team Work" class="w-full h-auto">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                    </div>
                    <!-- Stats Card -->
                    <div class="absolute -bottom-10 -right-10 glass p-8 rounded-[3rem] shadow-luxury max-w-[240px] animate-float">
                        <div class="text-4xl font-black text-primary-600 mb-2">100%</div>
                        <div class="text-sm font-bold text-slate-900 uppercase tracking-widest">Innovation Driven</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Current Openings Section -->
    <section class="py-32 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24 reveal">
                <span class="inline-block px-4 py-1.5 rounded-full bg-accent-50 border border-accent-100 text-accent-600 font-bold text-xs mb-6 tracking-[0.2em] uppercase">Join Us</span>
                <h2 class="text-5xl md:text-7xl font-display font-black text-slate-900 mb-8 tracking-tight">
                    Current <span class="text-gradient">Openings</span>
                </h2>
                <p class="text-xl text-slate-500 max-w-2xl mx-auto font-medium leading-relaxed">
                    We're looking for talented individuals who are ready to make an impact.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <!-- Internship Opening -->
                <div class="reveal group">
                    <div class="relative p-12 rounded-[4rem] bg-white border border-slate-100 shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden">
                        <!-- Decorative glow -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/5 rounded-full -mr-32 -mt-32 group-hover:scale-110 transition-transform duration-700"></div>
                        
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-10 gap-6">
                            <div>
                                <div class="inline-flex items-center px-4 py-1 rounded-full bg-primary-50 text-primary-600 font-bold text-xs uppercase tracking-widest mb-4">
                                    Full-Time / Part-Time
                                </div>
                                <h3 class="text-4xl font-black text-slate-900 mb-2"> Internship</h3>
                                <p class="text-lg text-slate-500 font-bold">Location: Remote </p>
                            </div>
                            <div class="text-right">
                                <span class="text-2xl font-black text-gradient">Stipend Based</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-primary-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    What you'll do
                                </h4>
                                <ul class="space-y-3 text-slate-600 font-medium">
                                    <li>• Assist in building responsive web interfaces</li>
                                    <li>• Learn and apply modern technologies with their frameworks</li>
                                    <li>• Participate in team brainstorming sessions</li>
                                    <li>• Contribute to real-world client projects</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-slate-900 mb-4 flex items-center">
                                    <svg class="w-5 h-5 mr-3 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                    Requirements
                                </h4>
                                <ul class="space-y-3 text-slate-600 font-medium">
                                    <li>• Basic knowledge of Programming Language</li>
                                    <li>• Passion for coding and digital solutions</li>
                                    <li>• Eagerness to learn and take on challenges</li>
                                    <li>• Good communication skills</li>
                                </ul>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center gap-6 pt-8 border-t border-slate-50">
                            <a href="{{ route('contact') }}" class="btn-gradient !px-10 !py-4">
                                Apply Now
                                <svg class="ml-3 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                            <span class="text-sm font-bold text-slate-400">Application deadline: Rolling basis</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-24 reveal">
                <h2 class="text-5xl font-display font-black text-slate-900 mb-6">Our Hiring <span class="text-gradient">Process</span></h2>
                <p class="text-xl text-slate-500 font-medium">Simple, transparent, and built to find the best fit.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                @foreach([
                    ['step' => '01', 'name' => 'Apply', 'desc' => 'Submit your resume via contact form.'],
                    ['step' => '02', 'name' => 'Review', 'desc' => 'Our team reviews your profile.'],
                    ['step' => '03', 'name' => 'Interview', 'desc' => 'A friendly chat about your skills.'],
                    ['step' => '04', 'name' => 'Hired', 'desc' => 'Welcome to the ZenvY team!']
                ] as $index => $item)
                    <div class="reveal relative @if(!$loop->last) after:hidden md:after:block after:content-[''] after:absolute after:top-12 after:-right-4 after:w-8 after:h-px after:bg-slate-200 @endif">
                        <div class="text-6xl font-black text-slate-100 mb-6 font-display">{{ $item['step'] }}</div>
                        <h4 class="text-2xl font-bold text-slate-900 mb-4">{{ $item['name'] }}</h4>
                        <p class="text-slate-500 font-medium">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="glass-dark p-12 md:p-20 rounded-[4rem] text-center shadow-2xl overflow-hidden group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-primary-500/10 rounded-full blur-3xl -mr-32 -mt-32"></div>
                
                <h2 class="text-4xl md:text-6xl font-display font-black text-white mb-8 leading-tight">
                    Don't See a <span class="text-gradient">Perfect Fit?</span>
                </h2>
                <p class="text-xl text-slate-400 mb-12 max-w-2xl mx-auto font-medium">
                    We're always looking for talented people. Send us your resume and we'll keep you in mind for future opportunities.
                </p>

                <a href="{{ route('contact') }}" class="btn-gradient !px-12 !py-5 text-lg">
                    Send Open Application
                </a>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-1/2 bg-slate-50 -z-10"></div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.reveal').forEach(el => {
                setTimeout(() => el.classList.add('active'), 100);
            });
        });
    </script>

    <style>
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
    </style>
</x-guest-layout>
