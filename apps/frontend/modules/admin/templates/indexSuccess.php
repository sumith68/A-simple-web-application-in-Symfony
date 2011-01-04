<h1>Managers List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Status</th>
      <th>Deadline</th>
      <th>Assignsto</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($managers as $manager): ?>
    <tr>
      <td><a href="<?php echo url_for('admin/show?id='.$manager->getId()) ?>"><?php echo $manager->getId() ?></a></td>
      <td><?php echo $manager->getTitle() ?></td>
      <td><?php echo $manager->getStatus() ?></td>
      <td><?php echo $manager->getDeadline() ?></td>
      <td><?php echo $manager->getAssignsto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('admin/new') ?>">New</a>
