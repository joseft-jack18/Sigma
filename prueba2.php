<?php
    require_once "config/conexion.php";
    require_once "class.upload.php";

    if(isset($_FILES["txt_file"])){
	    $up = new Upload($_FILES["txt_file"]);
	    if($up->uploaded){
		    $up->Process("archivos/");
		    if($up->processed){
                /// leer el archivo excel
                require_once 'PHPExcel/Classes/PHPExcel.php';
                $archivo = "archivos/".$up->file_dst_name;
                $inputFileType = PHPExcel_IOFactory::identify($archivo);
                $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($archivo);
                $sheet = $objPHPExcel->getSheet(0); 
                $highestRow = $sheet->getHighestRow(); 
                $highestColumn = $sheet->getHighestColumn();

                for ($row = 2; $row <= $highestRow; $row++){ 
                    $x_no1 = $sheet->getCell("A".$row)->getValue();
                    $x_no2 = $sheet->getCell("B".$row)->getValue();
                    $x_no3 = $sheet->getCell("C".$row)->getValue();
                    $x_no4 = $sheet->getCell("D".$row)->getValue();
                    $x_no5 = $sheet->getCell("E".$row)->getValue();
                    $x_no6 = $sheet->getCell("F".$row)->getValue();
                    $x_no7 = $sheet->getCell("G".$row)->getValue();
                    $x_no8 = $sheet->getCell("H".$row)->getValue();
                    $x_no9 = $sheet->getCell("I".$row)->getValue();
                    $x_no10 = $sheet->getCell("J".$row)->getValue();
                    $x_no11 = $sheet->getCell("K".$row)->getValue();
                    $x_no12 = $sheet->getCell("L".$row)->getValue();
                    $x_no13 = $sheet->getCell("M".$row)->getValue();
                    $x_no14 = $sheet->getCell("N".$row)->getValue();
                    $x_no15 = $sheet->getCell("O".$row)->getValue();
                    $x_no16 = $sheet->getCell("P".$row)->getValue();
                    $x_no17 = $sheet->getCell("Q".$row)->getValue();
                    $x_no18 = $sheet->getCell("R".$row)->getValue();
                    $x_no19 = $sheet->getCell("S".$row)->getValue();
                    $x_no20 = $sheet->getCell("T".$row)->getValue();
                    $x_no21 = $sheet->getCell("U".$row)->getValue();
                    $x_no22 = $sheet->getCell("V".$row)->getValue();
                    $x_no23 = $sheet->getCell("W".$row)->getValue();
                    $x_no24 = $sheet->getCell("X".$row)->getValue();
                    $x_no25 = $sheet->getCell("Y".$row)->getValue();
                    $x_no26 = $sheet->getCell("Z".$row)->getValue();
                    $x_no27 = $sheet->getCell("AA".$row)->getValue();
                    $x_no28 = $sheet->getCell("AB".$row)->getValue();
                    $x_no29 = $sheet->getCell("AC".$row)->getValue();

                    //$date1 = date('Y-m-d', strtotime($x_no23));
                    echo date_create_from_format("d/m/Y", $x_no23)->format("Y-m-d");

                    $sql = "INSERT INTO muestra VALUES('$x_no1','$x_no2','$x_no3','$x_no4','$x_no5',
                                                       '$x_no6','$x_no7','$x_no8','$x_no9','$x_no10',
                                                       '$x_no11','$x_no12','$x_no13','$x_no14','$x_no15',
                                                       '$x_no16','$x_no17','$x_no18','$x_no19','$x_no20',
                                                       '$x_no21','$x_no22','$x_no23','$x_no24','$x_no25',
                                                       '$x_no26','$x_no27','$x_no28','$x_no29')";
                    $res = mysqli_query($conn, $sql);
                }
    	        unlink($archivo);
            }	
        }
    }

    //echo "<script> window.location = 'prueba.php'; </script>";
?>