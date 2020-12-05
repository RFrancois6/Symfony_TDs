<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/store", name="store_")
 */
class StoreController extends AbstractController
{
    /**
     * @Route("/product/{id}/details/{slug}", name="product",requirements={"id" : "\d+"},methods={"GET"})
     */
    public function product(Request $request, int $id, string $slug): Response
    {
        return $this->render('store/index.html.twig', [
            'id' => $id,
            'slug' => $slug,
            'addrIP' => $request->getClientIp(),
            'url_from_request' => $request->getPathInfo(),
            'url_from_router' => $this->generateUrl('store_product',[
                'id'=>$id,
                'slug'=>$slug
            ]),
        ]);
    }
}
