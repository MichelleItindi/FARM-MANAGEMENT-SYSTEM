<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <title>Dashboard</title>
    <style>
*{
    margin:0;
    padding:0;
    outline:0;
    border:0;
    text-decoration:none;
    list-style:none;
    box-sizing:border-box;
}
html{
    font: size 40px;

}
body{
    width:100vw;
    height:100vh;
    font-family:poppins,sans-serif;
    font-size:0.8rem;
    color:grey;
    user-select: none;
    overflow-x:hidden;
background:snow;
}
a{
    color:#363949;
}
h1{
    font-weight:800;
    font-size:1.8rem;
    color:black;
}
  
img{
    display:block;
    width:100%;
}
h2{
    font-size:1.4rem;
    color:black;
}
h3{
    font-size:o.87rem;
    color:black;
}
h4{
    font-size:o.8rem;
    color:black;
}
h5{
    font-size:o.77rem;
    color:black;
}
small{
    font-size:o.75rem;
}
p{
    color:#677483;
}
b{
    color:#363949;
}
.primary{
    color:#7380ec;
}
.michelle{
    color:#009879;
}
.container{
    display: grid;
    width: 96%;
    margin:0 auto;
  gap:1.8rem;
  grid-template-columns:14rem auto 23rem;
}
aside{
    height:100vh;
    background:#FFFFFF;
}
aside .top{
   display:flex;
   align-items:center;
   justify-content:space-between;
   margin-top:1.4rem;
   color:#FFFFFF;
   
}
aside .logo img{
    width:2rem;
    height:2rem;
    background:black;
}
aside .logo{
    display:flex;
    gap:0.8rem;
}
aside .close{
    display:none;
}
aside  .sidebar{
    background: #FFFFFF];
    display:flex;
    flex-direction:column;
    height:86vh;
    position:relative;
    top:1rem;
    box-shadow:0 2rem 3rem rgba(132,139,200,0.18);
}
h3{
    font-weight:500;
}
/*Handles the sidebar hover effect */
aside  .sidebar a{
    display:flex;
    color:#000000;
    margin-left:2rem;
    gap:1;
    align-items:center;
    position: relative;
    height:2rem;
    transition:all 300ms ease;
}
aside .sidebar a span{
   font-size:1.6rem;
   transition:all 300ms ease;
}
aside .sidebar a:last-child{
    position:absolute;
    bottom:2rem;
  width:100%;

}
aside .sidebar a.active{
    background:rgba(132,139,200,0.18);
    color:#009879;
    margin-left:0;
}
aside .sidebar a.active:before{
    content:'';
    width:6px;
    height:100%;
    background:#009879;
}
aside .sidebar a.active span{
    color:#009879;
    margin-left: calc(1rem-3px);

}
aside .sidebar a:hover{
    color:#009879;
}
aside .sidebar a:hover span{
    margin-left:1rem;

}
main{
    margin-top:1.4rem;
}

/*Handles the main page divs cow goat pig */
main .insights{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:1.6rem;
    background:#f9f9f9;
   
}
main .insights > div{
    background:#FFFFFF;
    padding:1.8rem;
    border-radius:2rem;
    width: 20vw;
    margin-top:1rem;
box-shadow:0 2rem 3rem rgba(132,139,200,0.18);
transition:all 300ms ease;
}
main .insights > div:hover{
    box-shadow:none;

}
main .insights > div span{
    padding:0.5rem;
    border-radius:50%;
    color:#fff;
    background:#000000;
    font-size:2rem;

}
main .insights > div.expenses span{
    background:pink;
}
main .insights > div.income span{
    background:brown;
}
.circular--square {
     border-radius: 60%;
}


  </style>
</head>
<body>
    <div class="container">
<aside>
    <div class="top">
        <!--- Dashboard Logo--->
    <div class="logo">
       <img src="logo.png" alt="">
        <h2>TA<span class="michelle">LU</span> </h2>
    </div>
    <div class="close" id="close-btn">
        <span class="material-icons-sharp">close</span>
    </div>
    </div>
     <!---Sidebar content--->
    <div class="sidebar">
       
    <a href="filtertask.php"><span class="material-icons-sharp">
schedule
</span> <h3>Schedule Tasks</h3>
</a>
<a href="search.php"><span class="material-icons-sharp">
 search
</span> <h3>Search records</h3>
</a>
    <a href="livestocktable.php"><span class="material-icons-sharp">
pets
</span> <h3>Livestock</h3>
</a> 
<a href="filterhealth.php"><span class="material-icons-sharp">
health_and_safety
</span> <h3>Health status</h3>
</a>
<a href="filtertreatment.php"><span class="material-icons-sharp">
medication
</span> <h3>Treatment</h3>
</a>
<a href="filterproduction.php"><span class="material-icons-sharp">
agriculture
</span> <h3>Production</h3>
</a>
<a href="expectancytable.php"><span class="material-icons-sharp">
pets
</span><h3>Expectant animals</h3>
</a>
<a href="offspringtable.php"><span class="material-icons-sharp">
pets
</span><h3>Offspring</h3>
</a>
<a href="heriditarylineage.php"><span class="material-icons-sharp">
add_box
</span>
<h3>Hereditary Lineage</h3></a>
<a href="offspringtable.php"><span class="material-icons-sharp">
bar_chart
</span><h3>Graphs</h3>
</a>









<a href="logout.php"><span class="material-icons-sharp">
logout

</span> 
<h3>Logout</h3>
</a>


    </div>
</aside>
<main>
    <h1> Welcome Farm owner <span class="material-icons-sharp">
waving_hand
</span> </h1>
    
     <!---Weather--->
     <a class="weatherwidget-io" href="https://forecast7.com/en/n1d2936d82/nairobi/" data-label_1="NAIROBI" data-label_2="WEATHER" data-theme="original" data-basecolor="#009879" >NAIROBI WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>
    <div class="insights">
<div class="sales">
<span class="material-icons-sharp">
pets
</span>
 <!---Tabs--->
<div class="middle">
    <div class="left"><h3>Total number</h3> <h1>COWS</h1></div>
</div>
<div class="progress">
<a href="cowstable.php">
<img class="circular--square" src="Cow and Calf.webp" /></a>
    
   
    <small class="textmuted">
        last 24 hours
    </small>
</div>
    </div>
    <div class="expenses">
<span class="material-icons-sharp">
pets
</span>
<div class="middle">
    <div class="left"><h3>Total number</h3> <h1>PIGS</h1></div>
</div>
<div class="progress">
<a href="pigstable.php">
<img class="circular--square" src="Image by Kenneth Schipper Vera.webp" /></a>
    
   
    <small class="textmuted">
        last 24 hours
    </small>
</div>
    </div>
    <div class="income">
<span class="material-icons-sharp">
pets
</span>
<div class="middle">
    <div class="left"><h3>Total number</h3> <h1>GOATS</h1></div>
</div>
<div class="progress">
<a href="goattable.php">
<img class="circular--square" src="Goat.webp" /></a>
    
  
    <small class="textmuted">
        last 24 hours
    </small>
</div>
    </div>
    </div>
    </div>
</main>

    </div>
</body>
</html>