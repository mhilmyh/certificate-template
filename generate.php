<!DOCTYPE html>
<html>
<?php
$title = $_REQUEST['title'];
$headline = $_REQUEST['headline'];
$description = $_REQUEST['description'];
$name = $_REQUEST['name'];
?>

<head>

    <link rel="preload" href="certificate.js" as="script">

    <link href="https://fonts.googleapis.com/css?family=Bellota+Text|Berkshire+Swash|Oswald&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="appreciation,success,good">
    <meta name="author" content="<?php echo $name; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        canvas {
            height: 100vh;
            width: 100vw;
        }

        img {
            display: none;
        }
    </style>
    <img id="cert-img" src="assets/template.png" alt="Certificate Template">
    <canvas id="cert-bg"></canvas>
</body>

<script defer>
    // Wait font to load first
    setTimeout(() => {}, 1000);

    // Execute when window loaded
    window.onload = function() {
        var cert = document.getElementById("cert-bg");
        var ctx = cert.getContext("2d");
        ctx.canvas.width = window.innerWidth;
        ctx.canvas.height = window.innerHeight;
        var img = document.getElementById("cert-img");
        ctx.drawImage(
            img,
            0,
            0,
            img.width,
            img.height,
            0,
            0,
            ctx.canvas.width,
            ctx.canvas.height
        );

        var fontSize = null;
        var fontType = null;
        var fontFamiliy = null;

        // Title
        fontSize = 40;
        fontType = "";
        fontFamiliy = " Berkshire Swash";
        ctx.font = fontType + fontSize + "px" + fontFamiliy;
        ctx.textAlign = "center";
        ctx.fillText(
            "<?php echo $title; ?>",
            ctx.canvas.width / 2,
            ctx.canvas.height / 5 + fontSize / 2
        );

        // Person Name
        fontSize = 24;
        fontType = "";
        ctx.font = fontType + fontSize + "px" + fontFamiliy;
        ctx.textAlign = "center";
        ctx.fillText(
            "<?php echo $name; ?>",
            ctx.canvas.width / 2,
            ctx.canvas.height / 2 - fontSize / 2
        );

        // Headline
        fontSize = 32;
        fontType = "";
        fontFamiliy = " Bellota Text";
        ctx.font = fontType + fontSize + "px" + fontFamiliy;
        ctx.textAlign = "center";
        ctx.fillText(
            "<?php echo $headline; ?>",
            ctx.canvas.width / 2,
            ctx.canvas.height / 3 - fontSize / 2
        );

        // Not important text
        fontSize = 16;
        fontType = "";
        fontFamiliy = " Oswald";
        ctx.font = fontType + fontSize + "px" + fontFamiliy;
        ctx.textAlign = "center";
        ctx.fillText(
            "We are proudly present this certificate to ",
            ctx.canvas.width / 2,
            ctx.canvas.height / 3 + fontSize * 4
        );

        // Not important text
        fontSize = 16;
        fontType = "";
        ctx.font = fontType + fontSize + "px";
        ctx.textAlign = "center";
        ctx.fillText(
            "<?php echo $description; ?>",
            ctx.canvas.width / 2,
            ctx.canvas.height / 2 + fontSize * 2
        );
    };
</script>

</html>