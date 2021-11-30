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

'ðŸŒ¹ *Broken* ðŸŒ¹<br><br>

My head is burning out<br>
Am lost in thought<br>
Drenched in the dark<br>
Drowning in the ocean of sorrow and pain<br>
How could I mend a broken heart<br>
Wish all this could leave me<br>
But the pain won''t let me be<br>
<br><br>
My head is burning out<br>
 l have a lot disturbing my brain<br>
Who cares to listen to me<br>
Who cares to know how I feel<br>
Who''s ready to carry the burden<br>
<br><br>
My head is burning out who can feel the flame<br>
Who can quench the fire<br>
Who cares to know my burden<br>
My heart is breaking<br>
<br><br>
My head is burning out<br>
Drowning in sorrows<br>
I thought entering the ocean will brighten up my face<br>
Well sometimes you''ve to dive in a problem to find solutions<br>
<br><br>
My head is burning out<br><br>
The more I try to pull myself together<br>
The more my heart ach<br>
The more I try to forget<br>
The more my head picture the pain<br>
<br><br>
My head is burning out<br>
My heart is breaking<br>
Should I hold on<br>
Should I let it go<br>
How can I ever get out of this<br>
I think am loosing it all........<br>
<br><br>
ðŸŒ¹ *Omolade*ðŸŒ¹'
";

include "blog-temp.php"; 

