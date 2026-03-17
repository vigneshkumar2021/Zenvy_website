<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-slate-800 dark:text-gray-100 tracking-tight">
            {{ __('Notification Center') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div
                    class="mb-8 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-xl shadow-sm flex items-center">
                    <svg class="w-6 h-6 me-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Compose Notification -->
                <div class="lg:col-span-1">
                    <div class="glass overflow-hidden shadow-2xl sm:rounded-[2.5rem] border-0">
                        <div class="p-8 bg-white/80">
                            <h4 class="font-bold text-xl text-slate-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 me-2 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                    </path>
                                </svg>
                                Compose
                            </h4>
                            <form action="{{ route('admin.notifications.send') }}" method="POST" class="space-y-6">
                                @csrf
                                <div>
                                    <label
                                        class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Recipient</label>
                                    <select name="employee_id"
                                        class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-indigo-500 transition font-bold mt-1">
                                        <option value="">Broadcast to All Employees</option>
                                        @foreach($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}
                                                ({{ $employee->employee_id }})</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div>
                                    <label
                                        class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Notification
                                        Title</label>
                                    <input type="text" name="title" required placeholder="Important Update"
                                        class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-indigo-500 transition font-bold mt-1">
                                </div>

                                <div>
                                    <label
                                        class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Message
                                        Body</label>
                                    <textarea name="message" rows="4" required
                                        placeholder="Type your announcement here..."
                                        class="w-full px-4 py-3 bg-slate-50 border-0 rounded-xl focus:ring-2 focus:ring-indigo-500 transition font-bold mt-1"></textarea>
                                </div>

                                <button type="submit"
                                    class="btn-gradient w-full py-4 rounded-xl font-bold uppercase tracking-widest shadow-xl text-white">
                                    Send Notification
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Notification History -->
                <div class="lg:col-span-2">
                    <div class="glass overflow-hidden shadow-2xl sm:rounded-[2.5rem] border-0">
                        <div class="p-8">
                            <h4 class="font-bold text-xl text-slate-800 mb-6 flex items-center">
                                <svg class="w-6 h-6 me-2 text-indigo-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                    </path>
                                </svg>
                                Sent History
                            </h4>
                            <div class="space-y-4">
                                @forelse($notifications as $notif)
                                    <div
                                        class="p-6 bg-white/50 border border-slate-100 rounded-3xl hover:bg-white transition group">
                                        <div class="flex justify-between items-start mb-2">
                                            <div>
                                                <span
                                                    class="px-2 py-1 text-[10px] font-black uppercase tracking-widest rounded {{ $notif->employee_id ? 'bg-indigo-50 text-indigo-600' : 'bg-emerald-50 text-emerald-600' }}">
                                                    {{ $notif->employee_id ? 'Specific: ' . $notif->employee->name : 'Broadcast' }}
                                                </span>
                                                <h5 class="font-bold text-slate-800 mt-2">{{ $notif->title }}</h5>
                                            </div>
                                            <span
                                                class="text-[10px] text-slate-400 font-bold uppercase">{{ $notif->created_at->diffForHumans() }}</span>
                                        </div>
                                        <p class="text-slate-600 text-sm italic">{{ $notif->message }}</p>
                                    </div>
                                @empty
                                    <div class="text-center py-12 opacity-30">
                                        <svg class="w-20 h-20 mx-auto mb-4" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0a2 2 0 01-2 2H6a2 2 0 01-2-2m16 0l-8 8-8-8">
                                            </path>
                                        </svg>
                                        <p class="font-bold">No announcements yet</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>