<x-layouts.app>
    <x-slot:title>Create Account | Votely</x-slot>

        <style>
            body {
                background-color: #ffffff !important;
            }

            .auth-card {
                background: #ffffff;
                border: 1px solid #e2e8f0;
                /* Soft slate blue border */
                box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.05);
            }

            .input-field {
                background-color: #f8fafc;
                /* Very light sky blue/gray */
                border: 1px solid #cbd5e1;
                transition: all 0.2s ease;
            }

            .input-field:focus {
                background-color: #ffffff;
                border-color: #2563eb;
                box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            }
        </style>

        <div class="min-h-[85vh] flex flex-col justify-center py-12 px-6 lg:px-8 relative overflow-hidden">
            <div
                class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/2 w-96 h-96 bg-blue-50 rounded-full blur-3xl opacity-50 -z-10">
            </div>
            <div
                class="absolute bottom-0 left-0 translate-y-1/2 -translate-x-1/2 w-64 h-64 bg-indigo-50 rounded-full blur-3xl opacity-50 -z-10">
            </div>

            <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
                <div
                    class="inline-flex items-center justify-center w-20 h-20 bg-blue-600 rounded-[2rem] mb-8 shadow-xl shadow-blue-200">
                    <i data-lucide="user-plus" class="text-white w-10 h-10"></i>
                </div>
                <h2 class="text-5xl font-black text-slate-900 tracking-tight mb-3">Join Votely</h2>
                <p class="text-slate-500 text-lg font-medium">Create your secure voting identity.</p>
            </div>

            <div class="mt-12 sm:mx-auto sm:w-full sm:max-w-[520px]">
                <div class="auth-card py-12 px-8 sm:px-12 rounded-[2.5rem]">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf

                        <div class="space-y-5">
                            <div>
                                <label for="name"
                                    class="block text-sm font-extrabold text-blue-900 uppercase tracking-widest mb-2">Full
                                    Name</label>
                                <input id="name" name="name" type="text" required
                                    class="input-field w-full px-5 py-4 rounded-2xl outline-none text-slate-900 placeholder:text-slate-400 font-medium"
                                    placeholder="Manzi Kevin">
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-sm font-extrabold text-blue-900 uppercase tracking-widest mb-2">Email
                                    Address</label>
                                <input id="email" name="email" type="email" required
                                    class="input-field w-full px-5 py-4 rounded-2xl outline-none text-slate-900 placeholder:text-slate-400 font-medium"
                                    placeholder="kevin@votely.com">
                            </div>

                            <div>
                                <label for="password"
                                    class="block text-sm font-extrabold text-blue-900 uppercase tracking-widest mb-2">Password</label>
                                <input id="password" name="password" type="password" required
                                    class="input-field w-full px-5 py-4 rounded-2xl outline-none text-slate-900 placeholder:text-slate-400 font-medium"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <div class="flex items-center">
                            <input id="terms" name="terms" type="checkbox" required
                                class="h-5 w-5 text-blue-600 border-slate-300 rounded-lg focus:ring-blue-500 transition cursor-pointer">
                            <label for="terms" class="ml-3 text-sm font-medium text-slate-600">
                                I accept the <a href="#"
                                    class="text-blue-600 hover:text-indigo-700 font-bold underline decoration-blue-100 underline-offset-4">Voting
                                    Protocols</a>
                            </label>
                        </div>

                        <button type="submit"
                            class="group relative w-full flex justify-center py-5 px-4 border border-transparent rounded-2xl text-lg font-black text-white bg-blue-600 hover:bg-blue-700 active:scale-[0.98] transition-all duration-200 shadow-xl shadow-blue-200">
                            <span>Register Account</span>
                            <i data-lucide="arrow-right"
                                class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </form>

                    <div class="mt-10 pt-8 border-t border-slate-100 text-center">
                        <p class="text-slate-500 font-medium">
                            Member already?
                            <a href="/login"
                                class="inline-flex items-center font-bold text-blue-600 hover:text-indigo-700 transition">
                                Sign in to Votely
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</x-layouts.app>