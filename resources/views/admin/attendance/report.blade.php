<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Employee Attendance Report') }}
            </h2>
            <div class="flex gap-2">
                <a href="?filter=all"
                    class="px-4 py-2 text-sm rounded-full {{ $filter == 'all' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">All</a>
                <a href="?filter=weekly"
                    class="px-4 py-2 text-sm rounded-full {{ $filter == 'weekly' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">Weekly</a>
                <a href="?filter=monthly"
                    class="px-4 py-2 text-sm rounded-full {{ $filter == 'monthly' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">Monthly</a>
                <a href="?filter=yearly"
                    class="px-4 py-2 text-sm rounded-full {{ $filter == 'yearly' ? 'bg-indigo-600 text-white' : 'bg-gray-200 text-gray-700' }}">Yearly</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12 bg-gray-50 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-2xl sm:rounded-3xl border border-gray-100">
                <div class="p-8">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr
                                    class="text-left text-xs font-bold text-gray-500 uppercase tracking-widest bg-gray-50 dark:bg-gray-900 border-b">
                                    <th class="px-6 py-4">Date</th>
                                    <th class="px-6 py-4">Employee</th>
                                    <th class="px-6 py-4">In Time</th>
                                    <th class="px-6 py-4">Out Time</th>
                                    <th class="px-6 py-4 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-100 dark:divide-gray-700">
                                @foreach($attendances as $attendance)
                                    <tr class="hover:bg-gray-50 transition">
                                        <td
                                            class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-gray-100 italic">
                                            {{ date('d M, Y', strtotime($attendance->date)) }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="h-8 w-8 rounded-full bg-indigo-100 text-indigo-700 flex items-center justify-center font-bold text-xs me-3">
                                                    {{ substr($attendance->employee->name, 0, 1) }}
                                                </div>
                                                <div>
                                                    <div class="text-sm font-bold text-gray-900">
                                                        {{ $attendance->employee->name }}</div>
                                                    <div class="text-xs text-gray-500">
                                                        {{ $attendance->employee->employee_id }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ $attendance->login_time ? date('h:i A', strtotime($attendance->login_time)) : '--:--' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                            {{ $attendance->logout_time ? date('h:i A', strtotime($attendance->logout_time)) : '--:--' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-center">
                                            @if($attendance->status == 'Present')
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-green-100 text-green-800">PRESENT</span>
                                            @elseif($attendance->status == 'Late')
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-yellow-100 text-yellow-800">LATE</span>
                                            @else
                                                <span
                                                    class="px-3 py-1 inline-flex text-xs leading-5 font-bold rounded-full bg-red-100 text-red-800">ABSENT</span>
                                            @endif
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