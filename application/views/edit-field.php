

<!-- Container fluid  -->

<div class="container-fluid">
    
    <!-- Bread crumb and right sidebar toggle -->
    
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Field</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('user/dashboard/index') ?>">Home</a></li>
                <li class="breadcrumb-item active">Edit Field</li>
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
                    <form method="post" action="<?php echo base_url('user/dashboard/updateField/'.$field->id_field) ?>" class="form-horizontal" novalidate>
                        <div class="form-body">
                            <br>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">name field <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="name_field" class="form-control" value="<?php echo $field->name_field; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">type data <span class="text-danger"></span></label>
                                        <div class="col-md-9 controls">
                                            <input type="text" name="typedata" class="form-control" value="<?php echo $field->typedata; ?>">
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
                                            <a href="<?php echo base_url('user/dashboard') ?>" class="btn btn-danger">Cancel</a>
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