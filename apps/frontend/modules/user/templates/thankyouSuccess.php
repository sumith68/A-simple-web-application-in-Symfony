<table>
<tr>
<td>Title</td>
<td>Status</td>
<td>Deadline</td>
<td>Assignsto</td>
</tr>


 <?php for($i=0;$i<=2;$i++)
 { ?>
<form action="/frontend_dev.php/user/user_update" method="post">
 <tr>
  <input type="hidden" value="<?php echo $sf_params->get($i.'[id]') ?>" name="$u_id"/>
  <td><?php echo $sf_params->get($i.'[title]') ?></td>
  <td><select name="cmbstatus">
       <option value="current"><?php echo $sf_params->get($i.'[status]') ?></option>

       <option value="open">open</option>
       <option value="working"> working</option>
       <option value="closed">closed</option>
  </select> </td>
  <td><?php echo $sf_params->get($i.'[deadline]') ?></td>
  <td><?php echo $sf_params->get($i.'[assignsto]') ?></td>
  <td><input type="submit" value="update"></td>
 </tr>
</form>
 <?php
  }
 ?>
</table>
