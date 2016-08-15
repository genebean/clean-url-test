<?php
if (count($_GET) === 1) {
  $qs = [];

  foreach($_GET as $key => $value)
  {
    array_push($qs, "$key=$value");
  }

  $qs_formatted = "?" . implode('&', $qs);
} else {
  http_response_code(404);
  echo readfile($_SERVER['DOCUMENT_ROOT'] . '/error/oops.html');
  exit();
}

?>

<h1>Clean URL Test Page</h1>
<p>
  You went to <em><?php echo $_SERVER[REQUEST_URI] ?></em> but are seeing the
  output of <em><?php echo $_SERVER["PHP_SELF"]; echo $qs_formatted ?></em>
</p>
<p>
  This is possible thanks to the following rewrite rules:
  <pre>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^profile/([-_\w]*)$ /profile/index.php?email=$1 [L]
    RewriteRule ^.*/profile/([-_\w]*)$ /profile/index.php?email=$1 [L]
  </pre>
</p>

<p><a href="/">Home</a></p>
