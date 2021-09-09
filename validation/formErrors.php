<?php if(count($errors)>0): ?>
   <div class="form-row">
    <div class="col-lg-7">
  <?php foreach($errors as $error):  ?>

   <li class="msg error" style="border: 1px solid; margin: 10px 0px;padding: 15px 10px 15px 50px;background-repeat: no-repeat; background-position: 10px center;color: #D8000C;background-color: #FFBABA;background-image: url('https://i.imgur.com/GnyDvKN.png'); display: inline-flex; width: 100%;">
      <?php echo $error; ?>
    </li>
   <?php endforeach; ?>
      </div>
    </div>
 <?php endif; ?>