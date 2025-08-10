<?php

return [
    'attributes' => [
        'numeroDocCliente' => 'número de documento',
        'password' => 'contraseña',
        'correoCliente' => 'correo'
    ],
    'required' => 'El campo :attribute es obligatorio.',
    'unique' => 'El :attribute ya ha sido registrado.',
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'min' => [
        'string' => 'La :attribute debe tener al menos :min caracteres.',
    ],
];