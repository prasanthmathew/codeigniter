<div class="container">

    <!-- Dashboard Wrapper Start -->

    <div class="dashboard-wrapper">

        <!-- Left Sidebar Start -->
        <div class="left-sidebar">

            <!-- Row Start -->
            <div class="row">
                <section class="panel">
                    <header class="panel-heading">
                        Users 
                        <i data-title="ajax to load the data." data-placement="bottom" data-toggle="tooltip" class="fa fa-info-sign text-muted" data-original-title="" title=""></i> 
                    </header>
                    <div class="table-responsive">
                        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_0_wrapper"><div class="row"><div class="col-sm-6"><div id="DataTables_Table_0_length" class="dataTables_length"><label>Show <select name="DataTables_Table_0_length" size="1" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div><div id="DataTables_Table_0_processing" class="dataTables_processing" style="visibility: hidden;">Processing...</div></div>
                            <?php
                            if (isset($query) && count($query->result())) {
                                $c = $this->uri->segment(3, 0) + 1;
                                ?>
                                <table  class="table table-striped" id="" >
                                    <thead>
                                        <tr>
                                            <?php
                                            $arrlength = count($tbl_header);
                                            for ($x = 0; $x < $arrlength; $x++) {
                                                ?>
                                                <th><?php echo $tbl_header[$x]; ?></th>
                                            <?php }
                                            ?>
                                        </tr>
                                    </thead>

                                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <?php foreach ($query->result() as $q) { ?>
                                            <tr class="<?php echo $c % 2 == 0 ? 'even' : 'odd'; ?>">
                                                <td><?php echo $c; ?></td>
                                                <td><?php echo $q->last_name; ?></td>                        

                                                <td><?php echo $q->email; ?></td> 
                                                <td>
                                                    <a href="<?php echo site_url($action_url . 'update'); ?>/<?php echo $q->id; ?>"><i class="fa fa-pencil"></i> &nbsp;Edit</a>
                                                </td>
                                                <td class="col-lg-2">
                                                    <?php //if() ?><a href="<?php echo site_url($action_url . 'delete'); ?>/<?php echo $q->id; ?>" onclick = "return confirm('Do you want to continue ?');" > <i class ="fa fa-trash-o"></i> &nbsp;Delete</a>
                                                    <?php ?></td>
                                            </tr>

                                            <?php $c++; ?>
                                        <?php } ?>
                                    </tbody></table>
                                <div class="row"><div class="col-sm-6">
                                            </div><div class="col-sm-6">
                                        <div class="paging_bootstrap_alt pull-right pagination_custpad">
                                            <?php echo $links; ?>
                                        </div>
                                    </div></div></div>
                            <?php
                        } else {
                            //echo "No Users found";
                            echo '<div class="norecord">' . $this->lang->line('user_no_records') . '</div>';
                        }
                        ?>
                    </div>
                </section>

            </div>
            <!-- Row End -->




        </div>
        <!-- Left Sidebar End -->

    </div>
</div>

