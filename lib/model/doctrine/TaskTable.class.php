<?php

/**
 * TaskTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class TaskTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object TaskTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Task');
    }

    public function queryAll($sort) {
        return Doctrine_Query::Create()
               ->from('Task t')
               ->orderBy('t.'.$sort);
    }

    public function queryAllByStaffId($sort) {

        return Doctrine_Query::Create()
        ->from('Task t')
        ->where('t.staff_id = ?',Staff::loggedInId())
        ->orderBy('t.'.$sort);

    }

    public function queryIncomplete($sort) {
        return Doctrine_Query::Create()
               ->from('Task t')
               ->where('t.task_status_id <> ?',3)
               ->orderBy('t.'.$sort);
    }

    public function queryIncompleteByStaffId($sort) {

        return Doctrine_Query::Create() 
        ->from('Task t')
        ->where('t.staff_id = ?',Staff::loggedInId())
        ->andWhere('t.task_status_id <> ?',3)
        ->orderBy('t.'.$sort);

    }

    public function queryCompleteByStaffId($sort) {

        return Doctrine_Query::Create()
        ->from('Task t')
        ->where('t.staff_id = ?',Staff::loggedInId())
        ->andWhere('t.task_status_id = ?',3)
        ->orderBy('t.'.$sort);

    }

    public function refNoExists($refno) {
        return Doctrine_Query::Create()
               ->from('Task t')
               ->where('t.ref_no = ?', $refno)
               ->limit(1)
               ->fetchOne();
    }

    public function getLastRefNo() {
        return Doctrine_Query::Create()
               ->select('t.ref_no')
               ->from('Task t')
               ->orderBy('t.id DESC')
               ->limit(1)
               ->fetchOne()->ref_no;
    }

    public function createRefNo() {
        $last = $this->getLastRefNo();
        $next = $last+1;
        while($this->refNoExists($next)) {
            $next++;
            $ref_no = $next;
        }
        return $next;
    }

    public function getAllByAccountInvoiceId($account_invoice_id) {
        return Doctrine_Query::Create()
               ->from('Task t')
               ->where('t.account_invoice_id = ?',$account_invoice_id)
               ->execute();
    }
}
