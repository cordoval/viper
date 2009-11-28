<?php

/**
 * complements actions.
 *
 * @package    viper
 * @subpackage complements
 * @author     Pedro Hernandez <phpleo [at] gmail [dot] com>
 * @version    SVN: $Id$
 */
class complementsActions extends sfActions
{
    
    /**
     * Executes index action
     * 
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request)
    {
        $this->forward('default', 'module');
    }

}