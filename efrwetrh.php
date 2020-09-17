<?php
/*}
else if($_POST["hidden"]=="organacc"){
$q=mysqli_query($con,"SELECT * FROM organs")or die ("Error");
echo "<div>
    <table cellpadding='10'>
      <tr>
        <td rowspan='2' align='center'>
          <div class='a1'><img src='img1.jpg' width='150px' height='150px'></div>
        </td>
        <td align='center'>
          <h1 align='center'>Organ Donors Availabe</h1>
        </td>
      </tr>
      <tr>
        <td align='center'>
          <p>
          Donate your blood for a reason, let the reason to be life.</p>
        </td>
      </tr>
    </table>
</div>";
}
else if($_POST["hidden"]=="clothacc"){
$q=mysqli_query($con,"SELECT * from clothes")or die ("Error");
echo "<div>
    <table cellpadding='10'>
      <tr>
        <td rowspan='2' align='center'>
          <div class='a1'><img src='img1.jpg' width='150px' height='150px'></div>
        </td>
        <td align='center'>
          <h1 align='center'>Cloth Donors Available</h1>
        </td>
      </tr>
      <tr>
        <td align='center'>
          <p>
          Donate your blood for a reason, let the reason to be life.</p>
        </td>
      </tr> 
    </table>
</div>";
}
else if($_POST["hidden"]=="fund"){
$q=mysqli_query($con,"INSERT INTO fund (name,bloodgroup,age,contact,gender,address) VALUES  ('$name', '$blood' , '$age' , '$contact', '$gender' , '$add')")or die ("Error");
}
if($q){
echo "INSERT";
}
else
{
	echo "err";
}*/
?>