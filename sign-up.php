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
    height:90%;
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
.submit button{
    outline:none;
    height: 10vh;
    width:40%;

    border-radius:10vh;
    font-size:150%;
}
.input input{
    width: 90%;
   margin-top:1vh;
   outline:none;
   font-size:4vh;
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
.i input{
    outline:none;
    height: 10vh;
    width:40%;

    border-radius:10vh;
    font-size:150%;
}

.corp h1{
    font-size:5vh;
}
.input  img{
    width:100px;
    height:100px;
    border-radius:60px;
    border: 5px solid rgba(255, 132, 0,0.3);
}
.file input{
    display: none;

}
</style>

</head>
<body>
<div class= ceva>
<div class="corp">
<form action="sign.php" id="form" method="post" enctype="multipart/form-data">
<div class="input">
<h1 style="color:white;">Sign up</h1>
<?php
if(isset($_GET['info']) && $_GET['info'] == "nuimagine"){
    echo '<p style="color:red">Poza nu a fost adaugata</p>';
}
if(isset($_GET['info']) && $_GET['info'] == "nousername"){
    echo '<p style="color:red">Username nu a fost adaugata</p>';
}
if(isset($_GET['info']) && $_GET['info'] == "noemail"){
    echo '<p style="color:red">Email-ul nu a fost adaugata</p>';
}
if(isset($_GET['info']) && $_GET['info'] == "nopassword"){
    echo '<p style="color:red">Parola nu a fost adaugata</p>';
}
?>
<div id="error"></div>
<input  style="height: 8vh; border-radius:10vh;" type="text" placeholder="Username" name="username" id="username" require>
<input  style="height: 8vh; border-radius:10vh;" placeholder="Email" type="email" id="email"name="email" size="30" pattern=".+@gmail.com" require>
<input  style="height: 8vh; border-radius:10vh;" type="password" placeholder="Password" name="password" id="password"  require>



</div>
<div class="submit">
<input type="submit" value="Conecteazate">
</div>
</form>
<div class="i">
<a href="login.php"><input type="button" value='Sign-in'></a>
</div>

</div>

</body>
</html>
