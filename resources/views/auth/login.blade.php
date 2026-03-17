<x-guest-layout title="Admin Login">
    <div class="min-h-screen py-32 hero-gradient flex items-center justify-center px-4 relative overflow-hidden">
        <!-- Background Decorations -->
        <div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-primary-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="w-full max-w-xl reveal active relative z-10 transition-all duration-700">
            <div class="glass-dark p-10 md:p-16 rounded-[4rem] shadow-2xl border border-white/10">
                <div class="text-center mb-12">
                    <div class="inline-block mb-6 p-4 rounded-3xl bg-white/5 border border-white/10">
                        <span class="text-4xl font-black text-white tracking-tighter">Zen<span class="text-primary-400">vY</span></span>
                    </div>
                    <h2 class="text-4xl md:text-5xl font-display font-black text-white mb-4 tracking-tight">Welcome Back</h2>
                    <p class="text-indigo-200/60 font-medium text-lg tracking-wide uppercase text-sm">Zenvy Portal Access</p>
                </div>

                <!-- Session Status -->
                <x-auth-session-status class="mb-8 p-4 rounded-2xl bg-white/10 text-emerald-400 border border-emerald-400/20 text-center font-bold" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-8">
                    @csrf

                    <!-- Email Address -->
                    <div class="space-y-3">
                        <label class="block text-xs font-bold text-indigo-200 uppercase tracking-[0.2em] ml-4">Authorized Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none group-focus-within:text-primary-400 transition-colors">
                                <svg class="w-5 h-5 text-indigo-300/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path>
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus
                                class="w-full pl-14 pr-6 py-5 rounded-3xl bg-white/5 border border-white/10 text-white placeholder-indigo-300/30 focus:bg-white/10 focus:border-primary-500/50 focus:ring-0 transition-all duration-300 font-medium text-lg"
                                placeholder="name@zenvy.com">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-rose-400 font-bold text-sm ml-4" />
                    </div>

                    <!-- Password -->
                    <div class="space-y-3">
                        <div class="flex justify-between items-center ml-4 mr-4">
                            <label class="block text-xs font-bold text-indigo-200 uppercase tracking-[0.2em]">Secure Password</label>
                            @if (Route::has('password.request'))
                                <a class="text-xs font-bold text-primary-400 hover:text-white transition-colors uppercase tracking-widest"
                                    href="{{ route('password.request') }}">
                                    Reset Access
                                </a>
                            @endif
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none group-focus-within:text-primary-400 transition-colors">
                                <svg class="w-5 h-5 text-indigo-300/40" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required
                                class="w-full pl-14 pr-6 py-5 rounded-3xl bg-white/5 border border-white/10 text-white placeholder-indigo-300/30 focus:bg-white/10 focus:border-primary-500/50 focus:ring-0 transition-all duration-300 font-medium text-lg"
                                placeholder="••••••••••••">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-rose-400 font-bold text-sm ml-4" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center px-4">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                            <div class="relative">
                                <input id="remember_me" type="checkbox"
                                    class="hidden peer"
                                    name="remember">
                                <div class="w-6 h-6 border-2 border-white/20 rounded-lg bg-white/5 transition-all peer-checked:bg-primary-500 peer-checked:border-primary-500"></div>
                                <svg class="absolute top-1 left-1 w-4 h-4 text-white opacity-0 peer-checked:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="ms-3 text-sm font-bold text-indigo-200/80 uppercase tracking-widest group-hover:text-white transition-colors">Stay Signed In</span>
                        </label>
                    </div>

                    <div class="pt-4">
                        <button type="submit" class="w-full btn-gradient p-6 text-xl !rounded-[2rem] shadow-2xl shadow-primary-500/20 hover:shadow-primary-500/40 transition-all">
                            Authenticate & Enter
                        </button>
                    </div>
                </form>

                <div class="mt-12 text-center text-indigo-300/40 text-sm font-bold uppercase tracking-widest">
                    Zenvy Software Ecosystem
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>