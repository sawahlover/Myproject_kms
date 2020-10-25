<div class="content-wrapper">
    <section class="content">
        <a href="<?= base_url('root_material') ?>" class="dropzone-upload btn btn-label-brand btn-bold btn-sm">back</a>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>TITLE</th>
                <th>DESKRIPSI</th>
                <th>VIEW SUMARY</th>
                <th>FILE</th>
                <th colspan="2">ACTION</th>
            </tr>

            <?php
            $no = 1;
            foreach ($row as $key) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key->title; ?></td>
                    <td><?php echo $key->deskripsi; ?></td>
                    <td><?php echo $key->view; ?></td>
                    <td><?php echo $key->file_up; ?></td>

                    <td>
                        <?php echo anchor('user/detail/' . $key->id, '<div class="btn btn-success btn-sm"><i class= "fa fa-search-plus"></i></div>') ?>
                        <a href="<?= base_url('user/edit/' . $key->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('user/hapus/' . $key->id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah data ingin delete??')">Delete</a>
                    </td>

                </tr>

            <?php endforeach; ?>
        </table>
    </section>