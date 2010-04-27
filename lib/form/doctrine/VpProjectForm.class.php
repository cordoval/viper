<?php

/**
 * VpProject form.
 *
 * @package    viper
 * @subpackage form
 * @author     Pedro Hernandez <phpleo
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VpProjectForm extends BaseVpProjectForm
{
    public function configure()
    {
        $this->useFields(array('name', 'description', 'started_at'));
    }

}