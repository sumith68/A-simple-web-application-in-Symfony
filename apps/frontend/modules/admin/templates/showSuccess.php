<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $manager->getId() ?></td>
    </tr>
    <tr>
      <th>Title:</th>
      <td><?php echo $manager->getTitle() ?></td>
    </tr>
    <tr>
      <th>Status:</th>
      <td><?php echo $manager->getStatus() ?></td>
    </tr>
    <tr>
      <th>Deadline:</th>
      <td><?php echo $manager->getDeadline() ?></td>
    </tr>
    <tr>
      <th>Assignsto:</th>
      <td><?php echo $manager->getAssignsto() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('admin/edit?id='.$manager->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('admin/index') ?>">List</a>
