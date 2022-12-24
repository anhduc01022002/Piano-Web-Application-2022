<?php
    include('session.php');
    include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- add icon link -->
  <link rel = "icon" href = 
  "https://img.freepik.com/free-vector/music-design-yellow-illustration_24877-49373.jpg?auto=format&h=200" 
          type = "image/x-icon">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
</head>
<body>
    <?php
        if(isset($_SESSION['dangnhapthanhcong'])) {
    ?>
     <!--Navbar-->
     <div class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
  
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                        <a href="home.html" class="navbar-brand">PIANO</a>
                    </div>
  
                    <div class="navbar-collapse collapse" id="mobile_menu">
                        <ul class="nav navbar-nav">
                            <li><a href="leaderboard.html">Leaderboard</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li>
                                <form action="" class="navbar-form">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="search" name="search" id="search" placeholder="Search Anything Here..." class="form-control">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
  
                        <ul class="nav navbar-nav navbar-right">
                            <li id="profile"><a href="info.html"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <!--
                            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span class="caret"></span></a>
                            
                                <ul class="dropdown-menu">
                                    <li id="login"><a href="login.html">Login</a></li>
                                    <li id="register"><a href="register.html">Sign Up</a></li>
                                </ul>
                            -->
                            </li>
                            <li id="logOut"><a href="../index.html"><span></span> Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Main page-->
    <div class="videos">
      <!-- a video starts -->
        <div class="video">
           <div class="thumbnail">
              <img src="https://img.youtube.com/vi/zUwB_imVjmg/maxresdefault.jpg" alt="" />
            </div>
    
              <div class="details">
                 <div class="author">
                    <img src="https://yt3.ggpht.com/bpzY-S4DYlbTeOpY5hIA7qz_hcbMkgvLAugtwKBGTTImNnWAGudX0y53bo_fJZ0auypxrWkUiw=s88-c-k-c0x00ffffff-no-rj" alt="" />
                 </div>
                 <div class="title">
                    <h3>
                        Introverts & Content Creation | Sumudu Siriwardana
                     </h3>
                     <a href="">
                            Francesco Ciulla
                      </a>
                      <span> 2M Views • 3 Months Ago </span>
                 </div>
               </div>
    
             </div>
       <!-- a video Ends -->
     </div>

     <div class="videos">
        <!-- a video starts -->
          <div class="video">
             <div class="thumbnail">
                <img src="https://img.youtube.com/vi/zUwB_imVjmg/maxresdefault.jpg" alt="" />
              </div>
      
                <div class="details">
                   <div class="author">
                      <img src="https://yt3.ggpht.com/bpzY-S4DYlbTeOpY5hIA7qz_hcbMkgvLAugtwKBGTTImNnWAGudX0y53bo_fJZ0auypxrWkUiw=s88-c-k-c0x00ffffff-no-rj" alt="" />
                   </div>
                   <div class="title">
                      <h3>
                          Introverts & Content Creation | Sumudu Siriwardana
                       </h3>
                       <a href="">
                              Francesco Ciulla
                        </a>
                        <span> 2M Views • 3 Months Ago </span>
                   </div>
                 </div>
      
               </div>
         <!-- a video Ends -->
       </div>
       <div class="videos">
        <!-- a video starts -->
          <div class="video">
             <div class="thumbnail">
                <img src="https://img.youtube.com/vi/zUwB_imVjmg/maxresdefault.jpg" alt="" />
              </div>
      
                <div class="details">
                   <div class="author">
                      <img src="https://yt3.ggpht.com/bpzY-S4DYlbTeOpY5hIA7qz_hcbMkgvLAugtwKBGTTImNnWAGudX0y53bo_fJZ0auypxrWkUiw=s88-c-k-c0x00ffffff-no-rj" alt="" />
                   </div>
                   <div class="title">
                      <h3>
                          Introverts & Content Creation | Sumudu Siriwardana
                       </h3>
                       <a href="">
                              Francesco Ciulla
                        </a>
                        <span> 2M Views • 3 Months Ago </span>
                   </div>
                 </div>
      
               </div>
         <!-- a video Ends -->
       </div>
       <?php
        }
        else{
            echo '<script>alert("Ban chua dang nhap")</script>';
            header("Refresh: 0; url=login.php");
        }
       ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="models\User.js"></script>
    <script src="../scripts/home.js"></script>
</body>
</html>