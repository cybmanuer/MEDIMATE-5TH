<!DOCTYPE html>
<html>
<head>
	<title>Database Records</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}
		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Database Records</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Message</th>
		</tr>
		<?php

    $conn = mysqli_connect("localhost", "root", "",'diagnosis');

			// check connection
			if (mysqli_connect_errno()) {
                echo "Unable to connect to MySQL! ". mysqli_connect_error();
                }
			// fetch data from the database
			$sql = "SELECT * FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>" . $row["name"] . "</td>";
					echo "<td>" . $row["email"] . "</td>";
					echo "<td>" . $row["phone"] . "</td>";
					echo "<td>" . $row["msg"] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "0 results";
			}

			$conn->close();
		?>
	</table>
</body>
</html>
