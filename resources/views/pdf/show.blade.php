<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF</title>
  </head>
  <body>
      <h1>{{ ucfirst($forum->title) }}</h1>
      <hr>
      <p>{!! $forum->body !!}</p>
      <hr>  
  </body>
</html>