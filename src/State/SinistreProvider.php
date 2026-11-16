<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProviderInterface;
use App\Service\SinistreService;
use App\ApiResource\Sinistre;

final class SinistreProvider implements ProviderInterface
{
    public function __construct(
        private SinistreService $sinistreService
    ) {}
    public function provide(
        Operation $operation,
        array $uriVariables = [],
        array $context = []
    ): iterable {

        $sinistres = $this->sinistreService->getSinistres();


        $ressources = [];

        foreach ($sinistres as $donnees) {

            $ressource = new Sinistre();


            $ressource->id = $donnees['id'];
            $ressource->immat = $donnees['immat'];
            $ressource->montant = $donnees['montant'];
            $ressource->responsable = $donnees['responsable'];


            $ressources[] = $ressource;
        }


        return $ressources;
    }
}
