<?php
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $path = __DIR__.'/'.basename($_FILES["file"]["name"]);

        if(!move_uploaded_file($_FILES["file"]["tmp_name"], $path)){
            http_response_code(500);
        }

        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dropzone</title>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css">
</head>
<body>

<div class="dropzone"></div>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script>
    const dropzone = new Dropzone("div.dropzone", {url:"/"});
</script>

</body>
</html>

