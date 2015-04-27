<?php 
    include 'includefiles/top.php';
?>
<style>
    *{margin: 0 auto;text-align: center;}
    .regtable{margin: 30px auto;}
    input{text-align: left;}
    .text{width: 150px;height: 22px;border: 0px; border-bottom:solid 1px gray ;}
</style>
<form method="post">
 <table class="regtable">
     <tr><th>用户注册</th></tr>
     <tr>
         <td>用户名：</td><td><input type="text" name="username" class="text"/></td>
     </tr>
      <tr>
         <td>密  码：</td><td><input type="password" name="password" class="text"/></td>
     </tr>
      <tr>
          <td><input type="submit" name="btnRegUser" value="注册"/></td>
     </tr>
 </table>
    </form>
  <br/>
 <br/>
   <?php 
    include 'includefiles/bottom.php';
  ?>