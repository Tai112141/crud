	<body>
	<div class="container"> 
			<h2>แสดงข้อมูลหนังสือ</h2><br>
			<div class="container">
				<!-- search by filter -->
	<div id="search_filter">
		<strong>ค้นหา</strong>
		<form method="POST" action="<?php echo base_url() ?>main/search_filter">
		<select name="filter">
			  <option value="username">ชื่อผู้แต่ง</option>
			  <option value="skill">หมวดหมู่</option>
  			<option value="age">ราคา</option>
  			
		</select>
		<input type="text" name="search_text">
		<input type="submit" value="ค้นหา" class="btn btn-primary" name="search">
		</form>
	</div>
	<br><br>

				<table class="table table-hover">
				<th>รหัสหนังสือ</th>
					<th>ชื่อหนังสือ</th>
					<th>ชื่อผู้แต่ง</th>
					<th>หมวดหมู่</th>
					<th>ราคา</th>

					<!-- read data sent as assoc array -->
					<?php foreach ($read as $info): ?>
						<tr>
						<td><?php echo $info['id']?></td>
							<td><?php echo $info['first_name']?></td>	
							<td><?php echo $info['last_name'] ?></td>
							<td><?php echo $info['skill'] ?></td>
							<td><?php echo $info['age'] ?></td>
						</tr>
					<?php endforeach ?>


					</table>

			</div>
		</div>

	</body>	
