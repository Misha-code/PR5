 <?php

  $get_data = file_get_contents('http://jsonplaceholder.typicode.com/users');
  $get_data = json_decode($get_data);

  var_dump($get_data);


 ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Yakovets misha</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="card-group">
                    <?php foreach ($get_data as $g): ?>
                    <div class="col-sm">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $g->title;?></h5>
                                <p class="card-text"><?php echo $g->body;?></p>
                            </div>
                            <div class="card=footer">
                            <small class="text-muted">Last update 3 mins ago</small>    
                            </div>
                        </div>
                    </div>
            <?php endforeach ?>
            </div>
    </div>
    </div>
    
    <script src="https:/code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https:/cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https:/stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
    </body>
    </html>