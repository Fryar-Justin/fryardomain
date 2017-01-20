<!DOCTYPE html>

<html>
    <head>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
        <title>Contact me</title>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/header.php'; ?>
        </header>      
        <main>
            <h1>Contact Me</h1>
            <form method="post" action="index.php">
                <table>
                    <tr>
                        <td><label>Name</label></td>
                        <td><input name="name" placeholder="Type Here"><td>
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
        </main>
        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/footer.php'; ?>
        </footer>
    </body>
</html>