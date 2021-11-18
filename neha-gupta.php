<?php 
include "config.php";
if(isset($_POST["submit"])) {
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$comment = $_POST["comment"];
	$date = $_POST["date"];

	$sql_1 = "INSERT INTO neha_gupta_comments (first_name, last_name, comment, date) VALUES ('$first_name', '$last_name', '$comment', '$date');";
	$query = mysqli_query($conn, $sql_1); 
}


$sql = "SELECT * FROM neha_gupta_comments";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
 
$title = "2 EASY WAYS HOW TO RUN WINDOWS ON MAC";
$date = "November 2021";
$author = "Neha Gupta";
$content = " Mac has now added an advantage that was much awaited. It is now totally possible to use Windows and other operating systems on your Mac. Even if you are a Mac devotee, there are some times when you will have a need or want for Windows sometime and then you will need to know how to run Windows on Mac. 

<br><br>
It is still feasible to run Windows on a Mac, but this will only function on Intel-based Macs for the time being. Although you can run Windows on a Mac with M1 Chip, that should be the ARM version of Windows.

<br><br>
We'll show you how to install Windows on Mac in this article using two different ways.

<br><br>
How to run Windows on Mac using Boot Camp
<br><br>
If you need to learn how to run Windows on Mac, you can use Boot Camp. One of the best things about using Boot Camp to run Windows on Mac is that Apple provides a free tool called Boot Camp Assistant that assists you in installing Windows on your Mac.

<br><br>
The Assistant can be found in the utility folder of your Mac's main Applications folder, but there are a few things you'll need to run Windows in Boot Camp before you can launch the Assistant.

<br><br>
Step1: Open Boot Camp Assistant 
When you initially launch Boot Camp Assistant, it will present you with a number of alternatives. The first choice is to choose an ISO image to work with. Choose the one you generated or downloaded by clicking the Choose button. This will copy your Windows ISO file to your USB flash drive, allowing you to install Windows.

<br><br>
Step 2: Get the appropriate driver software
In this step of how to run Windows on Mac using Boot Camp, Boot Camp Assistant may inform you that it will download Windows driver software to the USB memory stick. This process will only be able to download drivers for Windows 10 and Windows 8.1. If you wish to install any other version, let’s say, Windows 7, go back to compatibility tables by Apple and find the driver software for your Mac, then follow the instructions to copy the drivers to your USB memory stick.

<br><br>
Step 3: Create a partition on your hard drive
Boot Camp will need to divide your Mac's hard drive into two separate areas, known as partitions, to make room for Windows. This is depicted at the bottom of the window, with the standard macOS on the left and the suggested Windows version on the right.

<br><br>
By default, Boot Camp Assistant creates a small Windows partition of only 40GB in size, but you may alter the size of the two partitions using the slider control (the dot between the partitions).
If your Mac has more than one internal hard disc or SSD, you can dedicate one of them to Windows completely.
To begin the procedure of how to run Windows on Mac, click the Install button at the bottom of the window when you're finished.

<br><br>
Step 4: Download and install Windows
Boot Camp will shut down your Mac and begin the Windows installer program from the USB memory stick once you've partitioned your Mac drive. To install Windows, simply follow the steps. You'll be prompted to install the additional Boot Camp drivers from the memory stick as soon as Windows starts up.

<br><br>
Step 5: Start Windows
Once that's done, you can simply switch between macOS and Windows by pressing Alt on your keyboard when the Mac starts up. As Mac starts up, the two partitions with the macOS and the Windows appear on the screen. You can go ahead and select the operating system of your choice to achieve how to install Windows on Mac.

<br><br>
How to run Windows on Mac using Virtual Box
Using VirtualBox, you can install and learn how to run Windows on Mac for free. Because this installs Windows on a virtual machine on top of current Mac system software, it's far easier to use than setting Boot Camp for a native Windows experience.

<br><br>
Step 1: Install VirtualBox
In this method of how to install Windows on Mac, a large green 'Download VirtualBox' button is present on the VirtualBox website. Simply click that or go to the VirtualBox downloads page to find the correct VirtualBox version for your machine. Now click the MacOsX link. 

<br><br>
Step 2: Download and install Windows 10.
You can understand how to run Windows on Mac, especially Windows 10 on your virtual computer in a few different methods, but this is the simplest one. It was created and provided by Microsoft particularly for the purpose of testing. If you wish to run Windows 10, make sure you select 'MSEdge on Win10 (x64) Stable 1809' under 'Select platform' and 'VirtualBox' under 'Select platform.' Then select 'Download.zip' from the drop-down menu.

<br><br>
Step 3: Download and install VirtualBox as well as the extension pack.
VirtualBox is installed in your Applications area just like any other program or application. You can, of course, modify the location if you choose. Then simply follow the installer's instructions.

<br><br>
Next, double-click the VirtualBox icon in your Applications folder (or in the location you set for VirtualBox) to open it.

<br><br>
You can use the same method to open and install your extension pack as you did for the VirtualBox. You'll notice a popup window as you start the installation that tells you what you're installing. Select 'Install'.

<br><br>
Step 4: Install your operating system.
Understanding, how to run Windows on Mac, the next step is to create a virtual machine after you've installed VirtualBox. To do so, you'll need an operating system. Now the Windows is set up, you have to click 'Import'. You can import it as-is and then change the settings whenever you want. Import whatever you want.

<br><br>
Now select 'New' from the VirtualBox menu. This will launch an installation wizard that will walk you through the process.
Click 'Next' after selecting the type of operating system (Microsoft Windows) and version (Windows 10 64 bit). You must now specify the quantity of RAM.

<br><br>
Select “Continue”.

<br><br>
The next step in learning how to run Windows on Mac is that you need to make a virtual hard disc. Choose an option and click 'Create,' then follow the steps and click 'Create' once more to build a new virtual machine. Your new machine will now appear on the left-hand side of your VirtualBox window.

<br><br>
It's time to begin installing the operating system! The installation wizard will close once your virtual machine has been configured, and you will be returned to the VirtualBox main window. On the left, double-click your new machine (or make sure it's selected and then click 'Start').

<br><br>
Click the folder icon to explore your file if you're installing from an image file. Click 'Start' after selecting the file.

<br><br>
Now the Windows installation will start and once it is done, you are all set and you have learned how to run Windows on Mac!

<br><br>
Takeaway
<br><br>
All of these methods of how to install Windows on Mac clearly necessitate more effort than simply installing a Windows program on a PC. If you own a Mac, you should try to use Mac applications as much as possible. Windows apps will be less integrated and less functional.

<br><br>
Whether you're using a Virtual Machine or running Windows in Boot Camp, you may need to purchase a Windows license for your Mac to obtain the best compatibility. After learning how to run Windows on Mac, all you need to do is follow the instructions carefully and in a sequence and soon you will be able to avail yourself of the benefits of Windows on your Mac - Living the best of two worlds.  

<br><br>
";

include "blog-temp.php"; 

