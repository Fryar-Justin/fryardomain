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
                    <h1>Amber Fryar</h1>
                    <img src="../images/amber.jpg" alt="Amber Fryar">
                    <p>Amber grew up playing in the Colorado streams and rivers. When she was little she went on her first rafting trip with her father in Alaska. From that event grew a love for the outdoors and exploring the wild. She has been a certified ACA instructor for 14yrs and is a certified Rescue instructor. But nothing can beat experience and Amber has been through the Salmon river more than most guides in the community.</p>
                    
                    <ul>
                        <li>ACA certified</li>
                        <li>14yrs as an ACA certified instructor </li>
                        <li>10yrs experience in the Salmon River</li>
                        <li>CPR Certified</li>
                        <li>Wilderness survival certified</li>
                    </ul>
                    
                    <p>Feel free to contact Amber with any questions. <br><a href="mailto:amber_fryar@salmonadventures.com?Subject=I%20have%20questions" target='_top'>Send Mail</a></p>
                    
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