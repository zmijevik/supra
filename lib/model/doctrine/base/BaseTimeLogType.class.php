<?php

/**
 * BaseTimeLogType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property boolean $clock_in
 * @property Doctrine_Collection $TimeLog
 * 
 * @method integer             getId()       Returns the current record's "id" value
 * @method string              getName()     Returns the current record's "name" value
 * @method boolean             getClockIn()  Returns the current record's "clock_in" value
 * @method Doctrine_Collection getTimeLog()  Returns the current record's "TimeLog" collection
 * @method TimeLogType         setId()       Sets the current record's "id" value
 * @method TimeLogType         setName()     Sets the current record's "name" value
 * @method TimeLogType         setClockIn()  Sets the current record's "clock_in" value
 * @method TimeLogType         setTimeLog()  Sets the current record's "TimeLog" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTimeLogType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('time_log_type');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('clock_in', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('TimeLog', array(
             'local' => 'id',
             'foreign' => 'time_log_type_id'));
    }
}