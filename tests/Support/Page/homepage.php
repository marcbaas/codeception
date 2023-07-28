<?php

namespace Tests\Support\Page;

class homepage
{
    // Constants
    const SEARCH_FIELD = ['xpath' => '//div/input[@id="input-4"]'];

    // Functions
    public function selectSearchField(): void
    {
        $this->seeElement(self::SEARCH_FIELD);
        $this->click(self::SEARCH_FIELD);
    }
}