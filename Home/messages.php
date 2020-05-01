<?php if(count($error)>0): ?>
<div class="msg"style =" margin-bottom:10px" >
  	<?php foreach ($error as $error) : ?>
  	  <span style = " color:#cc0000; margin-bottom:10px" ><?php echo $error ?></span>
  	<?php endforeach ?>
  </div>
<?php endif ?>