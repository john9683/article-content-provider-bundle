<?php

namespace CatCasCar\LmArticleContentProviderBundle;

class MarkdownWordDecorator implements WordDecoratorInterface
{
        public function decorate(string $word, bool $isBold = true): string
        {
            $marker = $isBold ? '**' : '*';
            return $marker . $word . $marker;
        }
}