<h2>Это контент страницы сервисов</h2> 
<h3>наши сервисы </h3>

<h4>здесь список наших сервисов с адресами: </h4>
     
    <table>
  <tbody>
    <tr>
      <td><?php echo $data[0]['name'];?></td>
      <td><?php echo $data[0]['address'];?></td>
      
    </tr>
    <tr>
      <td><?php echo $data[1]['name'];?></td>
      <td><?php echo $data[1]['address'];?></td>
      
    </tr>
    <tr>
      <td><?php echo $data[2]['name'];?></td>
      <td><?php echo $data[2]['address'];?></td>
      
    </tr>
  </tbody>
</table>
    
    <h4>и картинка офиса:</h4>
    <p><img src ="../images/2605862.jpg" width="30%"></p>
    
 <p>Согласитесь, нукуда не перейдешь по <a href="#">пустой ссылке</a> </p>
<?php
//phpinfo();
?>