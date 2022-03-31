<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php
session_start() ;
if($_POST['note']==null){
    header('location:warning.php');
    $_SESSION['nb_note']--;
}
else{
    $val="note".$_SESSION['nb_note'] ;
    $_SESSION[$val]= $_POST['note'] ;
    $nb=$_SESSION['nb_note'] ;
    for ($i=1;$i<=$nb;$i++){
        $nt="note".$i ;
        $note= $_SESSION[$nt] ;
        ?>
        <?php
        echo "$nt : <br>"
        ?>
        <ul class="list-group">
            <li class="list-group-item"><?php echo "$note"  ?></li>
        </ul>

        <?php

    }
}
?>


