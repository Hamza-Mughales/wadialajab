<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'description' => ['required', 'string', 'min:5'],
            'files' => ['nullable', 'array', 'min:1', 'max:5'],
            'files.*' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:5120'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'يرجى إدخال الاسم الثلاثي',
            'phone.required' => 'يرجى إدخال رقم الهاتف',
            'description.required' => 'يرجى شرح الحالة',
            'description.min' => 'الشرح يجب أن يكون 5 أحرف على الأقل',
            'files.required' => 'يرجى إرفاق المستندات المطلوبة',
            'files.min' => 'يرجى إرفاق ملف واحد على الأقل',
            'files.*.mimes' => 'يجب أن تكون الملفات بصيغة JPG, PNG أو PDF',
            'files.*.max' => 'حجم الملف يجب ألا يتجاوز 5 ميجابايت',
        ];
    }
}
