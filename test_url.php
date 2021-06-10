<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 6.2 URL Server</title>
    </head>
    <body>
        <?php
        $lastName=$_REQUEST['lastname'];
        $firstName=$_REQUEST['firstname'];
        // Test the 'age' parameter
        if ((isset($_REQUEST['age'])) && (!empty($_REQUEST['age'])))
        {
            $age= $_REQUEST['age'];
        }
        else
        {
            $age='?';
        }
        ?>
        <p>Received parameters on Server:</p>
        <p>test_url.php?lastname=<?= $lastName ?>&firstname=<?= $firstName ?>&age=<?= $age ?></p>
    </body>
</html>