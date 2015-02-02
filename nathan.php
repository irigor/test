<form method="post">
	<input type="text" name="day" value="<?php if(isset($_POST['day'])) echo $_POST['day'];else echo 100?>"/>
	<input type="submit">
</form>
<?php
if(isset($_POST['day']) && $_POST['day']) $x = $_POST['day'];
else $x=0;
$date = new DateTime('2014-11-15');
if($x!=0)$date->add(new DateInterval('P'.$x.'D'));
echo $date->format('d/m/Y');die;