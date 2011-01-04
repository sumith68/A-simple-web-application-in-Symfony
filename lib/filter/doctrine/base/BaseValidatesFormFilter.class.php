<?php

/**
 * Validates filter form base class.
 *
 * @package    my_proj
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseValidatesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'u_name' => new sfWidgetFormFilterInput(),
      'p_word' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'u_name' => new sfValidatorPass(array('required' => false)),
      'p_word' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('validates_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Validates';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'u_name' => 'Text',
      'p_word' => 'Text',
    );
  }
}
