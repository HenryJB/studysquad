<?php 	$this->load->view("includes/header");?>
<!--Main Content Goes Here-->
<div class="container">
    <div class="col-lg-10">
        <form class="form-horizontal" action="send_contact" method="post">
            <fieldset>
                <legend>Contact Us</legend>
                <div class="row">
                	<?php echo validation_errors('<p class="error">')?>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">First Name</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="firstName"  id="firstName" placeholder="First name" value="<?=set_value('firstName')?>" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>

                            <div class="col-lg-10">
                                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last name" value="<?=set_value('lastName')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email Address</label>

                            <div class="col-lg-10">
                                <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" value="<?=set_value('inputEmail')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-2 control-label">Subject</label>

                            <div class="col-lg-10">
                                <select class="form-control" id="subject" name="subject" > 
                                	<option value="">Select subject...</option>
                                    <option value="Exams and events">Exams and events</option>
                                    <option  value="Management Seat">Management Seat</option>
                                    <option value="Seat">Seat</option>
                                    <option value="Governemnt seat">Governemnt seat</option>
                                    <option value="Scholorship">Scholorship</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="select" class="col-lg-2 control-label">Message</label>

                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="10" id="message" name="message"><?=set_value('message')?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<!--Main content Ends Here-->
<?php 	$this->load->view("includes/footer");?>