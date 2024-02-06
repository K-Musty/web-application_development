<!DOCTYPE html>
<html>
<head>
    <title>Result Sum Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
            background-color: teal;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #000;
            color:#fff;
        }
        
    </style>
</head>
<body>

<?php
$students = array(
	    array("Mubarak", 22, 34),
	        array("Imran", 15, 30),
		    array("Fatima", 18, 28)
);

echo "<table>";
echo "<tr><th>Name</th><th>CA</th><th>Exam</th><th>Total</th></tr>";

foreach ($students as $student) {
	    $name = $student[0];
	        $ca = $student[1];
	        $exam = $student[2];
		    $total = $ca + $exam;

		    echo "<tr>";
		        echo "<td>$name</td>";
		        echo "<td>$ca</td>";
			    echo "<td>$exam</td>";
			    echo "<td>$total</td>";
			        echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
