<div class="content-wrapper">
    <section class="content">
        <table class="table">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
                <th>NAma Video</th>

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
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modal_ke_<?= $no ?>"><i class="fa fa-plus"></i>view</button>
                        <div class="modal fade" id="modal_ke_<?= $no ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="video">Wacthes Video</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="" enctype="">


                                            <video width="400" height="200" controls="controls">
                                                <source src="<?php echo $key->namavid; ?>" type="video/mp4" />
                                            </video>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php
                $no++;
            endforeach;
            ?>
        </table>
    </section>
</div>