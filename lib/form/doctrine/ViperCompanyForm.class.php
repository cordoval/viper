<?php

/**
 * ViperCompany form.
 *
 * @package    viper
 * @subpackage form
 * @author     Pedro Hernandez <phpleo
 * @version    SVN: $Id$
 */
class ViperCompanyForm extends BaseViperCompanyForm
{
    public function configure()
    {
        // elementos a mostrar
        $this->useFields(array('name', 'address', 'phone_number', 'fax_number', 'homepage'));
    }

}