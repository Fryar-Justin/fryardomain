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
                <div id="top" class="guide">
                    <h1>Welcome to our Guides</h1>
                    <p>Each of our guides have extensive experience in their respective tours. Please click on one of the images below to view their profile.</p>
                    
                    <p><a href="personnel/amber.php"><img src="images/amber.jpg" alt="Amber Fryar"></a><a href="personnel/tiffany.php"><img src="images/tiffany.jpg" alt="Tiffany Heroff"></a><a href="personnel/dave.php"><img src="images/dave.JPG" alt="Dave Dixon"></a></p>
                </div>

                <div id="bottom">
                    <p>Each of our highly qualified tour guides are ACA and CPR certified</p>

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