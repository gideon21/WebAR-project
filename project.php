<?php
$conn=new PDO('mysql:host=sql313.epizy.com; dbname=epiz_27856925_webar', 'epiz_27856925', '3iGsZRmoVe') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:project.php");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web.AR.</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
</head>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
    .bck {
        padding: 5px;
    }
    .updwn {
        margin-left: -450px;
        color: #000;
        font-size: 2em;
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .res{
        background-color: #0672FF;
        width: 50px;
        height: 50px;
    }
</style>

<body>
    <div class="res">
    <a href="index.php"><img src="images/backarrow.png" title="Home page" class="bck"></a>
    </div>
    <div class="row-fluid">
        <div class="span12">
            <div class="container">
                <br />
                <p class="updwn">Upload And Preview AR projects here</p>
                <br />
                <br />
                <form enctype="multipart/form-data" action="" name="form" method="post">
                    Select File
                    <input type="file" name="file" id="file" /></td>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </form>
                <br />
                <br />
                <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered"
                    id="example">
                    <thead>
                        <tr>
                            <th width="90%" align="center">Files</th>
                            <th align="center">Action</th>
                        </tr>
                    </thead>
                    <?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
                    <tr>

                        <td>
                            &nbsp;<?php echo $name ;?>
                        </td>
                        <td>
                            <button class="alert-success">
                                <a
                                    href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a>
                            </button>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>