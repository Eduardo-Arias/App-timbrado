<div class="row">
    <div class="col-md-2">
    <?php require_once 'menu_sat.php' ?>
    </div>
    <div class="col-md-10">
    <?php  if (!empty($childPage)) { require_once $childPage.".php";; }  ?>
    </div>
</div>

