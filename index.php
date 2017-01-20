 <!DOCTYPE html>
 
<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        <title>Home</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
        </header>
       <main> <!--This is the main section of your website. You can include sections, etc. here-->
           <div class="mainContent">
               <h1>Home</h1>
               <p>The purpose of my site is to educate and inform people about the growing and expanding quadcopter community. There are several different categories of quadcopter. This site focuses on only two of these at the moment. Quadcopter Racing and Aerial Photography.</p>
               <p>Without a good knowledge and understanding of drones you may not be aware of what if out their and if you are getting a good deal. On top of all of this Quadcopters is a new political and legal arena. The saying is that government agencies are usually four to five years behind the times. This means that even though Quadcopters have been around for several years, the government laws and regulations governing them are just starting to catch up.</p>
               <p>The legalities of quadcopters is also a hot topic. Who after all should get in trouble for quadcopters jamming the air traffic when photographing a forest fire. Or if someone were to fly it near an airport it can delay flights and cause a lot of trouble. Believe it or not even a bird flying into a jet engines intake manifold can ruin the engine. The same thing can happen with a quadcopter.</p>
           </div> 
           <video width='400' height='300' poster='/pages/home/images/poster_golden_gate.jpg' controls preload>
               <source src='/pages/home/video/Golden_Gate_Bridge.mp4' type='video/mp4'>
               <source src='/pages/home/video/Golden_Gate_Bridge.ogv' type='video/ogg'>
               <source src="pages/home/video/Golden_Gate_Bridge.webm" type="video/webm">
           </video><br>       
           <div class="credit">Credit goes to <a href="https://www.youtube.com/channel/UCatEh6CQCaAgR9aikgYpv0A">Lino TheFilipino</a> for this awesome video!</div>
           <div class="contentWrapper">
            <div class="contentLeft">
                <table>
                    <tr>
                        <td>
                            <a href="/pages/equipment/flyingSimulators/flyingSimulators.php">
                                <img src="/pages/equipment/flyingSimulators/images/s-l300.jpg" alt="Quadcopter Simulator"/></a></td>
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
                            <a href="/pages/equipment/specialty/specialty.php">
                                <img src="/pages/equipment/specialty/images/drone.jpg" alt="Specialty Equipment"/></a>
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
                            <a href="/pages/equipment/equipment.php">
                                <img src="/pages/equipment/specialty/images/kylin-250-fpv-racing-1.jpg" alt="Quadcopter Equipment">  
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
      		<?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
      </footer>
    </body>
</html>