<?php 


// koneksi ke database
$conn = mysqli_connect("localhost","root", "","WaysGram" );

// ambildata
function query ($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] =$row;
	}
	return $rows;

}


function insertPost($post)
{
	global $conn;
	$query = "INSERT INTO `WaysGram`.`post_tb` ( `title`, `content`, `image`, `id_user`) VALUES ('{$post['title']}', '{$post['content']}', '{$post['image']}', 1);";

	mysqli_query($conn, $query);
}

 ?>