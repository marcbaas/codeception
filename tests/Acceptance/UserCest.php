<?php

namespace Acceptance;

use \Tests\Support\AcceptanceTester;
use \Tests\Support\Page\Login;

class UserCest
{
    function showUserProfile(AcceptanceTester $I, Login $loginPage)
    {
        $loginPage->login('bill evans', 'debby');
        $I->amOnPage('/profile');
        $I->see('Bill Evans Profile', 'h1');
    }
}