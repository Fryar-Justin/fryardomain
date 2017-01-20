<!DOCTYPE html>

<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Blog</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>      
        <main> <!--This is the main section of your website. You can include sections, etc. here-->
            <div class="mainContent">
                <h1>Welcome to my Blog!</h1>
                <p>The purpose of this blog is to communicate new and interesting information about quadcopters<br>
                    I love watching demonstrations of racing tachnique, the newest equipment, or just someones awesome video<br>
                    When I find interesting things like that I will post them here.</p>
                <p>
                    Did you know that quadcopters are not just good for exploration? New development is also coming that will enable quadcopters to also explore under water! The biggest logistical concern with this is how do you communicate with a drone under water? Often the water itself blocks communications. So what happens when you lose communication, does the drone just stay under water? There has to be a safety mechanism that causes it to float to the top so it can be recovered. Perhaps the best solution is to just not let it go so deep that you can retrieve it with a short swim.<br>
                    <img src='/pages/blog/images/maxresdefault.jpg' alt="Under-Water Quadcopter" height='180' width='320'>
                    
                </p>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
        </footer>
    </body>
</html>