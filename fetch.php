<?php
include 'Api.php';


$sql = "SELECT * FROM showregistration";
$query=mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

// if($query==TRUE)
// {
//     $msg=["Form successfully submitted"];
//     $num=1;
// }
// else
// {
//     $msg=["Error occurred while submitting information. Please try again later."];
//     $num=0;
// }

if ($num > 0) {
    while($res = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>". $res['Time'] . "</td>";
        echo "<td>". $res['name'] . "</td>";
        echo "<td>". $res['gender'] . "</td>";
        echo "<td>". $res['email'] . "</td>";
        echo "<td>". $res['age'] . "</td>";
        echo "<td>". $res['mobile'] . "</td>";
        echo "<td>". $res['state'] . "</td>";
        
        echo "<td>". $res['comment'] . "</td>";
       
        echo "</tr>";
    }
}
?>
