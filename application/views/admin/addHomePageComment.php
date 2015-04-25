<?php $this->load->view("admin_includes/header");?>
<!--Main Content Goes Here-->
<div class="container">
    <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="col-lg-offset-2 col-lg-7">
            <form class="form-horizontal">
                <fieldset>
                    <legend>Add Home Page Comment</legend>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Name *</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Place *</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="logo" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">comment *</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="url" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-9 col-md-offset-3">
                            <button class="btn btn-default">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>

<!--Main content Ends Here-->
<?php $this->load->view("admin_includes/footer");?>