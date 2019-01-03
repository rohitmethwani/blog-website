<div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
        <h5 class="card-header">Search</h5>
        <div class="card-body">
            <form action="index.php" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." name="search">
                    <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit" value="search">Go!</button>
                </span>
                </div>
            </form>
        </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Categories</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <?php
                            include_once ("functions.php");
                            $categories = getAllCategories();
                            $i = 0;
                            for($i = 0; $i < ceil(count($categories)/2); $i++)
                            {
                                echo <<< LINK
                                <li>
                                    <a href="index.php?cat_id={$categories[$i]['cat_id']}">{$categories[$i]["cat_name"]}</a>
                                </li>
LINK;
                            }
                        ?>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <?php
                        include_once ("functions.php");
                        $categories = getAllCategories();
                        $i = 0;
                        for($i = ceil(count($categories)/2); $i < count($categories); $i++)
                        {
                            echo <<< LINK
                                <li>
                                    <a href="index.php?cat_id={$categories[$i]['cat_id']}">{$categories[$i]["cat_name"]}</a>
                                </li>
LINK;
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Side Widget -->
    <div class="card my-4">
        <h5 class="card-header">Side Widget</h5>
        <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
        </div>
    </div>

</div>