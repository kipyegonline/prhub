<!--grad-->
<form method="post" class="form" id='grad'>
	<h3 class='text-center bg-danger my-2 text-white'>GRADUATE </h3>
	   <ol class='errors'><?php echo $userError;?> </ol>
	  <p class='error'> </p>
	  <label>1. Name:</label>
	<input type="text" class='form-control' placeholder='Enter first name,second name' name="username">

	  <label>2. Email address:</label>
	<input type="email" class='form-control'name="email" placeholder='Enter your email address' value="<?php echo $email;?>">
	<label>3. University/College:</label>
	<input type="text" class='form-control'name="univ" placeholder='Enter your university' >
	<label>4. Year of Study:</label>
	<input type="text"class='form-control' placeholder='Enter your year of study' name="year">

	<input type="submit" class='btn btn-primary' name="grad" value="JOIN">
		
	</form>
	<!--Company-->
	<form method="post" class="form" id='comp'>
	<h3 class='text-center bg-danger my-2 text-white'>Company </h3>
	   <ol class='errors'><?php echo $userError;?> </ol>
	  
	  <label>1. Name:</label>
	<input type="text" class='form-control' placeholder='Enter first name,second name' name="username">

	  <label>2. Email address:</label>
	<input type="email" class='form-control'name="email" placeholder='Enter your email address' value="<?php echo $email;?>">
	<label>3. University/College:</label>
	<input type="text" class='form-control'name="univ" placeholder='Enter your university' >
	<label>4. Year of Study:</label>
	<input type="text"class='form-control' placeholder='Enter your year of study' name="year">

	<input type="submit" class='btn btn-primary' name="comp" value="JOIN">
		
	</form>
	<!--pros-->
	<form method="post" class="form" id='pro'>
	<h3 class='text-center bg-danger my-2 text-white'>PR practitioner </h3>
	   <ol class='errors'><?php echo $userError;?> </ol>
	  <p class='error'> </p>
	  <label>1. Name:</label>
	<input type="text" class='form-control' placeholder='Enter first name,second name' name="username">

	  <label>2. Email address:</label>
	<input type="email" class='form-control'name="email" placeholder='Enter your email address' value="<?php echo $email;?>">
	<label>3. University/College:</label>
	<input type="text" class='form-control'name="univ" placeholder='Enter your university' >
	<label>4. Year of Study:</label>
	<input type="text"class='form-control' placeholder='Enter your year of study' name="year">

	<input type="submit" class='btn btn-primary' name="pro" value="JOIN">
		
	</form>
	<!--grad-->
	<form method="post" class="form" id='student'>
	<h3 class='text-center bg-danger my-2 text-white'>STUDENTS </h3>
	   <ol class='errors'><?php echo $userError;?> </ol>
	  <p class='error'> </p>
	  <label>1. Name:</label>
	<input type="text" class='form-control' placeholder='Enter first name,second name' name="username">

	  <label>2. Email address:</label>
	<input type="email" class='form-control'name="email" placeholder='Enter your email address' value="<?php echo $email;?>">
	<label>3. University/College:</label>
	<input type="text" class='form-control'name="univ" placeholder='Enter your university' >
	<label>4. Year of Study:</label>
	<input type="text"class='form-control' placeholder='Enter your year of study' name="year">

	<input type="submit" class='btn btn-primary' name="student" value="JOIN">
		
	</form>