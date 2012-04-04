<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version1 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->dropTable('deductions');
        $this->dropTable('test_client');
        $this->createTable('deduction', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'title' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'description' => 
             array(
              'type' => 'clob',
              'length' => '',
             ),
             'deduction' => 
             array(
              'type' => 'decimal',
              'length' => '18',
             ),
             'approved' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '1',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
    }

    public function down()
    {
        $this->createTable('deductions', array(
             'id' => 
             array(
              'type' => 'integer',
              'primary' => '1',
              'autoincrement' => '1',
              'length' => '8',
             ),
             'title' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'description' => 
             array(
              'type' => 'clob',
              'length' => '',
             ),
             'deduction' => 
             array(
              'type' => 'decimal',
              'length' => '18',
             ),
             'approved' => 
             array(
              'type' => 'boolean',
              'notnull' => '1',
              'default' => '1',
              'length' => '25',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => '',
             'charset' => '',
             ));
        $this->createTable('test_client', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'first_name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'last_name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'email_address' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'unique' => '1',
              'length' => '255',
             ),
             'username' => 
             array(
              'type' => 'string',
              'notnull' => '1',
              'unique' => '1',
              'length' => '128',
             ),
             'algorithm' => 
             array(
              'type' => 'string',
              'default' => 'sha1',
              'notnull' => '1',
              'length' => '128',
             ),
             'salt' => 
             array(
              'type' => 'string',
              'length' => '128',
             ),
             'password' => 
             array(
              'type' => 'string',
              'length' => '128',
             ),
             'is_active' => 
             array(
              'type' => 'boolean',
              'default' => '1',
              'length' => '25',
             ),
             'is_super_admin' => 
             array(
              'type' => 'boolean',
              'default' => '0',
              'length' => '25',
             ),
             'last_login' => 
             array(
              'type' => 'timestamp',
              'length' => '25',
             ),
             'track_record' => 
             array(
              'type' => 'clob',
              'length' => '',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'type' => '',
             'indexes' => 
             array(
              'is_active_idx' => 
              array(
              'fields' => 
              array(
               0 => 'is_active',
              ),
              ),
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => '',
             'charset' => '',
             ));
        $this->dropTable('deduction');
    }
}