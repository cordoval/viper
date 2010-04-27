<?php
require_once dirname(__FILE__).'/../../bootstrap/functional.php';

class functional_viper_dashboardActionsTest extends sfPHPUnitBaseFunctionalTestCase
{

    protected function getApplication()
    {
        return 'viper';
    }

    public function testDefault()
    {
        $browser = $this->getBrowser();

        $browser->
            get('/dashboard/index')->

            with('request')->begin()->
                isParameter('module', 'dashboard')->
                isParameter('action', 'index')->
            end()->

            with('response')->begin()->
                isStatusCode(200)->
                checkElement('body', '!/This is a temporary page/')->
            end();
    }

}