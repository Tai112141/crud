<body>
		<div class="container">
<h2>Update</h2><br>

<?php foreach ($edit_info as $info):?>
<form class="form-inline" method="POST" action="<?php echo base_url().'main/update?id='.$info['id']; ?>"enctype="multipart/form-data">
 <div class="form-group">
    <label for="fname">ชื่อหนังสือ</label>
    <input type="text" class="form-control" id="fname"  name="fname" value="<?php echo $info['first_name']?>">
  </div>
  <div class="form-group">
    <label for="lname">ผู่แต่ง </label>
    <input type="text" class="form-control" id="lname"  name="lname" value="<?php echo $info['last_name']?>">
  </div>
  <div class="form-group">
    <label for="skill">หมวดหมู่ </label>
    <input type="text" class="form-control" id="skill"  name="skill" value="<?php echo $info['skill']?>">
  </div>
<div class="form-group">
    <label for="age">ราคา </label>
    <input type="number" class="form-control" id="age"  name="age" value="<?php echo $info['age']?>">
  </div>
  
  <button type="submit" class="btn btn-success btn-small" name="post">Update</button>
  <?php endforeach?>

</form>
</div>




</body>	