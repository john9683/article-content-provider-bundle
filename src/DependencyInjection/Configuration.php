<?php

namespace CatCasCar\LmArticleContentProviderBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('catcascar_lm_article_content_provider');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->booleanNode('is_bold')->defaultTrue()->info('Bold or Italic word style')->end()
                ->scalarNode('lm_article_word_decorator')->defaultNull()->info('Content Decorator class')->end()
            ->end()
        ;

        return $treeBuilder;

    }

}