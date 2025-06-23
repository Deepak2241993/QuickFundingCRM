<!--start content-->
<main class="page-content">
  <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">

    <?php if ($this->session->userdata('type') == 'Manager') { ?>
      <div class="col">
        <div class="card overflow-hidden radius-10">
          <div class="card-body">
            <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
              <div class="w-50">
                <p>Total Agent</p>
                <h4 class=""><?= $getcount['agent'] ? $getcount['agent'] : 0; ?></h4>
              </div>
              <div class="w-50">
                <p class="mb-3 float-end text-danger"></p>
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card overflow-hidden radius-10">
          <div class="card-body">
            <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
              <div class="w-50">
                <p>Total Leads of Team</p>
                <h4 class=""><?= $getcount['manager_lead'] ? $getcount['manager_lead'] : 0; ?></h4>
              </div>
              <div class="w-50">
                <p class="mb-3 float-end text-danger"></p>
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <?php } ?>


    <?php if ($this->session->userdata('type') == 'Agent') { ?>
      <div class="col">
        <div class="card overflow-hidden radius-10">
          <div class="card-body">
            <div class="d-flex align-items-stretch justify-content-between overflow-hidden">
              <div class="w-50">
                <p>Total Leads</p>
                <h4 class=""><?= $getcount['agent_lead'] ? $getcount['agent_lead'] : 0; ?></h4>
              </div>
              <div class="w-50">
                <p class="mb-3 float-end text-danger"></p>
                <div id="chart2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
  <?php if ($this->session->userdata('type') == 'SuperAdmin') { ?>
    <div class="row">

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <div id="loanChart"></div>
          </div>
        </div>
      </div>
      <!-- Lead Chart -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">

            <div id="leadChart"></div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-12 col-lg-12 col-xl-12 d-flex">
      <div class="card">
        <h4 class="m-4">Latest Leads</h4>
        <div class="card-body">


          <div class="table-responsive">
            <table id="<?php if ($this->session->userdata('type') != 'Agent') {
                          echo "";
                        } ?>" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Sr No.</th>
                  <th>Date</th>
                  <th>Agent Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>User Phone</th>
                  <th>Loan Purpose</th>
                  <th style="width:50px;">Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $i = isset($current_page) && $current_page > 1 ? (($current_page - 1) * $per_page + 1) : 1;
                foreach ($latest_leads as $row) {
                ?>
                  <tr>
                    <td> <?= $i ?></td>
                    <td> <?= date('d-m-Y', strtotime($row->created_at)) ?></td>
                    <td><?= $row->agent_name ?></td>
                    <td><?= $row->name ?></td>

                    <td><?= $row->email ?></td>
                    <td><?= $row->phone ?></td>

                    <td><?= $row->purpose_of_loan ?></td>
                    <?php if (($this->session->userdata('type') == 'SuperAdmin' || $this->session->userdata('type') == 'Manager') && $row->status != 3) { ?>
                      <td id="statustd_<?= $row->id; ?>">
                        <select class="form-select mb-3 auto-width-select" 
                                name="status" 
                                onchange="updatestatus(<?= $row->id ?>, this); adjustSelectWidth(this);"
                                style="background: <?= 
                                  ($row->status == 2) ? '#2d37afbf' : 
                                  (($row->status == 3) ? '#009966' : 
                                  (($row->status == 4) ? '#f9058ceb' : '#990000bf')); ?>; color: #FFF;">
                          
                          <option value="">Select Status</option>
                          <option value="1" <?= ($row->status == 1) ? 'selected' : '' ?>>Not Approved</option>
                          <option value="2" <?= ($row->status == 2) ? 'selected' : '' ?>>In progress</option>
                          <option value="3" <?= ($row->status == 3) ? 'selected' : '' ?>>Approved</option>
                          <option value="4" <?= ($row->status == 4) ? 'selected' : '' ?>>Setteled</option>
                        </select>
                      </td>

                    <?php } else { ?>
                      <td id="statustd_<?= $row->id; ?>">
                        <select class="form-select mb-3 wide-select" <?php if ($row->status == 2) {
                                                                        echo "style='background: #2d37afbf; color: #FFF;'";
                                                                      } else if ($row->status == 3) {
                                                                        echo "style='background: #009966; color: #FFF;'";
                                                                      } else if ($row->status == 4) {
                                                                        echo "style='background:#f9058ceb; color: #FFF;'";
                                                                      } else {
                                                                        echo "style='background: #990000bf; color: #FFF;'";
                                                                      } ?> aria-label="Default select example" name="status">
                          <option value="">No Action</option>
                          <option value="1" <?php if ($row->status == 1) { ?> selected <?php } ?>>Not Approved</option>
                          <option value="2" <?php if ($row->status == 2) { ?> selected <?php } ?>>In progress</option>
                          <option value="3" <?php if ($row->status == 3) { ?> selected <?php } ?>>Approved</option>
                          <option value="4" <?php if ($row->status == 4) { ?> selected <?php } ?>>Setteled</option>
                        </select>
                      </td>
                    <?php } ?>

                    <!--<td></td>-->
                    <td>
                      <div class="table-actions d-flex align-items-center gap-3 fs-6">
                        <!--<a href="<?php echo base_url(); ?>Admin/viewdeatails/<?= $row->id; ?>" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a>-->
                        <a href="<?php echo base_url(); ?>Admin/LeadEdit/<?= $row->id; ?>" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit"><i class="bi bi-pencil-fill"></i></a>
                        <?php if ($this->session->userdata('type') == 'SuperAdmin') { ?>
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
                  <th>Date</th>
                  <th>Agent Name</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>User Phone</th>
                  <th>Loan Purpose</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    </div>



    </div>
    </div>




  <?php } ?>







</main>

<script>
  const loanPercentData = <?= json_encode(array_values($loan_percent)) ?>;
  const loanLabels = <?= json_encode(array_keys($loan_percent)) ?>;
  // For Leads
  const leadPercentData = <?= json_encode(array_values($lead_percent)) ?>;
  const leadLabels = <?= json_encode(array_keys($lead_percent)) ?>;
</script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
  const options = {
    chart: {
      type: 'donut'
    },
    series: loanPercentData,
    labels: loanLabels,
    colors: ['#4caf50', '#f44336', '#2196f3', '#ff9800', '#9e9e9e'],
    title: {
      text: 'Loan Status Overview'
    }
  };

  const chart = new ApexCharts(document.querySelector("#loanChart"), options);
  chart.render();


  // For Leads
  const leadChartOptions = {
    chart: {
      type: 'donut'
    },
    series: leadPercentData,
    labels: leadLabels,
    title: {
      text: 'Lead Status Overview'
    },
    colors: ['#4caf50', '#f44336', '#2196f3', '#ff9800', '#9e9e9e']
  };
  new ApexCharts(document.querySelector("#leadChart"), leadChartOptions).render();
</script>
<script>
function adjustSelectWidth(el) {
  const tempSpan = document.createElement('span');
  tempSpan.style.visibility = 'hidden';
  tempSpan.style.whiteSpace = 'nowrap';
  tempSpan.style.font = window.getComputedStyle(el).font;
  tempSpan.innerText = el.options[el.selectedIndex].text;

  document.body.appendChild(tempSpan);
  el.style.width = (tempSpan.offsetWidth + 40) + 'px'; // extra padding for arrow
  document.body.removeChild(tempSpan);
}

// Auto adjust width on page load
document.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.auto-width-select').forEach(function(select) {
    adjustSelectWidth(select);
  });
});
</script>

<!--end page main-->