<?php session_start();?>
<html>
  <head>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="nav.css">
    
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
 
  </head>
  <style>
    #home{
    display: flex;
    flex-direction: column;
    padding:3px 200px;
    height: 550px;

    justify-content: center;
    align-items: center;
}

#home::before{ 
    content: "";
    position: absolute;
    /* background: url("C:/Users/Onkar/Downloads/pexels-pixabay-207247.jpg") no-repeat center center/cover; */
    height: 642px;
    top:0px;
    left:0px;
    width: 100%;
    z-index: -1;
   /* opacity:0.89;*/

}

#home h1{
    color: black;
    text-align: center;
    font-family:sans-serif;
}

#home p{
    color:black;
    text-align: center;
    font-size: 1.5rem;
    font-family: 'Bree Serif', serif;
}
.h-primary {
    font-family: 'Bree Serif', serif;
    font-size: 3.8rem;
    padding: 12px;
}
  </style>
  <body>
    <?php include('nav.php');?>

    <section id="home">
    <h1 class="h-primary">Welcome to Instrument selling</h1>
    <p>Online musical instrument selling system is web-based system for selling musical instruments.
To solve buying problem this project is developed. This project has built for buying musical instruments only.
It may help collecting perfect product in a very short time the collecting will be obvious simple and sensible.

</p>

</section>
<hr>
<div class="row">

  <div class="col p-6 rounded-circle "><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ19SZi2AUAG5catq1I5MLfUIzHeh17zki_w&usqp=CAU" alt="" height="400px" width="700px" ></div>
  <div class="col p-6 " id="perpose">PROPOSED SYSTEM<br><br><br>
    <ul>
    <li id="perpose">	The use of this project in the life can reduce all the
    problems about buying. </li><br>
    
    <li id="perpose">	Baying the products is very simple and deliver to
    the home.</li><br>
    
    <li id="perpose">		The customer gets proper information about the instruments.</li><br>
    <li id="perpose">	The main objective of developing this project is to 
    save money and time. An inquiry is easily done by.
</li><br>
  </ul>
  </div> 
</div>
<hr>

<div class="row">

  <div class="col p-6 " id="perpose">SCOPE OF SYSTEM <br>
    <ul>
      <p id="perpose">
        <p id="perpose">It may help collecting perfect product. In a very short time the collection will be obvious simple and sensible.</li>
        <p id="perpose"> It also helps in current all works relative to buying and selling of the products .
    It satisfy the user requirement </p>
    <p id="perpose">Be expandableDelivered on schedule within the budget</p>
    <p id="perpose">Be easy to understand by the farmer and buyer</p>
    
    <p id="perpose"> Have a good user interface</p> 
    <p id="perpose"> Be easy to operate </p>
      
        
    </ul>
  </div> 
  <div class="col p-6 " id="perpose">
    <img class="mt-4" src="https://hustlersdigest.com/wp-content/uploads/2020/12/What-Is-The-Worlds-Best-Selling-Musical-Instrument-scaled.jpg" alt=""height="450px" width="800px" >
  </div>
</div>

<!-- Footer -->

<?php include('footer.php');?>

  </body>
</html>