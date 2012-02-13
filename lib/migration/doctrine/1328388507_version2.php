<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version2 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createForeignKey('task_log', 'task_log_gen_desc_id_gen_desc_id', array(
             'name' => 'task_log_gen_desc_id_gen_desc_id',
             'local' => 'gen_desc_id',
             'foreign' => 'id',
             'foreignTable' => 'gen_desc',
             ));
        $this->addIndex('task_log', 'task_log_gen_desc_id', array(
             'fields' => 
             array(
              0 => 'gen_desc_id',
             ),
             ));
    }

    public function down()
    {
        $this->dropForeignKey('task_log', 'task_log_gen_desc_id_gen_desc_id');
        $this->removeIndex('task_log', 'task_log_gen_desc_id', array(
             'fields' => 
             array(
              0 => 'gen_desc_id',
             ),
             ));
    }
}