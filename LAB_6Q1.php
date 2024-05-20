<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab 6 Q1</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <?php
    $name = "MUHAMMAD SHAHRUL ILHAN BIN MOHD NAJIB";
    $matric_number = "AI220038";
    $course = "INFORMATION TECH";
    $year_of_study = "Year 2";
    $address = "GELANG PATAH, JOHOR BAHRU, JOHOR";
  ?>
  <table>
    <tr>
      <td>Name</td>
      <td><?php echo "$name"; ?></td>
    </tr>
    <tr>
      <td>Matric Number</td>
      <td><?php echo "$matric_number"; ?></td>
    </tr>
    <tr>
      <td>Course</td>
      <td><?php echo "$course"; ?></td>
    </tr>
    <tr>
      <td>Year of Study</td>
      <td><?php echo "$year_of_study"; ?></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><?php echo "$address"; ?></td>
    </tr>
  </table>
</body>
</html>
