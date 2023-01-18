


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Bill.php</title>
</head>


<style type="text/css">

</style>


<body>
<h1>NYEWASCO WATER COMPANY</h1>
<P>Bringing Water To You</P>
<div class="container group">
		<div class="grid-1-4">
            <img src="images/water.png" alt="water-logo" height="50px">
			<h2>NYEWASCO</h2>
            <hr>
			<h3><span class="uppercase">For 0-20 units - Ksh. 35 per unit</span></h3>
			
		</div>

        <div class="grid-1-4">
            <img src="images/water.png" alt="water-logo" height="50px">
			<h2>NYEWASCO</h2>
            <hr>


			<h3><span class="uppercase">For 21-49 units - Ksh. 40 per unit</span></h3>
			
		</div>

        <div class="grid-1-4">
            <img src="images/water.png" alt="water-logo" height="50px">
			<h2>NYEWASCO</h2>
            <hr>
			<h3><span class="uppercase">For 50-100 units - Ksh. 45 per unit</span></h3>
			
		</div>

        <div class="grid-1-4">
            <img src="images/water.png" alt="water-logo" height="50px">
			<h2>NYEWASCO</h2>
            <hr>
			<h3><span class="uppercase">For units above 100 - Ksh. 50 per unit</span></h3>
			
		</div>
		
	</div>

    <form method="post" action="index.php">
  <div class="inputs">
    <div class="input-holder">
        <label>USER</label>
        Name: <input type="text" name="client-name" placeholder="Input user-name"><br>
    </div>
    <div class="input-holder">
        <label>UNITS</label>
        Units: <input type="number" name="units" placeholder="Input the units spent"><br>
    </div>
</div>
    <button class="calculate" type="submit" value="CALCULATE">CALCULATE</button>   
    </form> 
    <?php



    $name= $_POST['client-name'];
     $units =$_POST['units'];
   

    if($units > 0 && $units <= 20){
        $amount = $units * 35;
       


    }elseif($units >20 && $units <= 49){

        $amount = $units * 40;
        
    }elseif ($units > 49 && $units <= 100){
        $amount = $units * 45;
        

    }else{
        $amount = $units * 50;

    }


    
    echo "<p class='message'>".$name." has a total bill amount of  ksh".$amount."</p><br>";

     


?>
</body>
</html>

