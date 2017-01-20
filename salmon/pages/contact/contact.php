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
                <div id="top">
                    <h1>Contact Me</h1>
            <form method="post" action="index.php">
                <table>
                    <tr>
                        <td><label>Name</label></td>
                        <td><input name="name" placeholder="Type Here"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>Email</label></td>
                        <td><input name="email" type="email" placeholder="Type Here"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>Message</label></td>
                        <td><textarea name="message" placeholder="Type Here"></textarea></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label>*What is two plus two? (Anti-spam)</label></td>
                        <td><input name="human" placeholder="Type Here"></td>
                        <td><input id="submit" name="submit" type="submit" value="Submit"></td>
                    </tr>
                </table>
            </form>
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