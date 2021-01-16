<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Your Class Diagram History</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">History</li>
            </ol>
        </div>
    </div>

    <?php $msg = $this->session->flashdata('msg'); ?>
    <?php if (isset($msg)): ?>
        <div class="alert alert-success delete_msg pull" style="width: 100%"> <i class="fa fa-check-circle"></i> <?php echo $msg; ?> &nbsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
    <?php endif ?>

    <?php $error_msg = $this->session->flashdata('error_msg'); ?>
    <?php if (isset($error_msg)): ?>
        <div class="alert alert-danger delete_msg pull" style="width: 100%"> <i class="fa fa-times"></i> <?php echo $error_msg; ?> &nbsp;
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
        </div>
    <?php endif ?>

    <div class="row">
        
        <div class="table-responsive m-t-40">
            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Id Solid</th>
                        <th>Date Update</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($idsolid as $row) {?>            
                    <tr>
                        <td><?php echo $row['id_solid']; ?></td>
                        <td><?php echo my_date_show_time($row['updated_at']); ?></td>            
                        <td class="text-nowrap">
                            <a href="<?php echo base_url('user/history_edit/edit/'.$row['id_solid']) ?>" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-success m-r-10"></i> </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div> 

    </div>

    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

