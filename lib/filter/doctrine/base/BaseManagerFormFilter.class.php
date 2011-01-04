<?php

/**
 * Manager filter form base class.
 *
 * @package    my_proj
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseManagerFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'     => new sfWidgetFormFilterInput(),
      'status'    => new sfWidgetFormFilterInput(),
      'deadline'  => new sfWidgetFormFilterInput(),
      'assignsto' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'title'     => new sfValidatorPass(array('required' => false)),
      'status'    => new sfValidatorPass(array('required' => false)),
      'deadline'  => new sfValidatorPass(array('required' => false)),
      'assignsto' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('manager_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Manager';
  }

  public function getFields()
  {
    return array(
      'id'        => 'Number',
      'title'     => 'Text',
      'status'    => 'Text',
      'deadline'  => 'Text',
      'assignsto' => 'Text',
    );
  }
}
