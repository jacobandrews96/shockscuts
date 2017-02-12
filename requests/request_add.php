<?php include '../view/header.php' ?>

    <p>All of the slots that you see marked as busy, means that I can't cut then! I recommend you click the 'week' tab on the top right and submit the time slots that work for you when I don't have anything planned!</p>

    <form action="index.php" method="post">
    <fieldset class='schedule_fieldset'>
        <legend>Your Information</legend>
        <p class="error"><?php echo $message;?></p>
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
    <select name="day"> 
        <option value="Tuesday"?>Tuesday</option>
        <option value="Wednesday"?>Wednesday</option>
        <option value="Thursday"?>Thursday</option>
        <option value="Friday"?>Friday</option>
        <option value="Saturday"?>Saturday</option>
        <option value="Sunday"?>Sunday</option>
    </select>
    <br>
    <label>* Time</label>
        <select name="time">    
        <option value="1000"?>10:00am</option>
        <option value="1030"?>10:30am</option>
        <option value="1100"?>11:00am</option>
        <option value="1130"?>11:30am</option>
        <option value="1200"?>12:00pm (noon)</option>
        <option value="1230"?>12:30pm</option>
        <option value="100"?>1:00pm</option>
        <option value="130"?>1:30pm</option>
        <option value="200"?>2:00pm</option>
        <option value="230"?>2:30pm</option>
        <option value="300"?>3:00pm</option>
        <option value="330"?>3:30pm</option>
        <option value="4"?>4:00pm</option>
        <option value="430"?>4:30pm</option>
        <option value="500"?>5:00pm</option>
        <option value="530"?>5:30m</option>
        <option value="600"?>6:00pm</option>
        <option value="630"?>6:30pm</option>
        <option value="7"?>7:00pm</option>
        <option value="730"?>7:30pm</option>
        <option value="800"?>8:00pm</option>
        <option value="830"?>8:30pm</option>
        <option value="900"?>9:00pm</option>
        <option value="930"?>9:30pm</option>
        <option value="1000"?>10:00pm</option>
        <option value="1030"?>10:30pm</option>
    </select>
    <p> Appointments are 30 minutes long </p>
    <div id="buttons">
    <input type="submit" value="Submit" name="GOBUTTON">
    <br>
    </div>
    </fieldset>
    </form>

<iframe src="https://calendar.google.com/calendar/embed?mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=tuf40954%40temple.edu&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
<p>If there are any time conflicts or you need a cut that will definitely last longer than 30 minutes please call or text me at 1-973-934-5625</p>

<?php include '../view/footer.php'?>