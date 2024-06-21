<?php
$con=mysqli_connect("localhost","root","","mydb");
require_once("tasjil.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["envoyer"])){
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $tel=$_POST["tel"];
        if(!empty($nom)&&!empty($prenom)&&!empty($age)&&!empty($email)&&!empty($tel)){
            $insert="INSERT INTO `chefchaouen`(`id`, `nom`, `prenom`, `age`, `email`, `téléphone`) VALUES ('#','$nom','$prenom','$age','$email','$tel')";
            mysqli_query($con,$insert);
        }
        // if($age<10){
        //     echo "<h1>nous avons non acceptons pas les bébés 😂😂😂</h1>";
        // }
        else{
            $message="tous les champs doivent etre remplis";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .container{
            color: orange;
            margin-left: 5px;
        }
        body{
            background-image: url(6666.jpg);
        }
        .container{
            font-size:45px;
            color:salmon;
        }
        h2{
            color:aqua;
            font-size: 30px;
        }
        #i{
            font-size: 20px;
            color: chartreuse;
            margin-left:10px;
            margin-top:20px;
        }
        #envoyer{
            background-color:aqua;
            color:green;
            font-size:30px;
            padding:20px;
            border-style:dashed;
            border-color:red;
            border-radius:20px;
            margin-left:30px; 
        }
        h1{
            color:red;
            text-align:center;
        }
    </style>
    
</head>
<body>
    <?php if(!empty($message)){ ?>
    <div style="color:red"><center><h1><?php echo $message ?></h1></center></div>
    <?php } ?>
<form action="" method="POST">
        <center>
        <h1 class="container">participer au voyage:</h1>
        <h2> Nom : <input type="text" name="nom"> </h2>
        <h2> Prenom : <input type="text" name="prenom"> </h2>
        <h2> age : <input type="number" name="age" id=""> </h2>
        <h2>Email : <input type="email" placeholder="prenom1234@gmail.com" name="email"></h2>
        <h2> Tel: <input type="tel" name="tel"> </h2>
        <input type="submit" value="envoyer" name="envoyer" id="envoyer"><br><br>
        <i class="fa-brands fa-cc-visa" id="i"> visa</i>
        <i class="fa-brands fa-paypal" id="i" > paypal</i>
        <i class="fa-brands fa-amazon" id="i" > amazon</i>
        </center>
    </form>
</body>
</html>