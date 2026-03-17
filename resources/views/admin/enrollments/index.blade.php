<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Course Enrollments') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-[#F8FAFC] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 flex justify-between items-center">
                <div>
                    <h1 class="text-3xl font-black text-slate-900 tracking-tight">Enrollments</h1>
                    <p class="text-slate-500 mt-1 font-medium">Manage student intake and course applications.</p>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                Student</th>
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                Contact</th>
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Course
                            </th>
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Batch
                            </th>
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Date
                            </th>
                            <th class="px-8 py-5 text-[10px] font-black text-slate-400 uppercase tracking-widest">Status
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        @foreach($enrollments as $enrollment)
                            <tr class="hover:bg-slate-50/50 transition-colors">
                                <td class="px-8 py-6">
                                    <span class="text-sm font-bold text-slate-900 block">{{ $enrollment->name }}</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex flex-col">
                                        <span class="text-sm font-medium text-slate-600">{{ $enrollment->email }}</span>
                                        <span class="text-xs font-bold text-slate-400 mt-1">{{ $enrollment->phone }}</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 bg-indigo-50 text-indigo-600 rounded-lg text-xs font-bold border border-indigo-100 italic">
                                        {{ $enrollment->course_name }}
                                    </span>
                                </td>
                                <td class="px-8 py-6 text-sm font-bold text-slate-600 uppercase tracking-wider">
                                    {{ $enrollment->batch }}
                                </td>
                                <td class="px-8 py-6 text-sm font-medium text-slate-500">
                                    {{ $enrollment->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center space-x-2">
                                        @if($enrollment->status == 'pending')
                                            <form action="{{ route('admin.enrollments.status', $enrollment) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="success">
                                                <button type="submit"
                                                    class="p-2 bg-emerald-50 text-emerald-600 rounded-lg border border-emerald-100 hover:bg-emerald-600 hover:text-white transition-all shadow-sm group/status"
                                                    title="Approve Enrollment">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                            d="M5 13l4 4L19 7"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                            <form action="{{ route('admin.enrollments.status', $enrollment) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="status" value="rejected">
                                                <button type="submit"
                                                    class="p-2 bg-rose-50 text-rose-600 rounded-lg border border-rose-100 hover:bg-rose-600 hover:text-white transition-all shadow-sm group/status"
                                                    title="Reject Enrollment">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                                            d="M6 18L18 6M6 6l12 12"></path>
                                                    </svg>
                                                </button>
                                            </form>
                                        @else
                                            <span
                                                class="px-3 py-1 {{ $enrollment->status == 'success' ? 'bg-emerald-50 text-emerald-600 border-emerald-100' : 'bg-rose-50 text-rose-600 border-rose-100' }} rounded-full text-[10px] font-black uppercase tracking-widest border">
                                                {{ $enrollment->status }}
                                            </span>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($enrollments->isEmpty())
                    <div class="px-8 py-20 text-center">
                        <div
                            class="w-16 h-16 bg-slate-50 rounded-2xl flex items-center justify-center mx-auto mb-4 text-slate-300">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-slate-400 font-bold uppercase tracking-widest text-xs">No enrollment records found
                        </p>
                    </div>
                @endif
            </div>

            <div class="mt-8">
                {{ $enrollments->links() }}
            </div>
        </div>
    </div>
</x-app-layout>