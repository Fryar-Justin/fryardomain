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
                    <h1>Dave Dixon</h1>
                    <img src="../images/dave.JPG" alt="Dave Dixon">
                    <p>David developed his love of fishing as a young boy watching his grandfather tie flies in the basement. His grandfather frequently took him fishing and taught him everything he knew. Dave loved this outdoor activity and has continued to learn and hone his skills. He has been guiding fishing tours for the last 7yrs and knows all the great location on the Salmon river. He has led fishing expeditions in 37 of the 50 states of the country.</p>
                    
                    <ul>
                        <li>ACA certified</li>
                        <li>10yrs as an ACA certified instructor </li>
                        <li>7yrs experience in the Salmon River</li>
                        <li>CPR Certified</li>
                        <li>Wilderness survival certified</li>
                    </ul>
                    
                    <p>Feel free to contact Dave with any questions. <br><a href="mailto:dave_dixon@salmonadventures.com?Subject=I%20have%20questions" target='_top'>Send Mail</a></p>
                    
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