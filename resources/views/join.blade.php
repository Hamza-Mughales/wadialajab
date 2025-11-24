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
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></svg>');
            animation: float 20s linear infinite;
        }
        
        @keyframes float {
            0% { transform: translateY(0); }
            100% { transform: translateY(-100px); }
        }
        
        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 2.5rem;
            width: 100%;
            max-width: 480px;
            position: relative;
            animation: slideUp 0.6s ease-out;
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
        
        h1 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        label {
            display: block;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }
        
        input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        
        input:hover {
            border-color: #cbd5e0;
        }
        
        .submit-btn {
            width: 100%;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.5);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .footer-text {
            text-align: center;
            color: #718096;
            font-size: 0.875rem;
            margin-top: 1.5rem;
            line-height: 1.6;
        }
        
        .error-box {
            background: linear-gradient(135deg, #fee 0%, #fdd 100%);
            border: 2px solid #fc8181;
            border-radius: 12px;
            padding: 1rem;
            margin-bottom: 1.5rem;
            animation: shake 0.5s ease;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-10px); }
            75% { transform: translateX(10px); }
        }
        
        .error-box ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .error-box li {
            color: #c53030;
            font-size: 0.9rem;
            padding: 0.25rem 0;
            padding-right: 1.5rem;
            position: relative;
        }
        
        .error-box li::before {
            content: '⚠';
            position: absolute;
            right: 0;
            color: #fc8181;
        }
        
        .required {
            color: #e53e3e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>انضم إلى صندوق <br>وادي العجب الخيري</h1>

        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('join.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="full_name">الاسم الكامل <span class="required">*</span></label>
                <input
                    type="text"
                    name="full_name"
                    id="full_name"
                    value="{{ old('full_name') }}"
                    required
                    placeholder="أدخل اسمك الكامل"
                >
            </div>

            <div class="form-group">
                <label for="phone">رقم الهاتف <span class="required">*</span></label>
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    value="{{ old('phone') }}"
                    required
                    placeholder="مثال: 777111222"
                >
            </div>

            <div class="form-group">
                <label for="amount">المبلغ الشهري <span class="required">*</span></label>
                <input
                    type="number"
                    step="1"
                    min="1"
                    name="amount"
                    id="amount"
                    value="{{ old('amount') }}"
                    required
                    placeholder="مثال: 1000"
                >
            </div>

            <div class="form-group">
                <label for="email">البريد الإلكتروني (اختياري)</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="example@email.com"
                >
            </div>

            <button type="submit" class="submit-btn">
                انضم الآن
            </button>

            <p class="footer-text">
                مساهمتك ليست مجرد مبلغ… إنها رحمة تصل لمن يحتاجها. شكرًا ليدك التي تعين وتواسي وتخفّف عن الآخرين.
            </p>
        </form>
    </div>
</body>
</html>


