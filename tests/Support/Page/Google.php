<?php

namespace Support\Page;

use Codeception\Constraint\Page;

class Google extends \Support\Page\AbstractPage
{
    private const array ACCEPT_BUTTON = ['href' => 'https://www.google.com/'];

    /**
     *  clickAcceptButton
     *  Click the Accept button on the main Google page
     *
     * @param array $acceptButton
     * @return void
     */
    public function clickAcceptButton(array $acceptButton = self::ACCEPT_BUTTON): void
    {
        $this->webDriver->click($acceptButton);
    }

}