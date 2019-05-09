<?php


namespace AppBundle\Document;

use Symfony\Cmf\Component\Routing\RouteReferrersReadInterface;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCR;
use Symfony\Component\Routing\Route;

/**
 * @PHPCR\Document(referenceable=true)
 */
class Page implements RouteReferrersReadInterface
{
    use ContentTrait;

    /**
     * Get the routes that point to this content.
     *
     * @return Route[] Route instances that point to this content
     */
    public function getRoutes()
    {
        // TODO: Implement getRoutes() method.
    }
}