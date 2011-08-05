PHP script that reverses the iPhone PNG optimalisation by Peperzaken

# INTRODUCTION #

You can use this script to reverse the optimalisation process that Apple uses. It seems to be compatible with all the optimalisations that Apple does. For more info check out our blog post.

# IMPLEMENTING THE SCRIPT #

``

	<?php
	// Include the class
	include 'Peperzaken/Ios/DecodeImage.php';
 
	// Initialize the class an set the source
	$processor = new Peperzaken_Ios_DecodeImage('Icon@2x.png');
 
	// Process the image en write it to this path
	$processor->decode('Icon@2x.regular.png');
	?>

``

We'l be adding more documentation to the code as we build it in to our project.
