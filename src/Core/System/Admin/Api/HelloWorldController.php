<?php declare(strict_types=1);

namespace SwagTraining\AdminApiHelloWorld\Core\System\Admin\Api;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Routing\Annotation\Acl;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"api"})
 */
class HelloWorldController extends AbstractController
{
    /**
     * @Route("/api/swag-training/admin-api-hello-world", name="api.swag-training.author-admin-api", methods={"GET"})
     * @Acl({"author.admin.api"})
     */
    public function helloWorld(Request $request, Context $context): Response
    {
        return new JsonResponse(['hello' => 'world']);
    }
}
