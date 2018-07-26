<?php 
    session_start();

    if(!isset($_SESSION['total_gold_for_user']))
        {
            $_SESSION['total_gold_for_user'] = 0;
            echo $_SESSION['total_gold_for_user'];
           
        }

   

    $all_messages = [];
    $all_messages[] = $_SESSION['all_messages'];
    //var_dump($all_messages);

    // another way of trying to get the text into different color
    /*<?php if (isset($_SESSION['all_messages'])) { ?>
                    <ul>
                    <?php foreach($_SESSION['all_messages'] as  $message) { ?>
                            <?php if($_SESSION['color'] == "green") { ?>
                                 <li style="color:green;"><?= $message ?> </li>
                            <?php } ?>

                            <?php if($_SESSION['color'] == "red") { ?>
                                 <li style="color:red;"><?= $message ?> </li>
                            <?php } ?>
                           
                        <?php } ?> 
                    </ul>


                <?php } ?> */
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ninja Money</title>
        <style type="text/css"> 
        .color {
            color: <?= $_SESSION['color'] ?>;
        }
        
        </style>
    </head>
        <body>
            <div class="wrapper">
                <div class="gold">
                    <p>Your Gold:</p>
                    <p></p>
                </div>
                <div class="building">
                    <h3>Farm</h3>
                    <p>(earns 10-20 golds)</p>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="building" value="farm">
                        <input type="submit" name="submit" value="Find Gold!">
                    </form>
                </div>

                <div class="building">
                    <h3>Cave</h3>
                    <p>(earns 5-10 golds)</p>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="building" value="cave">
                        <input type="submit" name="submit" value="Find Gold!">
                    </form>
                </div>

                <div class="building">
                    <h3>House</h3>
                    <p>(earns 2-5 golds)</p>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="building" value="house">
                        <input type="submit" name="submit" value="Find Gold!">
                    </form>
                </div>

                <div class="building">
                    <h3>Casino</h3>
                    <p>(earns/takes 0-50 golds)</p>
                    <form action="process.php" method="POST">
                        <input type="hidden" name="building" value="casino">
                        <input type="submit" name="submit" value="Find Gold!">
                    </form>
                </div>

                <p>Activities:</p>
                <div class="activities">

                <?php if (isset($_SESSION['all_messages'])) { ?>
                    <ul>
                        <?php foreach($_SESSION['all_messages'] as  $message) { ?>
                            <li class="color"><?= $message ?> </li>
                        <?php } ?> 
                    </ul>


                <?php } ?>
              
              


            </div>
        </div>
  
    </body>

   
</html>

