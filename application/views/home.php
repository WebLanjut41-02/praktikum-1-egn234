<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 2/8/2019
 * Time: 9:25 AM
 */
?>

<table align="center" border="1">
  <tr>
    <td>list username</td>
    <td>Password</td>
  </tr>
  <?php for($i = 0; $i < count($list_user); $i++){?>
    <tr align='center'>
      <td><?=$list_user[$i];?></td>
    </tr>
  <?php }?>
  <tr>
    <td align="center">
      <form action="<?=base_url();?>index.php/akses/hancurkan" method="post">
        <button type="submit" name="submit">logout</button>
      </form>
    </td>
  </tr>

</table>

