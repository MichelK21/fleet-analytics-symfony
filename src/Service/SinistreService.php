<?php

namespace App\Service;

class SinistreService
{
    public function getSinistres(): array
    {
        $sinistre1 = [
            'id' => 1,
            'immat' => 'AB-123-CD',
            'montant' => 1000.0,
            'responsable' => true,
        ];
        $sinistre2 = [
            'id' => 2,
            'immat' => 'EF-456-GH',
            'montant' => 850.0,
            'responsable' => false,
        ];

        $sinistres = [$sinistre1, $sinistre2];

        return  $sinistres;
    }

    public function calculerCoutTotal(): float
    {
        $sinistres = $this->getSinistres();

        $total = 0.0;
        foreach ($sinistres as $sinistre) {
            $total += $sinistre['montant'];
        }
        
        return $total;
    }
}
