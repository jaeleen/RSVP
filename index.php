<?php
$action = $_GET["action"];
$myText = $_POST["name"];

if($action = "save") {
  $targetFolder = "/RSVP/input/mytext.txt";
  file_put_contents($targetFolder."mytext.txt", $myText);
}
?>   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="index.css" />
    <link href="https://fonts.googleapis.com/css?family=Tangerine&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet" />
    <title>FvckYoMvnny</title>
</head>

<body>
    <div class="form">
        <div class="info">
            <h1>RSVP</h1>
            <h2>@everyone.hates.manny</h2>
            <p class="line">________________________________________</p>
            <h2>The Details</h2>
            <p>Saturday, April 17, 2021</p>
            <p>9:00 PM</p>
            <p>RSVP for address </p>
            <br>
            <h2>90's Vibes</h2>
            <p class="line">________________________________________</p>
        </div>
        <form action="?action=save" name="myForm" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <label for="addOn">Add On</label>
            <select id="gift" name="gift" required>
                <option value="wine">Wine</option>
                <option value="liquor">Hard Liquor</option>
                <option value="snacks">Snacks</option>
                <option value="none">None</option>
            </select>
        <button type="submit" class="accept" value="save">Accept</button>
        <button class="regret">Regret</button>
        </form>
    </div>
</body>

</html>
