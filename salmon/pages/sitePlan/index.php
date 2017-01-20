<!DOCTYPE html>

<html lang="en-us">
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/head.php'; ?>
        <title>Home</title>
    </head>
    <body>

        <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/navigation.php'; ?>

        <div id="content_wrap">
            <div class="left_content">
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/content_Left.php'; ?>
            </div>
            <div class="right_content">
                <div id="top" class="makeLonger">
                    <h1>Site Plan</h1>

		<h2>Salmon River Adventures</h2>

		<p><b>Salmon River Adventures </b>is a world-class whitewater river adventure company. The salmon river runs through the middle of Idaho and features many places to camp, hike, fish, and experience turbulent waters. The company <b>Salmon River Adventures</b> would like a website that reflects the environment of the river and also the services they offer. The purpose of this site is to draw visitors to them and enable customers to contact the company to schedule appointments and inquire about pricing.</p>

		<h2>Target Audience</h2>

		<h3>Male Persona:</h3>

                <img src="male_persona.jpg" alt="Daryl Dixon">

		<p>My name is Joseph Williams. I am an avid outdoorsman and love adventure tours. I enjoy long hiking trips that span several days. A few times I have gone on hiking trips that was so long I simply couldn't carry enough food. In order for me to keep going I would have to hunt and forage for food. These types of trips are infrequent especially lately. My job keeps me from going on hikes for longer than a few days at a time. I am not married, don't have kids, but also have a citygirl as a girlfriend. That means she has never been camping or "roughing" it in her life. I would like to introduce her to how fun this activity can be and so I am looking for a tour that is a few days long and nothing too scary. The river rapids would need to be mild. Therefore I will need to see some pictures of the river and the skill level required to navigate it.</p>

		<h3>Female Persona:</h3>

		<img src="female_persona.jpg" alt="Maggie Greene">

		<p>My name is Karen Shifu. I am a mother of 3 teenage boys ranging from ages 12-17 yrs. I am trying to begin a tradition where at age 18 we do a sort of passage to manhood activity. When I was younger that activity was sky diving but I have no interest in doing that for my boys. We will do this as my children turn 18 yrs old and individually for each child. So when we go on the trip it will be just me and my current 18 yr old. None of them are particularly outdoorsy but they do enjoy camping, hiking, and fishing. Therefore they are not exceptionally skilled in any of them. I would like to know the skill required for each portion of the trip, how many days it will take, future scheduling, and equipment we need to bring.</p>

		<h2>Scenarios</h2>

		<ol>
			<li><h3>How long are the adventure trips?</h3>
				Rafting trips last 1-3 days depending on the activity</li>
			<li><h3>How much does it cost?</h3>
				This will be determined in a pricing table on each adventures parituclar page</li>
			<li><h3>What kind of skills are required?</h3>
				Skills are determined by the fish and game administration. Descriptions will be provided</li>
			<li><h3>What are the age limits?</h3>
				Must be 14 or older to participate in rafting or kayaking activities<br>
				Must be 6 or older to participate in our fishing adventures</li>
			<li><h3>What services are provided?</h3>
				We provide: Transportation, food, drinks, sunscreen, life jackets</li>
			<li><h3>Which guides service which adventure?</h3>
				Amber Fryar: Runs the river rafting adventure<br>
				Dave Dixon: Runs the fishing adventure<br>
				Tiffany Heroff: Runs the kayaking adventure</li>
		</ol>

		<h2>Content List</h2>

		<ol>
			<li>The homepage will consist of a header and logo, main body, and footer. The main content will include a simple schedule for adventures as well as office hours and ratings. The left portion of the main will contain photos along the bottom and left side.</li>
			<li>3 photos on left column of main content</li>
			<li>4 links to different parts of the website</li>
			<li>In adventures pages each one will contain details such as their length, skill level required, costs</li>
			<li>In the Guides pages each one will contain details on the guides for the adventures. Details will include guides name, their picture, certificiation level, biography (at least 1 paragraph), years experience, and email address</li>
			<li>Footer will include:
				<ul>
					<li>Copyright statement</li>
					<li>Last updated statement</li>
					<li>Link to working contact form</li>
					<li>Link to Site Plan page</li>
					<li>Link to Resources page</li>
				</ul>
			</li>
		</ol>

		<h2>Other Details</h2>

		<ul>
			<li>Will shift to 3 screen sizes and 2 break points, all pages will be responsive: Large (768px), mobile (414px)<br>Each size will have a responsive design</li>
		</ul>

		<h2>Style Guide</h2>

		<h3>Color Scheme</h3>

		<ul>
			<li>#d1462d</li>
                        <li>#a92c16</li>
                        <li>#faf0e6</li>
		</ul>
                <img src="color1.tiff" alt="#d1462d">
                <img src="color2.tiff" alt="#a92c16">
                <img src="color3.tiff" alt='#faf0e6' style="border: solid black 1px;">
             

		<h3>Navigation</h3>

		<p>The navigation bar will be found at the top of the webpage in the header. It will be horizontal with earth tone colors. It will feature drop down menus.</p>
                </div>

            </div>
            <div class="row_content">
                <table>
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/content_Row.php'; ?>
                </table>
            </div>
        </div>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/salmon/modules/footer.php'; ?>
        </footer>
    </body>
</html>