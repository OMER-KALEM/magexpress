<?php


include "DbConnect.php";

if(isset($_POST['AddContact'])){
   
$datetimenow = date("Y-m-d H:i:s");
    echo $datetimenow;
    echo "<br>";
    echo $_POST['Name'];
    echo "<br>";
    echo $_POST['Email'];
    echo "<br>";
    echo $_POST['Subject'];
    echo "<br>";
    echo $_POST['Message'];
    echo "<br>";

    $maxIdRow =  $conn->query("SELECT * FROM contact WHERE id=( SELECT max(id) FROM contact )");
    $row = $maxIdRow->fetch_assoc();
    $newMaxId = $row['ID'] +1;
        
    $AddContact = $conn->query("INSERT INTO CONTACT (ID,NAME,EMAIL,SUBJECT,MESSAGE) 
    VALUES('".$newMaxId."','".$_POST['Name']."','".$_POST['Email']."','".$_POST['Subject']."','".$_POST['Message']."') ");
}

?>