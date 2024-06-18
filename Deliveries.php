<?php require_once("db_connect.php");
 include_once("templates/headings.php");
 include_once("templates/nav.php"); 
    
 if(isset($_POST["send_message"])){
    $fname =mysqli_real_escape_string($conn, addslashes( $_POST["firstname"]));
    $lname = mysqli_real_escape_string($conn, addslashes($_POST["lastname"]));
    $Telno = mysqli_real_escape_string($conn, addslashes($_POST["email"]));

    $insert_message = "INSERT INTO valuation(fname, lname, Telno)
    VALUES ('$fname', '$lname', '$Telno')";

if ($conn->query($insert_message) === TRUE) {
  header("Location: Deliveries.php");
  exit();
} else {
  echo "Error: " . $insert_message. "<br>" . $conn->error;
}

$conn->close();
}

    ?>
    <h1>We Do Deliveries!!!!</h1>
    <p>In  an  uncommon  situation  like  this  coronavirus pandemic,  people  more  consider  their  health. 
         In purchasing  food, especially,  customers prefer  to order food  through online  applications and  trusted providers than directly visiting the restaurant [8] to avoid getting virus infected.
 Unfortunately, studies on the influence of product  or  food quality  and e-service  quality  towards customer trust as well as customer trust towards loyalty are still rare in the OFD system context. 
 Therefore, according  to this gap, this research aims to  determine  how  both  e-service  quality  and  food quality influence customer trust and how customer trust influences  customer  loyalty in  the  OFD  context.
This study is expected to bring two implications.
First, it can enrich the literature on customer trust and loyalty in the context  of OFD services. Second, it can provide useful guidelines  for  culinary  business  actors  to  develop strategies  in  developing  their  business  activity</p>
   
<img src="Photos/People/p6.jpg" alt="Delivery guy" width="30%">
<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname"><br>
    <label for="Telno">Telephone number:</label><br>
    <input type="text" id="Telno" name="Telno">
</form>
</body>
</html>