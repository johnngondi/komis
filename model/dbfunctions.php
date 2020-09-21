<?php
session_start();
require '_inc/config.php';

function dbconnect(){

	try {
		//connection string
		$conn = new PDO('mysql:host=localhost;dbname=komisdb',DB_USERNAME,DB_PASSWORD);
		//error attribute mode
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		return $conn;

	} catch (Exception $e) {
		echo $e->getMessage();
		return false;
	}
}


function fetchdata($conn,$sql)
{
	try {
		//Creta e the query to be executed
		$stmt = $conn->prepare($sql);
		//Execute the query
		$stmt->execute();
		//Fetch all cojntents
		$results = $stmt->fetchAll();

		if ($results) {
			return $results;

		}else {
			
			return false;
		}

	} catch (PDOException $e) {
		
		echo $e->getMessage();
		return false;
	} 
}


function adddata($conn,$sql){
	//Creta e the query to be executed
	try{
		$stmt = $conn->prepare($sql);
		//Execute the query and return the resuls
		 $stmt->execute();

		 return true;
	} catch(PDOException $e){
		
		echo $e->getMessage();
		return false;
	}
}

function deletedata($conn,$sql)
{
	try {
   
	    // use exec() because no results are returned
	    $conn->exec($sql);

	    return true;

    } catch(PDOException $e){

		echo $e->getMessage();
    	return false;;
    }
}

function getnumberofrows($conn, $sql){
	try {
		$result = $conn->prepare($sql);
		$result -> execute();
		$numberofrows = $result->fetchColumn();
		
		return $numberofrows;
			
	} catch (PDOException $e) {

		echo $e->getMessage();
		return false;
	}
}

?>