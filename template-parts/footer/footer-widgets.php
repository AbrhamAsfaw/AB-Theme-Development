<?php
/**
 * Displays footer widgets if assigned
 */

?>

<div class="container-fluid">
                <div class="row">
                    <div class="col">
                    <?php
                    if(is_active_sidebar('footer-1')){
                    dynamic_sidebar('footer-1');
                    }
                    ?>
                    </div>
                    <div class="col">
                        <?php
                        if(is_active_sidebar('footer-2')){
                        dynamic_sidebar('footer-2');
                        }
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        if(is_active_sidebar('footer-3')){
                        dynamic_sidebar('footer-3');
                        }
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        if(is_active_sidebar('footer-4')){
                        dynamic_sidebar('footer-4');
                        }
                        ?>
                    </div>
</div>  
