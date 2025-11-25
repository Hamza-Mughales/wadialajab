<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صندوق وادي العجب الخيري</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Cairo', sans-serif;
        }
        
        @keyframes float {
            0% { transform: translateY(0); }
            100% { transform: translateY(-100px); }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-float {
            animation: float 20s linear infinite;
        }
        
        .animate-slideUp {
            animation: slideUp 0.6s ease-out;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#667eea] via-[#764ba2] to-[#f093fb] min-h-screen flex items-center justify-center p-4 sm:p-6 md:p-8 relative overflow-x-hidden">
    <div class="absolute inset-0 animate-float" style="background: url('data:image/svg+xml,<svg width=&quot;100&quot; height=&quot;100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;2&quot; fill=&quot;white&quot; opacity=&quot;0.1&quot;/></svg>');"></div>
    
    <div class="bg-white/95 backdrop-blur-xl rounded-2xl sm:rounded-3xl shadow-2xl p-6 sm:p-8 md:p-12 w-full max-w-4xl relative animate-slideUp">
        <!-- Header -->
        <div class="text-center mb-8 sm:mb-12">
            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-3 sm:mb-4 bg-gradient-to-r from-[#667eea] to-[#764ba2] bg-clip-text text-transparent leading-tight">
                صندوق وادي العجب الخيري
            </h1>
            <p class="text-gray-600 text-base sm:text-lg leading-relaxed px-2">
                نسعى لمد يد العون والمساعدة للمحتاجين في مجتمعنا<br class="hidden sm:block">
                <span class="block sm:inline">مساهمتك تصنع الفرق في حياة الآخرين</span>
            </p>
        </div>

        <!-- Bank Accounts Section -->
        <div class="mb-8 sm:mb-10">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-700 mb-4 sm:mb-6 flex items-center gap-2 sm:gap-3">
                <span class="w-1 h-6 sm:h-7 bg-gradient-to-b from-[#667eea] to-[#764ba2] rounded"></span>
                الحسابات البنكية
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <!-- YER Account -->
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-gray-200 rounded-xl sm:rounded-2xl p-4 sm:p-6 transition-all duration-300 hover:border-[#667eea] hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#667eea] to-[#764ba2] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    <div class="text-xs sm:text-sm text-gray-600 mb-2 font-semibold">الحساب بالريال اليمني</div>
                    <div class="text-lg sm:text-xl font-bold text-gray-800 text-left break-all" dir="ltr">
                        <span class="inline-block bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-semibold mr-1 sm:mr-2">ريال</span>
                        121525025
                    </div>
                </div>

                <!-- SAR Account -->
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-gray-200 rounded-xl sm:rounded-2xl p-4 sm:p-6 transition-all duration-300 hover:border-[#667eea] hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#667eea] to-[#764ba2] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    <div class="text-xs sm:text-sm text-gray-600 mb-2 font-semibold">الحساب بالريال السعودي</div>
                    <div class="text-lg sm:text-xl font-bold text-gray-800 text-left break-all" dir="ltr">
                        <span class="inline-block bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-semibold mr-1 sm:mr-2">ر.س</span>
                        421204501
                    </div>
                </div>

                <!-- USD Account -->
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-gray-200 rounded-xl sm:rounded-2xl p-4 sm:p-6 transition-all duration-300 hover:border-[#667eea] hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#667eea] to-[#764ba2] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    <div class="text-xs sm:text-sm text-gray-600 mb-2 font-semibold">الحساب بالريال - مناطق الشرعية</div>
                    <div class="text-lg sm:text-xl font-bold text-gray-800 text-left break-all" dir="ltr">
                        <span class="inline-block bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white px-2 sm:px-3 py-1 rounded-full text-xs sm:text-sm font-semibold mr-1 sm:mr-2">ريال</span>
                        3155039611
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section
        <div class="mb-8 sm:mb-10">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-700 mb-4 sm:mb-6 flex items-center gap-2 sm:gap-3">
                <span class="w-1 h-6 sm:h-7 bg-gradient-to-b from-[#667eea] to-[#764ba2] rounded"></span>
                التواصل معنا
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
                <div class="group bg-gradient-to-br from-purple-50 to-pink-50 border-2 border-gray-200 rounded-xl sm:rounded-2xl p-4 sm:p-6 transition-all duration-300 hover:border-[#667eea] hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-200 relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-[#667eea] to-[#764ba2] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300"></div>
                    <div class="text-xs sm:text-sm text-gray-600 mb-2 font-semibold">رقم الهاتف</div>
                    <div class="text-lg sm:text-xl font-bold text-gray-800 text-left flex items-center justify-end" dir="ltr">
                        <span>987987987</span>
                        <svg class="w-6 h-6 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- CTA Section -->
        <div class="text-center mt-8 sm:mt-12 pt-6 sm:pt-8 border-t-2 border-gray-200">
            <a href="{{ url('/join') }}" class="inline-block px-8 sm:px-12 py-4 sm:py-5 bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white text-lg sm:text-xl font-bold rounded-xl shadow-lg shadow-purple-400/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl hover:shadow-purple-400/60 active:translate-y-0">
                انضم إلينا الآن
            </a>
            
            <p class="mt-6 sm:mt-8 text-green-600 text-base sm:text-lg font-semibold px-4">
                عطاؤكم يصنع أثرًا كبيرًا
            </p>
        </div>
    </div>
</body>
</html>
