<nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav navbar-dark primary-color">
        <!-- SideNav slide-out button -->
        <!-- Breadcrumb-->
        <div class="logo-header">
          <a href="#">LOGO
          </a>
        </div>
		        <div >
          <ul class="nav navbar-nav">
          <!-- Dropdown -->
          <li class="nav-item">
            <a class="nav-link" href="index.php?"> Courses
            </a>
          </li>
		  </ul>
        </div>
        
                    
		 <?php
		    while($rows=mysqli_fetch_assoc($results)){
				
				?>
                          <ul class="nav navbar-nav">
			  <li class="nav-item">
            <a class="nav-link" href="chapter.php?topic_no=<?php echo $rows['topic_no']  ?>"> <?php echo "TOPIC".' '.$rows['topic_no']  ?>
            </a>
          </li></ul>
		  <?php
                                   }
		   
            ?>
			

		
      </nav>