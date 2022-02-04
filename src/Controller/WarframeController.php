<?php

namespace App\Controller;

use App\Repository\WarframeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WarframeController extends AbstractController
{
    #[Route('/warframe/showWarframe', name: 'show_warframe')]
    public function showWarframes(
        WarframeRepository $warframeRepository
    ): Response
    {
        $warframes = $warframeRepository->findAll('DESC');

        return $this->render('warframe/index.html.twig', [
            'warframes' => $warframes,
        ]);
    }
}
