<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>شكراً لك - صندوق وادي العجب الخيري</title>
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
        
        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }
        
        @keyframes scale {
            0%, 100% {
                transform: none;
            }
            50% {
                transform: scale3d(1.1, 1.1, 1);
            }
        }
        
        @keyframes fill {
            100% {
                box-shadow: inset 0 0 0 50px #10b981;
            }
        }
        
        @keyframes confetti-fall {
            to {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
        
        .animate-float {
            animation: float 20s linear infinite;
        }
        
        .animate-slideUp {
            animation: slideUp 0.6s ease-out;
        }
        
        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 3;
            stroke: #10b981;
            stroke-miterlimit: 10;
            box-shadow: inset 0 0 0 #10b981;
            animation: fill 0.4s ease-in-out 0.4s forwards, scale 0.3s ease-in-out 0.9s both;
        }
        
        .checkmark-circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 3;
            stroke-miterlimit: 10;
            stroke: #10b981;
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }
        
        .checkmark-check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }
        
        .confetti {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #667eea;
            animation: confetti-fall 3s linear infinite;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-[#667eea] via-[#764ba2] to-[#f093fb] min-h-screen flex items-center justify-center p-4 sm:p-6 relative overflow-hidden">
    <div class="absolute inset-0 animate-float" style="background: url('data:image/svg+xml,<svg width=&quot;100&quot; height=&quot;100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;><circle cx=&quot;50&quot; cy=&quot;50&quot; r=&quot;2&quot; fill=&quot;white&quot; opacity=&quot;0.1&quot;/></svg>');"></div>
    
    <div class="bg-white/95 backdrop-blur-xl rounded-2xl sm:rounded-3xl shadow-2xl p-8 sm:p-10 md:p-12 w-full max-w-lg text-center relative animate-slideUp">
        <div class="w-20 h-20 sm:w-[100px] sm:h-[100px] mx-auto mb-6 sm:mb-8 relative">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
        </div>
        
        <h1 class="text-4xl sm:text-5xl font-bold mb-3 sm:mb-4 bg-gradient-to-r from-[#667eea] to-[#764ba2] bg-clip-text text-transparent">
            شكراً لك!
        </h1>
        
        <p class="text-gray-700 text-base sm:text-lg leading-relaxed mb-6 sm:mb-8 px-2">
            وصلنا تسجيلك بنجاح، وشكرًا لك على دعمك.
            بفضل عطائك يستمر الخير ويصل أثره للمحتاجين.
        </p>
        
        <a href="{{ url('/') }}" class="inline-block px-8 sm:px-10 py-3.5 sm:py-4 bg-gradient-to-r from-[#667eea] to-[#764ba2] text-white no-underline rounded-xl text-base sm:text-lg font-bold transition-all duration-300 shadow-lg shadow-purple-400/50 hover:-translate-y-0.5 hover:shadow-xl hover:shadow-purple-400/60 active:translate-y-0">
            العودة للصفحة الرئيسية
        </a>
        
        <p class="mt-6 sm:mt-8 pt-6 sm:pt-8 border-t-2 border-gray-200 text-green-600 text-lg sm:text-xl font-semibold px-4">
            جزاك الله خيراً وبارك في مالك
        </p>
    </div>
    
    <script>
        // Create confetti effect
        function createConfetti() {
            const colors = ['#667eea', '#764ba2', '#f093fb', '#10b981', '#fbbf24'];
            for (let i = 0; i < 50; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.className = 'confetti';
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.background = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.animationDelay = Math.random() * 3 + 's';
                    confetti.style.animationDuration = (Math.random() * 3 + 2) + 's';
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 5000);
                }, i * 30);
            }
        }
        
        // Trigger confetti on load
        window.addEventListener('load', createConfetti);
    </script>
</body>
</html>
