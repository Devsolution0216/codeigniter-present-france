<div class="body">
<div class="demo-masked-input">
    <div class="row clearfix">
        <!--   one     -->
        <form class="col-md-2">
            <b>&nbsp;</b>
            <div class="input-group">
<!--                <button type="button" class="btn btn-success btn-block waves-effect" data-placement-from="bottom" data-placement-align="center" data-animate-enter="" data-animate-exit="" data-color-name="alert-success">-->
<!--                    SUCCESS-->
<!--                </button>-->
                <button type="button" id="btn_punchin" class="col-md-12 btn bg-blue waves-effect" data-placement-from="top" data-placement-align="right"
                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                    <i class="material-icons">check</i>
                    <span>PUNCH IN </span>
                </button>
            </div>
        </form>
        <form class="col-md-2">
            <b>&nbsp;</b>
            <div class="input-group">
                <button type="button" id="btn_punchout" class="col-md-12 btn bg-blue waves-effect" data-placement-from="top" data-placement-align="right"
                        data-animate-enter="" data-animate-exit="" data-color-name="bg-black">
                    <i class="material-icons">check</i>
                    <span>PUNCH OUT</span>
                </button>
            </div>
        </form>

        <!--   two    -->
        <form >
            <div class="col-md-12">
                <h2 class="card-inside-title">Ask for leave</h2>
            </div>
            <div class="col-md-3">
                <b>begin</b>
                <div class="input-group">
                <span class="input-group-addon">
                        <i class="material-icons">date_range</i>
                </span>
                    <div class="form-line" id="bs_datepicker_container">
                        <input type="text" id="begin_date" class="form-control" placeholder="">
                    </div>
                    <span class="input-group-addon">to</span>
                </div>

            </div>
            <div class="col-md-3">
                <b>end</b>
                <div class="input-group">
                <span class="input-group-addon">
                        <i class="material-icons">date_range</i>
                </span>
                    <div class="form-line" id="bs_datepicker_container">
                        <input type="text" id="end_date" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <b>motive</b>
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons"> content_paste</i>
                </span>
                    <div class="form-line">
                        <input type="text" id="ab_motive" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <b>&nbsp</b>
                <div class="input-group">
                        <button type="button" id="btn_validate" class="btn bg-default btn-lg waves-effect">Validate</button>
                </div>
            </div>
        </form>
        <!--   three     -->
        <form method="post" id="myform" action="<?=base_url()?>upload" enctype="multipart/form-data">
            <div class="col-md-12">
                <h2 class="card-inside-title">Expense report</h2>
            </div>
            <div class="col-md-3">
                <b>expense name</b>
                <div class="input-group">
                <span class="input-group-addon">
                        <i class="material-icons">date_range</i>
                </span>
                    <div class="form-line" id="bs_datepicker_container">
                        <input type="text" id="expense_date" name="expense_date" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <b>expense amount</b>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="material-icons">euro_symbol</i>
                    </span>
                    <div class="form-line">
                        <input type="text" id="expense_amount" name="expense_amount" class="form-control money-euro" placeholder="Ex: 99,99 €">
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <b>motive</b>
                <div class="input-group">
                <span class="input-group-addon">
                    <i class="material-icons"> content_paste</i>
                </span>
                    <div class="form-line">
                        <input type="text" id="expense_motive" name="expense_motive" class="form-control" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div>
                    <input type="file" class="col-md-pull-0" id="profile_image" name="file" size="600" >
                    <button type="button" id="up_load" class="btn bg-default btn-lg waves-effect">Up load</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
