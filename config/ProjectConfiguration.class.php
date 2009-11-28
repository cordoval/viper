<?php

require_once '/opt/symfony/sf1.4/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
    
    public function setup()
    {
        $this->enablePlugins(array(
            'sfDoctrinePlugin'
            ));
      $this->enablePlugins('sfDoctrineGuardPlugin');
  }

}