<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
            rel="stylesheet"
            integrity=
    "sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
            crossorigin="anonymous">
        <script src=
    "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src=
    "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity=
    "sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav"></div>
    <a href="index.html">Home</a>
    <a href="About.html">AboutUs</a>
    <a href="Branches.html">Our Branches</a>
    <a href="Deliveries.html">Deliveries</a>
    <a href="Reviews.html">Reviews</a>
    <a href="ContactUs.html">ContactUs</a>
    <a href="Offers.html">CrazyOffers</a>
    <a href="Box.html">Box</a>
    <a href="People.html">People</a>
    <a href="SignIn.html">Sign In</a>

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