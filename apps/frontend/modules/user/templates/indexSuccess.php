<form action="<?php echo url_for('user/submit') ?>" method="POST">
  <table>
    <?php echo $form ?>
    <tr>
      <td>
        <input type="submit" value="submit"/>
      </td>
    </tr>
  </table>
</form>
