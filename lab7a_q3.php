<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 7a Q3</title>
</head>
<body>
    <?php
        function calculateArea($width, $length) {
            return $width * $length;
        }

        $width = 4;
        $length = 2;
        $area = calculateArea($width, $length);
    ?>

    <table border="1">
        <tr>
            <td><b>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?> is <?php echo $area; ?></b></td>
        </tr>
    </table>
</body>
</html>
