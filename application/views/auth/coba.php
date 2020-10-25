<html>

<head>
    <title>upload video</title>
</head>

<body>
    <h1>upload</h1>
    <form action='<?= site_url('user/do_upload') ?>' method="post" enctype="multipart/form-data">
        <input type="file" name="content">
        <input type="submit" name="upload">
    </form>
</body>

</html>