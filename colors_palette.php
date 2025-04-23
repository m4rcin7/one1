<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palette of colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <h1 class="main-title">Color generator</h1>
        <div class="palette-container">
        <?php 
        for ($i = 0; $i < 10; $i++) {
            $randomValueHexStr = dechex(mt_rand(0, 0xFFFFFF));
            $hexColor = "#" . str_pad($randomValueHexStr, 6, "0", STR_PAD_LEFT);

            echo "<div class='color-card'>
                    <div class='color-display' style='background-color: {$hexColor};'>{$hexColor}</div>
                    <p>{$hexColor}</p>
                    </div>";
        }
        ?>
        </div>
        <div class="controls">
        <button id="btnGenerate" onClick="window.location.reload()">New Colors</button>
        </div>
    </div>
</body>
</html>