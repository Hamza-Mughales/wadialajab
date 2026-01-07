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
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;800&family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    
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
            from { opacity: 0; }
            to { opacity: 1; }
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
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        @keyframes float {
            0%, 100% {
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
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-lg transition-all duration-300">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="flex items-center space-x-3 space-x-reverse group">
                    <div class="ml-2 w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-xl flex items-center justify-center transform group-hover:rotate-6 transition-transform duration-300">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text hidden sm:block">صندوق وادي العجب الخيري</span>
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-8 space-x-reverse">
                    <a href="{{ url('/') }}" class="text-gray-700 hover:text-red-600 font-semibold transition-colors duration-200 {{ request()->is('/') ? 'text-red-600' : '' }}">الرئيسية</a>
                    <a href="{{ url('/#about') }}" class="text-gray-700 hover:text-red-600 font-semibold transition-colors duration-200">من نحن</a>
                    <a href="{{ url('/#donate') }}" class="text-gray-700 hover:text-red-600 font-semibold transition-colors duration-200">تبرع الآن</a>
                    <a href="{{ url('/contact') }}" class="text-gray-700 hover:text-red-600 font-semibold transition-colors duration-200 {{ request()->is('contact') ? 'text-red-600' : '' }}">اتصل بنا</a>
                </div>
                
                <!-- CTA Button -->
                <div class="hidden lg:block">
                    <a href="{{ url('/#donate') }}" class="px-6 py-3 bg-gradient-to-r from-red-600 to-pink-600 text-white font-bold rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-300">
                        ساهم في إنقاذ حياة
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu lg:hidden">
                <div class="py-4 space-y-3">
                    <a href="{{ url('/') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-semibold transition-colors {{ request()->is('/') ? 'bg-red-50 text-red-600' : '' }}">الرئيسية</a>
                    <a href="{{ url('/#about') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-semibold transition-colors">من نحن</a>
                    <a href="{{ url('/#donate') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-semibold transition-colors">تبرع الآن</a>
                    <a href="{{ url('/contact') }}" class="block px-4 py-2 text-gray-700 hover:bg-red-50 hover:text-red-600 rounded-lg font-semibold transition-colors {{ request()->is('contact') ? 'bg-red-50 text-red-600' : '' }}">اتصل بنا</a>
                    <a href="{{ url('/#donate') }}" class="block mx-4 px-6 py-3 bg-gradient-to-r from-red-600 to-pink-600 text-white font-bold rounded-xl text-center shadow-lg">ساهم في إنقاذ حياة</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="bg-gradient-to-br from-gray-900 via-purple-900 to-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-12">
                <!-- About Section -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 space-x-reverse mb-4">
                        <div class="ml-4 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">صندوق وادي العجب</h3>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        نسعى لمد يد العون والمساعدة للمحتاجين في مجتمعنا من خلال مشاريع خيرية متنوعة تشمل التعليم والصحة والإغاثة.
                    </p>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h3 class="text-xl font-bold mb-6">تواصل معنا</h3>
                    <ul class="space-y-4">
                        <li class="flex items-start space-x-3 space-x-reverse">
                            <svg class="w-6 h-6 text-purple-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-gray-300" dir="ltr">+967 987 987 987</span>
                        </li>
                        <li class="flex items-start space-x-3 space-x-reverse">
                            <svg class="w-6 h-6 text-purple-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="text-gray-300">اليمن - صنعاء - تعز</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex items-center justify-center">
                    <p class="text-gray-400 text-center">
                        © <span id="current-year"></span> صندوق وادي العجب الخيري.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" class="fixed bottom-8 left-8 w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:shadow-xl hover:-translate-y-1 z-40 flex items-center justify-center">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
        </svg>
    </button>
    
    @vite('resources/js/app.js')
    
    <script>
        // Set current year
        document.getElementById('current-year').textContent = new Date().getFullYear();
        
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }
        
        // Scroll to Top Button
        const scrollToTopBtn = document.getElementById('scroll-to-top');
        
        window.addEventListener('scroll', () => {
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
        
        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;
        
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                navbar.classList.add('shadow-xl');
            } else {
                navbar.classList.remove('shadow-xl');
            }
            
            lastScroll = currentScroll;
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
