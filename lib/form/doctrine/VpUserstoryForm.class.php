<?php

/**
 * VpUserstory form.
 *
 * @package    viper
 * @subpackage form
 * @author     Pedro Hernandez <phpleo
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VpUserstoryForm extends BaseVpUserstoryForm
{

    public function configure()
    {
        $this->useFields(array('vp_project_id', 'content'));
    }

}