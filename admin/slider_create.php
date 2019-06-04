<?php include("meta.php"); ?>

<?php include("sidebar.php"); ?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
<?php include("header.php"); ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="../admin/">Dashboard</a></li>
                            <li class="active">Slider Image Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Slider Image Form</strong>
                      </div>
                      <div class="card-body card-block">
                        <form action="slider_store.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Image Input</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="file" class="form-control-file"></div>
                          </div>
                          <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm" name="upload">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                      </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>
                </div>


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
