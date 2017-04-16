<?php 
$task = new Task(); ?>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh Sách Công Việc</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>IDTask</th>
              <th>User</th>
              <th>Title Task</th>
              <th>Content</th>
              <th>Date</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            <?php
				$array = $task->getAllTask();
            	foreach ($array as $value) {
            ?>
            <tr>
            	<td><?php echo $value["taskid"]; ?></td>
            	<td><?php echo $value["user"]; ?></td>
            	<td><?php echo $value["titletask"];?></td>
              <td><?php echo $value["content_task"]; ?></td>
      				<td><?php echo $value["date_task"];?></td>
      				<td><?php if($value["status"] == 1)
      							echo "<span class='label label-success'>Hoàn Thành</span>";
      						else
      							echo "<span class='label label-warning'>Chưa Hoàn Thành</span>"
							     ?>
              </td>
              <td>
                <a href="?act=edittask&id=<?php echo $value["taskid"]; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                <a href="?act=deltask&id=<?php echo $value["taskid"]; ?>"><i class="glyphicon glyphicon-remove"></i></a>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>