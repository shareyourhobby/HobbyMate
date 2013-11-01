<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(E_ERROR | E_PARSE | E_WARNING);

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HobbyMate | One stop shop for your Hobby needs">
    <meta name="author" content="Vishal Arhatia">
    <title>HobbyMate!!! | Learn, Share & Teach Hobbies!!!</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
	
  </head>
  <body>
	<!-- Start: HEADER -->
    <header>
      <!-- Start: Navigation wrapper -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <a href="index.php" class="brand brand-bootbus">HobbyMate</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">        
              <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Knowledge Zone<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li class="nav-header">Fitness</li>
                    <li><a href="product.php">Yoga</a></li>
                    <li><a href="product.php">Aerobics</a></li>
					<li><a href="product.php">Body Building</a></li>
					<li><a href="all_services.php">More Fitness Activities</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Outdoor</li>
                    <li><a href="product.php">Cycling</a></li>
                    <li><a href="product.php">Running</a></li>
					<li><a href="product.php">Trekking</a></li>
					<li><a href="all_services.php">More Outdoor Activities</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Music & Dance</li>
                    <li><a href="product.php">Guitar</a></li>
                    <li><a href="product.php">Flute</a></li>
					<li><a href="product.php">Keyboard</a></li>
									<li><a href="product.php">Salsa</a></li>
									<li><a href="all_services.php">More Music & Dance</a></li>
									<li class="divider"></li>
                    <li class="nav-header">Creative</li>
					<li><a href="product.php">Painting</a></li>
                    <li><a href="product.php">Cooking</a></li>
					<li><a href="product.php">Cartooning</a></li>
					<li><a href="product.php">Mehandi</a></li>
					<li><a href="all_services.php">More Creative Arts</a></li>
					<li class="divider"></li>
                    <li class="nav-header">Sports</li>
                    <li><a href="service.php">Cricket</a></li>
                    <li><a href="service.php">Football</a></li>
                    <li><a href="service.php">Basketball</a></li>
                    <li><a href="all_services.php">More Sports</a></li>
                  </ul>                  
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="our_works.php">Our works</a></li>
                    <li><a href="patnerships.php">Partners</a></li>
                    <li><a href="leadership.php">Leadership</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="blog.php">Blog</a></li>
                  </ul>
                </li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact_us.php">Contact us</a></li>
                
                
                
  				<?php if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {?>	              
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo "Welcome ". $_SESSION['username'] ; ?>
                <b class="caret"></b>
                </a>
				  <ul class="dropdown-menu">
				  <li><a href="../backend/logout.php">logout</a></li>
				  
				  </ul>			
				</li>                
                <?php 	
                	}else {
                ?>		
                
                		<li><a href="signup.php">Sign up</a></li>
						<li><a href="signin.php">Sign in</a></li>
						<li>Welcome Guest</li>
                <?php 		
                	}
                
                ?>
				
                
				  
				  </ul>			
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- End: Navigation wrapper -->   
    </header>
    <!-- End: HEADER -->