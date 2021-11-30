<?php
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO rukayat_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM rukayat_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$title = "Broken";
$date = "30/12/2021";
$author = "Rukayat";
$content = "
<pre>
'ðŸŒ¹ *Broken* ðŸŒ¹

My head is burning out
Am lost in thought
Drenched in the dark
Drowning in the ocean of sorrow and pain
How could I mend a broken heart
Wish all this could leave me
But the pain won''t let me be

My head is burning out
 l have a lot disturbing my brain
Who cares to listen to me
Who cares to know how I feel
Who''s ready to carry the burden

My head is burning out who can feel the flame
Who can quench the fire
Who cares to know my burden
My heart is breaking

My head is burning out
Drowning in sorrows
I thought entering the ocean will brighten up my face
Well sometimes you''ve to dive in a problem to find solutions

My head is burning out
The more I try to pull myself together
The more my heart ach
The more I try to forget
The more my head picture the pain

My head is burning out
My heart is breaking
Should I hold on
Should I let it go
How can I ever get out of this
I think am loosing it all........

ðŸŒ¹ *Omolade*ðŸŒ¹'
</pre>
";

include "blog-temp.php"; 

