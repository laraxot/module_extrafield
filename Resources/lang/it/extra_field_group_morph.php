<?php

declare(strict_types=1);

return [
    'field' => [
        'cardinality' => [
            'label' => 'Cardinalità',
            'placeholder' => 'Inserisci la cardinalità',
        ],
        'mandatory' => [
            'label' => 'Obbligatorietà',
            // 'placeholder' => 'Deve essere obbligatorio?',
        ],
        'can_verified' => [
            'label' => 'Verificabile',
        ],
        'note' => [
            'label' => 'Note del dato',
            'placeholder' => 'Note del dato',
        ],
        'verified_by' => [
            'label' => 'Verificato tramite',
            'placeholder' => 'Tramite cosa è stato verificato?',
        ],
    ],
];
