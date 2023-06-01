<?php

namespace CatCasCar\LmArticleContentProviderBundle;

use CatCasCar\LmArticleContentProviderBundle\DependencyInjection\LmArticleContentProviderExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class LmArticleContentProviderBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new LmArticleContentProviderExtension();
        }

        return $this->extension;
    }

}