<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Validates', 'doctrine');

/**
 * BaseValidates
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $u_name
 * @property string $p_word
 * 
 * @method integer   getId()     Returns the current record's "id" value
 * @method string    getUName()  Returns the current record's "u_name" value
 * @method string    getPWord()  Returns the current record's "p_word" value
 * @method Validates setId()     Sets the current record's "id" value
 * @method Validates setUName()  Sets the current record's "u_name" value
 * @method Validates setPWord()  Sets the current record's "p_word" value
 * 
 * @package    my_proj
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseValidates extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('validates');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('u_name', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
        $this->hasColumn('p_word', 'string', 255, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 255,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}