<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <style>
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-auto-rows: minmax(160px, auto);
            gap: 1.5rem;
        }

        .bento-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border-radius: 2rem;
            padding: 2rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            text-decoration: none !important;
        }

        .bento-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            background: rgba(255, 255, 255, 0.9);
        }

        .card-main {
            grid-column: span 2;
            grid-row: span 2;
        }

        .card-tall {
            grid-row: span 2;
        }

        .card-wide {
            grid-column: span 2;
        }

        .icon-box {
            width: 48px;
            height: 48px;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
    </style>

    <div class="py-12 bg-[#F8FAFC] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                <div>
                    <h1 class="text-4xl font-black text-slate-900 tracking-tight">Admin Console</h1>
                    <p class="text-slate-500 mt-2 font-medium">System overview and management control.</p>
                </div>
                <div>
                    <span
                        class="px-6 py-3 bg-white rounded-2xl text-xs font-black text-slate-400 shadow-sm border border-slate-100 uppercase tracking-widest">
                        {{ now()->format('l, F jS') }}
                    </span>
                </div>
            </div>

            <div class="bento-grid">
                <!-- Notifications -->
                <a href="{{ route('admin.notifications.index') }}" class="bento-card group">
                    <div>
                        <div
                            class="icon-box bg-purple-50 text-purple-600 group-hover:bg-purple-600 group-hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-800 tracking-tight">Notifications</h3>
                    </div>
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest mt-4">Global
                        Alerts</span>
                </a>

                <!-- Enquiries -->
                <a href="{{ route('admin.enquiries') }}" class="bento-card group">
                    <div>
                        <div
                            class="icon-box bg-blue-50 text-blue-600 group-hover:bg-blue-600 group-hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-800 tracking-tight">Enquiries</h3>
                    </div>
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest mt-4">Support
                        Inbound</span>
                </a>

                <!-- Enrollments -->
                <a href="{{ route('admin.enrollments.index') }}" class="bento-card group">
                    <div>
                        <div
                            class="icon-box bg-yellow-50 text-yellow-600 group-hover:bg-yellow-600 group-hover:text-white transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-slate-800 tracking-tight">Enrollments</h3>
                    </div>
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest mt-4">Student
                        Intake</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>