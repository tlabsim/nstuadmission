<!DOCTYPE html>

<html lang="en">
	<head>
		<title>HELP | NSTU Admission 2015-16</title>
		
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<meta name="description" content="HELP for Admission Test 2015-16, Noakhali Science and Technology University"/>
		<meta name="author" content=""/>
		
		<!--<link href="../css/bootstrap.min.css" rel="stylesheet"/>-->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" type="text/css" />
		<link href="../css/theme.css" rel="stylesheet"/>
		<link href="../css/main.css" rel="stylesheet"/>
		<link href="../css/custom.css" rel="stylesheet"/>
		
	</head>
	
	<body>
		<?php
			$menu_title = array('home'=>'Admission 2015-16', 'faqs'=>'Frequently asked questions', 'venues'=>'Exam venues', 'volunteers'=>'Volunteer list', 'res'=>'Residence information', 'contacts'=>'Important contacts');
			
			$current_menu = "home";
			if(isset($_REQUEST["p"]))
			{
				$current_menu =  $_REQUEST["p"];
			}
			
			if (!array_key_exists($current_menu, $menu_title)) 
			{
				$current_menu = "home";
			}
		?>
	
		<div id="main">
			<?php include('layouts/header.php'); ?>
			
			<div class="container">
				<div id="contents" class="row relative" >
					<div id="menus">
						<?php include('layouts/menus.php'); ?>
					</div>
					<div id="page-content">
						<?php include('layouts/pages.php'); ?>
					</div>
				</div>	
				<div class="row">
					<div class="col-md-12">
						<div id="footer">
							<p>NSTU &copy; 2015 | Developed by Yasin Kabir</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</body>
</html>