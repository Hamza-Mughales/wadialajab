<div class="w-full h-full flex items-center justify-center bg-gray-100 dark:bg-gray-800 rounded-lg overflow-hidden">
    @if (str_starts_with($mime, 'image/'))
        <img src="{{ $url }}" alt="Preview" class="max-w-full max-h-[80vh] object-contain">
    @elseif ($mime === 'application/pdf')
        <iframe src="{{ $url }}" class="w-full h-[80vh]" frameborder="0"></iframe>
    @elseif (str_starts_with($mime, 'video/'))
        <video controls class="max-w-full max-h-[80vh]">
            <source src="{{ $url }}" type="{{ $mime }}">
            Your browser does not support the video tag.
        </video>
    @else
        <div class="text-center p-10">
            <div class="mb-4">
                <x-heroicon-o-document class="w-16 h-16 mx-auto text-gray-400" />
            </div>
            <p class="text-lg font-medium text-gray-900 dark:text-gray-100">
                Preview not available for this file type.
            </p>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-6">
                {{ $mime }}
            </p>
            <a href="{{ $url }}" target="_blank" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                <x-heroicon-o-arrow-down-tray class="w-5 h-5 mr-2 -ml-1" />
                Download to View
            </a>
        </div>
    @endif
</div>
