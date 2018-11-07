<html>
<head>
<style>
	#categoryOdd:hover{
		background-color : pink;
	}
	.categoryAdd:hover{
		background-color : purple;
	}
</style>
</head>
<body>
<table border = "1" align= "center">
	<tr>
		<th>ลำดับ</th>
		<th>รหัสสินค้า</th>
		<th>ชื่อสินค้า</th>
		<th>ราคา</th>
		<th>รายละเอียด</th>
	</tr>
	<?php 	
		foreach($header_cate->result() as $header){
		$count = 0;
		foreach($datas->result() as $index=>$value){
			if($value->category_code == $header->category_code){
			if($index %2 == 0){
			if($count == 0){ ?>
				<tr style = "background-color : lightblue">
					<td colspan = "5"><?php echo $value->category_name;?></td>
				</tr>
				<tr  id = "categoryOdd">
					<td><?php echo ++$index;?></td>
					<td><?php echo $value->product_code;?></td>
					<td><?php echo $value->product_name;?></td>
					<td><?php echo $value->price;?></td>
					<td><?php echo substr($value->detail,0,20);?></td>
				</tr>
					<?php
						$count++;
					}else{ ?>
					<tr  id = "categoryOdd">
					<td><?php echo ++$index;?></td>
					<td><?php echo $value->product_code;?></td>
					<td><?php echo $value->product_name;?></td>
					<td><?php echo $value->price;?></td>
					<td><?php echo substr($value->detail,0,20);?></td>
				</tr>
		<?php }
			}else{ 
				if($count == 0){ ?>
				<tr style = "background-color : lightblue">
					<td colspan = "5"><?php echo $value->category_name;?></td>
				</tr>
				<tr class = "categoryAdd">
					<td><?php echo ++$index;?></td>
					<td><?php echo $value->product_code;?></td>
					<td><?php echo $value->product_name;?></td>
					<td><?php echo $value->price;?></td>
					<td><?php echo substr($value->detail,0,20);?></td>
				</tr>
					<?php
						$count++;
					}else{ ?>
					<tr class = "categoryAdd">
					<td><?php echo ++$index;?></td>
					<td><?php echo $value->product_code;?></td>
					<td><?php echo $value->product_name;?></td>
					<td><?php echo $value->price;?></td>
					<td><?php echo substr($value->detail,0,20);?></td>
				</tr>
		<?php }
			}
			}		
		} 
	}?>
</table>
</body>
</html>