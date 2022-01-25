<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body>
        <style>
             .contaner{
    position: absolute;
    left: 0; 
    top: 0;
    width: 100%;
    height: 100%;
}
.hero{
    width: 100%;
    height: 100%;
    background: linear-gradient(rgba(26,26,6,0.7),rgba(26,26,6,0.7)),url('https://i.imgur.com/FAuI23R.jpg'); 
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
            footer {
      background-color: rgb(198, 245, 245);
      position: fixed;
    width: 100%;
    text-align:center;
    left: 0px;
    bottom: 0px;
}  
           </style> 
        
            <center>
                <div class="contaner">
                <div class="hero">
            <div id="headerSection">
            <h1 style="  font-family: Georgia, 'Times New Roman', Times, serif, monospace; color:aqua;">Online Voting Website</h1>
            </div>
            <hr>

            <div id="loginSection">
            <h2 style="font-family: cursive; color:aquamarine;">Login
            </h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Group</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                 <h5 style="font-family: cursive; color:aquamarine;">New user? <a href="routes/register.php"><h5 style="font-family: cursive; color:aquamarine;">Click Here  To Register </h5></a><br>
                    Want to see result of voting? <a href="api/chart.php"><h5 style="font-family: cursive; color:aquamarine;">Click Here</h5></a></h5> 
                
                </form>
            </div>
            </div>
            </div>

            </center> 
            <footer>
       <p>Managed by Vivek Ghuge<br>
         Computer Engineering Department, VIT PUNE
    </p>
   
</footer>
    </body>
</html>