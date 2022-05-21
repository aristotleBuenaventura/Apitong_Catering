<?php

function setComments($conn) {
		if(isset($_POST['commentSubmit'])) {
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "INSERT INTO commets (uid, date, message) VALUES ('$uid', '$date', '$message')";
			$result = $conn->query($sql);
	}
}

function getComments($conn) {
	$sql = "SELECT * FROM commets";
	$result = $conn->query($sql);
	while ($row = $result->fetch_assoc()) {
		echo "<div class='commentbox'><p>";
			echo $row['uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['message']);
		echo "</p>
		<form class='delete-form' method='POST' action='".deleteComments($conn)."'>
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button name='commentDelete' class='cmtbtn2'>Delete</button>
		</form>

		<form class='edit-form' method='POST' action='../editForum/editcomment.php'>
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<input type='hidden' name='uid' value='".$row['uid']."'>
			<input type='hidden' name='date' value='".$row['date']."'>
			<input type='hidden' name='message' value='".$row['message']."'>
			<button>Edit</button>
		</form>
	</div>";
	}
}



function editComments($conn) {
		if(isset($_POST['commentSubmit'])) {
			$cid = $_POST['cid'];
			$uid = $_POST['uid'];
			$date = $_POST['date'];
			$message = $_POST['message'];

			$sql = "UPDATE commets SET message='$message' WHERE cid='$cid'";
			$result = $conn->query($sql);
			header("Location: ../Forum/Forum.php");

	}
}

function deleteComments($conn) {
		if(isset($_POST['commentDelete'])) {
			$cid = $_POST['cid'];

			$sql = "DELETE FROM commets WHERE cid='$cid'";
			$result = $conn->query($sql);
			header("Location: Forum.php");

	}
}