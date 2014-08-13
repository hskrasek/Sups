<?php
use \ApiTester;
use Codeception\Util\Fixtures;

class UserResourceCest
{
    // tests
    public function getAllUsers(ApiTester $I)
    {
        $user = Fixtures::get('userOne');
        $I->wantTo("get a list of all users");
        $I->sendGET("/users");
        $I->seeResponseIsJson();
        $I->seeResponseContainsJson(['data' => ['id' => $user->id]]);
    }
}