<?php $this->load->view("admin_includes/header");?>
<!--Main Content Goes Here-->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Admin panel</h3>
                </div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addCarousel">Add Caresoul Images</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addCollegeUniversity">Add Collage or University</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addEventsAndNews">Add Event and News</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addPageComment">Add Home Page Comment</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addReadMore">Add Read More Page Comment</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addSiteVisitorsCount">Add Site Visitor Counts</a>
                        </li>
                        <li class="list-group-item">
                            <a href="<?php echo base_url()?>admin/addUserInfo">Add User Info</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8">

        </div>
    </div>
</div>

<!--Main content Ends Here-->
<?php $this->load->view("admin_includes/footer");?>
