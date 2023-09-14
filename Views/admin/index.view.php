<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 style="margin-top: 80px;"><?= $view_bag['heading']; ?></h1>
        </div>
    </div>
    <div class="row d-flex justify-content-end mb-3">
        <form action="" method="GET" class="form-inline">
            <input type="text" name="search" id="search">
            <input type="submit" value="Search">
        </form>
    </div>
    <div class="row">
        <table class="table table-striped">
        <?php foreach($model as $item) :?>
                <tr>
                    <td><a href="detail.php?term=<?= $item->term ?>"><?= $item->term ?></a></td>
                    <td><?= $item->definition ?></td>
                </tr>
            <?php endforeach; ?>
        </table>                  
    </div>
</div>
