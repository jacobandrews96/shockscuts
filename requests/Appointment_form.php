<?php  
$firstname = filter_input(INPUT_POST,'first_name');
$lastname = filter_input(INPUT_POST,'last_name');
$phone = "";

<form action="index.php" method="post">
    <fieldset>
    <legend>Your Name</legend>
    <label>* First name</label>
    <input type="text" name="first_name" value="<?php echo $firstname; ?>">
        <br>
    <label>* Last name</label>
        <input type="text" name="last_name" value="<?php echo $lastname; ?>">       
    </fieldset>
?>