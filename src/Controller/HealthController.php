<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthController
{
    #[Route('/health', methods: ['GET'])]
    public function healthCheck(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}
