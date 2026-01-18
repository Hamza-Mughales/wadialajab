<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'صندوق وادي العجب الخيري - نسعى لمد يد العون والمساعدة للمحتاجين في مجتمعنا')">
    <meta name="keywords" content="@yield('meta_keywords', 'صندوق خيري, تبرعات, مساعدات, وادي العجب, charity, donations')">
    <meta name="author" content="صندوق وادي العجب الخيري">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'صندوق وادي العجب الخيري')">
    <meta property="og:description" content="@yield('og_description', 'نسعى لمد يد العون والمساعدة للمحتاجين في مجتمعنا')">

    <title>@yield('title', 'صندوق وادي العجب الخيري')</title>

    @vite('resources/css/app.css')

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&family=Tajawal:wght@300;400;500;700;800&display=swap"
        rel="stylesheet">

    <style>
        * {
            font-family: 'Cairo', 'Tajawal', sans-serif;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.5;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-slideInRight {
            animation: slideInRight 0.8s ease-out;
        }

        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out;
        }

        .animate-pulse-slow {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* Custom Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Progress Bar Animation */
        .progress-bar {
            transition: width 1.5s ease-out;
        }

        /* Hover Effects */
        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Mobile Menu */
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .mobile-menu.active {
            max-height: 500px;
        }

        /* Counter Animation */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: scale(0.5);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .counter {
            animation: countUp 0.8s ease-out;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-gray-50 antialiased">

    <!-- Navigation -->
    <nav id="navbar" class="fixed left-0 right-0 top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between sm:h-20">
                <!-- Logo (Right Side) -->
                <a href="{{ url('/') }}"
                    class="group relative z-10 flex items-center space-x-2 space-x-reverse sm:space-x-3">
                    <img src="{{ asset('logo.png') }}"
                        class="ml-2 h-10 w-10 transform object-contain drop-shadow-lg transition-transform duration-300 group-hover:rotate-6 sm:h-16 sm:w-16"
                        alt="Logo">
                    <span class="text-base font-bold text-white drop-shadow-lg sm:text-xl">صندوق وادي العجب
                        الخيري</span>
                </a>

                <!-- Desktop Menu -->
                <div class="absolute left-1/2 hidden -translate-x-1/2 items-center gap-10 lg:flex">
                    <a href="{{ url('/') }}"
                        class="{{ request()->is('/') ? 'text-blue-300' : '' }} font-semibold text-white drop-shadow-lg transition-colors duration-200 hover:text-blue-300">الرئيسية</a>
                    <a href="{{ url('/#about') }}"
                        class="font-semibold text-white drop-shadow-lg transition-colors duration-200 hover:text-blue-300">من
                        نحن</a>
                    <a href="{{ url('/apply') }}"
                        class="{{ request()->is('apply') ? 'text-blue-300' : '' }} font-semibold text-white drop-shadow-lg transition-colors duration-200 hover:text-blue-300">طلب
                        مساعدة</a>
                    <a href="{{ url('/#donate') }}"
                        class="font-semibold text-white drop-shadow-lg transition-colors duration-200 hover:text-blue-300">تبرع
                        الآن</a>
                </div>

                <!-- Mobile Menu Button (Left Side) -->
                <button id="mobile-menu-btn"
                    class="relative z-10 rounded-xl p-2.5 transition-colors hover:bg-white/20 lg:hidden">
                    <svg class="h-7 w-7 text-white drop-shadow-lg" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu lg:hidden">
                <div class="space-y-1 px-2 py-4 pb-4">
                    <a href="{{ url('/') }}"
                        class="{{ request()->is('/') ? 'bg-blue-50 text-blue-600' : '' }} flex items-center justify-start rounded-xl px-6 py-3 text-lg font-semibold text-gray-700 transition-all hover:bg-gray-50">
                        <span class="ml-3">الرئيسية</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ url('/#about') }}"
                        class="{{ request()->is('#about') ? 'bg-blue-50 text-blue-600' : '' }} flex items-center justify-start rounded-xl px-6 py-3 text-lg font-semibold text-gray-700 transition-all hover:bg-gray-50">
                        <span class="ml-3">من نحن</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </a>
                    <a href="{{ url('/apply') }}"
                        class="{{ request()->is('apply') ? 'bg-blue-50 text-blue-600' : '' }} flex items-center justify-start rounded-xl px-6 py-3 text-lg font-semibold text-gray-700 transition-all hover:bg-gray-50">
                        <span class="ml-3">طلب مساعدة</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{ url('/#donate') }}"
                        class="flex items-center justify-start rounded-xl px-6 py-3 text-lg font-semibold text-gray-700 transition-all hover:bg-gray-50">
                        <span class="ml-3">تبرع الآن</span>
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </a>
                    <div class="px-2 pt-3">
                        <a href="{{ url('/#donate') }}"
                            class="block rounded-2xl bg-gradient-to-r from-blue-500 to-emerald-400 px-8 py-3.5 text-center text-lg font-bold text-white shadow-lg">
                            ساهم في إنقاذ حياة
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 pb-8 pt-16 text-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-12 grid grid-cols-1 gap-12 md:grid-cols-2">
                <!-- About Section -->
                <div class="space-y-4">
                    <div class="mb-4 flex items-center space-x-3 space-x-reverse">
                        <img src="{{ asset('logo.png') }}" class="ml-4 h-12 w-12 object-contain" alt="Logo">
                        <h3 class="text-xl font-bold">صندوق وادي العجب</h3>
                    </div>
                    <p class="leading-relaxed text-gray-300">
                        نسعى لمد يد العون والمساعدة للمحتاجين في مجتمعنا من خلال مشاريع خيرية متنوعة تشمل التعليم والصحة
                        والإغاثة.
                    </p>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="mb-6 text-xl font-bold">تواصل معنا</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3 space-x-reverse">
                            <svg class="mt-1 h-6 w-6 flex-shrink-0 text-purple-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                            <span class="text-gray-300" dir="ltr">+967 987 987 987</span>
                        </li>
                        <li class="flex items-start space-x-3 space-x-reverse">
                            <svg class="mt-1 h-6 w-6 flex-shrink-0 text-purple-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-300">اليمن - صنعاء - تعز</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col-reverse items-center justify-between gap-4 sm:flex-row">
                    <a href="https://hamza-mughales.github.io/" target="_blank" rel="noopener noreferrer"
                        class="group flex items-center space-x-2 space-x-reverse text-gray-400 transition-all duration-300 hover:text-white">
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:scale-110" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                        <span class="text-sm font-medium">Developed by Hamza</span>
                    </a>
                    <p class="text-center text-gray-400 sm:flex-1">
                        © <span id="current-year"></span> صندوق وادي العجب الخيري.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top"
        class="invisible fixed bottom-8 left-8 z-40 flex h-12 w-12 items-center justify-center rounded-full bg-gradient-to-r from-blue-600 to-emerald-500 text-white opacity-0 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18">
            </path>
        </svg>
    </button>

    @vite('resources/js/app.js')

    <script>
        // Set current year
        document.getElementById('current-year').textContent = new Date().getFullYear();

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const navbar = document.getElementById('navbar');
        let isMobileMenuOpen = false;

        // Get all desktop menu links and logo text
        const desktopLinks = navbar.querySelectorAll('.hidden.lg\\:flex a');
        const logoTextElements = navbar.querySelectorAll('a[href*="/"] span'); // Get ALL logo text spans (mobile + desktop)
        const menuIcon = mobileMenuBtn?.querySelector('svg');

        // Function to update navbar background based on scroll and menu state
        function updateNavbarBackground() {
            const currentScroll = window.pageYOffset;
            const shouldShowBackground = isMobileMenuOpen || currentScroll > 50;

            if (shouldShowBackground) {
                // Add white background
                navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-lg');

                // Change text colors to dark for better contrast
                desktopLinks.forEach(link => {
                    link.classList.remove('text-white', 'hover:text-blue-300');
                    link.classList.add('text-gray-800', 'hover:text-blue-600');
                });

                // Update all logo text elements (mobile + desktop)
                logoTextElements.forEach(logoText => {
                    logoText.classList.remove('text-white');
                    logoText.classList.add('text-gray-800');
                });

                if (menuIcon) {
                    menuIcon.classList.remove('text-white');
                    menuIcon.classList.add('text-gray-800');
                }


            } else {
                // Remove white background
                navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-lg');

                // Change text colors back to white
                desktopLinks.forEach(link => {
                    link.classList.remove('text-gray-800', 'hover:text-blue-600');
                    link.classList.add('text-white', 'hover:text-blue-300');
                });

                // Update all logo text elements (mobile + desktop)
                logoTextElements.forEach(logoText => {
                    logoText.classList.remove('text-gray-800');
                    logoText.classList.add('text-white');
                });

                if (menuIcon) {
                    menuIcon.classList.remove('text-gray-800');
                    menuIcon.classList.add('text-white');
                }


            }
        }

        if (mobileMenuBtn && mobileMenu) {
            // Toggle menu on button click
            mobileMenuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                isMobileMenuOpen = mobileMenu.classList.toggle('active');
                updateNavbarBackground();
            });

            // Close menu when clicking outside
            document.addEventListener('click', (e) => {
                if (isMobileMenuOpen && !navbar.contains(e.target)) {
                    mobileMenu.classList.remove('active');
                    isMobileMenuOpen = false;
                    updateNavbarBackground();
                }
            });

            // Close menu when clicking on a link
            const menuLinks = mobileMenu.querySelectorAll('a');
            menuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.remove('active');
                    isMobileMenuOpen = false;
                    updateNavbarBackground();
                });
            });
        }

        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scroll-to-top');

        window.addEventListener('scroll', () => {
            // Update navbar background on scroll
            updateNavbarBackground();

            // Show/hide scroll to top button
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.remove('opacity-0', 'invisible');
                scrollToTopBtn.classList.add('opacity-100', 'visible');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible');
                scrollToTopBtn.classList.remove('opacity-100', 'visible');
            }
        });

        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe all elements with data-animate attribute
        document.querySelectorAll('[data-animate]').forEach(el => {
            observer.observe(el);
        });
    </script>

    @stack('scripts')
</body>

</html>
