<?php
    require_once( 'decode_json.php' );
    $colors = $data;
    //var_dump($colors[0]);
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
        
        <?php
        foreach($colors as $c) {
        ?>
            <div class="col-sm-4" style=color:<?php echo $c->hexString; ?>>
            <div class="card border mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $c->name; ?></h5>
                    <p class="card-text">hex: <?php echo  $c->hexString; ?></p>
                    <p class="card-text">rgb: (<?php echo  $c->rgb->r ;?>, <?php echo $c->rgb->g; ?>, <?php echo $c->rgb->b; ?>)</p>
                    <p class="card-text">hsl: (<?php echo  $c->hsl->h ;?>, <?php echo $c->hsl->s; ?>, <?php echo $c->hsl->l; ?>)</p>
                </div>
            </div>
        </div>
            <?php } ?>

    </div><!--/.row-->
</div><!--/.container-->
</body>
</html>