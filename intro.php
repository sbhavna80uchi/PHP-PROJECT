<html>
<head><title>STUDY DUNIYA</title>
<style>
#wrap	{
	width: 100%; 
	height: 50px; 
	margin: 0; 
	z-index: 99; 
	position: relative; 
	background-color:ORANGE;}
	.navbar	{
	height: 50px;
        padding: 0;
	margin: 0;
	position: absolute; 
	border-right: 1px solid #54879d; }
	.navbar li 	{
			height: auto;
			width: 150px;  /* Each menu item is 150px wide */
			float: left;  /* This lines up the menu items horizontally */
			text-align: center;  /* All text is placed in the center of the box */
			list-style: none;  /* Removes the default styling (bullets) for the list */
			font: normal bold 12px/1.2em Arial, Verdana, Helvetica;  
			padding: 0;
			margin: 0;
			background-color: ORANGE;
                        }
                        .navbar a	{							
		padding: 18px 0;  /* Adds a padding on the top and bottom so the text appears centered vertically */
		border-left: 1px solid #54879d; /* Creates a border in a slightly lighter shade of blue than the background.  Combined with the right border, this creates a nice effect. */
		border-right: 1px solid #1f5065; /* Creates a border in a slightly darker shade of blue than the background.  Combined with the left border, this creates a nice effect. */
		text-decoration: none;  /* Removes the default hyperlink styling. */
		color: white; /* Text color is white */
		display: block;
		}

.navbar li ul 	{
		display: none;  /* Hides the drop-down menu */
		height: auto;									
		margin: 0; /* Aligns drop-down box underneath the menu item */
		padding: 0; /* Aligns drop-down box underneath the menu item */			
		}				

.navbar li:hover ul 	{
                        display: block; /* Displays the drop-down box when the menu item is hovered over */
                        }
 .navbar li ul li {background-color: GREEN;} 
 .navbar li ul li a 	{
		border-left: 1px solid #1f5065; 
		border-right: 1px solid #1f5065; 
		border-top: 1px solid #74a3b7; 
		border-bottom: 1px solid #1f5065; 
		}
				
.navbar li ul li a:hover	{background-color: #366b82;}
</style>
</head>
<body style="background:PURPLE">
<div id="wrap" style="background:purple;height:50px;width:50px">
		  <ul class="navbar">
			
			 <li><a href="#">WHEAT</a>
				<ul>
				   <li><a href="login.php">VARIETIES</a></li>
				   <li><a href="register.php">PURCHASE NOW</a></li>
				   
				</ul>         
			  <li><a href="#">WHEAT</a>
				<ul>
				   <li><a href="login.php">VARIETIES</a></li>
				   <li><a href="register.php">PURCHASE NOW</a></li>
				   
				</ul>    
          
 <li><a href="#">WHEAT</a>
				<ul>
				   <li><a href="login.php">VARIETIES</a></li>
				   <li><a href="register.php">PURCHASE NOW</a></li>
				   
				</ul>    
				 <li><a href="#">WHEAT</a>
				<ul>
				   <li><a href="login.php">VARIETIES</a></li>
				   <li><a href="register.php">PURCHASE NOW</a></li>
				   
				</ul>    
			</ul>

</div>
</html>