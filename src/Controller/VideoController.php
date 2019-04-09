<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video_index")
     */
    public function index()
    {
        if($_SESSION['auth']){
            return $this->render('video/index.html.twig', [
                'controller_name' => 'VideoController',
            ]);
        }else{
            return $this->render('video/connect.html.twig', [
                'controller_name' => 'VideoController',
            ]);
        }
    }

    /**
     * @Route("/video/purchase", name="video_purchase")
     */
    public function purchase()
    {
        return $this->render('video/purchase.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }
    /**
     * @Route("/video/disconnect", name="video_disconnect")
     */
    public function disconnect()
    {
        unset($_SESSION['auth']);
        return $this->render('video/index.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }

    /**
     * @Route("/video/upload", name="video_upload")
     */
    public function upload()
    {
        return $this->render('video/upload.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }

    /**
     * @Route("/video/response", name="video_response")
     */
    public function response()
    {
        return $this->render('video/response.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }
}
