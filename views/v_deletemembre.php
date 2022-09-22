<form action="index.php?uc=gerer&action=supprimer" method="POST">
<label for="select-membre">Choisissez un membre à supprimer :</label>

<select name="membres" id="select-membre">

<php?
foreach($les_membres as $le_membre)
{
    ?>
    <OPTION value='<?php echo $le_membre['membre'];?>'><?php echo $le_membre['membre']
    <?php

 
</select>  

<input type = submit> 




</form>