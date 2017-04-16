<?php 
$mem = new User(); ?>
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
              <th>ID</th>
              <th>User</th>
              <th>Pass</th>
            </tr>
            <?php
			$array = $mem->getAllUser();
            foreach ($array as $value) {
             ?>
            <tr>
            	<td><?php echo $value["uid"]; ?></td>
            	<td><?php echo $value["user"]; ?></td>
              	<td><?php echo $value["pass"]; ?></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>