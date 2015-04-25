<?php $this->load->view("admin_includes/header");?>
<!--Main Content Goes Here-->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <?php $this->load->view("admin_includes/sidemenu");?>
        </div>
        <div class="col-lg-8">
            <h2>Carousel Images</h2>
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                    <th>Column heading</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td><a href="#" class="btn btn-primary btn-sm">Edit</a></td>
                </tr>
                </tbody>
            </table>
            <div class="col-lg-offset-4 row">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--Main content Ends Here-->
<?php $this->load->view("admin_includes/footer");?>