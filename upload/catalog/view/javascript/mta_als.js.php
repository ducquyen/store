<?php

if(!isset($_GET['t']) || preg_match("/[^\w\-\.]+/", $_GET['t'])) die();
header('Content-Type: text/javascript');
?>
(function($){$(document).ready(function(){var _v='<div class="alert"><div class="text-right"><a href="javascript:;" onclick="javascript:$(this).parent().parent().find(\'.aff-link\').toggle();"><img src="catalog/view/theme/default/image/link.png" /></a></div><div class="text-right aff-link" style="display:none;padding-bottom:3px;color:#c43;">'+document.location.href+(document.location.href.indexOf('?')==-1?'?':'&amp;')+'tracking=<?php echo $_GET['t'];?> &nbsp; </div></div>';$('footer>.container>.row').length>0?$('footer>.container>.row').prepend(_v):$('body').append(_v);});})(jQuery&&jQuery.ready?jQuery:$);
