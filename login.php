<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="read-book.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign-in</title>
<style>
body{
    margin:0;
    padding:0;
    background: #e6e3e1;

}
.ceva{
    height:100%;
    width:100%;
    align-items:center;
    text-align:center;

}
.corp{
    width:80%;
    height:80%;
    box-shadow: 5px 10px  rgba(255, 102, 0,0.5);
    background:linear-gradient(rgba(31, 53, 224,0.5),#e01f1f);
    position:absolute;
    left:50%;
    top: 50%;
    transform: translate(-50%,-50%);
}

.input{
    height: 100%;
    width: 100%;
    margin-top:4vh;
}
.i input{
    outline:none;
    height: 10vh;
    width:40%;

    border-radius:10vh;
    font-size:150%;
}
.input input{
    width: 90%;
   margin-top:4vh;
   outline:none;
   font-size:5vh;
}
.submit input{
    outline:none;
    height: 10vh;
    width:40%;
    margin-top:20px;
    border-radius:10vh;
    font-size:150%;
}
@media all and (max-width:619px){
    .submit input{
        font-size:100%;
    }
    .i a input{
        font-size:100%;
    }
}
@media all and (max-width:426px){
    .submit input{
        font-size:80%;
    }
    .i a input{
        font-size:80%;
    }
}
#i1{
    width:20vh;
    height:5vh;
    float:left;
    margin-top:40px;
}
#i2{
    width:15vh;
    height:15vh;


    float:right;
}
.corp h1{
    font-size:5vh;
}
</style>
</head>
<body>
<div class= ceva>
<div class="corp">
<h1 style="color:white;">Sing-in</h1>
<?php
if(isset($_GET['info']) && $_GET['info'] == "nugasit"){
    echo'<h3 style="color:red">Parola nu sa potrivit cu email-ul</h3>';
}
if(isset($_GET['info']) && $_GET['info'] == "noemail"){
    echo'<h3 style="color:red">Email-ul nu a fost gasit</h3>';
}
?>
<form action="sign-in.php" method="POST">
<div class="input">
<input  style="height: 10vh; border-radius:10vh;" placeholder="Email" type="email" name="email" size="30" pattern=".+@gmail.com" require>
<input  style="height: 10vh; border-radius:10vh;" type="password" placeholder="Password" name="password" require>
</div>
<div class="submit">
<input type="submit" value="Conecteazate">
</div>
</form>

<div class="i">
<a href="sign-up.php"><input type="button" value='Sign-up'></a>
</div>



</div>
</body>
</html>
