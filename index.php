<?php
    $fileName = "uml.csv";
    $fp = fopen( $fileName, 'r' );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ultimate Movie List</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
        .header {
            padding: 100px 0;
        }
        .title {
            text-align: center;
            color: #9b4dca;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="column">
                    <h1 class="title">Ultimate Movie List</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="another-section">
        <div class="container">
            <div class="row">
                <div class="column">
                    <table>
                        <tr>
                            <th>TITLE</th>
                            <th>YEAR</th>
                            <th>DIRECTOR</th>
                            <th>GENRE</th>
                            <th>WHY YOU SHOULD WATCH IT</th>
                        </tr>
                        <?php while( $movie = fgetcsv( $fp ) ): ?>
                        <tr>
                            <td><?php echo $movie[0]; ?></td>
                            <td><?php echo $movie[1]; ?></td>
                            <td><?php echo $movie[2]; ?></td>
                            <td><?php echo $movie[3]; ?></td>
                            <td><?php echo $movie[4]; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>