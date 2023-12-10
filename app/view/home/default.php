<?php
session_start();
?>

<style>
@import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200');

body  {
    background-image: url('https://static.pexels.com/photos/414171/pexels-photo-414171.jpeg');
  background-size:cover;
        -webkit-animation: slidein 100s;
        animation: slidein 100s;

        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;

        -webkit-animation-direction: alternate;
        animation-direction: alternate;              
}

@-webkit-keyframes slidein {
from {background-position: top; background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}
}

@keyframes slidein {
from {background-position: top;background-size:3000px; }
to {background-position: -100px 0px;background-size:2750px;}

}



.center
{
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  margin: auto;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: rgba(75, 75, 250, 0.3);
  border-radius: 3px;
}
.center h1{
  text-align:center;
  color:white;
  font-family: 'Source Code Pro', monospace;
  text-transform:uppercase;
font-weight: bold;
}
</style>

<div class="center">
 <div class="container" >
	<h1>This is my Home Page.</h1>
	
	<p>I'm <?php echo $data['name']; ?> from Manado.</p>
	
	<p>I'm <?php echo $data['age']; ?> years old this year.</p>
	<?php
		echo "<b>User Session Information: </b><br>";
		echo "<b>Session Role: </b>".$_SESSION['user-role']."<br>";
		echo "<b>Session User Name: </b>".$_SESSION['user-name']."<br>";
		echo "<b>Session Email: </b>".$_SESSION['user-email']."<br><br>";
	?>
	<img src="<?php echo APP_PATH; ?>/img/griffin.jpg" alt="test image" width="200" class="rounded-circle shadow">
</div>
</div>



