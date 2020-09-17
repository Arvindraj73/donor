<html>
<head>
	<style type="text/css">
			
		h4{
          text-align: center;
          font-size: 20px;
          letter-spacing: 3px;
          font-family: "Comic Sans MS", cursive, sans-serif;
          font-weight: bold;
          text-align: center;
      }
      p {
          text-indent: 50px;
          text-align: center;
          letter-spacing: 3px;
          font-family: "Comic Sans MS", cursive, sans-serif;
      }
		.ar2{
			float: right;
			height: 200px;
			width: 300px;
        margin-top: 10px;
        padding: 10px;
        border-color: #b86d29;
        border-width: 2px;
        border-style:  outset;
        border-radius: 20px;
      }
      .m{   
      	position: absolute;
      	top: 25%;
      	left: 25%;
      	right: 25%;
      	bottom: 25%;
      }
      button{
      	text-decoration: none;
        float: left;
        line-height: 40px;
        text-align: center;
        background-color: #ff9933;
        font-size: 20px;
        color: #ffffff;
        font-family: arial, verdana, sans-serif;
        border-radius: 10px;
        width: 300px;
      }
	</style>
</head>
<body>
<?php
$s=$_POST["hidden"];
?>
<?php
$s1=$_POST["hidden1"];
?>
<div class="m" align="center"><table>
	<tr><td><div class="ar2">
		<h4>Donor</h4>
		<p></p><br><br><br>
    <?php
    if($s=="fund"){
echo "<form action='/17bcs048/PaytmKit/pay.php' method='post'><button>Donor</button><input type='hidden' value=$s name='hidden'></form>";
    }
    else{echo "<form action='$s' method='post'><button>Donor</button><input type='hidden' value=$s name='hidden'></form>";}
?>

	</div></td>
	<td><div class="ar2">
		<h4>Acceptor</h4>
		<p></p><br><br><br>
		<?php
    if($s1=="organacc"){
echo "<form action='hosplogin.php' method='post'><button>Acceptor</button><input type='hidden' value=$s1 name='hidden'></form>";
    }else{
echo "<form action='acc.php' method='post'><button>Acceptor</button><input type='hidden' value=$s1 name='hidden'></form>";
}
?>
	</div></td></tr>
</table></div>
</body>
</html>
