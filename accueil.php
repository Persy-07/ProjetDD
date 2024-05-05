<?php require 'Composants/connection.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Document</title>
</head>
<body>
    <section>
       <?php require 'Composants/header.php'?>
    </section>
    <section class="heade">
      <div class="hea">
        <h2>NOS PRODUITS</h2>
      </div> 
      <div class="hea">
        <h2>NOUVEAUTE</h2>
      </div> 
      <div class="hea">
        <h2>PROMOS & BONS PLANS</h2>
      </div> 
      <div class="hea">
        <h2>AIDE</h2>
      </div> 
    </section> 

    <section class="main">
      <div class="main1">
            <div class="diva"> 
                <img name="divar"  alt="">    
            </div>
            <div class="main2">
                
                 <h2>30%</h2> <p> de remise avec le <br> CODE : <span>RAY</span> </p> 
                
            </div>
            <a href="shop.php" class="btn">J'en profite</a>
        </div>
  </section>

        <script>
        var images=[];
        images[0]="images/Meilleur-Disque-SSD-Internes0.jpg";
        images[1]="images/7485c52a-c65d-49ab-b403-48fe56057f7c.__CR0,0,970,300_PT0_SX970_V1___0.jpg";
        
        var i=0;
        var timer=5000;

        function changerimage(){
            document.divar.src=images[i];
            if (i<images.length-1) {
                i++;
            }else{
                i=0;
            }
            setTimeout("changerimage()",timer)
        }
        window.onload=changerimage;
       </script>
    
    <section class="main4">
      <div class="hea2">
        <i class="fa-solid fa-2x fa-star"></i> <h4> Plus de 2 ans  d'expertise</h4>
      </div> 
      <div class="hea2">
        <i class="fa-solid fa-2x  fa-cart-shopping"></i> <h4> + de 2000 références</h4>
      </div> 
      <div class="hea2">
        <i class="fa-solid fa-2x  fa-truck"></i> <h4> Livraison gratuite</h4>
      </div> 
      <div class="hea2">
        <i class="fa-solid fa-2x fa-message"></i> <h4> Une équipe à  votre service</h4>
      </div> 
      <div class="hea2">
       <i class="fa-solid fa-2x  fa-euro-sign"></i>  <h4> Payez vos achats  en <br> plusieurs fois</h4>
      </div> 
    </section> 


    <section>
      <?php include 'Composants/footer.php' ?>
   </section>
  

</body>
</html>
 
 