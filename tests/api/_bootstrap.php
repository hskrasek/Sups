<?php
use Codeception\Util\Fixtures;

Fixtures::add('userOne', (object) [
    'id' => 'asdhasdhasd',
    'name' => 'Hunter',
    'username' => 'hunter'
]);
//protected $endpoint = '/api/posts';
//
//// tests
//public function getAllPosts(ApiTester $I)
//{
//    $id = $I->haveRecord('posts', ['title' => 'Game of Thrones']);
//    $id2 = $I->haveRecord('posts', ['title' => 'Lord of the Rings']);
//    $I->sendGET($this->endpoint);
//    $I->seeResponseCodeIs(200);
//    $I->seeResponseIsJson();
//    $I->expect('both items are in response');
//    $I->seeResponseContainsJson(['id' => $id, 'title' => 'Game of Thrones']);
//    $I->seeResponseContainsJson(['id' => $id2, 'title' => 'Lord of the Rings']);
//    $I->expect('both items are in root array');
//    $I->seeResponseContainsJson([['id' => $id], ['id' => $id2]]);
//}