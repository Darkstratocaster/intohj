<?php include "menu.php"; ?>
	<h2>Post</h2>
	<p>
		This is the Post.
		<form class="" action="show_post.php" method="post">
			<label for="en">Etunimi</label> <br>
			<input type="text" id="en" name="en" value="" placeholder="etunimi" required> <br>
			<label for="sn">Sukunimi</label> <br>
			<input type="text" id="sn" name="sn" value=""placeholder="sukunimi"> <br>
			<br>
			<select class="" name="kieli">
				<option value="Suomi">Suomi</option>
				<option value="2">Ruotsi</option>
				<option value="nor">Norja</option>
			</select>
			<br>
			<textarea name="name" rows="8" cols="80"></textarea>
			<br>
			<input type="radio" name="gender" value="male"> Male <br>
			<input type="radio" name="gender" value="female"> Female <br>
			<input type="radio" name="gender" value="other"> Other <br>

			<br>
			<input type="checkbox" name="vehicle1" value="Bike"> I have a bike<br>
			<input type="checkbox" name="vehicle2" value="Car"> I have a car<br>
			<input type="checkbox" name="vehicle3" value="Boat" checked> I have a boat <br>
			<input type="date" name="pvm" value="">
			<br>
			<label for="">Syntymävuosi</label> <br>
			<input type="number" name="" value=""min=1900>
			<br>
			<br>
			<input type="submit" name="" value="Save">
		</form>
	</p>
<?php include "footer.php"; ?>
