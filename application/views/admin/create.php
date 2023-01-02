<?= form_open_multipart('admin/create'); ?>
<table>
    <tr>
        <td>Username</td>
        <td><?= form_input('username'); ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?= form_input('email'); ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <?= form_submit('submit', 'Simpan'); ?>
            <?= anchor('admin', 'Kembali'); ?></td>
    </tr>
</table>
<?php
echo form_close();
?>