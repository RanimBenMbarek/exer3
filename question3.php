<?php
session_start();
if (isset($_SESSION['nb_note'])){
    $_SESSION['nb_note']++;
}
else{
    $_SESSION['nb_note']=1;
}
?>
<link rel="stylesheet">
<div>
    <form action="liste.php" method="post">
        <div>
            <label for="note">note:</label><input id="note" name="note" rows="1" cols="20"  class="form-control" placeholder="note"></input>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


    </form>