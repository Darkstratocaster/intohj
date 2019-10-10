<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
header('Location:not_logged.php');
}
 ?>
<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
	<h2>Database</h2>
	<p>
		This is the Database.
	</p>
	<h2>Customers</h2>
	<?php
		$customers=$db->query('SELECT * FROM customers');
		foreach ($customers as $row) {
			echo $row['fname'].' '.$row['lname'].'<br>';
		}
	 ?>
	 <h2>Insert Customer</h2>
	 <form class="" action="add_customer.php" method="post">
		 <input type="number" name="id" value="" placeholder="id_customers"> <br>
		 <input type="text" name="en" value="" placeholder="Etunimi"> <br>
		 <input type="text" name="sn" value="" placeholder="Sukunimi"> <br>
	 	<br>
		<input type="submit" name="" value="Add">
	 </form>

	 <h2>Edit and Delete</h2>
	 <p>
    <table border="1">
			<thead>
				<tr>
					<th>id</th> <th>Etunimi</th> <th>Sukunimi</th> <th>Muokkaa</th> <th>Poista</th>
				</tr>
				<tbody>
					<?php
				 $customers=$db->query('SELECT * FROM customers');
				 foreach ($customers as $row) {
					 echo '<tr>';
					 echo '<td>'.$row['id_customers'].'</td>';
					 echo '<td>'.$row['fname'].'</td>';
					 echo '<td>'.$row['lname'].'</td>';
					 echo '<td><a href="edit_customer.php?id='.$row['id_customers'].'">Muokkaa</a></td>';
					 echo '<td><a href="delete_customer.php?id='.$row['id_customers'].'">Poista</a></td>';
					 echo '</tr>';
				   }
					 ?>
				</tbody>
			</thead>
    </table>

	 </p>
<?php include "footer.php"; ?>
