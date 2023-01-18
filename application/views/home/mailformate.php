
</html>
<head>
</head>
  <body>
    <h5> Dear Professor</h5>
    <p> your student <?=$student?>  is upload New Project at  <?=date('d-M-Y : H:i:a')?></p>
    
    <a href="<?=base_url('homecontroller/isverify/'.$book_id.'/1')?>"> Approve </a> &nbsp;&nbsp; &nbsp; <a href="<?=base_url('homecontroller/isverify/'.$book_id.'/0')?>"> Disapprove </a>
  </body>
</html>