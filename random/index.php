<?php
 require_once("../layout/header.php");
?>
<link rel="stylesheet" href="style.css"/>
<h1 class="title text-center">Random.org</h1>
<div class="container">
      <div class="wrapper">
        <div class="input-wrapper">
          <label for="min">Min:</label>
          <input type="number" id="min" value="0" />
        </div>
        <div class="input-wrapper">
          <label for="max">Max:</label>
          <input type="number" id="max" value="10" />
        </div>
      </div>
      <button id="generate">Generate</button>
      <div id="result"></div>
    </div>
<script src="app.js"></script>
<?php 
    require_once("../layout/footer.php")
?>