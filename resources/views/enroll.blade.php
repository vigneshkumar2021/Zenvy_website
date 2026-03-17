<x-guest-layout title="Course Enrollment">
    <section class="pt-40 pb-24 hero-gradient relative overflow-hidden text-white min-h-screen flex items-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="reveal bg-white/10 backdrop-blur-xl border border-white/20 p-8 md:p-12 rounded-[2.5rem] shadow-2xl">
                <div class="mb-10 text-center">
                    <h1 class="text-4xl md:text-5xl font-black mb-4">Enroll in <span class="text-yellow-400">{{ $course ?? 'your Course' }}</span></h1>
                    <p class="text-indigo-100/80 font-medium">Please fill in your details to start your journey with ZenvY IT Training.</p>
                </div>

                <form action="{{ route('enroll.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <input type="hidden" name="course_name" value="{{ $course }}">

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-indigo-100 ml-1">Full Name</label>
                            <input type="text" name="name" required placeholder="John Doe"
                                class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-indigo-100 ml-1">Email Address</label>
                            <input type="email" name="email" required placeholder="john@example.com"
                                class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-indigo-100 ml-1">Phone Number</label>
                            <input type="text" name="phone" required placeholder="+91 98765 43210"
                                class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-sm font-bold text-indigo-100 ml-1">Preferred Batch</label>
                            <select name="batch" required
                                class="w-full px-6 py-4 bg-white/5 border border-white/10 rounded-2xl text-white placeholder-white/30 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:border-transparent transition-all appearance-none cursor-pointer">
                                <option value="" class="bg-indigo-900">Select Batch</option>
                                <option value="morning" class="bg-indigo-900">Morning (9:00 AM - 12:00 PM)</option>
                                <option value="afternoon" class="bg-indigo-900">Afternoon (2:00 PM - 5:00 PM)</option>
                                <option value="evening" class="bg-indigo-900">Evening (6:00 PM - 9:00 PM)</option>
                            </select>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="block text-sm font-bold text-indigo-100 ml-1">Selected Course</label>
                        <div class="w-full px-6 py-4 bg-white/5 border border-white/20 rounded-2xl text-yellow-400 font-bold opacity-80 backdrop-blur-md">
                            {{ $course ?? 'No course selected' }}
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" 
                            class="w-full py-5 bg-yellow-400 hover:bg-yellow-500 text-indigo-950 font-black text-lg rounded-2xl shadow-xl shadow-yellow-400/20 hover:scale-[1.02] transform transition-all duration-300">
                            Confirm Enrollment
                        </button>
                        <p class="mt-4 text-center text-xs text-indigo-200/50">By enrolling, you agree to our terms and conditions of training.</p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Decoration -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-white/5 -skew-x-12 transform origin-top"></div>
        <div class="absolute bottom-0 left-0 w-1/2 h-full bg-white/2 -skew-x-12 transform origin-bottom"></div>
    </section>
</x-guest-layout>
