<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-info"> <?php echo($this->session->flashdata('message')) ?> </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Create </b></div>
                    <div class="panel-body">
                        <div class="row">

                            <?php echo form_open_multipart('admin/commercial_vehicles/update_category_form') ?>
                            <input type="hidden"
                                   value="<?php echo (isset($category_items['id'])) ? $category_items['id'] : '' ?>"
                                   name="id">

                            <div class="form-group" style="width:845px;">
                                <span><b>Category Name:</b></span>
                                <input class="form-control" type="text"
                                       value="<?php echo $category_items['category'] ?>"
                                       name="category">
                            </div>
                            <button class="btn btn-success"> ADD</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
