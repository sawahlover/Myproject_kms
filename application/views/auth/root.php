<div class="content-wrapper">
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Create</button>
        <table class="table">
            <tr>
                <th>NO</th>
                <th>TITLE</th>
                <th>DESKRIPSI</th>
                <th>NAMA VIDEO</th>
                <th colspan="2">ACTION</th>
            </tr>

            <?php
            $no = 1;
            foreach ($row as $key) : ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $key->title; ?></td>
                    <td><?php echo $key->deskripsi; ?></td>
                    <td><?php echo $key->namavid; ?></td>

                    <td>
                        <?php echo anchor('user/detail/' . $key->id, '<div class="btn btn-success btn-sm"><i class= "fa fa-search-plus"></i></div>') ?>
                        <a href="<?= base_url('user/edit/' . $key->id) ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="<?= base_url('user/hapus/' . $key->id) ?>" class="btn btn-sm btn-danger" onClick="return confirm('Apakah data ingin delete??')">Delete</a>
                    </td>

                </tr>

            <?php endforeach; ?>
        </table>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Insert Video</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url() . 'user/action'; ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="deskripsi" class="form-control">
                        </div>

                        <tr>
                            <td>Categori</td>
                            <td>
                                <select name="kategori" class="form-control">
                                    <option value="">PILIH</option>
                                    <?php

                                    $tampil =  $this->db->get('tb_category');
                                    // var_dump($tampil->result_array());
                                    // die();
                                    foreach ($tampil->result_array() as $row) {
                                        # code...
                                        echo '<option value="' . $row['id_category'] . '">' . $row['category'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <div class="form-group">
                            <label>Video upload</label><br>
                            <input type="file" name="content">
                        </div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>