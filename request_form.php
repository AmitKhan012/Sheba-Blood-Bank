<?php
  include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/request_form.css">
</head>
<body>

<section>
<div class="contain">
  <form action="request.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="country">Blood Group</label>
      </div>
      <div class="col-75">
        <select type="text" name="blood_group">
          <option value="A_positive" >A(+) </option>
          <option value="A_negetive" >A(-) </option>
          <option value="B_positive" >B(+) </option>
          <option value="B_negetive" >B(-) </option>
          <option value="O_positive" >O(+) </option>
          <option value="O_negetive" >O(-) </option>
          <option value="AB_positive">AB(+)</option>
          <option value="AB_negetive">AB(-)</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Date</label>
      </div>
      <div class="col-75">
        <input type="Date" name="tdate">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Note</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="note" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</section>
  <footer id="main-footer">
    <p>Copyright &copy; 2018 My Website</p>
  </footer>
</body>
</html>