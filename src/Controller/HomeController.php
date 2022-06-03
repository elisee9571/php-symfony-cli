<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/')]
class HomeController extends AbstractController
{
    public function __construct(ProductRepository $productRepository)
    {
    }

    #[Route(name: 'app_home')]
    public function index(): Response
    {
        $products = $this->productRepository->findAll();

        return $this->render('home/index.html.twig', [
            "products" => $products,
        ]);
    }
}
