<?php
//fetch.php
  //$usern = $_GET['q'];

if(isset($_POST["query"]))
{
  $con = mysqli_connect("localhost", "root", "", "webdevelopment");
  // require('db.php');
 $request = mysqli_real_escape_string($con, $_POST["query"]);
 $query = "
  SELECT * FROM jobpost 
  WHERE jtitle LIKE '%".$request."%' 
  OR jtype LIKE '%".$request."%' 
  OR jfield LIKE '%".$request."%' OR jdesc LIKE '%".$request."%' OR jquali LIKE '%".$request."%' OR jsalary LIKE '%".$request."%' OR jlocation LIKE '%".$request."%' AND DATE(duedate) >= CURDATE()";
 $result = mysqli_query($con, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table table-bordered table-striped">
   <tr>
    <th>Job Title</th>
    <th>Job Type</th>
    <th>Field of the Job</th>
    <th>Job Description</th>
    <th>Job Qualification</th>
    <th>Salary</th>
    <th>Job Location</th>
    <th>Last Date to Apply</th>
    <th>Action</th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["jid"];
   $data[] = $row["jtitle"];
   $data[] = $row["jtype"];
   $data[] = $row["jfield"];
   $data[] = $row["jdesc"];
   $data[] = $row["jquali"];
   $data[] = $row["jsalary"];
   $data[] = $row["jlocation"];
   $data[] = $row["duedate"];

   $html .= '
   <tr>
    <td>'.$row["jtitle"].'</td>
    <td>'.$row["jtype"].'</td>
    <td>'.$row["jfield"].'</td>
    <td>'.$row["jdesc"].'</td>
    <td>'.$row["jquali"].'</td>
    <td>'.$row["jsalary"].'</td>
    <td>'.$row["jlocation"].'</td>
    <td>'.$row["duedate"].'</td>
    <td><a href=inactive.php?q=$usern>Click here to Apply</a></td>
   </tr>
   ';
  }
 }
 else
 {
  $data = 'No Data Found';
  $html .= '
   <tr>
    <td colspan="3">No Data Found</td>
   </tr>
   ';
 }
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>