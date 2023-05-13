<?php

namespace App\Controller;

use App\Entity\Foo;
use App\Repository\FooRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function __construct(private readonly FooRepository $fooRepository)
    {
    }

    #[Route('/', name: 'app_index')]
    public function index(): JsonResponse
    {
        $entity = (new Foo())->setTitle('title - ' . time());

        $this->fooRepository->save($entity, true);

        $entities = $this->fooRepository->findAll();

        dd($entities);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/IndexController.php',
        ]);
    }
}
