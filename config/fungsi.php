<?php
require 'dbcon.php';

function validate($inputData){

    global $conn;
    $validatedData = mysqli_real_escape_string($conn, $inputData);
    return trim($validatedData);
}

function webHome($columName)
{
    $contact = getById('homes   ',1);
    if($contact['status'] == 200){
        return $contact['data'][$columName];
    } 
}

function webContact($columName)
{
    $contact = getById('contact_us',1);
    if($contact['status'] == 200){
        return $contact['data'][$columName];
    } 
}

function webServiceskids($columName)
{
    $servis = getById('kids',1);
    if($servis['status'] == 200){
        return $servis['data'][$columName];
    } 
}

function webServicesyouth($columName)
{
    $servis = getById('youth_star_generation',1);
    if($servis['status'] == 200){
        return $servis['data'][$columName];
    } 
}

function webServicessunday($columName)
{
    $servis = getById('sunday_service',1);
    if($servis['status'] == 200){
        return $servis['data'][$columName];
    } 
}

function webServicespro($columName)
{
    $servis = getById('professional',1);
    if($servis['status'] == 200){
        return $servis['data'][$columName];
    } 
}

function webGerejapetra($columName)
{
    $gereja = getById('petra',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejaefrata($columName)
{
    $gereja = getById('efrata',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejahermon($columName)
{
    $gereja = getById('hermon',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejaeben($columName)
{
    $gereja = getById('eben',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejamahanaim($columName)
{
    $gereja = getById('mahanaim',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
   
    } 
}

function webGerejafiladelfia($columName)
{
    $gereja = getById('filadelfia',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejakarmel($columName)
{
    $gereja = getById('karmel',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejasinai($columName)
{
    $gereja = getById('sinai1',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejakana($columName)
{
    $gereja = getById('kana',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejaget($columName)
{
    $gereja = getById('getsemani',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webGerejasion($columName)
{
    $gereja = getById('sion',1);
    if($gereja['status'] == 200){
        return $gereja['data'][$columName];
    } 
}

function webServiceselder($columName)
{
    $servis = getById('elder_service',1);
    if($servis['status'] == 200){
        return $servis['data'][$columName];
    } 
}

function webMediaeben($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediaefrata($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediaget($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediasinai($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediapetra($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediamaha($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediafiladelfia($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediakana($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediasion($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediakarmel($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function webMediahermon($columName)
{
    $media = getById('media',8);
    if($media['status'] == 200){
        return $media['data'][$columName];
    } 
}

function logoutSession()
{
    
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUser']);
}

function redirect($url, $status)
{
    $_SESSION['status'] = "$status";
        header('Location: '.$url);
        exit(0);
}

function alertMessage() 
{
    if(isset($_SESSION['status']))
    {
        echo '<div class="alert alert-success">
            <h6>'.($_SESSION['status']).'</h6>
        </div>';
        unset($_SESSION['status']);
    }
}

function checkParamId($paramType)
{
    if(isset($_GET[$paramType])){
        if($_GET[$paramType] != null ){
            return $_GET[$paramType];
        }else{
            return 'Tidak Ada Id yang Ditemukan';
        }
    }else{
        return 'Tidak Ada Id yang Diberikan';
    }
}

function getAll($tableName)
{
    global $conn;

    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getById($tableName, $id)
{
    global $conn;
    $table = validate($tableName);
    $id    = validate($id);

    $query = "SELECT * FROM $table WHERE id='$id' LIMIT 1 ";
    $result = mysqli_query($conn, $query);

    if($result)
    {
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $response = [
                'status' => 200,
                'message' => 'Data yang terpengaruh',
                'data' => $row,
            ];
            return $response;
        }
        else
        {
            $response = [
                'status' => 404,
                'message' => 'Tidak ada catatan data'
            ];
            return $response;
        }
    }else{
        $response = [
            'status' => 500,
            'message' => 'Terjadi Sesuatu'
        ];
        return $response;
    }
}

function deleteQuery($tableName, $id){
    global $conn;

    $table = validate($tableName);
    $id = validate($id);

    $query = "DELETE FROM $table WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Debugging to check if the file is being uploaded
function uploadFile($file, $targetDir) {
    if ($file['name']) {
        $fileName = time() . "_" . basename($file['name']);
        $filePath = $targetDir . $fileName;

        // Debugging: Check if file is being uploaded
        echo "File name: " . $file['name'] . "<br>";
        echo "File path: " . $filePath . "<br>";

        // Validate error during upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            die("Error upload file: " . $file['error']);
        }

        // Move the uploaded file to the target folder
        if (!move_uploaded_file($file['tmp_name'], $filePath)) {
            die("Gagal mengupload file: " . $file['name']);
        }

        return $fileName;
    }

    return null;
}

?>
