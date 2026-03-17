<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('admin.employees.index') }}" class="p-2 hover:bg-white rounded-full transition">
                <svg class="w-6 h-6 text-slate-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h2 class="font-bold text-3xl text-slate-800 dark:text-gray-100 tracking-tight">
                {{ __('Refine Employee Record') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12 bg-slate-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="glass overflow-hidden shadow-2xl sm:rounded-[3rem] border-0 p-1">
                <div class="bg-white/80 rounded-[2.9rem] p-12">
                    <form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" class="space-y-8"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="flex items-center gap-6 mb-10 pb-10 border-b border-slate-100">
                            @if($employee->profile_image)
                                <img src="/profile_images/{{ $employee->profile_image }}"
                                    class="w-24 h-24 rounded-3xl object-cover shadow-xl border-4 border-white">
                            @else
                                <div
                                    class="w-24 h-24 rounded-3xl bg-slate-100 flex items-center justify-center text-slate-400 font-bold text-3xl border-4 border-white">
                                    {{ substr($employee->name, 0, 1) }}
                                </div>
                            @endif
                            <div>
                                <h3 class="font-bold text-lg text-slate-800">Profile Image</h3>
                                <p class="text-sm text-slate-400">Current employee identification photo</p>
                                <div class="mt-4">
                                    <input type="file" name="profile_image"
                                        class="text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-bold file:bg-slate-100 file:text-slate-600 hover:file:bg-slate-200">
                                    <x-input-error class="mt-2" :messages="$errors->get('profile_image')" />
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label
                                    class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Identification
                                    ID</label>
                                <input type="text" name="employee_id"
                                    value="{{ old('employee_id', $employee->employee_id) }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('employee_id')" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Full
                                    Legal Name</label>
                                <input type="text" name="name" value="{{ old('name', $employee->name) }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="space-y-2 md:col-span-2">
                                <label
                                    class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Corporate
                                    Email</label>
                                <input type="email" name="email" value="{{ old('email', $employee->email) }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Designation</label>
                                <input type="text" name="designation"
                                    value="{{ old('designation', $employee->designation) }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('designation')" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Base
                                    Salary (INR)</label>
                                <input type="number" name="salary" value="{{ old('salary', $employee->salary) }}"
                                    required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('salary')" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Date of
                                    Birth</label>
                                <input type="date" name="dob" value="{{ old('dob', $employee->dob) }}" required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('dob')" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-black text-slate-400 uppercase tracking-widest ps-1">Contact
                                    Details</label>
                                <input type="text" name="contact" value="{{ old('contact', $employee->contact) }}"
                                    required
                                    class="w-full px-6 py-4 bg-slate-50 border-0 rounded-2xl focus:ring-2 focus:ring-indigo-500 transition font-bold">
                                <x-input-error class="mt-2" :messages="$errors->get('contact')" />
                            </div>
                        </div>

                        <div class="pt-6 flex justify-end">
                            <button type="submit"
                                class="btn-gradient px-12 py-4 rounded-2xl font-bold uppercase tracking-widest shadow-xl text-white">
                                Update Records
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>