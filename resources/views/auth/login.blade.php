<x-layouts.app>
    <x-slot:title>Sign In | Votely</x-slot>

        <div class="min-h-[80vh] flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md text-center">
                <div
                    class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-6 shadow-lg shadow-blue-200">
                    <i data-lucide="lock" class="text-white w-8 h-8"></i>
                </div>
                <h2 class="text-4xl font-extrabold text-black tracking-tight">Welcome back</h2>
                <p class="mt-2 text-gray-500 font-medium">Enter your details to manage your votes.</p>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-[440px]">
                <div class="bg-white py-10 px-6 border border-gray-200 sm:rounded-[2rem] sm:px-12 shadow-sm">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="email" class="block text-sm font-bold text-black uppercase tracking-wider">Email
                                Address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" required
                                    class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all placeholder:text-gray-400"
                                    placeholder="name@company.com">
                            </div>
                        </div>

                        <div>
                            <div class="flex items-center justify-between">
                                <label for="password"
                                    class="block text-sm font-bold text-black uppercase tracking-wider">Password</label>
                                <a href="#"
                                    class="text-sm font-bold text-blue-600 hover:text-black transition">Forgot?</a>
                            </div>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" required
                                    class="w-full px-4 py-4 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-600 focus:border-transparent outline-none transition-all"
                                    placeholder="••••••••">
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-sm text-lg font-bold text-white bg-black hover:bg-blue-600 focus:outline-none transition-all duration-300">
                            Sign In
                        </button>
                    </form>

                    <div class="mt-8 pt-8 border-t border-gray-100 text-center">
                        <p class="text-sm text-gray-500">
                            Don't have an account?
                            <a href="/register" class="font-bold text-blue-600 hover:underline">Create one for free</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</x-layouts.app>