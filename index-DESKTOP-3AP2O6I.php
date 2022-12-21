<?php include_once("conn.php");?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Vulnerable Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="background:#282828">
    <nav class="navbar navbar-expand-lg bg-light" style="position:fixed; width: 100%; background-color:0C0032">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="vulnerability1.php">Vulnerability 1</a>
              <a class="nav-link" href="vulnerability2.php">Vulnerability 2</a>
              <a class="nav-link" href="vulnerability3.php">Vulnerability 3</a>
              <a class="nav-link" href="vulnerability4.php">Vulnerability 4</a>
              <a class="nav-link" href="vulnerability5.php">Vulnerability 5</a>
            </div>
          </div>
        </div>
      </nav>

      <div class="container" style=" background-color:white;">
        
          
            <!-- Content here -->

           

            <h1 style ="padding-top:5rem;">Welcome!</h1>
          
            <p style="font-size: 1.25rem;">Please use the navigation bar to traverse the site and explore the vulnerabilities on show, or alternatively use the buttons below. Each vulnerability page contains an explantion on what is happening, and information on how the vulnerability can be prevented</p>

            <p style="font-size: 1.25rem;">This site utilises plain html, php and a mysql database to demonstrate multiple security vulnerabilites which can appear in web applications.</p>

      

            <br><hr><br>

            <div class="d-grid gap-2" style="max-width:100%; display:flex; justify-content: center;">
                <button class="btn btn-primary" type="button">Vulnerability 1</button>
                <button class="btn btn-primary" type="button">Vulnerability 2</button>
                <button class="btn btn-primary" type="button">Vulnerability 3</button>
                <button class="btn btn-primary" type="button">Vulnerability 4</button>
                <button class="btn btn-primary" type="button">Vulnerability 5</button>
              </div>

              <br><br>
            
        </div>
      </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
