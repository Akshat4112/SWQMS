<?php include 'includes/layout.inc.php';
include 'includes/connection.inc.php';
?>
<div style="padding-top: 30px; padding-left: 30px;">
	<a href="inbox.php"><input type="submit" name="inbox" value="Inbox"></a>
</div>
<div style="margin-left: 400px; margin-top: 100px;">
<div style="margin-bottom: 20px;">
Search : <input type="text" name="message_name"><br>
</div>
<textarea rows="7" cols="30"></textarea><br>
<input type="submit" name="submit" value="Send">
</div>
<?php
include 'includes/footer.inc.php';
?>