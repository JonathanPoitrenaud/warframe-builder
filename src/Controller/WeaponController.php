<?php

namespace App\Controller;

use App\Repository\WeaponRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WeaponController extends AbstractController
{
    #[Route('/weapon/showWeapon', name: 'show_weapon')]
    public function showWeapons(
        WeaponRepository $weaponRepository
    ): Response
    {
        $weapons = $weaponRepository->findAll('DESC');

        return $this->render('weapon/index.html.twig', [
            'weapons' => $weapons,
        ]);
    }
}
