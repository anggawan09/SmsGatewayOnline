<p><a href="<?php echo base_url('index.php/admin/user/tambah_data') ?>" class="btn btn-success">
<i class="fa fa-plus"> </i> Tambah</a></p>

<?php 
//notifikassi
if($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success"><i class="fa fa-check"></i>'; 
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
?>


<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Id Admin - Akses Level</th>
        <th>Keterangan</th>
        <th width="15%">Action</th>
    </tr>
</thead>
<tbody>

    <?php $i = 1; foreach($user as $user) {?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $user->nama; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->id_admin; ?> - <?php echo $user->akses_level; ?></td>
        <td><?php echo $user->keterangan; ?></td>
        <td>
            <a href="<?php echo base_url('index.php/admin/user/edit/'.$user->id) ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>

            <?php include('delete_view.php') ?>
        </td>
    </tr>

<?php } ?>
</tbody>
</table>