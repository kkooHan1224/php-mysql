<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
                $id = $_GET['id'] ?? 'HTML';
                if(isset($_GET['id'])) {
                    echo $_GET['id'];
                } else {
                    echo "Welcome";
                }
            ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
                print_list();
            ?>
        </ol>
        <h2>
            
        </h2>
        <?php
            if(isset($_GET['id'])) {
                echo nl2br(file_get_contents("data/$id"));
            } else {
                echo "Hello, PHP";
            }
        ?>
    </body>
</html>