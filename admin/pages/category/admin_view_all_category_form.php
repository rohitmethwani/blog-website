
<div class="row mt-4">
    <div class="col-md-8 offset-md-2">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $categories = getAllCategories();
                $i = 0;
                while($i < count($categories))
                {
                    echo "<tr>";
                    echo "<td>{$categories[$i]["cat_id"]}</td>";
                    echo "<td>{$categories[$i]["cat_name"]}</td>";
                    echo "<td><a href='{$_SERVER['PHP_SELF']}?id={$categories[$i]["cat_id"]}'>Edit</a></td>";
                    echo "<td><a href='includes/admin_delete_data.php?cat_id={$categories[$i]["cat_id"]}'>Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>