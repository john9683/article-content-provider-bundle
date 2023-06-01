<?php

namespace CatCasCar\LmArticleContentProviderBundle\Event;

use Symfony\Contracts\EventDispatcher\Event;

class OnBeforeWordPasteEvent extends Event
{
    public function __construct(string $word, int $position)
    {
        $this->word = $word;
        $this->position = $position;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function getWord(): string
    {
        return $this->word;
    }

    /**
     * @param string $word
     */
    public function setWord(string $word): void
    {
        $this->word = $word;
    }


}