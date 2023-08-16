
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 style="margin-top: 80px;">Glossary</h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <?php
                foreach($model as $item) {
                    $term = $item->term;
                    $definition = $item->definition;

                    echo "<tr><td>$term</td><td>$definition</td></tr>";
                }
            ?>
        </table>                  
    </div>
</div>
