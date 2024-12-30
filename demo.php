<?php
if(isset($_POST['Send Now'])){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Message = $_POST['Myaddress'];
    $Gender = $_POST['mygender'];
    
    
    $host ='localhost';
    $user ='root';
    $pass ='';
    $dbname ='dreambuzzhotels';

    $conn =mysqli_connect($host,$user,$pass,$dbname);

    $sql =insert into contact_us(Name,Email,Message,Gender) values('$Name','$Email','$Message','$Gender');
    Mysql_query($conn,$sql);
}
?>
 