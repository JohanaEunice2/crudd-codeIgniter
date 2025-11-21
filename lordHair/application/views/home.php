<h1><?=$id;?></h1>
<ul>
    <?php foreach($bookings as $row){?>
      <li><?= $row['id'];?></li>
      <?php } ?>
</ul>