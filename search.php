<?php
	require_once 'conn.php';
	
	$search = $_GET['term'];
	
	$query = $conn->query("SELECT * FROM `users` WHERE `users` LIKE '%$search%' ORDER BY `users` ASC") or die(mysqli_connect_errno());
	
	$list = array();
	$rows = $query->num_rows;
	
	if($rows > 0){
		while($fetch = $query->fetch_assoc()){
			$data['value'] = $fetch['users']; 
			array_push($list, $data);
		}
	}
	
	echo json_encode($list);
