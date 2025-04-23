<?php
    require_once( 'decode_json.php' );
    $colors = $data;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colors</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>
<body>

<div class="container" style="margin-top:50px;">
    <div class="row">

        <div class="col-sm-4" style="color:#ff0000;">
            <div class="card border mb-3">
                <div class="card-body">
                    <h5 class="card-title">Red</h5>
                    <p class="card-text">hex: #ff0000</p>
                    <p class="card-text">rgb: (255, 0, 0)</p>
                    <p class="card-text">hsl: (0, 100, 50)</p>
                </div>
            </div>
        </div><!--/.col-->
  
        <div class="col-sm-4" style="color:#008000;">
            <div class="card border mb-3">
                <div class="card-body">
                    <h5 class="card-title">Green</h5>
                    <p class="card-text">hex: #008000</p>
                    <p class="card-text">rgb: (0, 128, 0)</p>
                    <p class="card-text">hsl: (120, 100, 25)</p>
                </div>
            </div>
        </div><!--/.col-->

        <div class="col-sm-4" style="color:#0000ff;">
            <div class="card border mb-3">
                <div class="card-body">
                    <h5 class="card-title">Blue</h5>
                    <p class="card-text">hex: #0000ff</p>
                    <p class="card-text">rgb: (0, 0, 255)</p>
                    <p class="card-text">hsl: (240, 100, 50)</p>
                </div>
            </div>
        </div><!--/.col-->

    </div><!--/.row-->
</div><!--/.container-->
</body>
</html>