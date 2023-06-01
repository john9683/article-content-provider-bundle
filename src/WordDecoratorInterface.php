<?php

namespace CatCasCar\LmArticleContentProviderBundle;

interface WordDecoratorInterface
{
    public function decorate(string $word, bool $isBold = true): string;
}