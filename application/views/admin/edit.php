<?php echo form_open('admin/edit'); ?>
<?php echo form_hidden('id_admin', $dataadmin[0]->id_admin); ?>

<table>
    <tr>
        <td>ID</td>
        <td><?= form_input('', $dataadmin[0]->id_admin, "disabled"); ?></td>
    </tr>
    <tr>
        <td>username</td>
        <td><?= form_input('username', $dataadmin[0]->username); ?></td>
    </tr>
    <tr>
        <td>email</td>
        <td><?= form_input('email', $dataadmin[0]->email); ?></td>
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