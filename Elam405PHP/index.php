<?php
    // get the data from the request
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];
?>
<!DOCTYPE html>
<html lang="en-US">
    <!-- Basic web page template -->
    <head>
            <meta charset="utf-8">
            <title>Title</title>
    </head>
    <body>
        <h1>Temporary index file.</h1>
        <p>First name: <?php echo $first_name; ?></p>
        <p>Last name: <?php echo $last_name; ?></p>
    </body>
</html>