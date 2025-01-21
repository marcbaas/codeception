<?php

namespace Support\Page;

use Tests\Support\AcceptanceTester;

class Login
{
    // Selectors
    /**
     *
     */
    private const URL = '/login';

    private const USER_NAME = '#mainForm #username';
    private const PASSWORD_FIELD = '#mainForm input[name=password]';
    private const LOGIN_BUTTON = '#mainForm input[type=submit]';

    protected AcceptanceTester $tester;

    // we inject AcceptanceTester into our class
    public function __construct(AcceptanceTester $I)
    {
        $this->tester = $I;
    }

    public function Login($name, $password)
    {
        $I = $this->tester;

        $I->amOnPage(self::$URL);
        $I->fillField($this->usernameField, $name);
        $I->fillField($this->passwordField, $password);
        $I->click($this->loginButton);
    }
}