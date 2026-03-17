<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="p-2 hover:bg-white rounded-full transition">
                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-3xl text-slate-800 tracking-tight">
                {{ __('Salary Audit Report') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-[#F8FAFC] min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Stats Overview -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div
                    class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col justify-between">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Active Payroll</span>
                    <span
                        class="text-4xl font-black text-slate-900 mt-2">₹{{ number_format($employees->sum('salary')) }}</span>
                    <p class="text-[10px] text-slate-400 font-bold mt-4 uppercase">Combined Base Salaries</p>
                </div>
                <div
                    class="bg-slate-900 p-8 rounded-[2rem] border border-slate-800 shadow-xl flex flex-col justify-between">
                    <span class="text-[10px] font-black text-slate-500 uppercase tracking-widest">Cycle Setting</span>
                    <span class="text-4xl font-black text-white mt-2">{{ $workingDaysCount }} Days</span>
                    <p class="text-[10px] text-indigo-400 font-bold mt-4 uppercase tracking-widest">Monthly Billable Cap
                    </p>
                </div>
                <div
                    class="bg-white p-8 rounded-[2rem] border border-slate-100 shadow-sm flex flex-col justify-between">
                    <span class="text-[10px] font-black text-slate-400 uppercase tracking-widest">Report Cycle</span>
                    <span class="text-2xl font-black text-slate-800 mt-2">{{ now()->format('F Y') }}</span>
                    <p class="text-[10px] text-emerald-500 font-bold mt-4 uppercase">Current Audit Window</p>
                </div>
            </div>

            <div class="bg-white rounded-[2.5rem] shadow-xl overflow-hidden border border-slate-100">
                <div class="overflow-x-auto">
                    <table class="w-full text-left">
                        <thead>
                            <tr class="bg-slate-50">
                                <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    Employee Profile</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    Designation</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    Base Salary</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    Monthly (Calculated)</th>
                                <th class="px-8 py-6 text-[10px] font-black text-slate-400 uppercase tracking-widest">
                                    Yearly Accumulation</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100">
                            @foreach($employees as $employee)
                                <tr class="hover:bg-slate-50/50 transition duration-300">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-4">
                                            <div
                                                class="w-12 h-12 rounded-2xl bg-slate-100 flex items-center justify-center font-black text-slate-400 border border-slate-100 shadow-inner overflow-hidden uppercase">
                                                @if($employee->profile_image)
                                                    <img src="{{ asset('profile_images/' . $employee->profile_image) }}"
                                                        class="w-full h-full object-cover">
                                                @else
                                                    {{ substr($employee->name, 0, 1) }}
                                                @endif
                                            </div>
                                            <div>
                                                <div class="text-lg font-black text-slate-800 leading-tight">
                                                    {{ $employee->name }}</div>
                                                <div
                                                    class="text-[10px] font-bold text-slate-400 uppercase tracking-wider mt-1">
                                                    {{ $employee->employee_id }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-4 py-2 bg-indigo-50 text-indigo-600 rounded-xl text-xs font-black uppercase tracking-widest border border-indigo-100">
                                            {{ $employee->designation }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-lg font-black text-slate-700">
                                            ₹{{ number_format($employee->salary) }}</div>
                                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">
                                            Fixed Rate</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-xl font-black text-slate-900 tracking-tight">
                                            ₹{{ number_format($employee->calculateMonthlySalary($workingDaysCount)) }}</div>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                            <span
                                                class="text-[10px] font-bold text-emerald-600 uppercase tracking-widest">Based
                                                on
                                                {{ $employee->attendances()->whereMonth('date', now()->month)->whereYear('date', now()->year)->whereIn('status', ['Present', 'Late'])->count() }}
                                                Days</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-xl font-black text-slate-900 tracking-tight">
                                            ₹{{ number_format($employee->calculateYearlySalary($workingDaysCount)) }}</div>
                                        <div class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mt-1">
                                            {{ now()->year }} YTD</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-8 p-8 bg-indigo-50/50 rounded-[2rem] border border-indigo-100/50">
                <div class="flex items-start gap-4">
                    <div class="p-3 bg-white rounded-2xl shadow-sm text-indigo-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-black text-indigo-900 uppercase tracking-widest text-sm">Calculation Protocol
                        </h4>
                        <p class="text-indigo-700/70 text-sm font-medium mt-1 leading-relaxed">
                            Monthly salary is computed by dividing the base monthly rate by the defined working days
                            cycle (currently <strong>{{ $workingDaysCount }}</strong>) and multiplying by valid
                            attendance entries. Yearly accumulation represents the total audit value from January
                            {{ now()->year }} to present.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>