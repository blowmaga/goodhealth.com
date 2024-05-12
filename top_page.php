<!DOCTYPE html>
<html>
<head>
	<style>
		<?php
			include("styles.css");
		?>
	</style>

	<meta charset="utf-8">

	<link rel="icon" type="image/png" href="images/fdfdfdf.jpg">
	
	<title>Основы Здорового Образ Жизни</title>
</head>

<body class="background">
	
	<div class="headline">


		<div style="display: flex; justify-content: right; padding-right: 20px; ">

			<div style="display:flex; align-items: center;">

				<?php
					if($page == "randomevent")
					{
						print "случайное упражнение";
					}
					else
					{
						print "<a class='link1' href='randomevent.php'>случайное упражнение</a>";
					}
				?>

				

			</div>



			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 


			<div style="display:flex; align-items: center;">

				<?php
					if($page == "presentation")
					{
						print "питание";
					}
					else
					{
						print "<a class='link1' href='presentation.php'>питание</a>";
					}
				?>
				

			</div>


			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

			<div style="display:flex; align-items: center;">

				<?php
					if($page == "son")
					{
						print "сон";
					}
					else
					{
						print "<a class='link1' href='son.php'>сон</a>";
					}
				?>
				

			</div>


			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

			<div style="display:flex; align-items: center;">

				<?php
					if($page == "fiz")
					{
						print "физическая активность";
					}
					else
					{
						print "<a class='link1' href='fiz.php'>физическая активность</a>";
					}
				?>
				

			</div>


			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;


				


			<div style="display:flex; align-content: center;">
					<?php
					if($page == "index")
					{
						
					}
					else
					{
						print "<a href='index.php'>";
					}
				?>
				

					<img style="border-radius:10px; height: 100px; width: 100px;" src="images/png-transparent-smoothie-apple-large-green-apple-green-apple-fruit-natural-foods-food-granny-smith.png" >
				</a> 

				</div>


		</div>
		
		

	</div>

	



		<div style="text-align:center;">
			
			<div class="listek2">