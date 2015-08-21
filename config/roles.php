<?php

return [
    'role' => [
        '' => 'Selecciona tipo de usuario',
        'admin' => 'Admin',
        'coordinator' => 'Coodinador',
        'attendance_office' => 'Control Escolar',
        'administration' => 'Adminstracion',
    ],
    'admin' => [
        'users' => 'CRUD',
        'students' => 'CRUD',
        'payments' => 'CRUD',
        'account' => 'U'
    ],
    'coordinator' => [
        'students' => 'CRUD',
        'payments' => 'R',
        'account' => 'U'
    ],
    'attendance_office' => [
        'students' => 'CRUD',
        'payments' => 'R',
        'account' => 'U'
    ],
    'administration' => [
        'payments' => 'CRUD',
        'account' => 'U'
    ]
];