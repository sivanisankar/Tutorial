<?php	
error_reporting(E_ALL);
require_once("layouts/header.php");
 ?>
 <form method="POST" action="booking.php"id="frmMain" enctype="multipart/form-data" class="form-horizontal">
<table class='table' border='2'>
    <tr>
        <td class='click go0' id='1'style="width:250px; height:250px; background-color:#FFF9F9;text-align:center; vertical-align:middle"><img src='images/z.png'style="max-height:100%; max-width:100%"/></td>
		<td width="10"style="text-align:center;background-color:#FFF9F9; vertical-align:middle"><input type="submit" name="book" id="idbook"value="Book"class="btn btn-primary"></td>
    </tr>
	<tr>
        <td class='click go0' id='1'style="width:250px; height:250px; background-color:#FFF9F9;text-align:center; vertical-align:middle"><img src='images/abc.jpg'style="max-height:100%; max-width:100%"/></td>
		<td width="10"style="text-align:center;background-color:#FFF9F9; vertical-align:middle"><input type="submit" name="book" id="idbook"value="Book"class="btn btn-primary"></td>
    </tr>
	<tr>
        <td class='click go0' id='1'style="width:250px; height:250px; background-color:#FFF9F9;text-align:center; vertical-align:middle"><img src='images/download.jpg'style="max-height:100%; max-width:100%"/></td>
         <td width="10"style="text-align:center;background-color:#FFF9F9; vertical-align:middle"><input type="submit" name="book" id="idbook"value="Book"class="btn btn-primary"></td>
    </tr>
</table>
</form>
<?php
require_once("layouts/footer.php");
?>