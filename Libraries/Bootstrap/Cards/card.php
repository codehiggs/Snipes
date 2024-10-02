<?php
//[card]---------------------------------------------------------------------------------------------------------------
$card = $bootstrap->get_Card("card-view-service", array(
    "title" => lang('Components.list-title'),
    "header-back" => $back,
    "content" => $code,
));
echo($card);
?>
