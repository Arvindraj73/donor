<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
.india {
          text-indent: 50px;
          text-align: justify;
          letter-spacing: 3px;
          font-family: "Comic Sans MS", cursive, sans-serif;
          color: rgb(255,0,0);
          font-weight: bold;
          text-align: center;
      }
      .tour {
          text-indent: 50px;
          text-align: justify;
          letter-spacing: 3px;
          font-family: "Comic Sans MS", cursive, sans-serif;
          color: #000000;
          font-weight: bold;
          text-align: center;
      }
      .heading{
        text-align: center;
      }
      .info{
      	text-indent: 50px;
          text-align: center;
          letter-spacing: 3px;
          font-family: "Comic Sans MS", cursive, sans-serif;
          color: rgb(255,0,0);
          font-weight: bold;
          text-align: center;
      }
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
	<div class="head">
    <div class="heading">
      <h1><span class="india">Donate</span><span class="tour"> Online!</span></h1>
    </div>
<table>
<?php
if($_POST["hidden"]=="bloodacc"){
echo "<h2 class='info'>Blood Donors Available</h2>";
$conn = mysqli_connect("localhost", "root", "", "donation");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM blood";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td><p>" . $row["name"]. "</p><p>" . $row["bloodgroup"] . "</p><p>"
. $row["age"]."</p><p>" . $row["gender"] .  "</p></td><td><button>Contact</button</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}

else if($_POST["hidden"]=="organacc"){
echo "<h2 class='info'>Organ Donors Available</h2>";
$conn = mysqli_connect("localhost", "root", "", "donation");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM organs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td><p>" . $row["name"] . "</p><p>" . $row["organ"] . "</p><p>"
. $row["age"] . "</p><p>" . $row["gender"] . "</p></td><td><button>Contact</button</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}

else if($_POST["hidden"]=="clothacc"){
echo "<h2 class='info'>Cloth Donors Available</h2>";
$conn = mysqli_connect("localhost", "root", "", "donation");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM clothes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td><p>" . $row["name"] . "</p><p>"
. $row["clothtype"]."</p><p>" . $row["clothfor"]."</p><p>" . $row["contact"]."</p><p>" . $row["address"] ."</p><p>". $row["quantity"]."</p><p>" . $row["clothgender"] . "</p></td><td><button>Contact</button</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
}?>
</table>
</body>
</html>