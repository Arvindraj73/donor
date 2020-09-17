<html>
<head>
  <style>
  input[type=text] ,input[type=number],select
  {
  background-color: rgb(255,200,100);
  background-position: 10px 10px;
  background-repeat: no-repeat;
  height: 45px;
  width: 500px;
  padding: 10px;
  border: 2px solid red;
  border-radius: 4px;
  margin-top: 5px;
}
 input[type=submit], input[type=reset] {
  background-color: red;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;

}
label{
     text-indent: 50px;
     text-align: center;
     letter-spacing: 3px;
     font-family: "Lucida Console", Monaco, monospace;
     margin-bottom: 10px;
   }
body{
  background-color: #ff9933;
}
div.main{
  position: absolute;
  left: 30%;
  top: 10%;
  border-color: #000000;
  border-width: 2px;
  border-style:  outset;
  border-radius: 20px;
  padding: 10px;
  background-color: rgb(255,255,255);
}
div.s{
  padding: 8px;
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
      .head{
        background-color: white;
      }
</style>
</head>
<body>
  <?php
$s=$_POST['hidden'];
echo $s;
?>
<div class="head">
    <div class="heading">
      <h1><span class="india">Donate</span><span class="tour"> Online!</span></h1>
</div>
<div class="main"><form action="action_page.php" method="post">
  <div class="s"><label for="name">Name:</label><br>
    <?php
echo "<input type='hidden' value='$s' name='hidden'>"?>
  <input type="text" id="name" name="name" placeholder="Enter your full name" ><br></div>
  <div class="s"><label for="Blood group">Blood group:</label><br>
  <input type="text" id="Blood group" name="Bloodgroup" placeholder="Enter your Blood Group "><br></div>
  <div class="s"><label for="Age">Age:</label><br>
  <input type="Number" id="Age" name="Age" placeholder="Enter your Age"><br></div>
  <div class="s"><label for="Contact">Contact:</label><br>
  <input type="text" id="Contact" name="Contact" placeholder="Enter your Phone Number"><br></div>
  <div class="s"><label for="Gender">Gender:</label><br>
  <select id="Gender" name="Gender">
  <option value="M">Male</option>
  <option value="F">Female</option>
  </select><br></div>
  <div class="s"><label for="Address">Address:</label><br>
  <input type="text" id="Address" name="Address" placeholder="Enter your address"><br><br></div>
  <div class="s"><input type="submit" value="Submit">
  <input type="Reset" value="Reset"></div>
</form>
</div>
</div>  
</body>
</html>