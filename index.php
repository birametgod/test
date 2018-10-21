<?php 
    require_once 'programmation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class = "header">
        <div class="logo">
            <img src="assets/img/logo.png" alt="" >
        </div>
        <div class="cinema">
            <ul class = "listC">
                <li class="firstC">cinéma 1</li>
                <li>cinéma 2</li>
                <li>cinéma 3</li>
            </ul>
        </div>
        <div class="menu">
            <div class = "menuOne" >
                <ul class= "enteteOne">
                    <li class="pdf" style='font-weight:bold'> PROGRAMME PDF <img src="assets/img/download.png" class="download">
                    </li> 
                    <li> Nos Cinémas <i>-</i> </li> 
                    <li>Scolaires   <i>-</i></li>
                    <li>Contact   <i>-</i></li>  
                    <li>Infos pratiques</li> 
                    <li class="face"><i class="fa fa-twitter"></i></li>
                    <li class="t"><i class="fa fa-facebook"></i></li>
                    <li class="butt"style="float:right"><input type="button" class="button" value="BILLETERIE">
                        <div class="dropdown-two">
                            <p class="dropT"> <i style='font-style:italic'>Cinéma 1</i> </p>
                            <p class="dropT"> Cinéma 2</p>
                            <p class="dropT"> Cinéma 3</p>
                        </div>    
                    </li>
                </ul>

            </div>
            <div class ="menuTwo">
                <ul class="enteteTwo">
                    <li class="programm">PROGRAMMATION
                    <div class="dropdown-content">
                        <p class="dropD"> <span class="point" ></span> <i>|</i> Cinéma 1</p>
                        <p class="dropD"> <span class="point" ></span> <i>|</i> Cinéma 2</p>
                        <p class="dropD">  <span class="point" ></span> <i>|</i> Cinéma 3</p>
                        <p class="dropD">  <span class="point" ></span> <i>|</i> Calendrier general</p>
                    </div>
                    </li><i>-</i>
                    <li>EVENEMENT</li><i>-</i>
                    <li>AVANT-PREMIÈRES</li><i>-</i>
                    <li>RENDEZ-VOUS</li><i>-</i>
                    <li>SORTIES NATIONALES</li><i>-</i>
                    <li>SMIC</li>
                </ul>
            </div>
        </div>
    </div>
    <div>
        <div class="middle">
            <div class="pp">
                <img id="myImg" width='80%' height='100%' style='position:absolute; clip:rect(0px 810px 410px 100px);' src="assets/img/background.png" alt="">
            </div>
            <div class="slider" >
                <div class="one slide">
                    <h2>SORTIE <br> NATIONALE</h2>
                    <h2>Don't Worry,<br>He Won't Get Far On Foot</h2>
                    <h5 style='font-weight:100'>de Gus Van Sant <br> 2018</h5>
                </div>
                <div style="text-align:center">
                    <span class="dot" ></span> 
                    <span class="dot"></span> 
                    <span class="dot"></span> 
                </div>
            </div>
        </div>
        <div class="caroussel">
            <div style="text-align:center">
                    <h1 class="prog">Programmatio<i>n</i> </h1>
                    <div class="line">
                        <div class="combine">
                            <a class="prev" onclick="decrementer()">&#10094;</a>
                            <a class="next" onclick="incrementer()">&#10095;</a> 
                            <?php foreach($programmationDates as $date): ?>
                                <div class="name-block dateItem fade"> <?=$date;?> </div>
                            <?php endforeach; ?>
                        </div>
                        <div>
                            <p class="txt">CALENDRIER PAR SEMAINE <img src="assets/img/calendar.png" class="download"></p>
                        </div>
                    </div>
            </div>
        </div> 
    </div>
    <script>
        // var slides = document.getElementsByClassName("name-block");
        // console.log(slides.length)

    let dates = document.getElementsByClassName("dateItem");
            dates = Array.from(dates);
            let j = 0;
            let placeholder = [];
            function blank (){
                for(let i = 0; i < dates.length; i++ ){
            dates[i].style.display = "none";
                }  
            }
            function initializer (){
                for (let i = 0; i < dates.length; i++ ){
                    if( i < 3){
                        dates[i].style.display = "inline-block";
                    }else{
                        dates[i].style.display = "none";
                    }
                    
                } 
            }
    function decrementer(){
        if(j > 0){
            blank()
            j -= 1;
            for(let i = j; i < j+3; i++ ){
                dates[i].style.display = "inline-block";
            }
        }
    

    function incrementer (){
        if(j< dates.length - 3){
            blank()
            j += 1;
        for(let i = j; i < j+3; i++ ){
            dates[i].style.display = "inline-block";
        }
        }
    }

        window.onload=initializer;
    </script>
</body>
</html>