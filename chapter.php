 <?php
/*  $URL= explode("/", $_SERVER['QUERY_STRING'] );
 echo "<pre>";
 print_r($URL);
 
 echo "</pre>";  */
 
 
		  include ('Admin/db.php');
		   $query="SELECT * FROM topics WHERE visible='1'";
		   $results=mysqli_query($con, $query);
		   //$rows=mysqli_fetch_array($results);
		   $cont=mysqli_num_rows($results);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Paragraph - Chapter| Topic
    </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
	<link rel="stylesheet" href="css/my-custom.css">
  </head>
  <body class="fixed-sn white-skin">
    <!--Main Navigation-->
    <header>
      <!-- Navbar -->
	  <?php
      require_once('nav.php');
	  ?>
      <!-- /.Navbar -->
    </header>
    <!--Main Navigation-->
    <!--Main layout-->
	<?php
	error_reporting("E_NOTICE");
	$topic= $_GET['topic_no'];
	$chap=$_GET['chapno'];
	$para=$_GET['para_no'];
	$query1="SELECT * FROM chapters WHERE topic_no='$topic' AND visible='1' order by chapter_no asc";
	$result1=mysqli_query($con, $query1);
	$count=mysqli_num_rows($results1);
	//var_dump($result1);
	if($count > 0){
		
?>
    
    <div class="col-lg-12">
      <div class="bread_crumb">
        <a class="step_crumb" href="#">Home</a>
		<i class="fa fa-angle-right"></i>
        <a class="step_crumb" href="#"><?php echo "Chapter".''.$chap  ?></a>
		<i class="fa fa-angle-right"></i>
        <a class="step_crumb" href="#"><?php echo "Paragraph".''.$para  ?></a>
      </div>
    </div>
	<?php
	}
	?>
    <main>
      <div class="col-md-12">
        <!-- Section: Create Page -->
        <section class="section">
          <!-- First row -->

		            <div class="row">
            <!-- First col -->
            <div class="col-sm-3 col-md-3">
              <div class="panel-group left-menu" id="accordion">
			  <?php
				//$count=
				while($rowx=mysqli_fetch_assoc($result1)){
					$chapter=$rowx['chapter_no'];
					//echo $chapter;
				?>
				
                <div class="panel panel-default">
				
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <span class="glyphicon glyphicon-th">
                        </span><?php echo "Chapter".' '.$chapter; ?>
                      </a>
                    </h4>
                  </div>
				  
				 
                  <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
					<?php
				 $qry="SELECT * FROM paragraphs WHERE chapter_no='$chapter'";
	             $res=mysqli_query($con, $qry);
				 while($rs=mysqli_fetch_assoc($res)){
					//$para_no=$rowx['para_no'];
					
				 
				 ?>
                      <table class="table">
                        <tr>
                          <td>
                            <a href="chapter.php?para_no=<?php echo $rs['para_no']; ?>&topic_no=<?php echo $topic; ?>&chapno=<?php echo $chapter; ?>"> <?php echo "Paragraph".' '. $rs['para_no']; ?> 
                            </a>
                          </td>
                        </tr>
                                     
                        
                      </table>
					   <?php
				 }
				  ?>
                    </div>
                  </div>
				 
                </div>
				 <?php
				}
				  
				  ?>
               
             
              </div>
            </div>
            <div class="col-lg-6">
			<?php 
			$para_no= $_GET['para_no'] ;
			//echo $para_no;
			   $qrys="SELECT * FROM paragraphs WHERE para_no='$para_no' AND chapter_no='$chap' AND visible='1'";
	             $ress=mysqli_query($con, $qrys);
				 
				 ?>
              <!-- First card -->
              <!-- /.First card -->
              <!-- Second card -->
			  <?php
				while($rss=mysqli_fetch_assoc($ress)){
					
							
			    ?>
              <div class="card_body mb-r">
                <div class="col-md-12 " style="margin: 0 !important;padding: 0 !important;">
				
				
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card-body">
                        <h4 class="text-center title_text"><?php echo "Paragraph".' '.$para_no.':'.$rss['para_title'];  ?> 
                        </h4>
                      </div>
                    </div>
                  </div>
				
                </div>
                <div class="card-body article_text">
                  <?php echo $rss['content'];  ?> 
                </div>
              </div>
<?php  }    ?>
              <div class="card mb-r ">
                <img src="https://ps.w.org/ad-widget/assets/banner-772x250.png?rev=1652352" class="img-fluid">
              </div>
              <!-- /.Second card -->
              <!-- Third Card -->
              <!-- /.Third Card -->
            </div>
            <!-- /.First col -->
            <!-- Second col -->
            <div class="col-lg-3">
              <div class="card_body narrower mb-r">
                <!--Card image-->
                <!--/Card image-->
                <!--Card content-->
                <div class="card-body">
                  <img src="https://lh4.ggpht.com/1Rw1DEbRB87sJ3sdx1g8yMrmx-Lt-VgYqhYolXv_y0hAZxbqoA1HAw1qT-JLk68-dHEL-QHmAA=w300" class="img-fluid">
                </div>
                <!--/.Card content-->
              </div>
              <!--Card-->
              <!--/.Card-->
              <div class="card_body narrower mb-r">
                <!--Card image-->
                <!--/Card image-->
                <!--Card content-->
                <div class="card-body">
                  <img src="https://techviral.net/wp-content/uploads/2018/01/Google-Rolls-Out-New-Addition-To-Mute-This-Ad-Feature.png" class="img-fluid">
                </div>
                <!--/.Card content-->
              </div>
              <!--Card
              <div class="card_body card-cascade narrower mb-r">
                <!--Card image
                <div class="view gradient-card-header blue-gradient">
                  <h4 class="mb-0 related-title">Related Topics
                  </h4>
                </div>
                <!--/Card image
                <!--Card content
                <div class="card-body">
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                  <a href="#">Topic 3
                  </a>  
                  <br/>
                </div>
                <!--/.Card content
              </div>
              <!--/.Card-->
            </div>
		  
		  
		  
		  
		  
		  
		  
		  
            <!-- /.Second col -->
          </div>
          <!-- /.First row -->
        </section>
        <!-- /.Section: Create Page -->
      </div>
    </main>
    <!--Main layout-->
    <!-- SCRIPTS -->
    <!-- JQuery -->
	<script src="https://code.jquery.com/jquery-1.11.1.min.js">
    </script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js">
    </script>
    <!---<script src="js/jquery-3.2.1.min.js">
    </script>---->
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <!---<script type="text/javascript" src="js/bootstrap.js">
    </script>-->
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js">
    </script>
    <!-- TinyMCE -->
    <script type="text/javascript" src="js/tinymce.min.js">
    </script>
    <!--Custom scripts-->
    <script>
      // SideNav Initialization
      $(".button-collapse").sideNav();
      var container = document.getElementById('slide-out');
      Ps.initialize(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
      }
                   );
      $('#slide-out').show();
      // TinyMCE Initialization
      tinymce.init({
        selector:'#post_content', menubar: false, height : "294" }
                  );
    </script>
    <script>
	$(document).ready(function() {
	var s = $(".left-menu");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top & windowpos <=100) {
			s.removeClass("fixed-left-menu");
		} else {
			s.addClass("fixed-left-menu");	
		}
	});
});

    </script>
  </body>
</html>
