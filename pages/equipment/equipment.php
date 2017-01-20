<!DOCTYPE html>

<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Equipment</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>      
        <main> <!--This is the main section of your website. You can include sections, etc. here-->
            <div class="mainContent">
                <h1>Quadcopter Equipment</h1>

            <article id="center">
                <h2>Welcome to our equipment for quadcopter enthusiasts!</h2>
                        <p>We will be posting equipment that will help the newcomers to the sport as well as some resources for the experienced.</p>
                        <p>Quadcopters are not a cheap piece of equipment. Neither are they simple. They are highly complicated machines that typically have an entire avionics suit embedded in their incredibly dense electronics. In addition to that they have multiple sensors each giving input to a fast acting processor. Needless to say this equipment does not come cheap. One of the most useful tools out there is simulation equipment. You are able to use a normal control system just like in the real thing. But this time, when you crash it (which you will) you just simply push a button and your good to go again!.</p>
            </article>
            </div> 
            <div class="contentWrapper">
            <div class="contentLeft">
                <table>
                    <tr>
                        <td>
                            <a href="flyingSimulators/flyingSimulators.php">
                            <img src="flyingSimulators/images/s-l300.jpg" alt="Quadcopter Simulator"/></a></td>
                    </tr>
                    <tr>                        
                        <td>Flying Simulators</td>
                    </tr>
                </table>
            </div>
            <div class="contentCenter">
                <table>
                    <tr>
                        <td>
                            <a href="specialty/specialty.php">
                            <img src="specialty/images/drone.jpg" alt="Specialty Equipment"/></a>
                        </td>
                    </tr>
                    <tr>                        
                        <td>Specialty Equipment</td>
                    </tr>
                </table>
            </div>
            <div class="contentRight">
                <table>
                    <tr>
                        <td>
                            <a href="equipment.php">
                                <img src="specialty/images/kylin-250-fpv-racing-1.jpg" alt="Quadcopter Equipment">  
                            </a>
                        </td>
                    </tr>
                    <tr>                        
                        <td>Equipment</td>
                    </tr>
                </table>
            </div>
            </div>
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
        </footer>
    </body>
</html>