<?php 
  if(isset($_POST["add"])) {
    if(isset($_POST["titletask"]) && isset($_POST["contenttask"]) && isset($_POST["date_task"]) && isset($_POST["time_task"])) {
      $title = $_POST["titletask"];
      $content = $_POST["contenttask"];
      $date = $_POST["date_task"];
      $time = $_POST["time_task"];
      $mem = $_POST["member"];
      
     $result = mysql_query("INSERT INTO list_task(userid,titletask,content_task,date_task,time_task) VALUES('".$mem."','".$title."','".$content."','".$date."','".$time."')");
      if($result) {
        echo "<script>alert('Thêm Việc Thành Công');</script>";
        echo "<script>window.location='?act=dstask';</script>";
      }
      else {
        echo "<script>alert('Có lỗi quá trình thêm việc');</script>";
      }

    }
  }
?>
<div class="box box-warning">
  <div class="box-header with-border">
    <h3 class="box-title">Thêm Nhắc Nhở</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <form action="<?php $PHP_SELF; ?>" method="post">
      <!-- text input -->
      <div class="form-group">
        <label>Tên Việc</label>
        <input type="text" class="form-control" placeholder="Enter ..." name="titletask">
      </div>
      <!-- textarea -->
      <div class="form-group">
        <label>Nội Dung Công Việc</label>
        <textarea class="form-control" rows="3" placeholder="Enter ..." name="contenttask"></textarea>
      </div>
      <!-- select -->
      <div class="form-group">
        <label>Thành viên</label>
        <select class="form-control" name="member">
            <?php 
          $r = mysql_query("SELECT * FROM user");
          while($row = mysql_fetch_array($r)) {
        ?>
          <option value="<?php echo $row["uid"]; ?>"><?php echo $row["user"]; ?></option>
          <?php } ?>
        </select>
      </div>
      <!-- Date -->
      <div class="form-group">
        <label>Date</label>
        <div class="input-group date">
          <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
          </div>
          <input type="text" class="form-control pull-right" id="datepicker" name="date_task" placeholder="yyyy/mm/dd">
        </div>
        <!-- /.input group -->
      </div>
      <!-- time Picker -->
        <div class="form-group">
          <label>Time picker</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-clock-o"></i>
            </div>
            <input type="text" class="form-control timepicker" placeholder="01:45" name="time_task">
          </div>
          <!-- /.input group -->
        </div>
        <!-- /.form group -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="add">Thêm</button>
      </div>
    </form>
  </div>
  <!-- /.box-body -->
</div>