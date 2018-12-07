<?php
echo "<span>La température est de : ".$_POST['temperature']."</span>";
?>


<?php
if(isset($_POST['temperature']))
{
    $file = fopen("temperature.txt","r+");
    fwrite($file,$_POST['temperature']);
    fclose($file); 
    print_r(error_get_last());
}


?>