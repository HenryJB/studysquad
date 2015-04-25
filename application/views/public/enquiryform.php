<?php 	$this->load->view("includes/header");?>
<!--Main Content Goes Here-->
<div class="container">
    <div class="col-lg-offset-2 col-lg-7">
    	<?php echo validation_errors('<p class="error">')?>
        <form class="form-horizontal" action="send_enquiry" method="post">
            <fieldset>
                <legend>Enquiry Form</legend>
                <div class="form-group">
                    <label for="inputName" class="col-lg-3 control-label">Name *</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="inputName"  id="inputName" placeholder="Name" required value="<?=set_value('inputName')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-3 control-label">Phone No *</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Phone No" required value="<?=set_value('phoneNumber')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContactNo" class="col-lg-3 control-label">Email *</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" name="emailId" id="emailId" placeholder="Email" required value="<?=set_value('emailId')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContactNo" class="col-lg-3 control-label">SSLC Marks</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="sslcMarks" id="sslcMarks" placeholder="SSLC Marks" required value="<?=set_value('sslcMarks')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContactNo" class="col-lg-3 control-label">PU Marks</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="puMarks" id="puMarks" placeholder="PU Marks" required value="<?=set_value('puMarks')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContactNo" class="col-lg-3 control-label">Graduation Marks</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="graduationMarks" id="graduationMarks" placeholder="Graduation Marks" required value="<?=set_value('graduationMarks')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputContactNo" class="col-lg-3 control-label">Board/ University</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="universityBoard" id="universityBoard" placeholder="Board/ University" required value="<?=set_value('universityBoard')?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-3 control-label">Interest In Course</label>
                    <div class="col-lg-9">
                        <select class="form-control" id="course" name="course"> 
                            <option value="">Select course... </option>
                            <option value="Engineering">Engineering</option>
                            <option value="Medical">Medical</option>
                            <option value="MBA">MBA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-3 control-label">Address</label>
                    <div class="col-lg-9">
                        <textarea class="form-control" rows="3" id="address" name="address"><?=set_value('address')?></textarea>
                        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
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

<!--Main content Ends Here-->
<?php 	$this->load->view("includes/footer");?>