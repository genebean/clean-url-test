<h1>Clean URL Test</h1>
<p>
  The links below demonstrate the use of a set of rewrite rules to make URL's
  static and search engine optimized.
</p>
<h2>These links should all work:</h2>
<ul>
  <li><a href="/profile/jdoe">/profile/jdoe</a></li>
  <li><a href="/profile/qdoe2">/profile/qdoe2</a></li>
  <li><a href="/profile/bean_bot-1-23">/profile/bean_bot-1-23</a></li>
  <li><a href="/page1/profile/bean_bot-1-23">/page1/profile/bean_bot-1-23</a></li>
  <li><a href="info.php">info.php</a></li>
</ul>
<h2>These links should give a 404:</h2>
<ul>
  <li><a href="/profile/not/at/end/jdoe">/profile/not/at/end/jdoe</a></li>
  <li><a href="/profile/jdoe&ampbob=dole">/profile/jdoe&amp;bob=dole</a></li>
  <li><a href="/profile/?jdoe&bob=dole">/profile/?jdoe&amp;bob=dole</a></li>
</ul>
