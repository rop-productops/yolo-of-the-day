<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <h3 class="log"><a class="link" href="login.html">Log In</a></h3>
    <div class="header">
        <h1><a style="color:white;"class="link" href="index.php">YOLO</a></h1>
    </div>
    </head>
    <Body class="body"> 
        <div width:100%">
        <table class="titles">
           <th width="50%"><a style="color:white;" class="link" href="index.php">YOLO of the day</a></th>
           <th width="50%"><a style="color:white;" class="link" href="vote.php">Vote</a></th>
        </table>
        </div>
        <div class="main" style="padding-top:10px; padding-bottom:20px;">
                <h3>Top Ten YOLOs</h3> 
                <table class="yolos" border="1">
              <tr style="color:white;">
                <th width="55%">Tweet</th>
                <th width="20%">Tweeter</th>
                <th width="15%">Date</th>
                <th width="10%">Votes</th>
              </tr>
    <?php while($row = $this->query_results->fetch()) { ?>
              <tr style="color:white;">
                <td><?php echo $row['tweet']; ?></td>
                <td><?php echo $row['original_tweeter']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['votes']; ?></td>
              </tr>
    <?php }  ?>

        </table>
            </div>
    </Body>
</html>
