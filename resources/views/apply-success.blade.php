@extends('layouts.charity')

@section('title', 'تم استلام الطلب - صندوق وادي العجب الخيري')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8 text-center">
            <div class="bg-white p-10 rounded-3xl shadow-2xl border border-white/10 animate-fadeInUp backdrop-blur-sm">
                <div class="w-20 h-20 bg-emerald-100 text-emerald-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-inner">
                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                
                <h2 class="text-3xl font-extrabold text-gray-900 mb-4">
                    تم استلام طلبك بنجاح
                </h2>
                
                <p class="text-gray-600 mb-8 leading-relaxed">
                    نشكرك على تواصلك معنا. سيقوم فريقنا بمراجعة طلبك والوثائق المرفقة، وسيتم التواصل معك قريباً عبر الهاتف المسجل.
                </p>

                <a href="{{ route('home') }}" class="inline-flex items-center justify-center w-full px-8 py-4 text-base font-bold text-white bg-gradient-to-r from-blue-600 to-emerald-500 rounded-2xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300">
                    العودة للصفحة الرئيسية
                </a>
            </div>
        </div>
    </div>
@endsection
