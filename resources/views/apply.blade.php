@extends('layouts.charity')

@section('title', 'طلب مساعدة طبية - صندوق وادي العجب الخيري')
@section('meta_description', 'قدم طلبك للحصول على مساعدة طبية من صندوق وادي العجب الخيري. نحن هنا لدعمك في تكاليف العلاج
    والدواء.')

@section('content')

    <!-- Header Section -->
    <section class="pt-32 pb-12 bg-gradient-to-br from-blue-900 via-cyan-900 to-teal-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="absolute inset-0"
                style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%23ffffff&quot; fill-opacity=&quot;1&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
            </div>
        </div>

        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-4 animate-fadeInUp">
                طلب مساعدة طبية
            </h1>
            <p class="text-xl text-blue-100 max-w-2xl mx-auto animate-fadeInUp" style="animation-delay: 0.1s;">
                نحن هنا لنقف بجانبك. يرجى تزويدنا بالمعلومات والوثائق اللازمة لدراسة حالتك وتقديم الدعم المناسب.
            </p>
        </div>
    </section>

    <!-- Main Form Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">

                    <!-- 1. Instructions (First on Mobile, Top Left on Desktop) -->
                    <div class="lg:col-span-1 order-1">
                        <div class="bg-white rounded-3xl p-8 shadow-xl border border-blue-50 animate-fadeInUp">
                            <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                                <span
                                    class="w-10 h-10 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center ml-3">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </span>
                                تعليمات التقديم
                            </h3>

                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center flex-shrink-0 ml-4 font-bold">
                                        1</div>
                                    <p class="text-gray-600 leading-relaxed">قم بتجهيز الوثائق المطلوبة (تقارير طبية، وصفات
                                        أدوية، فواتير حديثة).</p>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center flex-shrink-0 ml-4 font-bold">
                                        2</div>
                                    <p class="text-gray-600 leading-relaxed">يجب أن تكون الصور أو ملفات الـ PDF واضحة
                                        ومقروءة تماماً.</p>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center flex-shrink-0 ml-4 font-bold">
                                        3</div>
                                    <p class="text-gray-600 leading-relaxed">اكتب شرحاً موجزاً لحالتك في خانة التعليقات
                                        واحتياجك الفعلي.</p>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="w-8 h-8 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center flex-shrink-0 ml-4 font-bold">
                                        4</div>
                                    <p class="text-gray-600 leading-relaxed">سيقوم فريقنا بمراجعة الطلب والتواصل معك في أقرب
                                        وقت ممكن.</p>
                                </div>
                            </div>

                            <div class="mt-10 p-5 bg-blue-50 rounded-2xl border border-blue-100">
                                <p class="text-sm text-blue-800 font-medium leading-relaxed">
                                    <span class="font-bold underline block mb-1">تنبيه:</span>
                                    يتم التعامل مع كافة البيانات والوثائق بسرية تامة وتستخدم فقط لأغراض تقييم الحالة الطبية.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 2. Upload Form (Second on Mobile, Spans Rows on Desktop) -->
                    <div class="lg:col-span-2 lg:row-span-2 order-2">
                        <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border border-gray-100 animate-fadeInUp">
                            <form
                                onsubmit="event.preventDefault(); alert('عذراً، نظام التقديم تحت التطوير حالياً وسيتم تفعيله قريباً. شكراً لتفهمكم.');"
                                class="space-y-8">
                                @csrf

                                <!-- File Upload Area -->
                                <div>
                                    <label class="block text-xl font-bold text-gray-800 mb-4">رفع الملفات والتقارير</label>
                                    <div class="relative group">
                                        <div id="drop-area"
                                            class="mt-1 flex justify-center px-6 pt-10 pb-10 border-2 border-gray-200 border-dashed rounded-3xl hover:border-blue-400 hover:bg-blue-50/50 transition-all duration-300 cursor-pointer">
                                            <div class="space-y-4 text-center">
                                                <div
                                                    class="w-20 h-20 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mx-auto group-hover:scale-110 transition-transform duration-300">
                                                    <svg class="w-10 h-10" stroke="currentColor" fill="none"
                                                        viewBox="0 0 48 48">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <div class="flex flex-col text-gray-600">
                                                    <span class="text-lg font-bold text-blue-600">اضغط لرفع الملفات</span>
                                                    <span class="text-sm">أو قم بسحب وإسقاط الملفات هنا</span>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, PDF (بحد أقصى 10MB)
                                                </p>
                                            </div>
                                            <input id="file-upload" name="medical_files[]" type="file" class="sr-only"
                                                multiple accept=".jpg,.jpeg,.png,.pdf">
                                        </div>
                                        <!-- File Preview List -->
                                        <div id="file-preview-list" class="mt-4 grid grid-cols-2 sm:grid-cols-3 gap-4">
                                        </div>
                                    </div>
                                </div>

                                <!-- Comment Field -->
                                <div>
                                    <label for="comment" class="block text-xl font-bold text-gray-800 mb-4">اشرح لنا حالتك
                                        أو طلبك</label>
                                    <textarea id="comment" name="comment" rows="6"
                                        class="w-full px-6 py-4 bg-gray-50 border-2 border-gray-100 rounded-2xl focus:border-blue-400 focus:ring-0 transition-all duration-300 resize-none text-gray-700 text-lg placeholder-gray-400"
                                        placeholder="اكتب هنا تفاصيل حالتك الطبية والاحتياج المطلوب..."></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="pt-4">
                                    <button type="submit"
                                        class="w-full py-5 bg-gradient-to-r from-blue-600 to-emerald-500 text-white text-xl font-extrabold rounded-2xl shadow-xl hover:shadow-blue-500/30 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center space-x-3 space-x-reverse">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                        </svg>
                                        <span>إرسال الطلب الآن</span>
                                    </button>
                                    <p class="text-center text-gray-500 text-sm mt-6 flex items-center justify-center">
                                        <svg class="w-4 h-4 ml-2 text-emerald-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        اتصال آمن ومحمي
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- 3. Quick Contact (Third on Mobile, Bottom Left on Desktop) -->
                    <div class="lg:col-span-1 order-3">
                        <div
                            class="bg-gradient-to-br from-gray-900 to-blue-900 rounded-3xl p-8 text-white shadow-xl animate-fadeInUp">
                            <h4 class="text-xl font-bold mb-4">تحتاج مساعدة؟</h4>
                            <p class="text-blue-200 mb-6 italic">إذا واجهت أي مشكلة في رفع الملفات، يرجى التواصل معنا
                                مباشرة.</p>
                            <a href="tel:+967987987987"
                                class="flex items-center text-lg font-bold hover:text-emerald-400 transition-colors"
                                dir="ltr">
                                <svg class="w-6 h-6 mr-3 text-emerald-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                    </path>
                                </svg>
                                +967 987 987 987
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('file-upload');
        const previewList = document.getElementById('file-preview-list');

        // Click to upload
        dropArea.addEventListener('click', () => fileInput.click());

        // Drag and drop events
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => {
                dropArea.classList.add('border-blue-400', 'bg-blue-50');
            });
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, () => {
                dropArea.classList.remove('border-blue-400', 'bg-blue-50');
            });
        });

        dropArea.addEventListener('drop', handleDrop);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            handleFiles(files);
        }

        fileInput.addEventListener('change', function() {
            handleFiles(this.files);
        });

        function handleFiles(files) {
            [...files].forEach(previewFile);
        }

        function previewFile(file) {
            const reader = new FileReader();
            const fileDiv = document.createElement('div');
            fileDiv.className = 'relative p-3 bg-gray-50 rounded-xl border border-gray-200 group animate-fadeIn';

            let fileIcon = '';
            if (file.type === 'application/pdf') {
                fileIcon =
                    `<svg class="w-10 h-10 text-red-500 mx-auto" fill="currentColor" viewBox="0 0 20 20"><path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z"></path><path d="M3 8a2 2 0 012-2V5a5 5 0 0110 0v1a2 2 0 012 2v7a2 2 0 01-2 2H5a2 2 0 01-2-2V8z"></path></svg>`;
            } else {
                fileIcon =
                    `<svg class="w-10 h-10 text-blue-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>`;
            }

            fileDiv.innerHTML = `
            ${fileIcon}
            <p class="text-xs text-gray-500 truncate mt-2 text-center">${file.name}</p>
            <button type="button" class="absolute -top-2 -left-2 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center shadow-lg hover:bg-red-600 transition-colors" onclick="this.parentElement.remove()">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        `;
            previewList.appendChild(fileDiv);
        }
    </script>
@endpush
