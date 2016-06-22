<?php
 require_once('add_user.php');
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.extracoding.com/demo/html/help/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 14:17:20 GMT -->
<head>
<meta charset="utf-8">
<title>NGO - Contact Us</title>
<meta name="viewport" content="width=device-width, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link href="style/common.css" rel="stylesheet">
<link href="style/style.css" rel="stylesheet">
<link href="style/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>
<div class="wrap">
 
<?php require_once('header.php');?>
<?php require_once('navigation.php');?>

 <br />
  <div class="container">
    <div class="row">
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
         <?php 
              // if(isset($error))
              // {
              //     echo $error;
              // }
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
                      echo "<p style='text-align:center;'><strong >".++$count." : </strong>".$value."</p>";  
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
        <br/>
          <h2 class="text-pink">Leave <strong>Reply</strong></h2>
          <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <ul class="unstyled">
              <li class="row-fluid">
                <div class="span6">

                  <label>First Name <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="First Name" name="first_name" 
                  value="<?php if(isset($_POST['first_name']))echo $_POST['first_name'];?>">

                </div>
                <div class="span6">

                  <label>Last Name <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="Last Name" name="last_name" 
                  value="<?php if(isset($_POST['last_name']))echo $_POST['last_name'];?>">

                </div>
              </li>
              <li class="row-fluid">
                <div class="span6">
                  <label>Email ID<span class="require">(Required)</span></label>
                  <input type="text"  class="input-block-level" placeholder="E-Mail ID" name="email_id" 
                  value="<?php if(isset($_POST['email_id']))echo $_POST['email_id'];?>">
                </div>
                <div class="span6">
                  <label>Contact Number <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="Contact Number" name="contact_number" 
                  value="<?php if(isset($_POST['contact_number']))echo $_POST['contact_number'];?>">
                </div>
              </li>
              
              <li class="row-fluid">
                <div class="span12">
                  <label>Subject <span class="require">(Required)</span></label>
                  <input type="text" class="input-block-level" placeholder="Your query" name="subject"
                  value="<?php if(isset($_POST['subject']))echo $_POST['subject'];?>">
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <label>Message <span class="require">(Required)</span></label>
                  <textarea class="input-block-level" placeholder="Your precious feedback and suggestion" name="message" value=""><?php if(isset($_POST['message']))echo $_POST['message'];?></textarea>
                </div>
              </li>
              <li class="row-fluid">
                <div class="span12">
                  <input type="submit" class="btn" name="submit" value="Submit">
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
              <form action="http://www.extracoding.com/demo/html/help/index.html" method="post">
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
          <input type="submit" name="submit" class="btn pull-right" value="Sign In">
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


</body>

<!-- Mirrored from www.extracoding.com/demo/html/help/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 14:17:20 GMT -->
</html>
