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
                            <li class="active">Slider List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                <div class="col-lg-8">
                    <a href="slider_create.php" class="btn btn-primary">Create Slider Image</a>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Slider List</strong>
                        </div>
                        <div class="card-body">
                            <table class="table">
                             <!--  <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">First</th>
                                  <th scope="col">Last</th>
                                  <th scope="col">Handle</th>
                              </tr>
                          </thead> -->
                          <tbody>
                            <?php

$sql = "SELECT * FROM images";
$result = mysqli_query($conn,$sql);

?>

    <?php while($row = mysqli_fetch_array($result)): ?>
    <tr>
    <td><?php echo $row['name'];  ?></td>
    <td><img src='<?php echo "upload/".$row['name'];  ?>' alt="<?php echo $row['name'];  ?>"></td>
    <td><a href="slider_delete.php?id=<?php echo $row['id'] ?>">Delete</a></td>
    </tr>
    <?php endwhile ?>
                          
                      </tbody>
                  </table>
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
