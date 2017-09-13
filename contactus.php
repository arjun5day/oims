<html>
	<head>
		<title>Contact us</title>
		<link rel="stylesheet" type="text/css" href="mystyle/mainstyle.css">
        <link rel="stylesheet" type="text/css" href="mystyle/style.css">
        
        
        <script language="JavaScript1.1">
			<!--
			/*
			JavaScript Image slideshow:
			By JavaScript Kit (www.javascriptkit.com)
			Over 200+ free JavaScript here!
			*/
			var slideimages=new Array()
			var slidelinks=new Array()
			function slideshowimages(){
			for (i=0;i<slideshowimages.arguments.length;i++){
			slideimages[i]=new Image()
			slideimages[i].src=slideshowimages.arguments[i]
			}
			}
			
			function slideshowlinks(){
			for (i=0;i<slideshowlinks.arguments.length;i++)
			slidelinks[i]=slideshowlinks.arguments[i]
			}
			
			function gotoshow(){
			if (!window.winslide||winslide.closed)
			winslide=window.open(slidelinks[whichlink])
			else
			winslide.location=slidelinks[whichlink]
			winslide.focus()
			}
			
			//-->
		</script>
        
	</head>
	<body>
		<div id="wrapper">
			<div id="banner"><img src="images/bannerbg.jpg">
		    </div><!--banner close-->
			<div id="menuwrapper">
                <!-- Start menu section -->
                <ul id="css3menu1" class="topmenu">
                    <li class="topfirst"><a href="index.php" style="width:76px;height:18px;line-height:18px;">Home</a></li>
                    <li class="topmenu"><a href="#" style="width:76px;height:18px;line-height:18px;"><span>My Service</span></a>
                    <ul>
                        <li><a href="graphic.php">Graphic Design</a></li>
                        <li><a href="web.php">Web Design</a></li>
                        <li><a href="programming.php">Programming</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="download.php" style="width:76px;height:18px;line-height:18px;">Download</a>
						<ul>
							<li><a href="computerbasic.php">Computer Basic Note</a></li>
							<li><a href="Graphic Note">Web Design</a></li>
							<li><a href="Web Designing Note">Programming</a></li>
							<li><a href="Web Designing Note">HardWare & Networking</a></li>
							<li><a href="softwaredownload.php">Software Download</a></li>														
						</ul>					
					</li>
                    <li class="topmenu"><a href="profile.php" style="width:76px;height:18px;line-height:18px;">My Profile</a></li>
                    <li class="toplast"><a href="contactus.php" style="width:77px;height:18px;line-height:18px;">Contact</a></li>
                </ul>
                <!-- End menu section -->
           	</div><!--menuwrapper close-->
			
            <div id="sliderwrapper">
                <!-- Start Slider BODY section -->	
                    <a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=1000px></a>
                <script>
                <!--
                //configure the paths of the images, plus corresponding target links
                slideshowimages("images/slider/logo1.jpg","images/slider/logo2.jpg","images/slider/logo3.jpg","images/slider/logo4.jpg")
                slideshowlinks("http://www.pandayarjun.com.np","http://www.pandayarjun.com.np","http://www.pandayarjun.com.np","http://www.pandayarjun.com.np")
                //configure the speed of the slideshow, in miliseconds
                var slideshowspeed=2000
                var whichlink=0
                var whichimage=0
                function slideit(){
                if (!document.images)
                return
                document.images.slide.src=slideimages[whichimage].src
                whichlink=whichimage
                if (whichimage<slideimages.length-1)
                whichimage++
                else
                whichimage=0
                setTimeout("slideit()",slideshowspeed)
                }
                slideit()
                //-->
                </script>    
                    <!-- End Slider BODY section -->    
                </div><!--sliderwrapper close-->
				
				
		  <div id="maincontent">
					<h3>Contact Us</h3><hr/>
					<div style="padding-left:10px;">
						<strong>www.pandayarjun.com.np</strong><br>
						Email: mail@pandayarjun.com.np, bhanjaarjun@yahoo.com, arjunpanday2043@gmail.com<br>
						Contact No: 977-9841160160<br>
						URL: www.pandayarjun.com.np</div>
						
						<h3>Contact and join us</h3>
						<form>
				        	<label>First Name:</label><br><input type="text" name="first_name"><br>
				        	<label>Middle Name:</label><br><input type="text" name="first_name"><br>
				        	<label>Last Name:</label><br><input type="text" name="first_name"><br>
				        	<label>Mobile No:</label><br><input type="text" name="first_name"><br>
				        	<label>Phone No:</label><br><input type="text" name="first_name"><br>							
				        	<label>E-mail:</label><br><input type="text" name="first_name"><br>								
				        	<label>Address:</label><br><input type="text" name="first_name"><br>	
				        	<label>Country:</label><br>	<select>
															<option>Nepal</option>
															<option>China</option>															
															<option>India</option>
															<option>Japan</option>																														
														</select>	<br>																											
							<label>Gender:</label><br>
							<input type="radio" name="gender" id="radio" value="male">Male						
							<input type="radio" name="gender" id="gender" value="female">  Female	<br>
							<label>Message or Any Comment</label><br><textarea rows="15" cols="25"></textarea>	<br>
							<input type="submit" value="Send">
						</form>
		        <p>&nbsp;</p>
				</div><!--maincontent close-->
				
				
				<div id="rightaside">
					<h3>Services</h3>
					<ul>
						<li><a href="#">Web Designing</a></li>
						<li>Responsive Web Designing</li>
						<li>Web Development</li>
						<li>Graphic Design</li>
						<li>Hardware & Networking</li>
						<li>Online Tranning</li>
					</ul>
				</div><!--rightaside close-->
				
				<div id="rightaside">
					<h3>Valuable Clients:</h3>
						<ul>
							<li><a href="computerbasic.php">Computer Basic Note</a></li>
							<li><a href="Graphic Note">Web Design</a></li>
							<li><a href="Web Designing Note">Programming</a></li>
							<li><a href="Web Designing Note">HardWare & Networking</a></li>
							<li><a href="softwaredownload.php">Software Download</a></li>														
						</ul>
				</div><!--rightaside close-->
				
				<div id="rightaside">
					<h3>Services</h3>
					<ul>
						<li><a href="#">Web Designing</a></li>
						<li>Responsive Web Designing</li>
						<li>Web Development</li>
						<li>Graphic Design</li>
						<li>Hardware & Networking</li>
						<li>Online Tranning</li>
					</ul>
				</div><!--rightaside close-->
				
				
				<div id="rightaside">
					<h3>Be a Member</h3>
					<form name="cuser" id="cuser" method="post">
						Full Name:<br />
						<input type="text" name="fname" id="fname" /><br />
						Address:<br />
						<input type="text" name="address" id="address" /><br />
						Gender:<br />
						<input type="radio" />Male<br />
						<input type="radio" />Female<br />
						<input type="submit" value="Create"/> <a href="login.php">Login</a>
					</form>
				</div><!--rightaside close-->
				
				
				<div id="rightaside">
					<h3>Find on Facebook</h3>
					<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-like-box" data-href="https://www.facebook.com/pages/pandayarjuncomnp/126265774229788?ref=hl" data-width="250px" data-height="260px" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div><!--fb-root close-->
				</div><!--rightaside close-->
   
			<div id="bottomnav">
				Web Design &nbsp; | Responsive Site &nbsp; | Programming &nbsp; | Graphic Design &nbsp; | hardware & Networking &nbsp; | Note
			</div><!--bottomnav close-->       
			<div id="fotter">
			copyright &copy; www.pandayarjun.com.np 2013<br>
			Cell: 977-9841160160
			</div><!--fotter close-->
		</div><!--wrapper close-->
	</body>
</html>