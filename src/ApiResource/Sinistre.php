<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\ApiProperty;
use ApiPlatform\Metadata\GetCollection;
use App\State\SinistreProvider;

#[ApiResource(
    operations: [
        new GetCollection(
            provider: SinistreProvider::class
        )
    ]
)]
class Sinistre
{
    #[ApiProperty(identifier: true)]
    public int $id;
    public string $immat;
    public float $montant;
    public bool $responsable;
}
