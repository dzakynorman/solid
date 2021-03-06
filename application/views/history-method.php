

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Method</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('user/history_edit') ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit Method</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">

                
            </div>
        </div>
    </div>
    
    <!-- End Bread crumb and right sidebar toggle -->
    

    
    <!-- Start Page Content -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('user/history_edit/updateMethod/'.$method->id_nom) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">method <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="method" class="form-control" value="<?php echo $method->method; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">param <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="param" class="form-control" value="<?php echo $method->param; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                           


                            <!-- CSRF token -->
                            <input type="hidden" name="<?=$this->security->get_csrf_token_name();?>" value="<?=$this->security->get_csrf_hash();?>" />

                            
                            <hr>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3"></label>
                                        <div class="controls">
                                            <button type="submit" class="btn btn-success">Update</button>
                                            <button onclick="goBack()">Go Back</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- End Page Content -->

</div>
<script>
function goBack() {
  window.history.back();
}
</script>