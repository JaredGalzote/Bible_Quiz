<html>
<head>
	<title>Bible Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bee.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	
</head>
<body>
    <div class="container">
          <div id="home" class="flex-column flex-center">
          <h1>Bible Quiz<img src=""></h1>
          <a href="main.php" class="btn">Take Quiz</a>
          <a href="highscore.php" id="highscore-btn" class="btn">High Scores<i class="fas fa-crown"></i></a>
          <a href="add.php" class="btn">Add question</a>

          <svg xmlns="http://www.w3.org/2000/svg" viewBox="-25 0 150 100" width="150" height="100">
    <!-- still unclear about the path accepted by anime.js -->
      <path id="path" stroke="none" fill="none" d="M -25 -20 a 30 30 0 0 0 60 0 30 30 0 0 0 -60 0 30 30 0 0 1 -60 0 30 30 0 0 1 60 0" />
    </svg>

    <svg id="bee" viewBox="-10.5 -10.5 21 21" style="width: 50px; height: auto;">
      <g transform="rotate(90) translate(0 -4)">
        <g stroke="currentColor">
          <circle fill="currentColor" r="4" stroke-width="2.5" />
          <g fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path transform="rotate(45) translate(0 -4)" d="M 0 0 v -3" />
            <path transform="rotate(-45) translate(0 -4)" d="M 0 0 v -3" />
            <g fill="hsl(200, 80%, 90%)">
              <path transform="rotate(15)" d="M 0 0 h 7 a 3 3 0 0 1 0 6 q -4 0 -7 -6" />
              <path transform="scale(-1 1) rotate(15)" d="M 0 0 h 7 a 3 3 0 0 1 0 6 q -4 0 -7 -6" />
            </g>
            <g fill="hsl(50, 80%, 50%)">
              <path d="M 0 0 c 2 6 8 10 0 12 -8 -2 -2 -6 0 -12" />
            </g>
          </g>
        </g>
      </g>
    </svg>
          </div>
 
    </div>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.min.js'></script><script  src="./script.js"></script>
</body>
</html>
