<?php
  $now = time(); // or your date as well
  $your_date = strtotime("2017-02-03");
  $datediff = $now - $your_date;
  $daysToDate = floor($datediff / (60 * 60 * 24));
  $daysToDate = ltrim($daysToDate, '-');
?>
<!DOCTYPE html>
<html>
<title>LukeZaper</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://drscdn.500px.org/photo/78473191/m%3D900/6f854b85adc9601cc64f5bdf62be181f');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
<body>

<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    LukeZaper
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center"><?=$daysToDate?> days left</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Owned by <a href="http://lukewon.com" target="_blank">LukeWon.com</a>
  </div>
</div>

</body>
</html>
