<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palette of colors</title>
</head>
<body>
    <div class="wrapper">
        <h1 class="main-title">Color generator</h1>
        <div class="palette-container">
            <?php 
            for ($i =0; $i < 10; $i++) {
                $randomValueHexStr = dechex(mt_rand(0, 0xFFFFFF));
                $hexColor = "#" . str_pad($randomValueHexStr, 6, "0", STR_PAD_LEFT);
            }

            echo "<div class ='color-card'>";
            echo "  <div class ='color-display' style='background-color: {$hexColor};'>  </div>";
            echo "  <p> class ='color-card'</p>";
            echo "</div>";
            ?>
        </div>
        <div class="controls">
            <div id="btnGenerate" onClick ="window.location.reload()" >New Colors</div>
        </div>
    </div>
</body>
</html>