<?php
require 'config.php';
if(!empty($_SESSION["id"])) {
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap');

:root{
    --main-color:#dfdfdf;
    --black:#13131a;
    --bg:#184e73;
    --border:.1rem solid rgb(255, 255, 255);
}

*{
    font-family: 'Oswald', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}


.testclass {
  background:rgb(255,255,255);
  position: relative;
}
.testclass:before {
  content: "";
  position: absolute;
  left: 0; right: 0;
  top: 0; bottom: 0;
  background: rgba(0,0,0,.5);
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
}

html::-webkit-scrollbar{
    width: .8rem;
}

html::-webkit-scrollbar-track{
    background: transparent;
}

html::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 5rem;
}

body{
    background: var(--bg);
}

section{
    padding:2rem 7%;
}

.heading{
    text-align: center;
    color:#fff;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.heading span{
    color:var(--main-color);
    text-transform: uppercase;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color:#fff;
    background: var(--main-color);
    cursor: pointer;
}

.btn:hover{
    letter-spacing: .2rem;
}

.header{
    background: var(--bg);
    background-color: #FBFBFB;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:1.5rem 10%;
    border-bottom: var(--border);
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
}

.header .logo img{
    height: 6rem;
}


.header .navbar a{
    margin:0 1rem;
    font-size: 1.6rem;
    color:#EB6B94;
}

.header .navbar a:hover{
    color:var(--main-color);
    border-bottom: .1rem solid var(--main-color);
    padding-bottom: .5rem;
}

.header .icons div{
    color:#fff;
    cursor: pointer;
    font-size: 2.5rem;
    margin-left: 2rem;
}

.header .icons div:hover{
    color:var(--main-color);
}

#menu-btn{
    display: none;
}

.header .search-form{
    position: absolute;
    top:115%; right: 7%;
    background: #fff;
    width: 50rem;
    height: 5rem;
    display: flex;
    align-items: center;
    transform: scaleY(0);
    transform-origin: top;
}

.header .search-form.active{
    transform: scaleY(1);
}

.header .search-form input{
    height: 100%;
    width: 100%;
    font-size: 1.6rem;
    color:var(--black);
    padding:1rem;
    text-transform: none;
}

.header .search-form label{
    cursor: pointer;
    font-size: 2.2rem;
    margin-right: 1.5rem;
    color:var(--black);
}

.header .search-form label:hover{
    color:var(--main-color);
}

.home{
    min-height: 100vh;
    display: flex;
    align-items: center;
    background-color: #4A9ACF;
}

.home .content{
    max-width: 60rem;
    padding-bottom: rem;
    padding-left: 8rem;
    width: 300px;
    height:1rem;

}

.home .content .img{
    max-width: 60rem;
    padding-bottom: rem;
    padding-left: 8rem;
    width: 300px;
    height:800px;

}


.home .content .btn{
    font-size: 2rem;
    font-weight: lighter;
    line-height: 1.8;
    padding: 0;
    color:#eee;
}

.home .content .p{
    font-size: 500%;
}

.typo {
    size: 100%;
}

.review .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:1.5rem;
    background: #EB6B94;
}

.review .box-container .box{
    text-align: center;
    border:var(--border);
    padding: 2rem;
}

.review .box-container .box .icons a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    border:var(--border);
    color:#fff;
    margin:.3rem;
}

.review .box-container .box .icons a:hover{
    background:var(--main-color);
}

.review .box-container .box .image{
    padding: 2.5rem 0;
}

.review .box-container .box .image img{
    height: 25rem;
}

.review .box-container .box .content h3{
    color:#fff;
    font-size: 2.5rem;
}


.container {
  position: relative;
  width: 100%;
}

.container2 {
  position: relative;
  width: 100%;
}

.image2 {
  display: block;
  width: 100%;
  height: auto;
}

.image3 {
  display: block;
  width: 80%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #ffffffcb;
}

.container:hover .overlay {
  opacity: 3;
}

    </style>
</head>
<body>
    
<header class="header">


        <a href="#" class="logo">
            <img src="img/Logo TrueGame.png" alt="">
        </a>
        <h1>Welcome <?php echo $row["nickname"]; ?></h1>
        <form action="" method="get">
            <input type="text" name="cari">
            <input type="submit" name="cari">
        </form>
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="forum.php">forum</a>
            <a href="video.php">guide</a>
            <a href="#review">review</a>
            <a href="logout.php">Logout</a>
        </nav>
</header>
<section class="home" id="home">

    
    

    <div class="content">
        <img src="img/frame1.png" alt="" class="image3">
        <h1>Welcome to Truegame where you can create a forum thread, watch or read a guide, and view a review for a game</h>
    </div>
</section>

<section class="review" id="review">

    <h1 class="heading"><span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            
            <div class="container">
                <a href="reviewbf1.php">
                <img src="img/battlefield_PNG4.png" alt="" class="image2">
                <div class="overlay">
                    
                </div>
                </a>
            </div>
            <div class="content">
                <h3>Battlefield 1</h3>
                
               
            </div>
        </div>

        <div class="box">
            
            <div class="container">
                <a href="reviewow2.php">
                <img src="img/overwatch.png" alt="" class="image2">
                <div class="overlay">
                    
                </div>
                </a>
            </div>
            <div class="content">
                <h3>Overwatch2</h3>
               
               
            </div>
        </div>

        <div class="box">
            
            <div class="container">
                <a href="reviewdota2.php">
                <img src="img/dota2.png" alt="">
                <div class="overlay">
                    
                </div>
                </a>
            </div>
            <div class="content">
                <h3>Dota 2</h3>
               
                
            </div>
        </div>

    </div>

</section>