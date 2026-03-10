<x-layouts.app>
    <x-slot:title>Votely | Professional Real-Time Election & Polling Engine</x-slot>

        <style>
            body {
                background-color: #ffffff !important;
                color: #000000 !important;
            }

            .glass-nav {
                background: rgba(255, 255, 255, 0.9) !important;
                border-bottom: 1px solid #e5e7eb !important;
            }

            nav span,
            nav a {
                color: #000000 !important;
            }

            footer {
                background-color: #f9fafb;
                color: #6b7280 !important;
                border-top: 1px solid #e5e7eb !important;
            }
        </style>

        <section class="relative pt-24 pb-20 border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-6xl md:text-8xl font-extrabold tracking-tight text-black mb-8 leading-[1.05]">
                    The future of <br>
                    <span class="text-blue-600 underline decoration-4 underline-offset-8">decision making.</span>
                </h1>

                <p class="text-gray-500 text-lg md:text-xl max-w-3xl mx-auto mb-12 leading-relaxed font-medium">
                    Votely provides a high-security, zero-latency engine for running real-time polls
                    and candidate elections. Built for transparency and speed.
                </p>

                <div class="flex flex-col sm:flex-row justify-center gap-5">
                    <a href="/register"
                        class="px-10 py-4 bg-black text-white rounded-full font-bold text-lg hover:bg-blue-600 transition-all duration-300 shadow-xl shadow-gray-200">
                        Get Started
                    </a>
                    <a href="#demo"
                        class="px-10 py-4 bg-white border-2 border-black text-black rounded-full font-bold text-lg hover:bg-gray-50 transition-all">
                        View Enterprise Demo
                    </a>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 py-24">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-6">

                <div
                    class="md:col-span-8 p-10 rounded-3xl bg-gray-50 border border-gray-200 flex flex-col md:flex-row gap-8 items-center">
                    <div class="flex-1">
                        <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                            <i data-lucide="users" class="text-white w-5 h-5"></i>
                        </div>
                        <h3 class="text-3xl font-bold text-black mb-4">Candidate Elections</h3>
                        <p class="text-gray-600 text-lg leading-relaxed">
                            Manage high-stakes elections with profiles, manifestos, and real-time result broadcasting.
                            Perfect for organizations and student guilds.
                        </p>
                    </div>
                    <div class="w-full md:w-64 space-y-3">
                        <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4">
                            <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                            <div class="h-2 w-20 bg-blue-600 rounded"></div>
                            <span class="ml-auto font-bold">42%</span>
                        </div>
                        <div
                            class="bg-white p-4 rounded-xl shadow-sm border border-gray-100 flex items-center gap-4 opacity-50">
                            <div class="w-10 h-10 bg-gray-200 rounded-full"></div>
                            <div class="h-2 w-12 bg-gray-300 rounded"></div>
                            <span class="ml-auto font-bold">18%</span>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-4 p-10 rounded-3xl bg-blue-600 text-white flex flex-col justify-between">
                    <i data-lucide="activity" class="w-10 h-10 mb-8"></i>
                    <div>
                        <h3 class="text-2xl font-bold mb-2">Instant Sync</h3>
                        <p class="text-blue-100">Every vote is processed and pushed to all screens in under 50ms using
                            Reverb.</p>
                    </div>
                </div>

                <div class="md:col-span-4 p-10 rounded-3xl bg-white border border-gray-200 shadow-sm">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="shield-check" class="text-black w-6 h-6"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Integrity First</h3>
                    <p class="text-gray-500">Multilayer verification prevents double-voting and ensures 100% accurate
                        results.</p>
                </div>

                <div
                    class="md:col-span-8 p-10 rounded-3xl bg-black text-white flex flex-col md:flex-row items-center gap-10">
                    <div class="flex-1">
                        <h3 class="text-3xl font-bold mb-4 text-blue-400">Not Just Polls.</h3>
                        <p class="text-gray-400 text-lg leading-relaxed">
                            From simple "Yes/No" questions to complex multiple-candidate races, Votely adapts to your
                            specific structural needs.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 bg-gray-900 rounded-2xl border border-gray-800 text-center">
                            <i data-lucide="bar-chart" class="w-6 h-6 mx-auto mb-2"></i>
                            <span class="text-xs uppercase font-bold tracking-widest">Surveys</span>
                        </div>
                        <div class="p-4 bg-gray-900 rounded-2xl border border-gray-800 text-center">
                            <i data-lucide="user-check" class="w-6 h-6 mx-auto mb-2"></i>
                            <span class="text-xs uppercase font-bold tracking-widest">Elections</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-gray-50">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-4xl md:text-5xl font-black text-black mb-6">Build your first vote today.</h2>
                <p class="text-gray-500 text-lg mb-10">Professional grade tools, accessible for everyone.</p>
                <a href="/register"
                    class="inline-block px-12 py-5 bg-blue-600 text-white rounded-full font-bold text-xl hover:bg-black transition-all transform hover:scale-105 duration-300">
                    Create Account
                </a>
            </div>
        </section>

</x-layouts.app>