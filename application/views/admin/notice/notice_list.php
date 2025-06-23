<!--start content-->
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Notice List</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Notice</li>
                </ol>
            </nav>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->
    <hr />
    <div class="card">
        <div class="card-body">


            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Regarding</th>
                            <th>Notice</th>
                            <th>Issued By</th>
                            <th>Status</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($notice as $row) { ?>
                            <tr>
                                <td> <?= $i ?></td>

                                <td><?= $row->regarding ?></td>
                                <td> <?= implode(' ', array_slice(explode(' ', strip_tags($row->notice)), 0, 10)) . '...'; ?></td>
                                <td><?= $row->added_by ?></td>
                               <td>
  <?php if ($row->status == 1): ?>
    <span class="badge bg-success">Active</span>
  <?php else: ?>
    <span class="badge bg-danger">Inactive</span>
  <?php endif; ?>
</td>

                                <td><?= $row->created_date ?></td>
                                <!--<td></td>-->
                                <td>
                                    <div class="table-actions d-flex align-items-center gap-3 fs-6">
                                        <a href="javascript:void(0);" class="text-primary" data-bs-toggle="modal" data-bs-target="#viewNoticeModal" onclick='viewNotice(<?= htmlspecialchars(json_encode($row), ENT_QUOTES, "UTF-8") ?>)' title="View">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>

                                        <?php
                                        if ($_SESSION['type'] == 'SuperAdmin') {
                                        ?>
                                            <a href="<?php echo base_url(); ?>Admin/editnotice/<?= $row->id; ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>

                                            <a href="javascript:void(0)" id="deletec" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete" onclick="confirmdelete(<?= $row->id; ?>);"><i class="bi bi-trash-fill"></i></a>
                                        <?php } ?>
                                    </div>
                                </td>

                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No.</th>
                            <th>Regarding</th>
                            <th>Notice</th>
                            <th>Issued By</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Code  -->
    <!-- Modal -->
    <div class="modal fade" id="viewNoticeModal" tabindex="-1" aria-labelledby="viewNoticeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewNoticeModalLabel">Notice Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Regarding</th>
                            <td id="modal_regarding"></td>
                        </tr>
                        <tr>
                            <th>Notice</th>
                            <td id="modal_notice"></td>
                        </tr>
                        <tr>
                            <th>Issued By</th>
                            <td id="modal_added_by"></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td id="modal_status"></td>
                        </tr>
                        <tr>
                            <th>Updated Date</th>
                            <td id="modal_created_date"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Code End -->
</main>

<script>
    function filtertable() {
        var from = $('#datepicker_from').val();
        var to = $('#datepicker_to').val();
        if (from != '' && to != '') {
            $.ajax({
                url: '<?php echo base_url(); ?>Admin/filtertable',
                type: 'POST',
                data: {
                    from: from,
                    to: to
                },
                error: function() {
                    alert('Something is wrong');
                },
                success: function(data) {
                    $("#ajaxtable").html(data);

                }
            });

        }
    }


    function confirmdelete(id) {
        var st = confirm("Are You sure delete User");
        if (st) {
            window.location.href = '<?php echo base_url(); ?>Admin/noticedelete/' + id;

        }
    }
</script>
<script>
    function viewNotice(row) {
        document.getElementById('modal_regarding').innerText = row.regarding;
        document.getElementById('modal_notice').innerText = row.notice;
        document.getElementById('modal_added_by').innerText = row.added_by;
        document.getElementById('modal_status').innerText = row.status == 1 ? 'Active' : 'Inactive';
        document.getElementById('modal_created_date').innerText = row.created_date;
    }
</script>
<!--end page main-->