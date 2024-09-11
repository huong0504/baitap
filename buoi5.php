<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php



//  bài tập trang 6
// thêm dữ liệu vào bảng

$dbh = mysqli_connect('localhost', 'root', "",'buoi5'); 
    // Kết nối với MySQL Server

    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại 
    
    
    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 
    
    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Adding record failed: " . mysqli_connect_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Poseidon has been successfully added to your contacts list";
    }

    mysqli_close($dbh); // Đóng kết nối CSDL 


// cập nhật dữ liệu vào bảng

$dbh = mysqli_connect('localhost', 'root','', 'buoi5'); 
// Kết nối tới MySQL Server

if (!$dbh)    
die("Unable to connect to MySQL: " . mysqli_connect_error()); 
// Thông báo lỗi nếu kết nối thất bại 

$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
$sql_stmt .= "WHERE `id` = 5";

$result = mysqli_query($dbh,$sql_stmt);
// Thực thi câu lệnh SQL

if (!$result) {
    die("Deleting record failed: " . mysqli_connect_error());
    // Thông báo lỗi nếu thực thi thất bại
} else {
    echo "ID number 5 has been successfully updated";
}

mysqli_close($dbh); //close the database connection



// xóa dữ liệu

$dbh = mysqli_connect('localhost', 'root','', 'buoi5'); 
    // Kết nối với MySQL Server
    
    if (!$dbh)     
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    // Thông báo lỗi nếu kết nối thất bại
    
    $id = 4; 
    // ID của Venus trong CSQL
    
    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    // Câu lệnh SQL Delete
    
    $result = mysqli_query($dbh,$sql_stmt); 
    // Thực thi câu lệnh SQL
    
    if (!$result) {
        die("Deleting record failed: " . mysqli_connect_error());
        // Thông báo lỗi nếu thực thi thất bại 
    } else {
        echo "ID number $id has been successfully deleted";
    }
    
    mysqli_close($dbh); // Đóng kết nối CSDL



// hiển thị dữ liệu
$dbh = mysqli_connect('localhost', 'root', '','buoi5'); 
    // Kết nối tới MySQL server

    if (!$dbh){die("Unable to connect to MySQL: " . mysqli_connect_error());
        // Nếu kết nối thất bại thì đưa ra thông báo lỗi
        }     
    
    $sql_stmt = "SELECT * FROM my_contacts"; 
    // Câu lệnh select
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL
     
    if (!$result)     
        die("Database access failed: " . mysqli_connect_error()); 
        // Thông báo lỗi nếu thực thi thất bại
        
        $rows = mysqli_num_rows($result); 
        // Lấy số hàng trả về
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 
mysqli_close($dbh); // Đóng kết nối CSDL





// bài tập trang 14
// kết nối với csdl
try {
    $dbh = new PDO('mysql:host=localhost;dbname=buoi5', 'root', '');
    // Thiết lập chế độ báo cáo lỗi PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// thêm dữ liệu vào bảng
$sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
        VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";
        
$stmt = $dbh->prepare($sql);

// Dữ liệu cần thêm
$data = [
    ':full_names' => 'Poseidon',
    ':gender' => 'Male',
    ':contact_no' => '541',
    ':email' => 'poseidon@sea.oc',
    ':city' => 'Troy',
    ':country' => 'Ithaca'
];

// Thực thi câu lệnh
if ($stmt->execute($data)) {
    echo "Record added successfully.";
} else {
    echo "Error adding record.";
}

//cập nhật dữ liệu trong bảng
$sql = "UPDATE my_contacts 
        SET full_names = :full_names, email = :email 
        WHERE id = :id";
        
$stmt = $dbh->prepare($sql);

// Dữ liệu cần cập nhật
$data = [
    ':full_names' => 'Zeus',
    ':email' => 'zeus@olympus.com',
    ':id' => 1
];

// Thực thi câu lệnh
if ($stmt->execute($data)) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record.";
}


// xóa dữ liệu
$sql = "DELETE FROM my_contacts WHERE id = :id";

$stmt = $dbh->prepare($sql);

// ID của bản ghi cần xóa
$data = [':id' => 1];

// Thực thi câu lệnh
if ($stmt->execute($data)) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record.";
}

// hiển thị dữ liệu
$sql = "SELECT * FROM my_contacts";
$stmt = $dbh->query($sql);

if ($stmt->rowCount() > 0) {
    // Lặp qua kết quả và hiển thị
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No records found.";
}

?>
</body>
</html>