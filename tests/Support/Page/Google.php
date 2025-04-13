<?php

namespace Support\Page;

class Google extends \Support\Page\AbstractPage
{
    private const array ACCEPT_BUTTON = ['href' => 'https://www.google.com/'];
    private const array ACCEPT_ALL_BUTTON = ['id' => 'L2AGLb'];

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

    /**
     * clickAcceptAllButton
     * Click the Accept All button on the pane when starting on the google page
     *
     * @param array $acceptAllButton
     * @return void
     */
    public function clickAcceptAllButton(array $acceptAllButton = self::ACCEPT_ALL_BUTTON): void
    {
        $this->webDriver->click($acceptAllButton);
    }

}