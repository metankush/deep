<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if (! empty($_POST["id"])) {
    $query = "SELECT * FROM project_subcategory_tbl WHERE project_category_id = '" . $_POST["id"] . "'";
    $results = $db_handle->runQuery($query);
    ?>
<option value disabled selected>Select Sub Category</option>
<?php
    foreach ($results as $state) {
        ?>
<option value="<?php echo $state["id"]; ?>"><?php echo $state["subcategory_name"]; ?></option>
<?php
    }
}
?>