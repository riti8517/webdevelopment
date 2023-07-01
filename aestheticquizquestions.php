<DOCTYPE html>
<html>
<head>
<title>Title</title>
</head>
<PHP> <link rel="stylesheet" type="text/css" href="quiz.css"></head> <PHP>

<body>
    <h1>Aesthetic quiz</h1>
<div>

<form  method = "post" action = "print.php">
    <label for="fname">Name:</label>
    <input type="text" id="fname" name="fname">
    <label for="gender">Gender:</label>
    <input type="text" id="fname" name="gender">
    <label for="date">Date of Birth:</label>
    <input type="text" id="fname" name="date"><br>
    <label for="email">Email Address:</label>
    <input type="text" id="fname" name="email">
    <label for="address">Street Address:</label>
    <input type="text" id="fname" name="address"><br>
    <li><label for="q1">Which bedroom would you choose?</label></li><br>
    <input type="radio" id="softgirl_room" name="bedroom-ans" value="softgirl room">
    <img src="softgirl.jpg" alt="Option 1">
    <input type="radio" id="goth_room" name="bedroom-ans" value="goth room">
    <img src="goth.jpg" alt="Option 2">
    <input type="radio" id="normcore room" name="bedroom-ans" value="normcore room">
    <img src="normcore.jpg" alt="Option 3">   
    <input type="radio" id="vintage room" name="bedroom-ans" value="vintage room">
    <img src="vintage.jpg" alt="Option 4"><br>    
    <li><label for="q2">What breakfast would you want to eat?</label></li><br>
    <input type="radio" id="softgirl breakfast" name="breakfast" value="softgirl breakfast">
    <img src="softbreak.jpg" alt="Option 1">
    <input type="radio" id="goth breakfast" name="breakfast" value="goth breakfast">
    <img src="gothbreak.jpg" alt="Option 2">
    <input type="radio" id="normcore breakfast" name="breakfast" value="normcore breakfast">
    <img src="normbreak.jpg" alt="Option 3">   
    <input type="radio" id="vintage breakfast" name="breakfast" value="vintage breakfast">
    <img src="vinbreak.jpg" alt="Option 4"><br>  
    <li> <label for = "q3">What type of clothes would you wear?</label></li><br>
    <input type="radio" id="softgirl clothes" name="clothes" value="softgirl clothes">
    <img src="softcloth.jpg" alt="Option 1">
    <input type="radio" id="goth clothes" name="clothes" value="goth clothes">
    <img src="gothcloth.jpg" alt="Option 2">
    <input type="radio" id="normcore clothes" name="clothes" value="normcore clothes">
    <img src="normcloth.jpg" alt="Option 3">   
    <input type="radio" id="vintage clothes" name="clothes" value="vintage clothes">
    <img src="vincloth.jpg" alt="Option 4"><br> 
    <li> <label for = "q4">How do your friends describe you?</label></li><br>
    <select id="trait" name="traits">
    <option value="soft traits">Sweet and calm</option>
    <option value="goth traits">Moody but also chill</option>
    <option value="normcore traits">Organized and helpful</option>
    <option value="vintage traits">Goofy and funny</option>
    </select><br>
    <li><label for = "q5">What type of house would you want?</label></li><br>
    <input type="radio" id="softgirl house" name="house" value="softgirl house">
    <img src="softhouse.jpg" alt="Option 1">
    <input type="radio" id="goth house" name="house" value="goth house">
    <img src="gothouse.jpg" alt="Option 2">
    <input type="radio" id="normcore house" name="house" value="normcore house">
    <img src="normhouse.jpg" alt="Option 3">   
    <input type="radio" id="vintage house" name="house" value="vintage house">
    <img src="vinhouse.jpg" alt="Option 4"><br>     
    <li><label for = "q6">What type of music do you like?</label></li><br>
    <input type="radio" id="softgirl music" name="music" value="softgirl music">
    <img src="softmusic.jpg" alt="Option 1">
    <input type="radio" id="goth music" name="music" value="goth music">
    <img src="gothmusic.jpg" alt="Option 2">
    <input type="radio" id="normcore music" name="music" value="normcore music">
    <img src="normmusic.jpg" alt="Option 3">   
    <input type="radio" id="vintage music" name="music" value="vintage music">
    <img src="vinmusic.jpg" alt="Option 4"><br>    
    <li><label for = "q7">What do you like to do in your free time?</label></li><br>
    <input type="radio" id="softgirl things" name="thing" value="softgirl things">
    <img src="softthing.jpg" alt="Option 1">
    <input type="radio" id="goth things" name="thing" value="goth things">
    <img src="goththing.jpg" alt="Option 2">
    <input type="radio" id="normcore things" name="thing" value="normcore things">
    <img src="normthing.jpg" alt="Option 3">   
    <input type="radio" id="vintage things" name="thing" value="vintage things">
    <img src="vinthing.jpg" alt="Option 4"><br>  
    <li><label for = "q7">Which drink would you choose?</label></li><br>
    <input type="radio" id="softgirl drink" name="drink" value="softgirl drink">
    <img src="softdrink.jpg" alt="Option 1">
    <input type="radio" id="goth drink" name="drink" value="goth drink">
    <img src="gothdrink.jpg" alt="Option 2">
    <input type="radio" id="normcore drink" name="drink" value="normcore drink">
    <img src="normdrink.jpg" alt="Option 3">   
    <input type="radio" id="vintage drink" name="drink" value="vintage drink">
    <img src="vindrink.jpg" alt="Option 4"><br>  
    <li><label for = "q8">If you could would you...</label></li><br>
    <select id="choices" name="choices">
    <option value="softgirl choice ">Star in a romcom</option>
    <option value="goth choice">Move to a far away country</option>
    <option value="normcore choice">Become the president</option>
    <option value="vintage choice">Go back in time</option>
    </select><br>
    <li><label for = "q9">What job would you choose?</label></li><br>
    <input type="radio" id="softgirl job" name="job" value="softgirl job">
    <img src="softjob.jpg" alt="Option 1">
    <input type="radio" id="goth job" name="job" value="goth job">
    <img src="gothjob.jpg" alt="Option 2">
    <input type="radio" id="normcore job" name="job" value="normcore job">
    <img src="normjob.jpg" alt="Option 3">   
    <input type="radio" id="vintage job" name="job" value="vintagejob">
    <img src="vinjob.jpg" alt="Option 4"><br>  
    <li><label for = "q10">What would you want to do with your friends?</label></li><br>
    <input type="radio" id="softgirl friends" name="friends" value="softgirl friends">
    <img src="softfriends.jpg" alt="Option 1">
    <input type="radio" id="goth friends" name="friends" value="goth friends">
    <img src="gothfriends.jpg" alt="Option 2">
    <input type="radio" id="normcore friends" name="friends" value="normcore friends">
    <img src="normfriends.jpg" alt="Option 3">   
    <input type="radio" id="vintage friends" name="friends" value="vintage friends">
    <img src="vinfriends.jpg" alt="Option 4"><br>  
    <input type="submit" value="Submit">
</form>
</div>

 </body>
 </html>