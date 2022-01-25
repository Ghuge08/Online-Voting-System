<html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
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
   background: linear-gradient(rgba(26,26,6,0.7),rgba(26,26,6,0.7)),url('https://i.imgur.com/W3Gau4B.jpg');
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
        <div class="container">
        <div class="hero">
            <div id="headerSection">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif, monospace;color: aqua;">Online Voting Website</h1>
            </div>
            <hr>

            <h2 style="font-family: cursive;color: aquamarine;">Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
            <footer>
       <p>Managed by Vivek Ghuge<br>
         Computer Engineering Department, VIT PUNE
    </p>
   
</footer>
    </body>
</html>