<link href="https://sharonpraju.github.io/Zynact/assests/css/blk-design-system.css?v=1.0.0" rel="stylesheet" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
include 'db_connection.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['name']))
 {
     //do nothing
 }
 else
 {
    header("Location: index.html");
    exit;
 }
 if(!empty($_POST['area']) && !empty($_POST['title']))
{
    //do nothing
}
else
{
    header("Location: index.html");
    exit;
}

    $email=$_SESSION['email'];
    $name=$_SESSION['name'];
    $phone=$_SESSION['phone'];
    $location=$_SESSION['location'];
    $college=$_SESSION['college'];
    $ieee_member=$_SESSION['ieee_member'];
    $area=$_POST['area'];
    $title=$_POST['title'];
    $description=$_POST['description'];

    $sql="INSERT INTO ieee_pitchathon (area, title, description, name, email, phone, location, college, ieee_member)
    VALUES ('$area', '$title', '$description', '$name', '$email', '$phone', '$location', '$college', '$ieee_member')";
    if ($conn->query($sql) === TRUE)
    {
        echo"<br><br><br><center>
            <div class='text-white'>Submitted Successfully
            <br>
            <br>You can also submit multiple problems.<br>Click the button below to submit another problem.
            <br>
            <a class='btn btn-info' href='pitchathon.php'>Submit Another Problem</a></div>
            <br>
            <small>Participation Certificate<small>
            <form action='generate.php' method='POST'>
            <input type='submit' class='btn btn-simple btn-success' value='Download Certificate'>
            </form>
            <br>
            <small>Click the below button to get free web hosting account<small><br>
            <a class='btn btn-simple btn-success' href='hosting.zynact.com/register.php?plan=free' target=_blank>Get Free Web Hosting</a>
            </center>";
    }
    else
    {
        //echo $conn->error;
        echo"<br><br><br><br><br><br><br><center>
        <div class='text-white'>Something Went Wrong
        <br>Please try again, If this happens again please contact us.
        <br> Error-Code : ieee_reg01</center>";
    }
?>