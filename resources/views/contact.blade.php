<x-guest-layout title="Contact Us">
    <!-- Contact Hero -->
    <section class="pt-40 pb-24 hero-gradient relative overflow-hidden text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="reveal active">
                <span
                    class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-yellow-400 font-bold text-sm mb-6 tracking-widest uppercase">Contact
                    Us</span>
                <h1 class="text-5xl md:text-7xl font-[800] leading-tight mb-8 tracking-tight">Let's Build Something
                    <span class="text-white relative inline-block">Extraordinary<span
                            class="absolute -bottom-2 left-0 w-full h-2 bg-yellow-400 rounded-full"></span></span>
                </h1>
                <p class="text-xl text-indigo-100 mb-10 leading-relaxed font-medium opacity-90 max-w-2xl">
                    Ready to start your next project or have a question? Our team is here to help you navigate your
                    digital transformation journey.
                </p>
            </div>
        </div>
        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-white/5 -skew-x-12 transform origin-top"></div>
    </section>

    <!-- Contact Section -->
    <section class="py-24 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">

                <!-- Contact info cards -->
                <div class="lg:col-span-5 space-y-8">
                    <div
                        class="reveal p-8 rounded-[2.5rem] bg-white border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group">
                        <div class="flex items-center space-x-6">
                            <div
                                class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition-all duration-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Email Us
                                </h4>
                                <p class="text-xl font-black text-slate-900">hrzenvy@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal p-8 rounded-[2.5rem] bg-white border border-slate-100 shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group"
                        style="transition-delay: 100ms">
                        <div class="flex items-center space-x-6">
                            <div
                                class="w-14 h-14 bg-indigo-50 rounded-2xl flex items-center justify-center text-indigo-600 group-hover:bg-indigo-600 group-hover:text-white transition-all duration-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">Call Us</h4>
                                <p class="text-xl font-black text-slate-900">+91 9952355162</p>
                            </div>
                        </div>
                    </div>

                    <div class="reveal p-8 rounded-[2.5rem] bg-slate-900 border border-slate-800 shadow-2xl hover:shadow-indigo-500/20 transition-all duration-500 group"
                        style="transition-delay: 200ms">
                        <div class="flex items-center space-x-6">
                            <div
                                class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center text-white group-hover:scale-110 transition-all duration-500">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4
                                    class="text-xs font-bold text-slate-500 uppercase tracking-widest mb-1 text-indigo-400">
                                    Visit Us</h4>
                                <p class="text-xl font-black text-white"> Rajapalayam, Muhavoor 626111</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-7 reveal" style="transition-delay: 300ms">
                    <div
                        class="bg-white p-10 md:p-14 rounded-[3.5rem] shadow-2xl border border-slate-100 relative group overflow-hidden">
                        <!-- Success Popup -->
                        @if(session('success'))
                            <div
                                class="absolute inset-x-8 top-8 z-20 flex items-center p-4 mb-4 text-emerald-800 border-t-4 border-emerald-300 bg-emerald-50 rounded-2xl shadow-lg ring-1 ring-emerald-100 animate-bounce">
                                <svg class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <div class="ml-3 text-sm font-bold">{{ session('success') }}</div>
                            </div>
                        @endif

                        <h2 class="text-3xl font-black text-slate-900 mb-10">Send a Message</h2>

                        <form action="{{ route('enquiry.store') }}" method="POST" class="space-y-6">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                <div class="space-y-3">
                                    <label class="text-sm font-bold text-slate-500 ml-1">Your Name</label>
                                    <input type="text" name="name" required
                                        class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:border-indigo-600 focus:bg-white focus:ring-8 focus:ring-indigo-500/10 transition-all font-semibold outline-none text-slate-900"
                                        placeholder="e.g. John Doe">
                                </div>
                                <div class="space-y-3">
                                    <label class="text-sm font-bold text-slate-500 ml-1">Your Email</label>
                                    <input type="email" name="email" required
                                        class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:border-indigo-600 focus:bg-white focus:ring-8 focus:ring-indigo-500/10 transition-all font-semibold outline-none text-slate-900"
                                        placeholder="e.g. john@example.com">
                                </div>
                            </div>

                            <div class="space-y-3">
                                <label class="text-sm font-bold text-slate-500 ml-1">Phone Number</label>
                                <input type="text" name="phone" required
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:border-indigo-600 focus:bg-white focus:ring-8 focus:ring-indigo-500/10 transition-all font-semibold outline-none text-slate-900"
                                    placeholder="e.g. +1 234 567 890">
                            </div>

                            <div class="space-y-3">
                                <label class="text-sm font-bold text-slate-500 ml-1">Your Message</label>
                                <textarea name="message" required rows="4"
                                    class="w-full px-6 py-4 rounded-2xl bg-slate-50 border-2 border-transparent focus:border-indigo-600 focus:bg-white focus:ring-8 focus:ring-indigo-500/10 transition-all font-semibold outline-none text-slate-900 resize-none"
                                    placeholder="Let's talk about your project..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full btn-gradient py-5 !rounded-[1.5rem] !text-lg !font-extrabold group">
                                Start Collaboration <svg
                                    class="ml-3 w-5 h-5 group-hover:translate-x-2 transition-transform" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>