<table>
  <tbody>
    <tr>
      <td><?php echo $task->getName() . ' - ' . $task->getRefNo() ?></td>
    </tr>
    <tr>
      <th>Account</th>
      <td><?php include_partial('account/linkto',array('account'=>$task->getAccount()))?></td>
    </tr>
    <tr>
      <th>Assigned To:</th>
      <td>
        <?php include_partial('staff/linkto', array('staff' => $task->getStaff())) ?>
      </td>
    </tr>

    <tr>
      <th>Status:</th>
      <td><?php echo $task->getTaskStatus()->getName() ?></td>
    </tr>
    <tr>
      <th>Task Type:</th>
      <td><?php echo $task->getTaskType()->getName() ?></td>
    </tr>
    <tr>
      <th>Priority:</th>
      <td><?php echo $task->getTaskPriority()->getName() ?></td>
    </tr>
    <tr>
      <th>Work Type:</th>
      <td><?php include_partial('work/linkto', array('work' => $task->getTaskWork())) ?></td>
    </tr>
    <tr>
      <th>Description:</th>
      <td><?php echo $task->getDescription() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $task->getDateTimeObject('created_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $task->getDateTimeObject('updated_at')->format('M d, Y h:i a') ?></td>
    </tr>
    <tr>
      <td><h3>Comments</h3></td>
    </tr>
    <tr>
      <td>
        <ul>
        <?php foreach($task->getTaskComment() as $comment):?>
        <li>
        <p>
          <?php include_partial('staff/linkto', array('staff' => $comment->getStaff())) ?>
          wrote on
          <?php echo $comment->getDateTimeObject('created_at')->format('M d, Y h:i a') ?>
        </p>
        <p>
          <b><?php echo $comment->getTitle() ?></b>
          <?php echo $comment->getComment() ?>
        </p>
        </li>
        <?php endforeach ?>
        </ul>
      </td>
    </tr>
    <tr>
        <td><h3>Work Log</h3></td>
    </tr>
    <tr>
      <td>
        <ol>
          <?php foreach($task->getTaskLog() as $log):?>
          <?php if(!$log->getIsViewable() && !$sf_user->isStaff()) continue; ?>
            <li>
              <p><?php echo $log->getTitle() ?> -
              <?php include_partial('work/linkto', array('work' => $log->getTaskWork())) ?>
              </p>
              <p>
              <?php include_partial('staff/linkto', array('staff' => $log->getStaff())) ?>
              completed <?php echo $log->getHours() ?> hours on
              <?php echo $log->getDateTimeObject('created_at')->format('M d, Y h:i a') ?>
              </p>
              <p><?php echo $log->getDescription(); ?></p>
            </li>
          <?php endforeach ?>
        </ol>
      </td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('task/edit?id='.$task  ->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('task/index') ?>">List</a>
