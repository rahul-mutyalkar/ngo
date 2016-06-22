<?php
require_once('add_donate.php');
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.extracoding.com/demo/html/help/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 14:17:20 GMT -->
<head>
<meta charset="utf-8">
<title>NGO - Donation Page</title>
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="style/common.css" rel="stylesheet">
<link href="style/style.css" rel="stylesheet">
<link href="style/responsive.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />


<style>
  .error{
    
    border: 1px solid #c0392b;
  }
</style>
</head>

<body>
<div class="wrap">
 <?php require_once('header.php');?>
<?php require_once('navigation.php');?>
  <div class="banner" style="margin:0px;padding:0px">
    <!-- <div class="location-map">
      <iframe src="http://maps.google.com/?ie=UTF8&amp;ll=32.7688,-74.355469&amp;spn=41.328535,86.572266&amp;t=m&amp;z=4&amp;output=embed"></iframe>
    </div><!-- location-map ends -->
    <div class="container">
      <h1>Your Donation</h1>
      
    </div>
  </div><!-- banner ends -->

  <div class="container">
    <div class="row-fluid">
      <div class="span5">
        <section class="contact-box">
          <h2>Get In <strong>Touch</strong></h2>
          <p>We're very approachable and would love to speak to you. Feel free to call, send us an email, Tweet us or simply complete the enquiry form</p>
          <ul class="contact-list">
            <li class="list-phone">+44 - 123 - 4567890</li>
            <li class="list-email"><a href="#">Info@h-e-l-p.com</a></li>
            <li class="list-facebook"><a href="#">www.facebook.com/h-e-l-p</a></li>
            <li class="list-twitter"><a href="#">#h-e-l-p</a></li>
          </ul>
        </section><!-- blog-box ends -->
      </div>
      <div class="span7">
        <section class="comment-area">
        
        
          <h2 class="text-pink" style="text-align:center;">One More Step For <strong>Donation</strong></h2>
           <?php 
              
              if(isset($_POST['submit']))
              {
                $count=0;
                if(empty($success))
                {
                  echo '<div style="text-align:center;background:#ebccd1;border-radius:1px;color: #a94442;" class="alert alert-success col-md-offset-3 col-md-6"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <h3 style="color:#a94442;"><strong>Warning! </strong>Some errors are there</h3>';
               foreach ($error as $key => $value) {
                    if(!empty($value))
                    {
                      echo "<p style='text-align:left;'><strong >".++$count." : </strong>".$value."</p>";  
                    }

                }
                echo '</div>';

                }
                else
                {

                    echo '<div style="text-align:center;background:#dff0d8;border-radius:1px;color: #3c763d;" class="alert alert-success col-md-offset-3 col-md-6"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong> Data inserted Successfully</div>';
                    
                

                }
                

              }
              
        ?>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <ul class="unstyled">
              <li class="row-fluid">
                <div class="span6">
               
                  <label>Donation <strong>Purpose</strong> <span class="require">(Required)</span></label>
                  <select name="donation_purpose" style="" class="fa fa-flag input-block-level" id="donation_purpose">
                  <option value="0">Select Purpose</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                  </select>
                </div>
                <div class="span6">
                  <label>Donation <strong>Amount</strong> <span class="require">(Required)</span></label>
                  <input type="number" name="donation_amount" placeholder="Enter Donation Amount" class="error input-block-level"
                  value="<?php if(!isset($_POST['donation_amount']))echo $_POST['donation_amount'];?>"  >
                </div>
              </li>
              <li class="row-fluid">
                <div class="span6">
                  <label>First <strong>Name</strong> <span class="require">(Required)</span></label>
                  <input type="text" name="first_name" class="input-block-level" maxlength="24"
                  value="<?php  if(isset($_POST['first_name']))echo $_POST['first_name'];?>" placeholder="Enter First Name">
                </div>
                <div class="span6">
                  <label>Last <strong>Name</strong> <span class="require">(Required)</span></label>
                  <input type="text" name="last_name" class="input-block-level" maxlength="24"
                  value="<?php if(isset($_POST['last_name']))echo$_POST['last_name'];?>" placeholder="Enter Last Name">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span6">
                  <label>Email <strong>ID</strong><span class="require">(Required)</span></label>
                  <input type="email" name="email_id" class="input-block-level" maxlength="50"
                  value="<?php if(isset($_POST['email_id']))echo$_POST['email_id'];?>" placeholder="Enter E-Mail ID">
                </div>
                <div class="span6">
                  <label>Contact <strong>Number</strong> <span class="require">(Required)</span></label>
                  <input type="text" name="contact_number" maxlength="10" class="input-block-level"
                  value="<?php if(isset($_POST['contact_number']))echo$_POST['contact_number'];?>" placeholder="Enter Contact Number">
                </div>
              </li>

               <li class="row-fluid">
                <div class="span6">
                  <label>Select <strong>Country</strong> <span class="require">(Required)</span></label>
                  <select name="country" class="countries input-block-level" id="countryId" value="">
                  <option value="0"></option>
                  </select>
                </div>
                <div class="span6">
                  <label>Select <strong>State</strong> <span class="require">(Required)</span></label>
                  <select name="state" class="states input-block-level" id="stateId">
                  <option value="0">Select State</option>
                  </select>
                </div>
              </li>
               <li class="row-fluid">

              </li>
              <li class="row-fluid">
                <div class="span6">
                  <label>Select <strong>City</strong> <span class="require">(Required)</span></label>
                  <select name="city"  class="cities input-block-level" id="cityId" value="<?php if(isset($_POST['country']))echo $_POST['country'];?>">
                      <option value="0">Select City</option>
                  </select>
                </div>
                <div class="span6">
                  <label>Pin <strong>Code</strong> <span class="require">(Required)</span></label>
                  <input type="text" name="pincode" class="input-block-level" maxlength="7"
                  value="<?php if(isset($_POST['pincode'])) echo $_POST['pincode'];?>" placeholder="Enter Pin code">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Enter <strong>Address</strong> <span class="require">(Required)</span></label>
                  <textarea class="input-block-level" name="address" placeholder="Enter Address">
                  <?php if(isset($_POST['address'])) echo $_POST['address'];?>
                  </textarea>
                </div>
              </li>
             
              <li class="row-fluid">
                <div class="span12">
                  <input type="submit" name="submit" class="btn" value="Submit">
                </div>
              </li>
            </ul>
          </form>
        </section><!-- comment form ends -->
      </div>
    </div>
  </div><!-- /container -->

  <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="widget">
            <h2>Recent Posts</h2>
            <div class="posts-list">
              <ul>
                <li>
                  <img src="images/resource/thumbs/post-thumb-1.jpg" alt="post thumb">
                  <div class="post-text">
                    <h5><a href="#">Lorem ipsum dolor sit ametc..</a></h5>
                    <p>From the island-studded seas of the north to the meandering the....</p>
                  </div>
                </li>
                <li>
                  <img src="images/resource/thumbs/post-thumb-2.jpg" alt="post thumb">
                  <div class="post-text">
                    <h5><a href="#">Lorem ipsum dolor sit ametc..</a></h5>
                    <p>From the island-studded seas of the north to the meandering the....</p>
                  </div>
                </li>
                <li>
                  <img src="images/resource/thumbs/post-thumb-3.jpg" alt="post thumb">
                  <div class="post-text">
                    <h5><a href="#">Lorem ipsum dolor sit ametc..</a></h5>
                    <p>From the island-studded seas of the north to the meandering the....</p>
                  </div>
                </li>
              </ul>
            </div>
          </div><!-- widget ends -->
          <div class="widget gallery-thumbs">
            <h2>Gallery</h2>
            <ul class="clearfix">
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-1.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-2.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-3.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-4.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-5.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-6.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-7.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-8.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-9.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-10.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-11.jpg" alt="gallery thumb"></a></li>
              <li><a href="#"><img src="images/resource/thumbs/gallery-thumb-12.jpg" alt="gallery thumb"></a></li>
            </ul>
          </div><!-- widget ends -->
          <div class="widget widget-text">
            <h2>Contact Us</h2>
            <a href="#">Vel arcu in nec porttitor aliquam tempor platea, turpis? Ridiculus nascetur dignissim amet ac.</a>
            <p>Vel arcu in nec porttitor aliquam tempor platea, turpis? Ridiculus nascetur dignissim amet ac scelerisque facilisis etiam sed odio rhoncus, pellentesque nisi aenean vel. Sed a etiam in, non, velit ac cum in, magna, nisi ultrices, porta odio duis, urna tincidunt ac dis ultricies sit, lorem montes facilisis. Est, scelerisque, nisi ultrices, porta odio duis, urna tincidunt ac dis ultricies sit, lorem montes facilisis.</p>
          </div><!-- widget ends -->
          <div class="widget widget_newsletter">
            <h2>Newsletter</h2>
            <div class="newsletter">
              <p>Vel arcu in nec porttitor aliquam tempor platea, turpis? Ridiculus nascetur dignissim amet ac scelerisque facilisis etiam sed odio</p>
              <form method="post" action="#">
                <input type="text" class="input-block-level" placeholder="Email Address">
                <input type="submit" class="btn" value="Subscribe">
              </form>
            </div>
          </div><!-- widget ends -->
        </div>
      </div>
  </footer>
  <div class="bottom">
    <div class="container">
      <div class="bottom-left">
        <p>&copy;2013 H.E.L.P. All rights reserved. Theme Designed By <a href="#">Themebazaar</a></p>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="#">Environment</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
      <div class="social-links">
        <ul>
          <li><a href="#" class="icon-yahoo tooltip" title="yahoo"></a></li>
          <li><a href="#" class="icon-facebook tooltip" title="facebook"></a></li>
          <li><a href="#" class="icon-rss tooltip" title="rss"></a></li>
          <li><a href="#" class="icon-flickr tooltip" title="flickr"></a></li>
          <li><a href="#" class="icon-msn tooltip" title="msn"></a></li>
          <li><a href="#" class="icon-stumbleupon tooltip" title="stumbleupon"></a></li>
        </ul>
      </div>
    </div>
  </div><!-- bottom ends -->
</div><!-- wrap ends -->

<div id="dialog-search">
	<div class="heading">Search</div>
  <div class="dialog-block">
      <form method="get" action="http://www.extracoding.com/demo/html/help/index.html" class="user-search-form">
        <input type="text" class="input-block-level" placeholder="Enter Any Keyword">
        <input type="submit" class="btn" value="Search">
      </form>
  </div>
  <!-- dialog-block ends -->
</div><!-- dialog ends -->
<div id="dialog-login">
	<div class="heading">User Login</div>
  <div class="dialog-block">
      <form method="get" action="http://www.extracoding.com/demo/html/help/index.html" class="user-login-form">
        <input type="text" class="input-block-level" placeholder="User Login">
        <input type="password" class="input-block-level" placeholder="Password">
        <div class="controls">
          <label class="help-inline"><input type="checkbox" class="checkbox">Remeber me</label>
          <input type="submit" class="btn pull-right" value="Sign In">
        </div>
      </form>
  </div><!-- dialog-block ends -->
  <div class="dialog-btm">
    Don't have an account? <a href="#">Create one now!</a>
  </div>
</div><!-- dialog ends -->
<div class="dialog-overlay"></div>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.countdown.js"></script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "../../../../connect.facebook.net/en_US/all.js#xfbml=1&appId=203335796018";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42761673-1', 'extracoding.com');
  ga('send', 'pageview');
</script>
<script src="http://lab.iamrohit.in/js/location.js"></script>

<script type="text/javascript">
  document.getElementById('donation_purpose').value = "<?php echo $_POST['donation_purpose'];?>";
</script>

<script src="https://use.fontawesome.com/b7eecc91a4.js"></script>

</body>

<!-- Mirrored from www.extracoding.com/demo/html/help/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 14:17:20 GMT -->
</html>
