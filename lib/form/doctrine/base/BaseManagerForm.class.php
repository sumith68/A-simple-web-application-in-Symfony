<?php

/**
 * Manager form base class.
 *
 * @method Manager getObject() Returns the current form's model object
 *
 * @package    my_proj
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseManagerForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'title'     => new sfWidgetFormInputText(),
      'status'    => new sfWidgetFormInputText(),
      'deadline'  => new sfWidgetFormInputText(),
      'assignsto' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'status'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'deadline'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'assignsto' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('manager[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Manager';
  }

}
