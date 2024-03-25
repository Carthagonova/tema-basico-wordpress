<?php
header('HTTP/1.0 404 not found');
//http_response_code(404);
echo '<!-- 404 from index -->';
include('404.php'); // provide your own HTML for the error page
die();
// De esta forma cuando una web no exista nos la da en blanco. Ya haremos variables si queremos un custom post
?>
