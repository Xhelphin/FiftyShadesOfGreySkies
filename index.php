<html>
  <head>
    <title>Fifty Shades Of Grey Skies</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand+SC&display=swap');
      body {
        background-color: #232323;
        font-family: 'Patrick Hand SC', sans-serif;
      }
      .text {
        color: #dbdbdb;
      }
      .container {
        justify-content: center;
        text-align: center;
      }
      .imgcontainer #skyimg {
        max-width: 85vw;
        max-height: 50vh;
        width: auto;
        height: 50vh;
        border-radius: 5px;
      }
      .button {
        background-color: white;
        border: none;
        color: white;
        padding: 5px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 24px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 6px;
        font-family: 'Patrick Hand SC', cursive;
      }
      .blackbutton {
        background-color: white;
        color: #232323;
        border: 3px solid #777;
      }
      .blackbutton:hover {
        background-color: #aaa;
        color: black;
      }
    </style>
    <script>
      function reload() {
        window.location.href = "/FiftyShadesOfGreySkies";
      }
    </script>
  </head>
  <body>
    <div class="container">
      <h1 class="text"><i>Fifty Shades Of Grey Skies</i></h1>
      <h2 class="text">The quintessentially British website</h2>
    </div>
    <div class="container imgcontainer">
      <?php
        $imgfile = rand(1,50) . ".jpg";
        echo '<img id="skyimg" src="' . $imgfile . '" alt="Photo of a grey sky">';
      ?>
    </div>
    <br>
    <div class="container">
      <button class="button blackbutton" onclick="reload()">Show me another sky</button>
    </div>
    <br>
    <div class="container">
      <a href="https://github.com/Xhelphin" target="_blank">
        <img src="https://img.shields.io/badge/Author-Xhelphin-666?style=for-the-badge&logo=github&labelColor=111" alt="Made by @Xhelphin on Github">
      </a>
    </div>
  </body>
</html>