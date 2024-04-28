<?php
    if(isset($_FILES["file"]) && $_FILES["file"]["error"] == 0){
        $filename = basename($_FILES["file"]["name"]);
        $filepath = sprintf("%s/%s", __DIR__, $filename);

        if(isset($_GET["dest"]) && $_GET["dest"]){
            $filepath = sprintf("%s/%s/%s", __DIR__, $_GET["dest"], $filename);
        }

        if (!is_dir(dirname($filepath))) {
            mkdir(dirname($filepath), 0777, true);
        }

        if(!move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)){
            http_response_code(500);die;
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
    const dropzone = new Dropzone("div.dropzone", {
        url: "/?dest=<?=$_GET['dest']??null;?>"
    });
</script>

</body>
</html>
