<html>
    <head>
        <title>Designing a webpage</title>
        <link rel="stylesheet" href="homepage.css">
        <link rel="stylesheet" href="https://tse2.mm.bing.net/th?id=OIP.1WzHrVEKRsiqBT9ZIVEGDwHaE9&pid=Api&P=0&w=287&h=193.jpg">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body >
        
        <div class="banner">
            <nav>
            <div class="navbar">
                <img src="https://th.bing.com/th/id/R.5855755067d2bd5f38131de290bf8703?rik=6D%2be5CsQgG1eHg&riu=http%3a%2f%2fthumb7.shutterstock.com%2fdisplay_pic_with_logo%2f2445935%2f657260989%2fstock-vector-the-truck-silhouette-vector-657260989.jpg&ehk=Q41x%2bKqPfvF6vPxCt%2baMhniUQ3xRITOHST8xGanCEpo%3d&risl=&pid=ImgRaw&r=0" class="logo">
                <ul>
                    <li><a href="dealersMain.php">HOME</a></li>
                
                    <li><a href="homepage.html">LOGOUT</a></li>
                </ul>
            </div>
            </nav>
            <form action = "dealers_states.php" method = "post">
            <div class = "content">

            <div class="row justify-content-center">
            <div class="col-auto">
            <table class="table table-dark  table-borderless w-80" >
            <tr>
              <th scope="col">STATE1</th>
              <th scope="col">STATE2</th>
              <th scope="col">STATE3</th>
            </tr>
            <tr>
              <td><input type="text" id="s1" name="s1" value="" required></td>
              <td><input type="text" id="s2" name="s2" value="" required></td>
              <td><input type="text" id="s3" name="s3" value="" required></td>
            </tr>
            </table>
            <center>
         <a href = "dealers_states.php"><input type="submit" class="btn btn-success" value="search" /></a> 
        </center>
            </div>
            </div>
                    
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>
