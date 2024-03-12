<html>
<head>
        <title>650710079</title>
</head>
<body>
        <?php
                //กำหนดตัวแปร var1 มีค่า 5
                $var1 = 5;
                //กำหนดตัวแปร var2 มีค่า 2
                $var2 = 2;
                //พิมพ์ค่าผลลัพธ์การคำนวณ
                //ค่าเฉลี่ยเลขคณิตของตัวแปรทั้ง 2
                echo ($var1 + $var2)/2;
                print("<br>");
                //ผลต่างระหว่าง var1 และ var2
                echo $var1 - $var2;
                print("<br>");
                //var1 ยกกำลัง var2
                echo $var1 ** $var2;
                print("<br>");
                //เศษจากการหาร var1 ด้วย var2
                echo $var1 % $var2;
                print("<br>");
        ?>
</body>
</html>