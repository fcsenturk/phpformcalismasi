<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Çalışması</title>
    <style>
        * {
            font-family: system-ui, sans-serif
        }

        body {
            margin: 2rem;
        }

        input {
            background: white;
            border: 1px color red;
            font-size: 0.875rem;
            padding: 0.5rem 0.75rem;
            outline: 0;
            margin-left: 1rem;
            border-radius: 3rem;
        }

        button {
            border: 0;
            outline: 0;
            cursor: pointer;
            background-color: black; 
            color: #fff;
            padding: 0.5rem 0.75rem;
            border-radius: 4rem;
            margin-left: 1rem;
        }
    </style>
</head>

<body>

    <?php
    function message($str = "", $type = "message")
    {
    ?>
        <div style="color: #fff;padding: 1rem;margin-bottom: 1rem;border-radius: 0.5rem;font-family: system-ui, sans-serif;background-color:<?php echo $type === "error" ? "#f44336" : "#1a73e8"; ?>"><?php echo $str; ?></div>
    <?php
    }
    if (isset($_POST["number"])) {
        $number = @$_POST["number"];
        if ($number === "") {
            message("Lütfen boş bırakmayın!", "error");
        } else {
            if ($number % 3 === 0) {
                message("${number} sayısı 3 ile tam bölünüyor");
            } else {
                $afterNum = $number;
                $afterNum++;
                while ($afterNum % 3 !== 0) {
                    $afterNum++;
                }
                message("${number} sayısı 3 ile tam bölünmüyor. 3 ile ilk bölünecek sayı: ${afterNum}");
            }
        }
    }
    ?>

    <form action="" method="post">
        <label for="number">Sayı girin : </label>
        <input type="number" name="number" <?php if(isset($_POST["number"])){echo 'value="'. $_POST["number"].'"';} ?> placeholder="Sayı girin...">
        <button type="submit">Gönder</button>
    </form>
</body>

</html>
