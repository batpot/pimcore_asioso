<?php
namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Pimcore\Model\Document;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends FrontendController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        $document = Document::getByPath('/'); // root document
        $sliderImage = $document ? $document->getProperty('slider_image') : null;

        $bricksJson = $document ? $document->getProperty('bricks') : null;
        $bricks = [];
        if ($bricksJson) {
            $decoded = json_decode($bricksJson, true);
            if (is_array($decoded)) {
                $bricks = $decoded;
            }
        }

        return $this->render('pages/base.html.twig', [
            'document' => $document,
            'slider_image' => $sliderImage,
            'bricks' => $bricks,
        ]);
    }
}
