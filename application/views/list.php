<div class="body">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs tab-nav-right" role="tablist">
        <li role="presentation" class="active"><a href="#home" data-toggle="tab" aria-expanded="false">ATTENDANCE</a></li>
        <li role="presentation" class=""><a href="#profile" data-toggle="tab" aria-expanded="false">ABSENCE</a></li>
        <li role="presentation" class=""><a href="#messages" data-toggle="tab" aria-expanded="false">EXPENSE</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade active in" id="home">
            <b>&nbsp</b>
            <p>
            <div class="body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Office: activate to sort column ascending">BEGIN DATE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Age: activate to sort column ascending">BEGIN IP</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-label="Start date: activate to sort column ascending">END DATE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 146px;" aria-label="Salary: activate to sort column ascending">END IP</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php echo $tbl_attendance; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </p>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="profile">
            <b>&nbsp;</b>
            <p>
            <div class="body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Office: activate to sort column ascending">BEGIN DATE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Age: activate to sort column ascending">END DATE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-label="Start date: activate to sort column ascending">MOTIVE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 146px;" aria-label="Salary: activate to sort column ascending">STATUS</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php echo $tbl_absence; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </p>
        </div>
        <div role="tabpanel" class="tab-pane fade " id="messages">
            <b>&nbsp</b>
            <p>
            <div class="body">
                <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 188px;" aria-label="Office: activate to sort column ascending">DATE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 98px;" aria-label="Age: activate to sort column ascending">AMOUNT</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-label="Start date: activate to sort column ascending">MOTIVE</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 176px;" aria-label="Start date: activate to sort column ascending">RECEIPTS</th>
                                    </thead>
                                    <tbody>
                                    <?php echo $tbl_expense; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>