<?php

/**
 * BasePlan
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $title
 * @property clob $description
 * @property decimal $deduction
 * @property integer $period_id
 * @property Period $Period
 * @property Doctrine_Collection $Account
 * @property Doctrine_Collection $AccountPlan
 * 
 * @method integer             getId()          Returns the current record's "id" value
 * @method string              getTitle()       Returns the current record's "title" value
 * @method clob                getDescription() Returns the current record's "description" value
 * @method decimal             getDeduction()   Returns the current record's "deduction" value
 * @method integer             getPeriodId()    Returns the current record's "period_id" value
 * @method Period              getPeriod()      Returns the current record's "Period" value
 * @method Doctrine_Collection getAccount()     Returns the current record's "Account" collection
 * @method Doctrine_Collection getAccountPlan() Returns the current record's "AccountPlan" collection
 * @method Plan                setId()          Sets the current record's "id" value
 * @method Plan                setTitle()       Sets the current record's "title" value
 * @method Plan                setDescription() Sets the current record's "description" value
 * @method Plan                setDeduction()   Sets the current record's "deduction" value
 * @method Plan                setPeriodId()    Sets the current record's "period_id" value
 * @method Plan                setPeriod()      Sets the current record's "Period" value
 * @method Plan                setAccount()     Sets the current record's "Account" collection
 * @method Plan                setAccountPlan() Sets the current record's "AccountPlan" collection
 * 
 * @package    supra
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePlan extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('plan');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));
        $this->hasColumn('deduction', 'decimal', null, array(
             'type' => 'decimal',
             ));
        $this->hasColumn('period_id', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Period', array(
             'local' => 'period_id',
             'foreign' => 'id'));

        $this->hasMany('Account', array(
             'local' => 'id',
             'foreign' => 'plan_id'));

        $this->hasMany('AccountPlan', array(
             'local' => 'id',
             'foreign' => 'plan_id'));
    }
}