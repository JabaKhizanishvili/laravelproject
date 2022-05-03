
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VipTrade</title>
    <link rel="stylesheet" href="{{ URL::asset('styles.css'); }} " />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>
  <body>
    <section class="hero_section">
      <div class="wrapper">
        <a href="#">
          <img src="img/logo/1.png" alt="" />
        </a>
      </div>
      <main>
   @yield('main')

      </main>
    <footer>
      <a href="#">
        <img src="img/logo/2.png" alt="" />
      </a>
      <div class="flex centered">
        <a href="#">
          <img src="img/sm/fb.svg" alt="" />
        </a>
        <a href="#">
          <img src="img/sm/ig.svg" alt="" />
        </a>
      </div>
      <div>შპს "თრეიდ ჰოლდინგი"</div>
      <div>ვაჭრობა მოიცავს რისკებს</div>
    </footer>
  </body>
</html>
