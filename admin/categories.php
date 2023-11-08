<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Administrator Panel
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">
                            <form action="" class="">
                                <div class="form-group">
                                    <label for="cat-title" class=""> Add Category </label>
                                    <input class="form-control" type="text" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div>


                        <div class="col-xs-6">
                        <?php 

                
                            $query = "SELECT * FROM category";
                            $select_categories_sidebar = mysqli_query($connection, $query);
                      

                        ?>



                        <table class="table table-boardered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                
                                while($row = mysqli_fetch_assoc($select_categories_sidebar)){
                                    $cat_title = $row['cat_title'];
                                    $cat_id = $row['cat_id'];
                                    echo "<tr>";
                                    echo "<td>{$cat_id}</td>";
                                    echo "<td>{$cat_title}</td>";
                                    echo "</tr>";
                                }


                                ?>
                                <tr>
                                    <td>Info 1</td>
                                    <td>Info 2</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>



                        <!-- usunac w przyszlosci ? ol -->
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>
