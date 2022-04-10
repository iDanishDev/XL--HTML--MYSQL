<?php

$path = "C:/xamp ka baccha/htdocs/library/mainwork/upload";
 
// list of css file names located inside the folder
$files = glob($path.'/*');
 
// delete all the files from the list 
foreach($files as $file){
 if(is_file($file)){
 unlink($file);
 }
}
 
echo "Files deleted successfully.";

if( isset($_POST['upload'])){

    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;

    if(move_uploaded_file($file_tem_loc, $file_store)){

        echo("Files are Uploaded");

    }   

};

echo "<br>";



$local_dir = 'C:\xamp ka baccha\htdocs\library\mainwork\upload';

$filess = scandir($local_dir);

$filess = array_diff($filess, ['.','..']);
$filess_string = implode("",$filess);

echo $filess_string;





$dbHost = "localhost";
$dbDatabase = "h_php";
$dbPasswrod = "";
$dbUser = "root";


$conn = mysqli_connect($dbHost, $dbUser, $dbPasswrod, $dbDatabase);


$filename = $filess_string;
$data = [];


$f = fopen($filename, 'r');

if ($f === false) {
	die('Cannot open the file ' . $filename);
}

while (($row = fgetcsv($f)) !== false) {
	$data[] = $row;
    
    

}

for($i = 1; $i < count($data); $i++) {

    $datayum = $data[$i][0];
    $datayummy = $data[$i][1];
    
    $sql = "INSERT INTO `items` (`title`,`description`) VALUES ('$datayum','$datayummy')";
    
    
    if (mysqli_query($conn, $sql)) {

        echo "New record created successfully <br>";

       }
    else{

        echo "Error: " . $sql . "<br>" . mysqli_error($conn);

       }
};

// print_r($data);
print_r($data[2][1]);


fclose($f);
$conn->close();

?>

