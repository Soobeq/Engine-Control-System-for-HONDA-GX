<html>
  <title>Engine Control HONDA GX</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style> html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif} </style>
<body class="w3-light-grey">
<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Engine Control version 4.0</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="honda.png" class="w3-margin-right" style="width:230px">
    </div></br></br></br>
    <div class="w3-col s8 w3-bar">
      <span>Witaj, <strong>Gokart Arena</strong></span><br>
    </div>
  </div>
  <hr>

  <div class="w3-container">
    <h5>Panel</h5>
  </div>

  <div class="w3-bar-block">
    <div id="list"></div>
  </div>

</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
  <div id="engines"></div>
  </div>

  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4>Engine Control version 4.0 </h4>
    <p>Powered by &copy<a href="" target="_blank" style="text-decoration: none;"> Sebastian Górczak</a></p>
  </footer>
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");
// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");
// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script> 
$(document).ready(function(){    
    loadstation();
    loadstation2();
});

function loadstation(){
    var tmp = "?val="+<?php echo $_GET['val']; ?>;
    var pagephp = "page_engine.php" + tmp;
    $("#engines").load(pagephp);
    setTimeout(loadstation, 800);
}

function loadstation2(){
    $("#list").load("list.php");
    setTimeout(loadstation2, 2000);
}

function set_limit_change (clicked_id,value) {    
$.ajax({          
  type: "POST",
  url: "set_change.php",
  data: {id: clicked_id, val: value }
})
 }

function set_limit (clicked_id,value) {    
$.ajax({          
  type: "POST",
  url: "set_limit.php",
  data: {id: clicked_id, val: value }

})//.done(function( msg ) {
  // alert( clicked_id );
  //alert( "Predkosc ustawiona: " + msg );
//});    
 }

function set_limit_all (clicked_id,value) {    
$.ajax({          
  type: "POST",
  url: "set_limit_all.php",
  data: {id: clicked_id, val: value }

}) 
 }
</script>

</body>
</html>
