<?php

/**
 * Validates form.
 *
 * @package    my_proj
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ValidatesForm extends sfForm
{
  public function configure()
  {
     $this->setWidgets(array(
      'u_name' => new sfWidgetFormInput(),
      'p_word' => new sfWidgetFormInputPassword(),
     ));
  }
}

