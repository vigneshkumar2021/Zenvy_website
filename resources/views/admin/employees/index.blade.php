<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="font-bold text-3xl text-slate-800 dark:text-gray-100 tracking-tight">
                {{ __('Employee Directory') }}
            </h2>
            <a href="{{ route('admin.employees.create') }}"
                class="btn-gradient px-8 py-3 rounded-2xl font-bold shadow-lg text-sm uppercase tracking-widest">
                <svg class="w-5 h-5 me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 6v6m0 0v6m0-0h6m-6 0H6"></path>
                </svg>
                Register Employee
            </a>
        </div>
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

            <div class="glass overflow-hidden shadow-2xl sm:rounded-[2.5rem] border-0">
                <div class="p-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-100">
                            <thead>
                                <tr class="text-left text-xs font-bold text-slate-400 uppercase tracking-widest">
                                    <th class="px-6 py-5">Employee</th>
                                    <th class="px-6 py-5">Designation</th>
                                    <th class="px-6 py-5">Compensation</th>
                                    <th class="px-6 py-5">Contact</th>
                                    <th class="px-6 py-5 text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-50">
                                @foreach($employees as $employee)
                                    <tr class="hover:bg-white/50 transition-all duration-200 group">
                                        <td class="px-6 py-6 whitespace-nowrap">
                                            <div class="flex items-center">
                                                @if($employee->profile_image)
                                                    <img src="/profile_images/{{ $employee->profile_image }}"
                                                        class="h-12 w-12 rounded-2xl object-cover shadow-inner shadow-black/10">
                                                @else
                                                    <div
                                                        class="h-12 w-12 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white flex items-center justify-center font-bold text-lg shadow-inner shadow-black/10">
                                                        {{ substr($employee->name, 0, 1) }}
                                                    </div>
                                                @endif
                                                <div class="ms-4">
                                                    <div class="text-base font-bold text-slate-900">{{ $employee->name }}
                                                    </div>
                                                    <div class="text-xs font-medium text-slate-400">ID:
                                                        {{ $employee->employee_id }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1.5 text-xs font-bold rounded-lg bg-slate-100 text-slate-600 uppercase tracking-tighter">
                                                {{ $employee->designation }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-6 whitespace-nowrap">
                                            <div class="text-sm font-bold text-slate-700">
                                                ₹{{ number_format($employee->salary) }}</div>
                                            <div
                                                class="text-[10px] text-indigo-600 uppercase font-black tracking-widest mt-1">
                                                Month Calc:
                                                ₹{{ number_format($employee->calculateMonthlySalary($workingDaysCount)) }}
                                            </div>
                                        </td>
                                        <td class="px-6 py-6 whitespace-nowrap">
                                            <div class="text-sm text-slate-600 font-medium">{{ $employee->email }}</div>
                                            <div class="text-xs text-slate-400">{{ $employee->contact }}</div>
                                        </td>
                                        <td class="px-6 py-6 whitespace-nowrap text-right text-sm font-medium">
                                            <div
                                                class="flex justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                                <a href="{{ route('admin.employees.edit', $employee->id) }}"
                                                    class="inline-flex items-center px-4 py-2 bg-slate-900 text-white rounded-xl text-xs font-bold hover:bg-black transition">
                                                    Edit
                                                </a>
                                                <form action="{{ route('admin.employees.destroy', $employee->id) }}"
                                                    method="POST" onsubmit="return confirm('Archive this record?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center px-4 py-2 bg-rose-50 text-rose-600 rounded-xl text-xs font-bold hover:bg-rose-100 transition border border-rose-100">
                                                        Archive
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>