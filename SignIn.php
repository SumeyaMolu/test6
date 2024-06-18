<?php include_once("templates/headings.php"); ?>
<body>
    <?php include_once("templates/nav.php"); ?>
    <div class ="banner">


    <div  class ="topnav-right">
        <a class="btn btn-secondary dropdown-toggle" 
           href="#" 
           role="button" 
           id="dropdownMenuLink"
           data-bs-toggle="dropdown" 
           aria-expanded="false">
            =
        </a>

    <ul class="dropdown-menu" 
                aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="signin.html "  >
                     signIn
                    </a>
                </li>
                <li><a class="dropdown-item" href="signUp.html">
                        signUp
                    </a>
                </li>
              
            </ul>
        </div>
     </div>
     <div class = banner>
        <h1>SignIn</h1>
         </div>

           <div class = "row">
             <div class = "content">
                <form action=""autocomplete = "on">
                   <!-- we are creating input type for email  -->
                  <label >email:</label><br><br>
                     <input type="email"  name="email" placeholder="email"><br><br>
                       <!-- we are creating input type for password  -->
                      <label >create a password</label><br>
                         <input type="password"name="Create a password" placeholder=" password"><br><br>
                           <!-- we are creating a an input for submit -->
                           <input type="submit" value="signIn">

                            <input type="button" value = "reset">


                              </form>
</body>
</html>