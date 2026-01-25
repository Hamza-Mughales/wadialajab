<?php

return [
    'resource' => [
        'label' => 'Application',
        'plural_label' => 'Applications',
        'navigation_label' => 'Applications',
    ],
    'sections' => [
        'applicant_info' => 'Applicant Information',
        'application_details' => 'Application Details',
        'admin_actions' => 'Admin Actions',
    ],
    'fields' => [
        'name' => 'Full Name',
        'phone' => 'Phone',
        'description' => 'Description',
        'files' => 'Files',
        'status' => 'Status',
        'admin_notes' => 'Admin Notes',
        'reviewed_at' => 'Reviewed At',
        'created_at' => 'Created At',
    ],
    'enums' => [
        'status' => [
            'pending' => 'Pending',
            'under_review' => 'Under Review',
            'approved' => 'Approved',
            'rejected' => 'Rejected',
            'completed' => 'Completed',
        ],
    ],
    'notifications' => [
        'submitted' => [
            'title' => 'Application Submitted',
            'body' => 'Your application has been received successfully.',
        ],
    ],
];
