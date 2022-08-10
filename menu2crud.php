<?php require("conn.php");

// extract($_POST);

// if(isset($_POST['submit']) ){
// $tableNum=$_POST['tableName'];
// $OrderFoods=$_POST['foodtitle'];

// };

extract($_POST);

if(isset($_POST['readrecord'])){
$data ='<table class="table table-bordered table-striped">
<tr>
<th>Id</th>
<th>table No</th>
<th> Food title</th>
</tr>' ;

$displayquery ="SELECT *FROM `crud`";
$result =mysqli_query($conn, $displayquery);

if(mysqli_num_rows($result)>0){
    $number=1;
    while($row =mysqli_fetch_array($result)){
        $data .= '<tr>
        <td>'.$number.'</td>
        <td>'.$row['Id'].'</td>
        <td>'.$row['Table No'].'</td>
        <td>'.$row['Food Order'].'</td>
        <td>
        <button onclick="GetUserDetails('.$row['id'].')"
        class="btn btn-warning btn-sm btn-edit">Edit</button>
        </td>
        <td>
        <button onclick="deleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
        </td>
       </tr> ';
       $number++;
    
    }
    $("tbody").html($data);
}



}


if(isset($_POST['tableNo']) && isset($_POST['OrderFood']) )
{

$query ="INSERT INTO `crud` (`tableNo`, `OrderFood`) VALUES ('$tableNo','$OrderFood')";
mysqli_query($conn, $query);
if ($query){
    echo "successful vayo";
    header("location: menu2.php");
}
else{
    echo"error";
}
}

 ?>
