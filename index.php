<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File List</title>
</head>
<body>
    <h1>File List in Root Directory</h1>
    <ul>
        <?php
            $files = scandir(__DIR__); // Get the list of files in the current directory
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    echo "<li>$file</li>";
                }
            }
        ?>
    </ul>
</body>
</html>
