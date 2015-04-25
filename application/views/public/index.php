<?php 	$this->load->view("includes/header");?>
<!--Main Content Goes Here-->
<div class="container" style="margin-top: -0%">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url()?>images/slider1.jpg" alt="...">
                <div class="carousel-caption">
                    Slider 1
                </div>
            </div>
            <div class="item">
                <img src="<?php echo base_url()?>images/slider2.jpg" alt="...">
                <div class="carousel-caption">
                    Slider 2
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container" style="margin-top: 1%">
    <div class="row">
        <div class="col-lg-4 col-md-3 col-sm-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-arrow-circle-right fa-1x"></i> Model Question Paper</h3>
                </div>
                <div class="panel-body">
                    <div id="tree1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1">
            <a href="<?php echo base_url()?>Welcome/enquiry" class="btn btn-primary btn-sm"><i class="fa fa-list-alt fa-3x"> </i><br>Enquiry<br> Form</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1">
            <a href="<?php echo base_url()?>Welcome/universities_colleges" class="btn btn-primary btn-sm"><i class="fa fa-university fa-3x"> </i><br>University /<br>Colleges</a>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1">
            <a href="<?php echo base_url()?>Welcome/scholarships" class="btn btn-primary btn-sm"><i class="fa fa-graduation-cap fa-3x"> </i><br>Scholorship<br>Skills</a>
        </div>
        <div class="col-lg-4 col-md-2 col-sm-1 pull-right">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-newspaper-o fa-1x"></i> Latest News And Events</h3>
                </div>
                <div class="panel-body">
                    <!-- First Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span> <muted> 2 Minutes Ago</muted>
                        </div>
                        <div class="details">
                            <p>
                                <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Second Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i> </span><muted> 3 Hours Ago</muted>
                        </div>
                        <div class="details">
                            <p>
                                <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Third Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span> <muted> 7 Hours Ago</muted>
                        </div>
                        <div class="details">
                            <p>
                                <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Fourth Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span><muted> 11 Hours Ago</muted>
                        </div>
                        <div class="details">
                            <p>
                                <a href="#">Mark Twain</a> commented your post.<br/>
                            </p>
                        </div>
                    </div>
                    <!-- Fifth Action -->
                    <div class="desc">
                        <div class="thumb">
                            <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span><muted> 18 Hours Ago</muted>
                        </div>
                        <div class="details">
                            <p>
                                <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Main content Ends Here-->
<?php $this->load->view("includes/footer.php");?>