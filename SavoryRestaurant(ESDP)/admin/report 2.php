<?php
error_reporting(0);
include 'connect.php';
// $dailysale="select * from tbl_submenu";
// $dataPoints=array();
// $i=0;
// foreach ($db->query($dailysale) as $row)
// {
//     $aa=array();
//     $submenu_name=$row['submenu_name'];
//     //        echo $submenu_name;
//     $bb="select * from order_detail";
//     $gg=0;
//     foreach ($db->query($bb) as $row1)
//     {
//         $gg+=$row1['order_qty'];
//         //            echo $gg;
//     }
//     $aa["label"]=$submenu_name;
//     $aa["y"]=$gg;
//     $dataPoints[$i]=$aa;
//     $i++;
// }
// //     var_dump($dataPoints);
    if (isset($_POST['view'])) {
        if($_POST['order_date']=="---Please Select---")
        {
            echo "<script>alert('We can't find daily report');</script>";
        }
        else {
            $quantity=0;
            $i=0;
            $dataPoints=array();
            $dailyreport="select * from order_detail";
            foreach ($db->query($dailyreport)as $row){
                $order_id=$row['order_id'];
                $submenu_id=$row['submenu_id'];
//                 echo $submenu_id;
                   $quantity+=$row['order_qty'];
                       echo $quantity;
                $v="select * from tbl_submenu where submenu_id='$submenu_id'";
                foreach ($db->query($v)as $row1){
                $aa=array();
                $submenu_name=$row1['submenu_name'];
                echo $submenu_name;
                }
                $aa['label']=$submenu_name;
                $aa["y"]=$quantity;
                $dataPoints[$i]=$aa;
                $i++;
            }
        }
    }
//      var_dump($dataPoints);
    ?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
	 
	 
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		title: {
			text: "Usage Share of Desktop Browsers"
		},
		subtitles: [{
			text: "November 2017"
		}],
		data: [{
			type: "pie",
			yValueFormatString: "#,##0.00\"%\"",
			indexLabel: "{label} ({y})",
			dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	 
	}

</script>
</head>
<body>
<h2>Select the date</h2>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<form action="" method="post">
	<div class="form-group">
	<select name="order_date" class="form-control">
	<option>---Please Select---</option>
	<?php 
	$viewquery="select * from tbl_order";
	foreach ($db->query($viewquery) as $row)
	{
	    $order_id=$row['order_id'];
	    $order_date=$row['order_date'];
	    echo "<option value='$order_id'>$order_date</option>";
	}
	?>	
	</select>
	<div class="form-group">
	<input type="submit" name="view" value="View" class="form_control">
	
	</div>
	</div>
</form>
</div>
<div class="col-md-4"></div>
</div>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                              