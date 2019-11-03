<html>
<body>

<div class="container">
<h2>เพิ่มหนังสือ</h2><br>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<form class="form" method="POST" action="<?php echo base_url() ?>main/new_data"  enctype="multipart/form-data">


 <div class="form-group">
    <label for="fname">ชื่อหนังสือ</label>
    <input type="text" class="form-control" id="fname" placeholder="Book name" name="fname">
    
  </div>
  <br>
  <div class="form-group">
    <label for="lname">ชื่อผู้แต่ง</label>
    <input type="text" class="form-control" id="lname" placeholder="Author name" name="lname">
  
  </div>
  <br>
  <div class="form-group">
    <label for="skill">หมวดหมู่</label>
    <input type="text" class="form-control" id="skill" placeholder="Categorie" name="skill">
  
  </div>
  <br>
<div class="form-group">
    <label for="age">ราคา</label>
    <input type="number" class="form-control" id="age" placeholder="Price" name="age">

  </div>
  <br>
  

  <button type="submit" class="btn btn-primary" name="post">Submit</button>

</form>
</div>



</body>
</html>