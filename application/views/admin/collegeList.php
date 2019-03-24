
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="pd-30">
        <h4 class="tx-gray-800 mg-b-5">College List</h4>
        <p class="mg-b-0">Super admin manages the colleges add or delete.</p>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">College Name</th>
                  <th class="wd-15p">Principle</th>
                  <th class="wd-20p">Area</th>
                  <th class="wd-15p">Start date</th>
                  <th class="wd-10p">Payment</th>
                  <th class="wd-25p">E-mail</th>
                </tr>
              </thead>
              <tbody>
			  <?php foreach ($colleges as $college) { ?>
			<tr>
                  <td><?= $college->college_name; ?></td>
                  <td><?= $college->priniciple_name; ?></td>
                  <td><?= $college->country; ?></td>
                  <td><?= $college->created_date; ?></td>
                  <td>$327,900</td>
                  <td><?= $college->college_email; ?></td>
                </tr>
			  <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->


        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
	  