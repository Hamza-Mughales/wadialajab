<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>الانضمام - صندوق وادي العجب الخيري</title>
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
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-100px);
            }
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

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-10px);
            }

            75% {
                transform: translateX(10px);
            }
        }

        .animate-float {
            animation: float 20s linear infinite;
        }

        .animate-slideUp {
            animation: slideUp 0.6s ease-out;
        }

        .animate-shake {
            animation: shake 0.5s ease;
        }
    </style>
</head>

<body
    class="bg-gradient-to-br from-[#667eea] via-[#764ba2] to-[#f093fb] min-h-screen flex items-center justify-center p-4 sm:p-6 relative overflow-x-hidden">
    <div class="absolute inset-0 animate-float"
        style="background: url('data:image/svg+xml,<svg width=&quot;100&quot; height=&quot;100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;2&quot; fill=&quot;white&quot; opacity=&quot;0.1&quot;/></svg>');">
    </div>

    <div
        class="bg-white/95 backdrop-blur-xl rounded-2xl sm:rounded-3xl shadow-2xl p-6 sm:p-8 md:p-10 w-full max-w-md relative animate-slideUp">
        <h1
            class="text-3xl sm:text-4xl font-bold text-center mb-6 sm:mb-8 bg-gradient-to-r from-[#667eea] to-[#764ba2] bg-clip-text text-transparent leading-tight">
            انضم إلى صندوق <br>وادي العجب الخيري
        </h1>

        @if ($errors->any())
            <div
                class="bg-gradient-to-br from-red-50 to-red-100 border-2 border-red-400 rounded-xl p-4 mb-6 animate-shake">
                <ul class="list-none p-0 m-0">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-700 text-sm py-1 pr-6 relative">
                            <span class="absolute right-0 text-red-400">⚠</span>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('join.store') }}" method="POST">
            @csrf

            <div class="mb-5 sm:mb-6">
                <label for="full_name" class="block font-semibold text-gray-700 mb-2 text-sm">
                    الاسم الكامل <span class="text-red-600">*</span>
                </label>
                <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                    placeholder="أدخل اسمك الكامل"
                    class="w-full px-3 sm:px-4 py-3 sm:py-3.5 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-white focus:outline-none focus:border-[#667eea] focus:shadow-lg focus:shadow-purple-200/50 focus:-translate-y-0.5 hover:border-gray-300">
            </div>

            <div class="mb-5 sm:mb-6">
                <label for="phone" class="block font-semibold text-gray-700 mb-2 text-sm">
                    رقم الهاتف <span class="text-red-600">*</span>
                </label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                    placeholder="مثال: 777111222"
                    class="w-full px-3 sm:px-4 py-3 sm:py-3.5 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-white focus:outline-none focus:border-[#667eea] focus:shadow-lg focus:shadow-purple-200/50 focus:-translate-y-0.5 hover:border-gray-300">
            </div>

            <div class="mb-5 sm:mb-6">
                <label for="amount" class="block font-semibold text-gray-700 mb-2 text-sm">
                    المبلغ الشهري <span class="text-red-600">*</span>
                </label>
                <input type="number" step="1" min="1" name="amount" id="amount"
                    value="{{ old('amount') }}" required placeholder="مثال: 1000"
                    class="w-full px-3 sm:px-4 py-3 sm:py-3.5 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-white focus:outline-none focus:border-[#667eea] focus:shadow-lg focus:shadow-purple-200/50 focus:-translate-y-0.5 hover:border-gray-300">
            </div>

            <div class="mb-5 sm:mb-6">
                <label for="email" class="block font-semibold text-gray-700 mb-2 text-sm">
                    البريد الإلكتروني (اختياري)
                </label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    placeholder="example@email.com"
                    class="w-full px-3 sm:px-4 py-3 sm:py-3.5 border-2 border-gray-200 rounded-xl text-base transition-all duration-300 bg-white focus:outline-none focus:border-[#667eea] focus:shadow-lg focus:shadow-purple-200/50 focus:-translate-y-0.5 hover:border-gray-300">
            </div>

            <button type="submit"
                class="w-full px-4 py-3.5 sm:py-4 bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white border-0 rounded-xl text-base sm:text-lg font-bold cursor-pointer transition-all duration-300 mt-3 sm:mt-4 shadow-lg shadow-purple-400/50 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-purple-400/60 active:translate-y-0">
                انضم الآن
            </button>

            <p class="text-center text-gray-600 text-sm mt-5 sm:mt-6 leading-relaxed px-2">
                مساهمتك ليست مجرد مبلغ… إنها رحمة تصل لمن يحتاجها. شكرًا ليدك التي تعين وتواسي وتخفّف عن الآخرين.
            </p>
        </form>
    </div>
</body>

</html>
