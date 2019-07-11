<html>
    <head><meta charset="UTF-8"></head>
    <body>
        <h1>S3 upload example</h1>
        <form enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <input name="userfile" type="file"><input type="submit" value="Upload">
        </form>
    </body>
</html>
     