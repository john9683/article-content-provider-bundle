<?php

namespace CatCasCar\LmArticleContentProviderBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;

class LmArticleContentProviderExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(dirname(__DIR__) . '/Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);

        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('cat_cas_car_lm_article_content_provider.lm_article_content_provider');

        if (null !== $config['lm_article_word_decorator']) {
            $container->setAlias('cat_cas_car_lm_article_content_provider.word_decorator', $config['lm_article_word_decorator']);
        }
        $definition->setArgument(2, $config['is_bold']);
    }

    public function getAlias()
    {
        return 'catcascar_lm_article_content_provider';
    }




}