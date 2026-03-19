<x-guest-layout title="Courses">
    <!-- Header -->
    <section class="pt-40 pb-20 hero-gradient relative overflow-hidden text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <h1 class="text-5xl md:text-7xl font-[800] leading-tight mb-6 tracking-tight">ZenvY <span
                    class="text-yellow-400">IT Training</span></h1>
            <p class="text-xl text-indigo-100 max-w-2xl font-medium opacity-90">Master the most in-demand technical
                skills with our comprehensive, hands-on training programs led by industry experts.</p>
        </div>

        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-white/5 -skew-x-12 transform origin-top"></div>
    </section>

    @if (session('success'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
            <div
                class="reveal bg-emerald-500/10 backdrop-blur-md border border-emerald-500/20 p-6 rounded-3xl flex items-center justify-between shadow-lg shadow-emerald-500/10">
                <div class="flex items-center space-x-4">
                    <div class="bg-emerald-500 p-2 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-emerald-900 font-bold text-lg leading-tight">{{ session('success') }}</p>
                        <p class="text-emerald-700/70 text-sm font-medium">Thank you for choosing ZenvY IT Training!</p>
                    </div>
                </div>
                <button onclick="this.parentElement.parentElement.remove()"
                    class="text-emerald-500 hover:text-emerald-700 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <!-- Courses Section -->
    <section class="py-24 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @php
                $categories = [
                    'Full Stack' => [
                        'color' => 'indigo',
                        'courses' => [
                            ['name' => 'Java Full Stack', 'duration' => '3 Months', 'fee' => '₹15,000', 'topics' => ['Java', 'Spring Boot', 'Angular', 'Oracle', 'Microservices']],
                            ['name' => 'Laravel Full Stack', 'duration' => '3 Months', 'fee' => '₹10,000', 'topics' => ['PHP', 'Laravel', 'Vue.js', 'MySQL', 'API Integration']],
                            ['name' => 'Python Full Stack', 'duration' => '3 Months', 'fee' => '₹15,000', 'topics' => ['Python', 'Django', 'React', 'PostgreSQL', 'Deployment']],
                            ['name' => 'Nodejs Full Stack', 'duration' => '3 Months', 'fee' => '₹10,000', 'topics' => ['JavaScript', 'Express.js', 'React', 'MongoDB', 'Real-time Apps']],
                        ]
                    ],
                    'Backend' => [
                        'color' => 'blue',
                        'courses' => [
                            ['name' => 'Java', 'duration' => '2 Months', 'fee' => '₹10,000', 'topics' => ['Core Java', 'Advanced Java', 'Spring Boot', 'JDBC']],
                            ['name' => 'Python', 'duration' => '2 Months', 'fee' => '₹10,000', 'topics' => ['Python Basics', 'Django/Flask', 'Automations', 'API Development']],
                            ['name' => 'Nodejs', 'duration' => '2 Months', 'fee' => '₹7,000', 'topics' => ['Event Loop', 'Express.js', 'Middleware', 'REST APIs']],
                            ['name' => 'Laravel (Php Framework)', 'duration' => '2 Months', 'fee' => '₹7,000', 'topics' => ['MVC Architecture', 'Eloquent ORM', 'Blade Engine', 'Migrations']],
                        ]
                    ],
                    'Frontend' => [
                        'color' => 'rose',
                        'courses' => [
                            ['name' => 'HTML, CSS, JS', 'duration' => '1.5 Month', 'fee' => '₹5,000', 'topics' => ['Semantic HTML', 'Flexbox/Grid', 'DOM Manipulation', 'ES6+']],
                            ['name' => 'Angular', 'duration' => '1.5 Months', 'fee' => '₹7,000', 'topics' => ['Components', 'Services', 'Directives', 'RxJS']],
                            ['name' => 'React', 'duration' => '1.5 Months', 'fee' => '₹7,000', 'topics' => ['Hooks', 'Context API', 'Redux', 'Next.js Basics']],
                            ['name' => 'Vuejs', 'duration' => '1.5 Months', 'fee' => '₹7,000', 'topics' => ['Composition API', 'Vuex/Pinia', 'Vue Router', 'Transitions']],
                        ]
                    ],
                    'Mobile App & Others' => [
                        'color' => 'emerald',
                        'courses' => [
                            ['name' => 'Flutter', 'duration' => '2 Months', 'fee' => '₹10,000', 'topics' => ['Dart', 'Widgets', 'State Management', 'Firebase', 'App Store/Play Store']],
                            ['name' => 'Figma (UI/UX)', 'duration' => '1 Month', 'fee' => '₹8,000', 'topics' => ['Design Systems', 'Prototyping', 'Auto Layout', 'Component Properties']],
                            ['name' => 'SEO, SMM, PPC (Digital Marketing)', 'duration' => '2 Months', 'fee' => '₹10,000', 'topics' => ['Keyword Research', 'Social Media Ads', 'Google Ads', 'Analytics']],
                        ]
                    ],
                    'AI Courses' => [
                        'color' => 'amber',
                        'courses' => [
                            ['name' => 'Artificial Intelligence Fundamentals', 'duration' => '1 Month', 'fee' => '₹7,000', 'topics' => ['Introduction to AI', 'AI Applications', 'Machine Learning basics', 'AI tools overview']],
                            ['name' => 'Python for AI', 'duration' => '1.5 – 2 Months', 'fee' => '₹10,000', 'topics' => ['Python basics', 'NumPy', 'Pandas', 'Data handling', 'Python libraries for AI']],
                            ['name' => 'Machine Learning', 'duration' => '2 – 3 Months', 'fee' => '₹15,000', 'topics' => ['Supervised learning', 'Unsupervised learning', 'Scikit-learn', 'Model training', 'ML projects']],
                            ['name' => 'Deep Learning', 'duration' => '2 Months', 'fee' => '₹10,000', 'topics' => ['Neural Networks', 'TensorFlow', 'Keras', 'Image recognition', 'AI models']],
                            ['name' => 'Generative AI', 'duration' => '1 – 1.5 Months', 'fee' => '₹7,000', 'topics' => ['AI tools', 'Prompt engineering', 'AI content generation', 'AI automation', 'Chatbot creation', 'ChatGPT', 'Midjourney', 'DALL-E']],
                            ['name' => 'Data Science with AI', 'duration' => '3 Months', 'fee' => '₹20,000', 'topics' => ['Python', 'Statistics', 'Machine Learning', 'Data visualization', 'AI projects']],
                        ]
                    ],
                ];
            @endphp

            @foreach ($categories as $categoryName => $data)
                <div class="mb-20">
                    <div class="flex items-center space-x-4 mb-10">
                        <div class="h-10 w-2 bg-{{ $data['color'] }}-600 rounded-full"></div>
                        <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">{{ $categoryName }}</h2>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach ($data['courses'] as $index => $course)
                            @php $courseId = \Str::slug($course['name']); @endphp
                            <div
                                class="reveal group bg-white rounded-[2rem] p-8 shadow-sm border border-slate-100 hover:shadow-xl hover:shadow-{{ $data['color'] }}-500/5 hover:-translate-y-1 transition-all duration-300">
                                <h3 class="text-xl font-bold text-slate-800 mb-4">{{ $course['name'] }}</h3>

                                <div class="flex items-center justify-between mb-6">
                                    <div class="flex flex-col">
                                        <span
                                            class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Duration</span>
                                        <span class="text-sm font-bold text-slate-700 flex items-center">
                                            <svg class="w-4 h-4 mr-1.5 text-{{ $data['color'] }}-500" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                            {{ $course['duration'] }}
                                        </span>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <span
                                            class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Fee</span>
                                        <span
                                            class="text-lg font-black text-{{ $data['color'] }}-600">{{ $course['fee'] }}</span>
                                    </div>
                                </div>

                                <!-- Details Toggle -->
                                <div x-data="{ open: false }" class="mt-4">
                                    <button @click="open = !open"
                                        class="flex items-center justify-between w-full px-5 py-3 rounded-xl bg-slate-50 text-slate-600 font-bold text-sm hover:bg-slate-100 transition-colors">
                                        <span>Course Topics</span>
                                        <svg :class="open ? 'rotate-180' : ''" class="w-4 h-4 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>

                                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                                        x-transition:enter-start="opacity-0 -translate-y-2"
                                        x-transition:enter-end="opacity-100 translate-y-0"
                                        class="mt-3 grid grid-cols-1 gap-2 pl-2">
                                        @foreach($course['topics'] as $topic)
                                            <div class="flex items-center text-sm text-slate-500 font-medium">
                                                <div class="w-1.5 h-1.5 rounded-full bg-{{ $data['color'] }}-400 mr-2.5"></div>
                                                {{ $topic }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <a href="{{ route('enroll.create', ['course' => $course['name']]) }}"
                                        class="inline-flex items-center justify-center w-full px-6 py-4 bg-slate-900 text-white font-bold rounded-xl hover:bg-{{ $data['color'] }}-600 transition-colors group/btn">
                                        Enroll Now
                                        <svg class="ml-2 w-4 h-4 translate-x-0 group-hover/btn:translate-x-1 transition-transform"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-guest-layout>