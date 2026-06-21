@extends('layouts.charity')

@section('title', 'صندوق وادي العجب الخيري - دعم المرضى المحتاجين')
@section('meta_description', 'صندوق وادي العجب الخيري يساعد المرضى المحتاجين في تكاليف العلاج والأدوية والعمليات
    الجراحية')

@section('content')

    <!-- Hero Section -->
    <section
        class="relative flex min-h-screen items-center justify-center overflow-hidden bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900 pt-20">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>

        <!-- Floating Medical Icons -->
        <div
            class="animate-float absolute right-20 top-20 h-72 w-72 rounded-full bg-blue-500 opacity-20 mix-blend-multiply blur-3xl filter">
        </div>
        <div class="animate-float absolute bottom-20 left-20 h-72 w-72 rounded-full bg-emerald-500 opacity-20 mix-blend-multiply blur-3xl filter"
            style="animation-delay: 2s;"></div>

        <div class="container relative z-10 mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-5xl text-center">
                <!-- Medical Icon -->
                <div class="mb-8 flex justify-center">
                    <div
                        class="animate-float flex h-32 w-32 items-center justify-center rounded-3xl bg-white/10 backdrop-blur-md">
                        <svg class="h-20 w-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="animate-fadeInUp mb-6 text-5xl font-extrabold leading-tight text-white sm:text-6xl lg:text-7xl">
                    معًا نُنقذ الأرواح
                    <span class="mt-2 block bg-gradient-to-r from-blue-300 to-emerald-300 bg-clip-text text-transparent">
                        ونُخفف الآلام
                    </span>
                </h1>

                <p class="animate-fadeInUp mx-auto mb-12 max-w-3xl text-xl leading-relaxed text-blue-100 sm:text-2xl"
                    style="animation-delay: 0.2s;">
                    صندوق وادي العجب الخيري يساعد المرضى المحتاجين في تكاليف العلاج والأدوية والعمليات الجراحية. تبرعك ينقذ
                    حياة إنسان
                </p>

                <!-- CTA Buttons -->
                <div class="animate-fadeInUp mb-16 flex flex-col items-center justify-center gap-6 sm:flex-row"
                    style="animation-delay: 0.4s;">
                    <a href="#donate"
                        class="group flex transform items-center space-x-3 space-x-reverse rounded-2xl bg-gradient-to-r from-blue-600 to-emerald-500 px-8 py-4 text-lg font-bold text-white shadow-2xl transition-all duration-300 hover:-translate-y-2 hover:shadow-blue-500/50 sm:px-12 sm:py-6 sm:text-2xl">
                        <svg class="ml-2 h-8 w-8 transition-transform group-hover:scale-110" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                        <span>ساهم في إنقاذ حياة</span>
                    </a>

                    <a href="#about"
                        class="flex transform items-center space-x-3 space-x-reverse rounded-2xl border-2 border-white/30 bg-white/10 px-8 py-4 text-lg font-bold text-white backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:bg-white/20 sm:px-12 sm:py-6 sm:text-2xl">
                        <span>تعرف على مهمتنا</span>
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                </div>

                <!-- Stats -->
                <div class="animate-fadeInUp mx-auto grid max-w-4xl grid-cols-1 gap-8 sm:grid-cols-3"
                    style="animation-delay: 0.6s;">
                    <div
                        class="rounded-2xl border border-white/20 bg-white/10 p-8 backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:bg-white/20">
                        <div class="counter mb-2 text-3xl font-extrabold text-blue-300 sm:text-5xl">+500
                        </div>
                        <div class="text-lg font-semibold text-blue-100">مريض تم مساعدته</div>
                    </div>

                    <div
                        class="rounded-2xl border border-white/20 bg-white/10 p-8 backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:bg-white/20">
                        <div class="counter mb-2 text-3xl font-extrabold text-blue-300 sm:text-5xl">+200
                        </div>
                        <div class="text-lg font-semibold text-blue-100">عملية جراحية</div>
                    </div>

                    <div
                        class="rounded-2xl border border-white/20 bg-white/10 p-8 backdrop-blur-md transition-all duration-300 hover:-translate-y-2 hover:bg-white/20">
                        <div class="mb-2 text-3xl font-extrabold text-blue-300 sm:text-5xl">
                            <span class="counter">+5</span>
                            <span class="text-2xl sm:text-3xl">مليون</span>
                        </div>
                        <div class="text-lg font-semibold text-blue-100">ريال تم جمعه</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 transform animate-bounce">
            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-white py-20" data-animate>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-6xl">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 sm:text-5xl">
                        من <span
                            class="bg-gradient-to-r from-blue-600 to-emerald-500 bg-clip-text text-transparent">نحن</span>
                    </h2>
                    <div class="mx-auto h-1 w-24 rounded-full bg-gradient-to-r from-blue-600 to-emerald-500"></div>
                </div>

                <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                    <!-- Text Content -->
                    <div class="space-y-6">
                        <div class="rounded-3xl border-2 border-blue-100 bg-gradient-to-br from-blue-50 to-emerald-50 p-8">
                            <div class="mb-6 flex items-start space-x-4 space-x-reverse">
                                <div
                                    class="ml-4 flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-emerald-500">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-3 text-2xl font-bold text-gray-900">مهمتنا</h3>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        تقديم الدعم المالي للمرضى المحتاجين لتغطية تكاليف العلاج والأدوية والعمليات
                                        الجراحية، وإنقاذ الأرواح وتخفيف معاناة المرضى وأسرهم.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border-2 border-blue-100 bg-gradient-to-br from-blue-50 to-emerald-50 p-8">
                            <div class="mb-6 flex items-start space-x-4 space-x-reverse">
                                <div
                                    class="ml-4 flex h-16 w-16 flex-shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-600 to-emerald-500">
                                    <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="mb-3 text-2xl font-bold text-gray-900">رؤيتنا</h3>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        أن نكون الملاذ الأول للمرضى المحتاجين، حيث لا يُحرم أي مريض من العلاج بسبب عدم
                                        القدرة المالية، ونساهم في بناء مجتمع صحي متكافل.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medical Services -->
                    <div class="space-y-6">
                        <h3 class="mb-8 text-2xl font-bold text-gray-900 sm:text-3xl">ما نقدمه للمرضى</h3>

                        <div class="space-y-4">
                            <div
                                class="flex items-start space-x-4 space-x-reverse rounded-2xl border-r-4 border-blue-600 bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                <div
                                    class="ml-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-blue-100">
                                    <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-2 text-xl font-bold text-gray-900">تكاليف العمليات الجراحية</h4>
                                    <p class="text-gray-600">نتكفل بتكاليف العمليات الجراحية العاجلة والضرورية للمرضى
                                        المحتاجين</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start space-x-4 space-x-reverse rounded-2xl border-r-4 border-emerald-500 bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                <div
                                    class="ml-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-emerald-100">
                                    <svg class="h-6 w-6 text-emerald-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-2 text-xl font-bold text-gray-900">تكاليف الدواء</h4>
                                    <p class="text-gray-600">توفير الأدوية المكلفة والضرورية للمرضى غير القادرين</p>
                                </div>
                            </div>

                            <div
                                class="flex items-start space-x-4 space-x-reverse rounded-2xl border-r-4 border-cyan-500 bg-white p-6 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
                                <div
                                    class="ml-4 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-xl bg-cyan-100">
                                    <svg class="h-6 w-6 text-cyan-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="mb-2 text-xl font-bold text-gray-900">تكاليف التحاليل المخبرية</h4>
                                    <p class="text-gray-600">تغطية تكاليف التحاليل الطبية اللازمة للتشخيص والمتابعة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section id="donate" class="bg-white py-20" data-animate>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-6xl">
                <div class="mb-16 text-center">
                    <h2 class="mb-4 text-4xl font-extrabold text-gray-900 sm:text-5xl">
                        ساهم في <span
                            class="bg-gradient-to-r from-blue-600 to-emerald-500 bg-clip-text text-transparent">إنقاذ
                            حياة</span>
                    </h2>
                    <p class="mx-auto max-w-3xl text-xl text-gray-600">
                        تبرعك اليوم قد ينقذ حياة مريض محتاج. كل ريال يُحدث فرقًا
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                    <!-- Donation Impact -->
                    <div class="space-y-8">
                        <div class="rounded-3xl bg-gradient-to-br from-blue-600 to-emerald-500 p-8 text-white shadow-2xl">
                            <div class="mb-6 text-center">
                                <div
                                    class="mx-auto mb-4 flex h-20 w-20 items-center justify-center rounded-full bg-white/20">
                                    <svg class="h-10 w-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <h3 class="mb-3 text-2xl font-bold sm:text-3xl">اشتراك شهري</h3>
                                <p class="text-lg text-blue-100">كن شريكاً دائماً في الخير</p>
                            </div>

                            <div class="rounded-2xl border-2 border-white/20 bg-white/10 p-8 backdrop-blur-sm">
                                <div class="mb-6 text-center">
                                    <div class="mb-2 text-4xl font-extrabold sm:text-6xl">1,000</div>
                                    <div class="text-xl font-semibold text-blue-100">ريال شهرياً <span
                                            class="font-bold text-yellow-300 decoration-2 underline-offset-4">على
                                            الأقل</span></div>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex items-center space-x-3 space-x-reverse">
                                        <svg class="h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-blue-50">مساهمة مستمرة في إنقاذ الأرواح</span>
                                    </div>

                                    <div class="flex items-center space-x-3 space-x-reverse">
                                        <svg class="h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-blue-50">دعم شهري لمرضى محتاجين</span>
                                    </div>

                                    <div class="flex items-center space-x-3 space-x-reverse">
                                        <svg class="h-6 w-6 flex-shrink-0" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span class="text-blue-50">أجر متجدد كل شهر</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 text-center">
                                <p class="text-sm leading-relaxed text-blue-100">
                                    يمكنك الاشتراك الشهري بإيداع 1,000 ريال شهرياً <span
                                        class="font-bold text-yellow-300">على الأقل</span> في أي من حساباتنا البنكية أو
                                    عبر محفظة جيب
                                </p>
                            </div>
                        </div>

                        <!-- Call to Action -->
                        <div
                            class="rounded-3xl border-2 border-blue-100 bg-gradient-to-br from-blue-50 to-emerald-50 p-8 text-center">
                            <div
                                class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-full bg-gradient-to-br from-blue-600 to-emerald-500">
                                <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mb-4 text-2xl font-bold text-gray-900">كل تبرع يُحدث فرقًا</h3>
                            <p class="leading-relaxed text-gray-600">
                                تبرعك يساهم في إنقاذ حياة مريض محتاج وتخفيف معاناته. شكراً لكرمك وعطائك
                            </p>
                        </div>
                    </div>

                    <!-- Donation Methods -->
                    <div>
                        <div class="rounded-3xl border border-gray-100 bg-white p-6 shadow-xl sm:p-8">
                            <div class="mb-8 text-center">
                                <h3 class="mb-2 text-2xl font-extrabold text-gray-900 sm:text-3xl">طرق التبرع</h3>
                                <p class="text-base text-gray-500">اختر الطريقة المناسبة لك وأكمل التحويل</p>
                            </div>

                            <div class="space-y-6">
                                <!-- AlKuraimi Bank -->
                                <div class="overflow-hidden rounded-2xl border border-gray-200 shadow-sm">
                                    <div
                                        class="border-b border-blue-100 bg-gradient-to-br from-blue-50 to-emerald-50 px-6 py-7 sm:py-8">
                                        <img src="{{ asset('alkuraimi-logo.png') }}"
                                            alt="بنك الكريمي للتمويل الأصغر الإسلامي"
                                            class="mx-auto h-auto w-full max-w-xs object-contain invert sm:max-w-sm md:max-w-md">
                                    </div>

                                    <div class="grid grid-cols-1 gap-3 bg-gray-50 p-4 md:grid-cols-3 md:gap-4 md:p-5">
                                        <div
                                            class="min-w-0 rounded-xl border border-blue-100 bg-white p-4 text-center transition-shadow hover:shadow-md">
                                            <span
                                                class="mb-3 inline-block rounded-full bg-gradient-to-r from-blue-600 to-emerald-500 px-3 py-1 text-xs font-bold text-white">ريال
                                                يمني</span>
                                            <p class="mb-2 text-sm font-semibold text-gray-600">الحساب الرئيسي</p>
                                            <p class="break-all font-mono text-sm font-bold text-gray-900 sm:text-base"
                                                dir="ltr">121525025</p>
                                        </div>

                                        <div
                                            class="min-w-0 rounded-xl border border-blue-100 bg-white p-4 text-center transition-shadow hover:shadow-md">
                                            <span
                                                class="mb-3 inline-block rounded-full bg-gradient-to-r from-blue-600 to-emerald-500 px-3 py-1 text-xs font-bold text-white">ريال
                                                سعودي</span>
                                            <p class="mb-2 text-sm font-semibold text-gray-600">حساب التحويل</p>
                                            <p class="break-all font-mono text-sm font-bold text-gray-900 sm:text-base"
                                                dir="ltr">421204501</p>
                                        </div>

                                        <div
                                            class="min-w-0 rounded-xl border border-blue-100 bg-white p-4 text-center transition-shadow hover:shadow-md">
                                            <span
                                                class="mb-3 inline-block rounded-full bg-gradient-to-r from-blue-600 to-emerald-500 px-3 py-1 text-xs font-bold text-white">ريال
                                                يمني</span>
                                            <p class="mb-2 text-sm font-semibold text-gray-600">حساب عدن</p>
                                            <p class="break-all font-mono text-sm font-bold text-gray-900 sm:text-base"
                                                dir="ltr">3155039611</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Jaib Wallet -->
                                <div class="overflow-hidden rounded-2xl border border-red-100 shadow-sm">
                                    <div class="flex items-center gap-4 border-b border-red-100 bg-white px-6 py-5">
                                        <img src="{{ asset('jaib-logo.png') }}" alt="محفظة جيب"
                                            class="h-12 w-auto shrink-0 object-contain sm:h-14">
                                        <div>
                                            <h4 class="text-lg font-bold text-gray-900">محفظة جيب</h4>
                                            <p class="text-sm text-gray-500">تحويل مباشر عبر المحفظة الإلكترونية</p>
                                        </div>
                                    </div>

                                    <div class="bg-red-50 px-6 py-6">
                                        <div
                                            class="flex flex-col items-center justify-center gap-6 sm:flex-row sm:gap-10">
                                            <div class="text-center">
                                                <p class="mb-2 text-sm font-semibold text-gray-600">رقم المحفظة</p>
                                                <p class="font-mono text-2xl font-extrabold tracking-wide text-gray-900 sm:text-3xl"
                                                    dir="ltr">771426679</p>
                                            </div>

                                            <div class="text-center">
                                                <p class="mb-3 text-sm font-semibold text-gray-600">أو امسح رمز QR</p>
                                                <img src="{{ asset('jaib-qrcode.png') }}" alt="رمز QR لمحفظة جيب"
                                                    class="mx-auto h-36 w-36 rounded-xl border border-red-100 bg-white p-2 shadow-sm sm:h-40 sm:w-40">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-6 flex items-start gap-3 rounded-xl bg-blue-50 p-4">
                                <svg class="mt-0.5 h-5 w-5 shrink-0 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="text-sm leading-relaxed text-gray-600">
                                    يمكنك التبرع عبر الإيداع المباشر في أي حساب بنكي أعلاه، أو عبر التحويل إلى محفظة
                                    جيب على الرقم المذكور أو بمسح رمز QR
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Beneficiary CTA -->
    <section class="bg-blue-50 py-16" data-animate>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="relative mx-auto max-w-4xl overflow-hidden rounded-3xl border border-blue-100 bg-white p-8 text-center shadow-xl sm:p-12">
                <div class="absolute right-0 top-0 -mr-16 -mt-16 h-32 w-32 rounded-full bg-blue-500/5"></div>
                <div class="absolute bottom-0 left-0 -mb-16 -ml-16 h-32 w-32 rounded-full bg-emerald-500/5"></div>

                <div class="relative z-10">
                    <h2 class="mb-6 text-3xl font-extrabold text-gray-900 sm:text-4xl">هل تحتاج إلى مساعدة طبية؟</h2>
                    <p class="mb-10 text-xl leading-relaxed text-gray-600">
                        نحن هنا لخدمتك. إذا كنت مريضاً وبحاجة لدعم في تكاليف العلاج أو الأدوية، يمكنك التقديم الآن عبر
                        بوابتنا الإلكترونية وسيقوم فريقنا بمراجعة حالتك.
                    </p>
                    <a href="{{ url('/apply') }}"
                        class="group inline-flex transform items-center rounded-2xl bg-gradient-to-r from-blue-600 to-emerald-500 px-8 py-4 text-xl font-bold text-white shadow-lg transition-all duration-300 hover:-translate-y-1 hover:shadow-blue-500/40">
                        <span>تقديم طلب مساعدة</span>
                        <svg class="mr-3 h-6 w-6 transition-transform group-hover:translate-x-1" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900 py-20 text-white" data-animate>
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h2 class="mb-6 text-4xl font-extrabold sm:text-5xl">
                    تواصل معنا
                </h2>
                <p class="mb-12 text-xl leading-relaxed text-blue-100">
                    نحن هنا لمساعدتك. تواصل معنا لأي استفسار أو للتقديم على المساعدة الطبية
                </p>

                <div class="mb-12 grid grid-cols-1 gap-8 md:grid-cols-2">
                    <div class="rounded-2xl border border-white/20 bg-white/10 p-8 backdrop-blur-md">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-xl bg-white/20">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">الهاتف</h3>
                        <p class="text-blue-100" dir="ltr">+967771426679</p>
                    </div>

                    <div class="rounded-2xl border border-white/20 bg-white/10 p-8 backdrop-blur-md">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-xl bg-white/20">
                            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold">العنوان</h3>
                        <p class="text-blue-100">اليمن - صنعاء - تعز</p>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="flex items-center justify-center space-x-4 space-x-reverse">
                    <a href="#"
                        class="ml-4 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </a>
                    <a href="https://wa.me/967771426679" target="_blank" rel="noopener noreferrer"
                        class="ml-4 flex h-12 w-12 items-center justify-center rounded-full bg-white/10 transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.890-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
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
        }, {
            threshold: 0.5
        });

        document.querySelectorAll('.counter').forEach(counter => {
            counterObserver.observe(counter);
        });

        // Smooth scroll to sections
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
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
