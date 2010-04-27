<?php

require_once '/opt/symfony/sf1.4/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{

    public function setup()
    {
        $this->symfonyPlugins();
        $this->viperPlugins();
      $this->enablePlugins('sfPHPUnit2Plugin');
  }

    public function configureDoctrine(Doctrine_Manager $manager)
    {
        $manager->setCollate('utf8_unicode_ci');
        $manager->setCharset('utf8');
    }

    protected function symfonyPlugins()
    {
        $this->enablePlugins('sfDoctrinePlugin');
        $this->enablePlugins('sfDoctrineGuardPlugin');
    }

    /**
     * @todo implementar el uso de plugins personalizados
     */
    protected function viperPlugins()
    {

    }

}