<x-guest-layout title="Our Projects">
    <!-- Header -->
    <section class="pt-40 pb-20 bg-indigo-900 relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="absolute inset-0 bg-indigo-900/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-indigo-900/50 to-indigo-900"></div>
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 0 L100 0 L100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div
            class="absolute -top-24 -right-24 w-96 h-96 bg-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob">
        </div>
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob"
            style="animation-delay: 2s;"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 tracking-tight">Our <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-purple-400">Projects</span>
            </h1>
            <p class="text-xl text-indigo-100 max-w-3xl mx-auto leading-relaxed">Discover what we do. From innovative
                school management systems to high-quality software solutions, we turn vision into reality.</p>
        </div>
    </section>
    <br><br>
    <div class="bg-slate-50 relative pb-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-8 relative z-20">

            <!-- Tab Switcher -->
            <div class="flex justify-center space-x-4 mb-16">
                <button id="tab-client" onclick="switchTab('client')"
                    class="tab-btn flex items-center px-8 py-4 bg-indigo-600 text-white font-bold rounded-xl shadow-lg shadow-indigo-500/30 transform transition duration-300 hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                        </path>
                    </svg>
                    Client Projects
                </button>
                <button id="tab-our" onclick="switchTab('our')"
                    class="tab-btn flex items-center px-8 py-4 bg-white text-slate-700 font-bold rounded-xl shadow-sm border border-slate-200 transform transition duration-300 hover:bg-slate-50 hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                    Our Projects
                </button>
            </div>

            <!-- CLIENT PROJECTS CONTENT -->
            <div id="content-client" class="tab-content transition-opacity duration-500">
                <div class="text-center mb-16">
                    <span
                        class="text-indigo-600 font-semibold tracking-wider uppercase text-sm shadow-sm opacity-90">Featured
                        Client Work</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mt-2">Currently Live Project</h2>
                    <div class="w-24 h-1 bg-indigo-600 mx-auto mt-6 rounded-full"></div>
                </div>

                <!-- Client Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">

                    <!-- Client Card 3: Kamaraj Primary School -->
                    <div
                        class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden transform hover:-translate-y-2 transition duration-300 group">
                        <div class="h-64 bg-indigo-50 relative flex items-center justify-center overflow-hidden">
                            <!-- Background pattern -->
                            <div class="absolute inset-0 opacity-30"
                                style="background-image: radial-gradient(#6366f1 1px, transparent 1px); background-size: 20px 20px;">
                            </div>

                            <!-- Live Badge -->
                            <div
                                class="absolute top-4 right-4 bg-[#10b981] text-white px-4 py-1.5 rounded-full text-sm font-bold flex items-center gap-2 z-10 shadow-sm">
                                <span class="w-2 h-2 bg-white rounded-full"></span> Live
                            </div>

                            <!-- Logo -->
                            <div class="text-center z-10 flex flex-col items-center">
                                <div
                                    class="w-24 h-24 bg-white rounded-full shadow-lg flex items-center justify-center mb-4">
                                    <svg class="w-12 h-12 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-black text-indigo-800 uppercase tracking-widest drop-shadow-sm">
                                    KAMARAJ SCHOOL</h3>
                            </div>

                            <!-- Visit Site Button (Hover) -->
                            <div
                                class="absolute inset-0 bg-black/10 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                                <a href="https://knms.in" target="_blank" rel="noopener noreferrer"
                                    class="bg-white text-indigo-600 px-6 py-3 rounded-xl font-bold text-lg shadow-xl flex items-center gap-2 hover:scale-105 transition-transform border border-slate-100">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                        </path>
                                    </svg>
                                    Visit Site
                                </a>
                            </div>
                        </div>
                        <div class="p-8 relative">
                            <div class="flex justify-between items-start mb-4">
                                <h3 class="text-2xl font-bold text-indigo-800">Kamaraj Primary School</h3>
                                <div
                                    class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 group-hover:bg-indigo-600 group-hover:text-white transition-colors flex-shrink-0 ml-4">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="text-slate-500 text-base leading-relaxed">A comprehensive web application tailored
                                for Kamaraj Primary School, streamlining administrative tasks and enhancing student
                                management.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- OUR PROJECTS CONTENT (Hidden by default) -->
            <div id="content-our" class="tab-content hidden opacity-0 transition-opacity duration-500">
                    <div
                        class="bg-white rounded-[2rem] border-2 border-dashed border-slate-200 p-16 text-center shadow-sm">
                        <div class="w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Internal Projects Coming Soon</h3>
                        <p class="text-slate-500 max-w-md mx-auto text-lg">We are currently developing exciting new
                            software products in-house. Check back soon for updates!</p>
                    </div>
                </div>

        </div>
    </div>

    <!-- Script to handle tabs -->
    <script>
        function switchTab(tabId) {
            const btnOur = document.getElementById('tab-our');
            const btnClient = document.getElementById('tab-client');
            const contentOur = document.getElementById('content-our');
            const contentClient = document.getElementById('content-client');

            // Reset buttons
            const activeClasses = ['bg-indigo-600', 'text-white', 'shadow-lg', 'shadow-indigo-500/30'];
            const inactiveClasses = ['bg-white', 'text-slate-700', 'shadow-sm', 'border', 'border-slate-200'];

            if (tabId === 'our') {
                // Set Our as Active
                btnOur.classList.remove(...inactiveClasses);
                btnOur.classList.add(...activeClasses);

                // Set Client as Inactive
                btnClient.classList.remove(...activeClasses);
                btnClient.classList.add(...inactiveClasses);

                // Crossfade
                contentClient.classList.remove('opacity-100');
                contentClient.classList.add('opacity-0');

                setTimeout(() => {
                    contentClient.classList.add('hidden');
                    contentOur.classList.remove('hidden');
                    // Trigger reflow
                    void contentOur.offsetWidth;
                    contentOur.classList.remove('opacity-0');
                    contentOur.classList.add('opacity-100');
                }, 300);

            } else {
                // Set Client as Active
                btnClient.classList.remove(...inactiveClasses);
                btnClient.classList.add(...activeClasses);

                // Set Our as Inactive
                btnOur.classList.remove(...activeClasses);
                btnOur.classList.add(...inactiveClasses);

                // Crossfade
                contentOur.classList.remove('opacity-100');
                contentOur.classList.add('opacity-0');

                setTimeout(() => {
                    contentOur.classList.add('hidden');
                    contentClient.classList.remove('hidden');
                    // Trigger reflow
                    void contentClient.offsetWidth;
                    contentClient.classList.remove('opacity-0');
                    contentClient.classList.add('opacity-100');
                }, 300);
            }
        }
    </script>
</x-guest-layout>