

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiplication Table</title>
    <style media="screen">
        td{
            width:40px;
            height:40px;
        }
        .strong{
            font-weight:bold;
            font-size:24px;
        }

        table tr:nth-child(even){
            background-color: gray;
        }
        table{
            border-collapse: collapse;
        }
    </style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <table>
        <tr class="strong">
            <td></td>
            <?php for($i=1; $i <10; $i++) { ?>
                <td><?= $i ?></td>
            <?php } ?>
        </tr>

            <?php for($row=1; $row < 10; $row++) { ?>

                <tr>
                    <td class="strong"><?= $row ?></td>


                    <?php for($column = 1; $column < 10 ; $column++) { ?>
                    
                        <td><?= $row * $column ?></td>
                    
                    <?php } ?>
                </tr> 
                
            <?php } ?>


    
    
    
    </table>
</body>
</html>