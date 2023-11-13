<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(E_ALL);

      


        function checkNumber($number) {
            if(empty($number)) {
                echo "Lütfen boş değer göndermeyin.";
            } else {
                if($number % 3 == 0) {
                    echo "Girilen sayı 3 ile bölünebilir.";
                }
                else {
                    echo 'Girilen sayı 3 ile bölünemez.';
                    $divisible = false;
                    $i = 3;
                    while(!$divisible && $i <= $number) {
                        if($number % $i == 0) {
                            $divisible = true;
                            echo "Girilen sayıya  3 ile bölünebilen ilk değer: " . $i+$number;
                        }
                        $i++;
                    }
                    if(!$divisible) {
                        echo "Girilen sayı 3 ile bölünebilen ilk değer bulunamadı.";
                    }
                }
            }
        }
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = trim($_POST["number"]);
            checkNumber($number);
        }
        
     
    ?>
</body>
</html>