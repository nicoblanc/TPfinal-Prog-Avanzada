<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 13/2/2017
 * Time: 8:36 PM
 */

if (isset($msj))
    echo($msj);

?>
<div class="container">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#data">Datos</a></li>
    <li><a data-toggle="tab" href="#items">Items</a></li>
    <!--<li><a data-toggle="tab" href="#items">Menu 3</a></li>-->
</ul>

<div class="tab-content">
    <div id="data" class="tab-pane fade in active">
        <h3>Datos</h3>
        <p>Some content.</p>
    </div>
    <div id="items" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
        <h3>Menu 2</h3>
        <p>Some content in menu 2.</p>
    </div>
</div>
</div>

