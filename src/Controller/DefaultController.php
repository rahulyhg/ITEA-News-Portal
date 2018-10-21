<?php

namespace App\Controller;

use App\Service\ContactsPageServiceInterface;
use App\Service\HomePageServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * Default site controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class DefaultController extends AbstractController
{
    /**
     * Home page.
     *
     * @param HomePageServiceInterface $service
     *
     * @return Response
     */
    public function index(HomePageServiceInterface $service): Response
    {
        return $this->render('default/index.html.twig', [
            'page' => $service->getData(),
        ]);
    }

    /**
     * Contacts page.
     *
     * @param ContactsPageServiceInterface $service
     *
     * @return Response
     */
    public function contacts(ContactsPageServiceInterface $service): Response
    {
        return $this->render('default/contacts.html.twig', [
            'page' => $service->getData(),
        ]);
    }
}
