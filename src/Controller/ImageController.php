<?php

namespace App\Controller;


use App\Entity\ImageTrick;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImageController extends AbstractController
{

    /**
     * @Route("delete/{id}", name="image_delete", methods={"DELETE"})
     * @param Request $request
     * @param ImageTrick $imageTrick
     * @return Response
     */
    public function delete(Request $request, ImageTrick $imageTrick): Response
    {
        if ($this->isCsrfTokenValid('delete' . $imageTrick->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($imageTrick);
            $entityManager->flush();
            $this->addFlash('success', 'Image was successfully deleted !');
        }

        return $this->redirectToRoute('home');
    }
}
