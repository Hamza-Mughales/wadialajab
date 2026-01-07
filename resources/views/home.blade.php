@extends('layouts.charity')

@section('title', 'صندوق وادي العجب الخيري - دعم المرضى المحتاجين')
@section('meta_description', 'صندوق وادي العجب الخيري يساعد المرضى المحتاجين في تكاليف العلاج والأدوية والعمليات الجراحية')

@section('content')

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
    </div>
    
    <!-- Floating Medical Icons -->
    <div class="absolute top-20 right-20 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float"></div>
    <div class="absolute bottom-20 left-20 w-72 h-72 bg-emerald-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-float" style="animation-delay: 2s;"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-5xl mx-auto">
            <!-- Medical Icon -->
            <div class="mb-8 flex justify-center">
                <div class="w-32 h-32 bg-white/10 backdrop-blur-md rounded-3xl flex items-center justify-center animate-float">
                    <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-5xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-6 leading-tight animate-fadeInUp">
                معًا نُنقذ الأرواح
                <span class="block text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-emerald-300 mt-2">
                    ونُخفف الآلام
                </span>
            </h1>
            
            <p class="text-xl sm:text-2xl text-blue-100 mb-12 leading-relaxed max-w-3xl mx-auto animate-fadeInUp" style="animation-delay: 0.2s;">
                صندوق وادي العجب الخيري يساعد المرضى المحتاجين في تكاليف العلاج والأدوية والعمليات الجراحية. تبرعك ينقذ حياة إنسان
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6 mb-16 animate-fadeInUp" style="animation-delay: 0.4s;">
                <a href="#donate" class="group px-8 sm:px-12 py-4 sm:py-6 bg-gradient-to-r from-blue-600 to-emerald-500 text-white text-lg sm:text-2xl font-bold rounded-2xl shadow-2xl hover:shadow-blue-500/50 transform hover:-translate-y-2 transition-all duration-300 flex items-center space-x-3 space-x-reverse">
                    <svg class="ml-2 w-8 h-8 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                    <span>ساهم في إنقاذ حياة</span>
                </a>
                
                <a href="#about" class="px-8 sm:px-12 py-4 sm:py-6 bg-white/10 backdrop-blur-md text-white text-lg sm:text-2xl font-bold rounded-2xl border-2 border-white/30 hover:bg-white/20 transform hover:-translate-y-2 transition-all duration-300 flex items-center space-x-3 space-x-reverse">
                    <span>تعرف على مهمتنا</span>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-8 max-w-4xl mx-auto animate-fadeInUp" style="animation-delay: 0.6s;">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-2">
                    <div class="text-3xl sm:text-5xl font-extrabold text-blue-300 mb-2 counter" data-target="850">0</div>
                    <div class="text-lg text-blue-100 font-semibold">مريض تم مساعدته</div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-2">
                    <div class="text-3xl sm:text-5xl font-extrabold text-blue-300 mb-2 counter" data-target="320">0</div>
                    <div class="text-lg text-blue-100 font-semibold">عملية جراحية</div>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 hover:-translate-y-2">
                    <div class="text-3xl sm:text-5xl font-extrabold text-blue-300 mb-2">
                        <span class="counter" data-target="15">0</span>
                        <span class="text-2xl sm:text-3xl">M+</span>
                    </div>
                    <div class="text-lg text-blue-100 font-semibold">ريال تم جمعه</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-white" data-animate>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">
                    من <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-500">نحن</span>
                </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-emerald-500 mx-auto rounded-full"></div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-6">
                    <div class="bg-gradient-to-br from-blue-50 to-emerald-50 rounded-3xl p-8 border-2 border-blue-100">
                        <div class="flex items-start space-x-4 space-x-reverse mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-emerald-500 rounded-2xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">مهمتنا</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    تقديم الدعم المالي للمرضى المحتاجين لتغطية تكاليف العلاج والأدوية والعمليات الجراحية، وإنقاذ الأرواح وتخفيف معاناة المرضى وأسرهم.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-emerald-50 rounded-3xl p-8 border-2 border-blue-100">
                        <div class="flex items-start space-x-4 space-x-reverse mb-6">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-emerald-500 rounded-2xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 mb-3">رؤيتنا</h3>
                                <p class="text-lg text-gray-700 leading-relaxed">
                                    أن نكون الملاذ الأول للمرضى المحتاجين، حيث لا يُحرم أي مريض من العلاج بسبب عدم القدرة المالية، ونساهم في بناء مجتمع صحي متكافل.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Medical Services -->
                <div class="space-y-6">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-8">ما نقدمه للمرضى</h3>
                    
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4 space-x-reverse p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-r-4 border-blue-600">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">تكاليف العمليات الجراحية</h4>
                                <p class="text-gray-600">نتكفل بتكاليف العمليات الجراحية العاجلة والضرورية للمرضى المحتاجين</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 space-x-reverse p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-r-4 border-emerald-500">
                            <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">الأدوية والعلاجات</h4>
                                <p class="text-gray-600">توفير الأدوية المكلفة والعلاجات الطبية للمرضى غير القادرين</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 space-x-reverse p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-r-4 border-cyan-500">
                            <div class="w-12 h-12 bg-cyan-100 rounded-xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-6 h-6 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">الفحوصات والتحاليل</h4>
                                <p class="text-gray-600">تغطية تكاليف الفحوصات الطبية والتحاليل اللازمة للتشخيص</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4 space-x-reverse p-6 bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1 border-r-4 border-blue-600">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 ml-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-gray-900 mb-2">الحالات الطارئة</h4>
                                <p class="text-gray-600">التدخل السريع في الحالات الطارئة التي تتطلب علاجًا فوريًا</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Donation Section -->
<section id="donate" class="py-20 bg-white" data-animate>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-4">
                    ساهم في <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-emerald-500">إنقاذ حياة</span>
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    تبرعك اليوم قد ينقذ حياة مريض محتاج. كل ريال يُحدث فرقًا
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Donation Impact -->
                <div class="space-y-8">
                    <div class="bg-gradient-to-br from-blue-600 to-emerald-500 rounded-3xl p-8 text-white shadow-2xl">
                        <div class="text-center mb-6">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-bold mb-3">اشتراك شهري</h3>
                            <p class="text-blue-100 text-lg">كن شريكاً دائماً في الخير</p>
                        </div>
                        
                        <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8 border-2 border-white/20">
                            <div class="text-center mb-6">
                                <div class="text-4xl sm:text-6xl font-extrabold mb-2">1,000</div>
                                <div class="text-xl font-semibold text-blue-100">ريال شهرياً</div>
                            </div>
                            
                            <div class="space-y-4">
                                <div class="flex items-center space-x-3 space-x-reverse">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-blue-50">مساهمة مستمرة في إنقاذ الأرواح</span>
                                </div>
                                
                                <div class="flex items-center space-x-3 space-x-reverse">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-blue-50">دعم شهري لمرضى محتاجين</span>
                                </div>
                                
                                <div class="flex items-center space-x-3 space-x-reverse">
                                    <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-blue-50">أجر متجدد كل شهر</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-6 text-center">
                            <p class="text-sm text-blue-100 leading-relaxed">
                                يمكنك الاشتراك الشهري بإيداع 1,000 ريال شهرياً في أي من حساباتنا البنكية
                            </p>
                        </div>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="bg-gradient-to-br from-blue-50 to-emerald-50 rounded-3xl p-8 border-2 border-blue-100 text-center">
                        <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">كل تبرع يُحدث فرقًا</h3>
                        <p class="text-gray-600 leading-relaxed">
                            تبرعك يساهم في إنقاذ حياة مريض محتاج وتخفيف معاناته. شكراً لكرمك وعطائك
                        </p>
                    </div>
                </div>
                
                <!-- Bank Accounts -->
                <div>
                    <div class="bg-gradient-to-br from-blue-50 to-emerald-50 rounded-3xl p-8 sm:p-10 border-2 border-blue-100 shadow-2xl">
                        <!-- Header -->
                        <div class="text-center mb-10">
                            <div class="w-20 h-20 bg-gradient-to-br from-blue-600 to-emerald-500 rounded-2xl flex items-center justify-center mx-auto mb-5 shadow-lg">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-gray-900 mb-3">الحسابات البنكية</h3>
                            <p class="text-lg text-gray-600 font-semibold">بنك الكريمي الإسلامي</p>
                        </div>
                        
                        <!-- Bank Accounts Cards -->
                        <div class="space-y-5">
                            <!-- YER Account -->
                            <div class="bg-white rounded-2xl p-6 border-2 border-blue-200 hover:border-blue-400 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-base font-bold text-gray-800">الحساب بالريال اليمني</div>
                                    <span class="px-4 py-1.5 bg-gradient-to-r from-blue-600 to-emerald-500 text-white text-sm font-bold rounded-full shadow-md">ريال</span>
                                </div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-gray-900 font-mono text-center tracking-wider" dir="ltr">121525025</div>
                            </div>
                            
                            <!-- SAR Account -->
                            <div class="bg-white rounded-2xl p-6 border-2 border-blue-200 hover:border-blue-400 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-base font-bold text-gray-800">الحساب بالريال السعودي</div>
                                    <span class="px-4 py-1.5 bg-gradient-to-r from-blue-600 to-emerald-500 text-white text-sm font-bold rounded-full shadow-md">ر.س</span>
                                </div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-gray-900 font-mono text-center tracking-wider" dir="ltr">421204501</div>
                            </div>
                            
                            <!-- Legitimacy Areas Account -->
                            <div class="bg-white rounded-2xl p-6 border-2 border-blue-200 hover:border-blue-400 transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="text-base font-bold text-gray-800">الحساب بالريال - مناطق الشرعية</div>
                                    <span class="px-4 py-1.5 bg-gradient-to-r from-blue-600 to-emerald-500 text-white text-sm font-bold rounded-full shadow-md">ريال</span>
                                </div>
                                <div class="text-2xl sm:text-3xl font-extrabold text-gray-900 font-mono text-center tracking-wider" dir="ltr">3155039611</div>
                            </div>
                        </div>
                        
                        <!-- Note -->
                        <div class="mt-8 p-5 bg-white rounded-2xl border-2 border-blue-200 shadow-sm">
                            <div class="flex items-start space-x-3 space-x-reverse">
                                <svg class="w-6 h-6 text-blue-600 flex-shrink-0 mt-0.5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-sm text-gray-700 leading-relaxed font-medium">
                                    يمكنك التبرع عبر الإيداع المباشر في أي حساب عبر بنك الكريمي الإسلامي
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900 text-white" data-animate>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl sm:text-5xl font-extrabold mb-6">
                تواصل معنا
            </h2>
            <p class="text-xl text-blue-100 mb-12 leading-relaxed">
                نحن هنا لمساعدتك. تواصل معنا لأي استفسار أو للتقديم على المساعدة الطبية
            </p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">الهاتف</h3>
                    <p class="text-blue-100" dir="ltr">+967 987 987 987</p>
                </div>
                
                <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 border border-white/20">
                    <div class="w-16 h-16 bg-white/20 rounded-xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-2">العنوان</h3>
                    <p class="text-blue-100">اليمن - صنعاء - تعز</p>
                </div>
            </div>
            
            <!-- Social Media -->
            <div class="flex items-center justify-center space-x-4 space-x-reverse">
                <a href="#" class="ml-4 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="#" class="ml-4 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-all duration-300 hover:-translate-y-1">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Counter Animation
    function animateCounter(element) {
        const target = parseInt(element.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target.toLocaleString('ar-EG');
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString('ar-EG');
            }
        }, 16);
    }
    
    // Observe counters
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && entry.target.textContent === '0') {
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    document.querySelectorAll('.counter').forEach(counter => {
        counterObserver.observe(counter);
    });
    
    // Smooth scroll to sections
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
@endpush
