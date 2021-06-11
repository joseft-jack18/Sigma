<?php

    //var_dump ($_FILES);
	$db_host="localhost";
	$db_name="test_excel_mysql";
	$db_user="root";
	$db_pass="";

    $file = $_POST['file'];

    include 'simplexlsx.class.php';
    $xlsx = new SimpleXLSX($file);
    try {
       $conn = new PDO( "mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }
    $stmt = $conn->prepare( "INSERT INTO countries_and_population (rank, country, population, date_of_estimate, powp) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam( 1, $rank);
    $stmt->bindParam( 2, $country);
    $stmt->bindParam( 3, $population);
    $stmt->bindParam( 4, $date_of_estimate);
    $stmt->bindParam( 5, $powp);
    foreach ($xlsx->rows() as $fields)
    {
        $rank = $fields[0];
        $country = $fields[1];
        $population = $fields[2];
        $date_of_estimate = $fields[3];
        $powp = $fields[4];
        $stmt->execute();
    }

    echo "datos subidos";
?>