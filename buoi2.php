<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$a = "Toi la Nguyen Thi Huong";
// 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Kết quả bài 1 là " . strlen($a) . "<br>";

// 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Kết quả bài 2 là " . str_word_count($a) . "<br>";

// 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Kết quả bài 3 là " . strrev($a) . "<br>";

// 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo "Kết quả bài 4 là " . strpos($a , "Huong") . "<br>";

// 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo "Kết quả bài 5 là " . str_replace("Nguyen Thi Huong", "1 sinh vien", $a) . "<br>";

// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
echo "Kết quả bài 6 là " . strncmp($a, "Toi khong", 6) . "<br>";

// 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo "Kết quả bài 7 là " . strtoupper($a) .'<br>';

// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo "Kết quả bài 8 là ". strtolower("TOI LA NGUYEN THI HUONG") . "<br>";

// 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "ket qua bài 9 là " . ucwords("toi la nguyen thi huong") . "<br>";

// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo "kết quả bài 10 là " . trim("  toi la nguyen thi huong   ") . "<br>";

// 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo "Kết quả bài 11 là " . ltrim($a, "T"). "<br>";

// 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo "Kết quả bài 12 là " .rtrim($a, "g") . "<br>";

// 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$b= explode(" ", $a);
echo print_r($b) . "<br>";

// 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
echo "Kết quả bài 14 là " . implode(" ", $b) . "<br>";

// 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
echo "Kết quả bài 15 là " . str_pad($a, 30, " K58SN2", STR_PAD_RIGHT). "<br>";

// 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
echo "Kết quả bài 16 là:" . "<br>";
$c = strrchr($a, 'Huong');
if ($c == false) {
    echo "Chuỗi đã cho không chứa chuỗi khác ";
}else{
    echo "Chuỗi đã cho có kết thúc bằng chuỗi khác";
} 
echo "<br>";

// 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
echo "Kết quả bài 17 là :" . "<br>";
$d="Nguyen";
if (strstr ($a, $d)){
   echo "Chuỗi \"$a\" có chứa chuỗi \"$d\".";
}
else{
    echo "Chuỗi \"$a\" không chứa chuỗi \"$d\".";
}
echo "<br>";

// 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
echo "Kết quả bài 18 là " . preg_replace("/./","*", $a ) . "<br>";

// 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
echo "Kết quả bài 19 là: "."<br>";
if (is_int($a)) { 
echo "chuỗi \"$a\" thuộc kiểu số nguyên";
 }
else{ 
echo "chuỗi \"$a\" không thuộc kiểu số nguyên";
 }
 echo "<br>";
// 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
echo "Kết quả bài 20 là:" . "<br>";
$email= "nguyenthihuong@gmail.com";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "chuỗi \"$email\" có là email hợp lệ";
}
else{
    echo "chuỗi \"$email\" không là email hợp lệ";
}
?>
    
</body>
</html>