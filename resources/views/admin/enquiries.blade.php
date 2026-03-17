<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contact Enquiries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class="bg-white/80 dark:bg-slate-900/80 backdrop-blur-xl border border-white/40 dark:border-slate-800/50 shadow-2xl rounded-[3rem] overflow-hidden">
                <div class="p-8">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold text-slate-800 dark:text-white">Recent Submissions</h3>
                        <span
                            class="px-4 py-1.5 rounded-full bg-blue-100 text-blue-600 text-xs font-bold uppercase tracking-widest">{{ $enquiries->count() }}
                            Total</span>
                    </div>

                    @if($enquiries->isEmpty())
                        <div class="text-center py-20">
                            <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-6">
                                <svg class="w-10 h-10 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                    </path>
                                </svg>
                            </div>
                            <p class="text-slate-400 font-medium">No enquiries received yet.</p>
                        </div>
                    @else
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-separate border-spacing-y-4">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">
                                            Date</th>
                                        <th class="px-6 py-3 text-xs font-bold text-slate-400 uppercase tracking-widest">
                                            Enquirer</th>
                                        <th class="px-6 py-3 text-xs font-bold text-slate-400 uppercase tracking-widest">
                                            Contact Info</th>
                                        <th class="px-6 py-3 text-xs font-bold text-slate-400 uppercase tracking-widest">
                                            Message</th>
                                        <th
                                            class="px-6 py-3 text-xs font-bold text-slate-400 uppercase tracking-widest text-center">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($enquiries as $enquiry)
                                        <tr class="group">
                                            <td
                                                class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 rounded-l-[1.5rem] text-center">
                                                <span
                                                    class="block text-sm font-bold text-slate-700 dark:text-slate-200">{{ $enquiry->created_at->format('d M') }}</span>
                                                <span
                                                    class="text-[10px] text-slate-400 uppercase font-medium">{{ $enquiry->created_at->format('Y') }}</span>
                                            </td>
                                            <td class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50">
                                                <div class="flex items-center">
                                                    <div
                                                        class="w-10 h-10 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold text-sm mr-3">
                                                        {{ substr($enquiry->name, 0, 1) }}
                                                    </div>
                                                    <span
                                                        class="font-bold text-slate-800 dark:text-slate-100">{{ $enquiry->name }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50">
                                                <div class="flex flex-col">
                                                    <span
                                                        class="text-sm font-medium text-blue-600 dark:text-blue-400">{{ $enquiry->email }}</span>
                                                    <span class="text-xs text-slate-400">{{ $enquiry->phone }}</span>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 max-w-xs">
                                                <p class="text-sm text-slate-600 dark:text-slate-400 truncate"
                                                    title="{{ $enquiry->message }}">{{ $enquiry->message }}</p>
                                            </td>
                                            <td
                                                class="px-6 py-4 bg-slate-50 dark:bg-slate-800/50 rounded-r-[1.5rem] text-center">
                                                <button
                                                    class="w-9 h-9 flex items-center justify-center rounded-xl bg-white dark:bg-slate-700 text-slate-400 hover:text-blue-600 hover:bg-blue-50 transition-all border border-slate-100 dark:border-slate-600 mx-auto">
                                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>