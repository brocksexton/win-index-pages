<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Pages Directory</title>
    <link rel="stylesheet" href="https://unpkg.com/98.css@0.1.20/dist/98.css">
    <style>
        body {
            background-color: #008080;
            font-family: 'Courier New', Courier, monospace;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .window {
            width: 80%;
            max-width: 800px;
        }
        ul {
            list-style-type: none;
        }
        li {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="window">
    <div class="title-bar">
        <div class="title-bar-text">Error Pages</div>
    </div>
    <div class="window-body">
        <ul>
        <?php
        // Directory where error pages are located
        $dir = "./"; 

        // Get all html files
        $error_pages = glob($dir . "*.html");

        // Print out all the files
        foreach($error_pages as $file){
            echo "<li><a href='" . $file . "'>" . basename($file) . "</a></li>";
        }
        ?>
        </ul>
    </div>
</div>

</body>
</html>
