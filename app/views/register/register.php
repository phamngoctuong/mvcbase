<form action="http://localhost/mvc/public/register/userregis" method="POST">
  <div class="form-group">
    <input type="text" name="username" id="username" placeholder="Enter name">
  </div>
  <div class="form-group">
    <input type="password" id="password" name="password" placeholder="Enter password">
  </div>
  <button type="submit" name="submit">Submit</button>
</form>
<?php  
	if(isset($data['result'])) {
		if($data['result'] == 'true') {
			echo "Đăng ký thành công";
		}else {
			echo "Đăng ký thất bại";
		}
	}
?>
<script src="http://localhost/mvc/public/js/jquery.js"></script>
<script src="http://localhost/mvc/public/js/ajax.js"></script>