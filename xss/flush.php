<?php
session_start();
unset($_SESSION['xss_db']);
?>
<script>
	alert('清除成功！');
	location.href = './';
</script>
