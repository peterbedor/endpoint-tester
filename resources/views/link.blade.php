<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    @for ($i = 0; $i < $links; $i++)
      <a href="/links/{{ $i }}">{{ $i }}</a>
    @endfor
  </body>
</html>