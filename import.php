<?php
include 'db.php';
if(isset($_POST["Import"])){
echo $filename=$_FILES["file"]["tmp_name"];
if($_FILES["file"]["size"] > 0)
{
$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{
//It wiil insert a row to our subject table from our csv file`
$sql = "INSERT into final_param('color','odour','temp','ph','elec_cond','diss_oxy','amm_nir','nitrite_nitrate','total_coliform','fecal_coliform','userid','entry_date') values('$emapData[4]','$emapData[5]','$emapData[8]','$emapData[14]','$emapData[17]','$emapData[11]','$emapData[23]','$emapData[26]','$emapData[32]','$emapData[29]','$emapData[34]','$emapData[33]')";
//we are using mysql_query function. it returns a resource on true else False on error
$result = mysqli_query($conn,$sql);
if(! $result )
{
echo "<script type=\"text/javascript\">
alert(\"Invalid File:Please Upload CSV File.\");
window.location = \"upload.php\"
</script>";
}
}
fclose($file);
//throws a message if data successfully imported to mysql database from excel file
echo "<script type=\"text/javascript\">
alert(\"CSV File has been successfully Imported.\");
swindow.location = \"upload.php\"
</script>";
//close of connection
mysqli_close($conn); 
}
} 
?> 
