<style>
    .regtable{margin:30px auto;width:600px;background:#fff;border-radius:5px;
    padding-top:20px;padding-bottom:30px;}
    .regtable th{font-size:26px;color:#9c9c9c;}
    .regtable td{padding:5px;}
    .regtable .lefttd{text-align:right;width:25%;color:gray;}
    .regtable .righttd{text-align:left;width:75%;}
    .regtable .text{width:50%;height:30px;line-height:28px;text-align:left;
    border:solid #ddd 1px;background:#f5f5f5;border-radius:5px;}
    #btnRegUser{width:200px;height:40px;text-align:center;color:#fff;
    border:0px;background:#e96481;}
    .readyshow{display: none;}
</style>
<form method="post">
 <table class="regtable">
     <tr><th></th><th class="righttd">用户注册</th></tr>
     <tr>
         <td class="lefttd">用户名：</td><td class="righttd"><input type="text" name="username" class="text"/></td>
     </tr>
      <tr>
         <td class="lefttd">邮  箱：</td><td class="righttd"><input type="text" name="usermail" class="text"/></td>
     </tr>
      <tr>      
         <td class="lefttd">密  码：</td><td class="righttd"><input type="password" name="password1" class="text"/></td>
     </tr>
     <tr>      
         <td class="lefttd">确认密码：</td><td class="righttd"><input type="password" name="password2" class="text"/></td>
     </tr>
     <tr>      
         <td></td><td class="righttd"><input type="checkbox" name="cbRead"/>
             <a href="#">请先阅读《Jimmy&Jane 's Sweet》站点用户条款</a>
         </td>
     </tr>
      <tr>
              <td></td>
          <td class="righttd"><input type="submit" name="btnRegUser" 
                                     id="btnRegUser" value="注册" class="readyshow"/></td>
     </tr>
 </table>
    </form>
  <br/>
 <br/>