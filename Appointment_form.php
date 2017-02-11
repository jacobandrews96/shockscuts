	<form action="index.php" method="post">
    <fieldset>
    	<legend>Your Information</legend>
    <label>* First name:</label>
    <input type="text" name="first_name" value="<?php echo $firstname; ?>">
        <br>
    <label>* Last name:</label>
        <input type="text" name="last_name" value="<?php echo $lastname; ?>">   
        <br>
    <label>* Phone Number:</label>
    <input type="text" name="phone" value="<?php echo $phone; ?>">
    	<br>
    <label>* Day of the week:</label>
    <select>	
    	<option value="Tuesday"?>Tuesday</option>
    	<option value="Wednesday"?>Wednesday</option>
    	<option value="Thursday"?>Thursday</option>
    	<option value="Friday"?>Friday</option>
    	<option value="Saturday"?>Saturday</option>
    	<option value="Sunday"?>Sunday</option>
    </select>
    </fieldset>