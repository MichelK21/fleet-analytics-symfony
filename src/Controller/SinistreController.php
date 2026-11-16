<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use App\Service\SinistreService;

class SinistreController
{
    #[Route('/sinistres', methods: ['GET'])]

    public function getSinistres(
        SinistreService $sinistreService
    ): JsonResponse {
        $sinistres = $sinistreService->getSinistres();
        return new JsonResponse($sinistres);
    }

    #[Route('/sinistres/kpis', methods: ['GET'])]
    public function getKpis(
        SinistreService $sinistreService
    ): JsonResponse {
        $total = $sinistreService->calculerCoutTotal();
        return new JsonResponse([
            'cout_total' => $total
        ]);
    }
}
