<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO ruth_sunny_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', now());";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM ruth_sunny_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "DON'T CALL ME A POET";
$date = "12/25/2021";
$author = "Ruth Sunny";
$content = "
 
Don't call me a poet <br>
Cause I've saved many lives indeed<br>
In my poem I've given the recipe to suicide and frustrating disease<br><br>

Don't call me a poet<br>
My motivating words you read<br>
Have made you pick the broomstick of life and you're on the path to succeed
<br><br>
Don't call me a poet<br>
I've written in the ancient walls<br>
And my books are still your eyes feed<br><br>

Don't call me a poet<br>
My words can define your feeling and thoughts<br>
And also give sense to your mind<br><br>

Don't call me a poet <br>
I've done many surgeries<br>
In the theatre of fear and anger<br><br>

Don't call me a poet<br>
I've mend many holes and broken homes<br>
Healing heart to letting go<br><br>

Don't call me a poet<br>
In my little scores I've implemented laws<br>
Binding nature and life tour<br><br>

Don't call me a poet<br>
I've taught you how to manage nature<br>
And how to meet up to all its demands<br>
<br>
Don't call me a poet<br>
I've given you the patterns of letters<br>
And also the way to write<br><br>

Don't call me a poet<br>
I've made white paper colourful and beautiful<br>
With words I've drawn many mysteries<br><br>

Don't call me a poet<br>
My words are sermons<br>
Preaching Christ and teaching you His standards
<br><br>
Don't call me a poet<br>
I've curse crime<br>
And imprisoned injustice<br><br>

Don't call me a poet<br>
I'm a messenger sent to all fields<br>
I'm an angel to all who will yield<br><br>

Don't call me a poet<br>
Don't call me a poet I repeat<br>
Take a look around<br>
I'm more than the poet you sing<br>
<br>
#Ruthsunday<br>
#Lighthousediscipleshipcenter<br><br>
";

include "blog-temp.php"; 

