<?php
    require 'vendor/autoload.php';

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('test.xlsx');  //Load the existing Excel File
    $activeWorksheet = $spreadsheet->getActiveSheet();     //Get active worksheet

        if(isset($_POST['submit'])){         //Form data
            
            $name = $_POST['name'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $gender = $_POST['gender'];
            $qualification = $_POST['qualification'];

            $data = array($name, $contact, $address, $gender, $qualification);   //Data array

            $row = $activeWorksheet->getHighestRow() + 1;    //Get the highest row of sheet
            $column = 'A';
            foreach ($data as $value) {
                $activeWorksheet->setCellValue($column .$row, $value);      //Set values in Excel sheet
                $column++;
            }
        }

        echo "Data Inserted Successfully...";

        //Save the file
        $writer = new Xlsx($spreadsheet);
        $writer->save('test.xlsx');
?>