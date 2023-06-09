<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>Laravel - @yield('title')</title>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Blade Template</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                  <li class="nav-item">
                    <a class="nav-link" href="/">home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/students">student</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/classroom">Class</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/ukm">Ukm</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/dosen">Dosen</a>
                  </li>
                </ul>
                <ul class="nav-bar">
                    <li class="nav-item">
                      <a class="nav-link bg-light"  href="/logout  ">logOut</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    @yield('content')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>