<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <script language="javascript">
        function sum(x, y)
        {
            x = x +1023;
            y = y * 3;
            sum = x * y;
            return sum;
        }
    </script>
    
    <div>
        Your name is ==> 
        <?php
            // put your code here
            $round = 1;

            if($round == 1)
            {
                echo "Name = John";
            }
            else
            {
                echo "Name = Eddie";
            }
        ?>
        
        You make $
        <script language="javascript">
            document.write(sum(123, 456));
        </script>
    </div>
    </body>
</html>
