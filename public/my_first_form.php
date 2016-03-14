<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>

	<body>

		<h3>GET</h3>
			<?php var_dump($_GET);?>

		<h3>POST</h3>
			<?php var_dump($_POST);?>

		<div id="wrapper">

			<form method="POST" action="/my_first_form.php">
				<h2>User Login</h2>
				 	<p>
				 	    <label for="username"></label>
				 	    <input id="username" name="username" type="text" placeholder="Enter your Username">
				 	</p>
				 	<p>
				 	    <label for="password"></label>
				 	    <input id="username" name="password" type="password" placeholder="Enter your Password">
				 	</p>
				 	<p>
				 		<input type="submit" value="Login">
				 	    <button type="submit">Login Button</button>
				 	</p>
			</form>

			<form method="POST" action="/my_first_form.php">
				
				<h2>Compose an Email</h2>

					<label for="checkbox">Send a copy to Sent Box?</label>
					<input type="checkbox" id="checkbox" name="checkbox" value="yes" checked>
						
					<p>
						<label for="To">To:</label>
						<input id="To" name="To" type="text">
					</p>
	
					<p>
						<label for="From">From:</label>
						<input id="From" name="From" type="text">
					</p>
					<p>
						<label for="Subject">Subject:</label>
						<input id="Subject" name="Subject" type="text">
					</p>
	
					<p>
						<label for="body"> Type Email in Box: </label><br>
						<textarea id="email_body" name="email body" rows="5" cols="40" placeholder="Enter Text Here"></textarea>
					</p>
	
					<button type="Submit">Send</button>

			</form>

			<form method="POST" action="/my_first_form.php">
				
				<h2>Multiple Choice Test</h2>

					<p>
						What is my favorite drink?
					</p>
						<p>
						  <label>
						  	<input type="radio" name="drink" value="Big Red">
						  	Big Red
						  </label>
						  <label>
						  	<input type="radio" name="drink" value="Coca Cola">
						  	Coca Cola
						  </label>
						  <label>
						  	<input type="radio" name="drink" value="Dr. Pepper">
						  	Dr. Pepper
						  </label>
						  <label>
						  	<input type="radio" name="drink" value="Sprite">
						  	Sprite
						  </label>
						</p>
	
					<p>
						What car do I drive?
					</p>
                        <p>
						  <label>
						  	<input type="radio" name="drive" value="Challenger">
						  	Challenger
						  </label>
						  <label>
						  	<input type="radio" name="drive" value="Prius">
						  	Prius
						  </label>
						  <label>
						  	<input type="radio" name="drive" value="Corvette">
						  	Corvette
						  </label>
						  <label>
						  	<input type="radio" name="drive" value="Mustang">
						  	Mustang
						  </label>
						</p>

					<p>
						Who was once a President?
					</p>
                        <p>
						  <label for="checkbox">Bill Clinton</label>
						  <input type="checkbox" id="Bill" name="checkbox[]" value="Clinton">
						  <label for="checkbox">Jerry West</label>
						  <input type="checkbox" id="West" name="checkbox[]" value="West">
						  <label for="checkbox">George W. Bush</label>
						  <input type="checkbox" id="Bush" name="checkbox[]" value="Bush">
					   </p>

                    <label for="cars">
                        What make of vehicle(s) have you driven?
                    </label>
                        <p>
                            <select id="cars" name="cars[]" multiple>
                                <option value="Honda">Honda</option>
                                <option value="Toyota">Toyota</option>
                                <option value="Nissan">Nissan</option>
                                <option value="Ford">Ford</option>
                            </select>
                        </p>
				<input type="submit" value="Submit Test">

			</form>

			<form method="POST" action="/my_first_form.php">

				<h2>Select Testing</h2>
                    <p>
					   <label for="Texas:">
					   	Were you born in Texas?
					   </label>
					   	<select id="Texas" name="Texas">
                           <!-- <option disabled>Text here</option> -->
					   		<option value="1">Yes</option>
					   		<option value="0" selected>No</option>
						</select>
					</p>	
				    <input type="submit" value="Submit">
						
			</form>

		</div>

	</body>

</html>

