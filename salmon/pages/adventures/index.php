<!DOCTYPE html>
 
<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/head.php'; ?>
        <title>Home</title>
    </head>
    <body>
        
        <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/navigation.php'; ?>
        
       <div id="content_wrap">
	<div class="left_content">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/content_Left.php'; ?>
	</div>
	<div class="right_content">
            <div class="makeLonger">
                <div id="top" class="makeLonger">
                    <h1>Which adventure do you prefer?</h1>
                    <h2>We offer 3 fabulous tours!</h2>
                    <h3><a href="rafting">River Rafting</a></h3>
                    <p>Our River Rafting adventure is exhilarating to say the least. This particular tour is lead by our experienced guide, Amber Fryar. Featuring miles of protected wilderness where little has changed since first appearing on the U.S. Map. The Salmon River is a Class III white water rapid. This adventures includes big sandy beaches, beautiful mountain scenery, and a natural hot spring along the way. Our vessels can get you through the rapids so you can enjoy this excellent scenery. Check out <a href="rafting">River Rafting Tour</a> and you'll soon see what we are talking about!</p>
                    
                    <h3><a href="kayaking">Kayaking</a></h3>
                    <p>If you enjoy your independence a little more than others and want to contend with the rapids on your own then Kayaking the Salmon river is for you. We travel in groups on our Kayaking tours but you are in your own boat and must negotiate the river on your own. Our guides are happy to help you on your trip any way they can. Our excellently qualified tour guide Tiffany Heroff knows the Salmon River inside and out and can recommend the best way to negotiate the rapids. Check out <a href="kayaking">Kayaking Tours</a> to set up an appointment!</p>
                    
                    <h3><a href="fishing">Fishing</a></h3>
                    <p>Do you prefer to relax and enjoy the scenery? Our guide, Dave Dixon, has been fishing the Salmon River for years and knows every good fishing hole and baith that should be used. He will take you on a fishing trip you would not believe! We are certain he will give you an experience that any fish story couldn't top! Check out <a href="fishing">Fishing Tours</a> to experience a fish story your friends won't believe!</p>
                </div>
                </div>
		
        <!--<div id="bottom">
            
        </div>-->
    </div>
	<div class="row_content">
		<table>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/content_Row.php'; ?>
		</table>
	</div>
</div>
      <footer>
      		<?php include $_SERVER['DOCUMENT_ROOT'].'/salmon/modules/footer.php'; ?>
      </footer>
    </body>
</html>


