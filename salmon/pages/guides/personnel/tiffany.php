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
                    <h1>Tiffany Heroff</h1>
                    <img src="../images/tiffany.jpg" alt="Tiffany Heroff">
                    <p>Tiffany grew up in central Chicago. Wanting to experience a different way of living she attended at Idaho State University. During her time there, she joined many different clubs and fell in love with Kayaking. Since then she has spent every available moment on the Salmon River. In a short time she earned her ACA, CPR, and WSC certifications. Her favorite thing about Kayaking is the independent nature of the sport yet she is enjoys the team effort involved in getting through the rapids successfully.</p>
                    
                    <ul>
                        <li>ACA certified</li>
                        <li>3yrs as an ACA certified instructor </li>
                        <li>4yrs experience in the Salmon River</li>
                        <li>CPR Certified</li>
                        <li>Wilderness survival certified</li>
                    </ul>
                    
                    <p>Feel free to contact Tiffany with any questions. <br><a href="mailto:tiffany_heroff@salmonadventures.com?Subject=I%20have%20questions" target='_top'>Send Mail</a></p>
                    
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