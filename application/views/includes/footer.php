<footer id="footer">
    <div class="container" role="contentinfo">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url()?>Welcome/contact" rel="nofollow" target="ext" class="pull-right">Contact Us</a><br>
                        <a href="<?php echo base_url()?>Welcome/index#myFeedBackModal" data-toggle="modal" rel="nofollow" target="ext" class="pull-right">FeedBack</a>
                        <ul class="list-inline">
                            <li><a href="https://plus.google.com/s/gaonkarvg" title="gaonkarvg on Google Plus"
                                   target="ext" rel="nofollow"><i class="fa fa-google-plus fa-2x"></i></a></li>
                            <li><a href="https://plus.google.com/s/gaonkarvg" title="gaonkarvg on Google Plus"
                                   target="ext" rel="nofollow"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="https://twitter.com/gaonkarvg" class="twitter-follow-button"
                                   data-show-count="true" data-lang="en">@gaonkarvg</a></li>
                            <li><a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"
                                   data-show-count="true" data-url="http://gaonkarvg.com"
                                   data-related="gaonkarvg"
                                   data-text="@gaonkarvg: Incredible free templates and themes for Bootstrap 3">gaonkarvg</a>
                            </li>
                            <script>!function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (!d.getElementById(id)) {
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "https://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }
                            }(document, "script", "twitter-wjs");</script>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline">
                            <li><a href="<?php echo site_url()?>Welcome/index"" title="Official Bootstrap Site" rel="nofollow">Home</a></li>
                            <li><a href="<?php echo site_url()?>Welcome/gallery"" title="Showcase of Bootstrap excellence" rel="nofollow">Gallery</a></li>
                            <li><a href="" title="Download free Bootstrap themes, templates and snippets"
                                   rel="nofollow" target="ext">Aboutus</a></li>
                            <li><a href="#" rel="nofollow" target="ext">Model Question Paper</a></li>
                            <li><a href="#" title="Bootstrap Editor and playground" rel="nofollow"
                                   target="ext">Signup</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myFeedBackModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Leave Message</h4>
                        </div>
                        <div class="modal-body">
                            <p style="color: #354db6">Name.</p>
                            <input type="text" name="name" placeholder="Name" autocomplete="off" class="form-control placeholder-no-fix">
                            <p style="color: #354db6">Email.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                            <p style="color: #354db6">Enter your Contact Number.</p>
                            <input type="text" name="contactno" placeholder="Contact number" autocomplete="off" class="form-control placeholder-no-fix">
                            <p style="color: #354db6">Message.</p>
                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-primary btn-default" type="button">Cancel</button>
                            <button class="btn btn-primary btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-12">
                <p class="text-right">
                    Cpoyright Protected &copy; - 2015.
                </p>
            </div>
        </div>
        <!--/row-->
    </div>
</footer>

<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/tree.jquery.js"></script>
</body>
</html>