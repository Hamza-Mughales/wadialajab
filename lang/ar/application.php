<?php

return [
    'resource' => [
        'label' => 'طلب مساعدة',
        'plural_label' => 'الطلبات',
        'navigation_label' => 'الطلبات المقدمة',
    ],
    'sections' => [
        'applicant_info' => 'معلومات مقدم الطلب',
        'application_details' => 'تفاصيل الطلب',
        'admin_actions' => 'إجراءات الإدارة',
    ],
    'fields' => [
        'name' => 'الاسم الكامل',
        'phone' => 'رقم الهاتف',
        'description' => 'وصف الطلب',
        'files' => 'المرفقات',
        'status' => 'الحالة',
        'admin_notes' => 'ملاحظات الإدارة',
        'reviewed_at' => 'تاريخ المراجعة',
        'created_at' => 'تاريخ التقديم',
    ],
    'enums' => [
        'status' => [
            'pending' => 'قيد الانتظار',
            'under_review' => 'تحت المراجعة',
            'approved' => 'مقبول',
            'rejected' => 'مرفوض',
            'completed' => 'مكتمل',
        ],
    ],
    'notifications' => [
        'submitted' => [
            'title' => 'تم استلام الطلب',
            'body' => 'تم استلام طلبك بنجاح وسيتم مراجعته قريباً.',
        ],
    ],
];
