<?php namespace Codeception\Module;

class ApiHelper extends \Codeception\Module
{
    public function _beforeSuite($settings = array())
    {
        $this->debug("MIGRATING BEFORE RUN");
        $I = $this->getModule('Laravel4');
        $artisan = $I->grabService('artisan');
        $artisan->call('migrate');
        $artisan->call('db:seed');
    }
}
 