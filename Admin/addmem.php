<?php
	if(isset($_POST["add"])) {
		if(isset($_POST["username"]) && isset($_POST["password"])){
			$user = $_POST["username"];
			$pass = $_POST["password"];
			$result = mysql_query("INSERT INTO user(user,pass) VALUES('".$user."','".$pass."')");
			if($result){
				echo "<script>alert('Thêm User Thành Công');</script>";
			}
			else {
				echo "<script>alert('Server Có Lỗi');</script>";
			}
		}
	}

?>
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Thêm Người Dùng</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="<?php $PHP_SELF; ?>">
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="username" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" >
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="add">Thêm</button>
      </div>
    </form>
</div>