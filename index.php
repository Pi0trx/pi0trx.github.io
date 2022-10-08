<!doctype html>
<html lang="pl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="PiotrX">
    <meta name="description" content="Portfolio website | Web Developer | Open source Enthusiast">
    <meta name="language" content="Polish">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/addon.css">
    <script src="js/main.js"></script>

    <link rel="shortcut icon" sizes="256x256" type="image/png" href="images/logo.png">
    <title>MOVIE | Main Page</title>
  </head>
  <body>
    <header>
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" width="90" height="24">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Films</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Series</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Latest</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control form-control-dark me-2" type="search" placeholder="Search..." aria-label="Search">
            </form>
            <form class="d-flex">
              <button class="btn btn-outline-success me-2" id="login" type="button" data-bs-toggle="modal" data-bs-target="#login-pop">Login</button>
              <button class="btn btn-outline-success me-2" id="sign-up" type="button" data-bs-toggle="modal" data-bs-target="#login-pop">Sign-up</button>
            </form>
          </div>
        </div>
      </nav>
    </header>


<div class="modal fade" id="login-pop" tabindex="-1" aria-labelledby="login-popLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="login-popLabel">Error</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Login and Sign-up will coming soon...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Done</button>
      </div>
    </div>
  </div>
</div>



<style>
  .modal-content{
      background-color: var(--background-color);
      color: var(--text-color);
    }
</style>






<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/carousel-ninjago.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption text-start">
        <h1>LEGO Ninjago: Mistrzowie Spinjitzu</h1>
        <p>Kai, Jay, Cole i Zane muszą opanować swoje moce i nauczyć się posługiwać<br> bronią Spinjitzu, by ocalić krainę Ninjago, w której panoszą się ciemne siły.</p>
        <p>
          <button type="button" class="btn btn-danger btn-lg c-play">
            <img class="c-btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABJ0lEQVRoge3YO04DMRSF4WOEkp6eGhFWAB3sgZYtsAMeXTqyhmyBDYCATYQeWuhCpOSnQKMkkDDj2JqLxf3qkX3OFFe2Jeecc865jYXUBYAg6UhSV9JdCGGWnKpNwIC5B2DfOlMUYMyyMXAJdKyzNcJ6I+DYOl+tXwoAzIAhsGOdc62aApUX4NQ660oNC1RugV3rzEsiCwC8AefAlnV2SRsVqDwCPev8KQUAJkAf6JZaoGI3cjMVAJgCF7H75zgLkbrGN3shhFHTj//GJEiwbR1gAZKuY/5+nl3zeAZOWg2eqUDRY/QJODALnlDgnYKPEsUe5l6BM+usK9UEL/pCYzcaY/DzUv8BXGE5GmMANwvhWz/j53rYOtTXw9Z9cQ9bzjnnnPvPPgG5thTBSKKCEAAAAABJRU5ErkJggg==">
            Play
          </button>
          <button type="button" class="btn btn-secondary btn-lg c-info">More Info</button>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/carousel-inazuma.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption text-start">
        <h1>Inazuma Eleven</h1>
        <p>Oparty na słynnej mandze i grze wideo serial, w którym młody, utalentowany <br>bramkarz próbuje wskrzesić szkolną drużynę.</p>
        <p>
          <button type="button" class="btn btn-danger btn-lg c-play">
            <img class="c-btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABJ0lEQVRoge3YO04DMRSF4WOEkp6eGhFWAB3sgZYtsAMeXTqyhmyBDYCATYQeWuhCpOSnQKMkkDDj2JqLxf3qkX3OFFe2Jeecc865jYXUBYAg6UhSV9JdCGGWnKpNwIC5B2DfOlMUYMyyMXAJdKyzNcJ6I+DYOl+tXwoAzIAhsGOdc62aApUX4NQ660oNC1RugV3rzEsiCwC8AefAlnV2SRsVqDwCPev8KQUAJkAf6JZaoGI3cjMVAJgCF7H75zgLkbrGN3shhFHTj//GJEiwbR1gAZKuY/5+nl3zeAZOWg2eqUDRY/QJODALnlDgnYKPEsUe5l6BM+usK9UEL/pCYzcaY/DzUv8BXGE5GmMANwvhWz/j53rYOtTXw9Z9cQ9bzjnnnPvPPgG5thTBSKKCEAAAAABJRU5ErkJggg==">
            Play
          </button>
          <button type="button" class="btn btn-secondary btn-lg c-info">More Info</button>
        </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/carousel5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption text-start">
        <h1>Gwiezdne Wojny: Andor</h1>
        <p>Some representative placeholder content for the third slide.</p>
        <p>
          <button type="button" class="btn btn-danger btn-lg c-play">
            <img class="c-btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAABJ0lEQVRoge3YO04DMRSF4WOEkp6eGhFWAB3sgZYtsAMeXTqyhmyBDYCATYQeWuhCpOSnQKMkkDDj2JqLxf3qkX3OFFe2Jeecc865jYXUBYAg6UhSV9JdCGGWnKpNwIC5B2DfOlMUYMyyMXAJdKyzNcJ6I+DYOl+tXwoAzIAhsGOdc62aApUX4NQ660oNC1RugV3rzEsiCwC8AefAlnV2SRsVqDwCPev8KQUAJkAf6JZaoGI3cjMVAJgCF7H75zgLkbrGN3shhFHTj//GJEiwbR1gAZKuY/5+nl3zeAZOWg2eqUDRY/QJODALnlDgnYKPEsUe5l6BM+usK9UEL/pCYzcaY/DzUv8BXGE5GmMANwvhWz/j53rYOtTXw9Z9cQ9bzjnnnPvPPgG5thTBSKKCEAAAAABJRU5ErkJggg==">
            Play
          </button>
          <button type="button" class="btn btn-secondary btn-lg c-info">More Info</button>
        </p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




<div class="break-carousel" style="height:1.25rem;"></div>





<div class="container-sm">
  <h3><span class="m-series-text">New Releases</span></h3>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
        <div class="p-3 border bg-dark"><div class="n-container"><div class="n-zoom">
          <img src="images/ninjago-poster.jpg" alt="Avatar" class="n-image">
          <div class="n-overlay">
            <h5>LEGO Ninjago: Mistrzowie Spinjitzu</h5>
          </div>
        </div></div></div>
      </div>
    <div class="col">
      <div class="p-3 border bg-dark"><div class="n-container"><div class="n-zoom">
        <img src="images/ninjago-poster.jpg" alt="Avatar" class="n-image">
        <div class="n-overlay">
          <h5>LEGO Ninjago: Mistrzowie Spinjitzu</h5>
        </div>
      </div></div></div>
    </div>
    <div class="col">
        <div class="p-3 border bg-dark"><div class="n-container"><div class="n-zoom">
          <img src="images/ninjago-poster.jpg" alt="Avatar" class="n-image">
          <div class="n-overlay">
            <h5>LEGO Ninjago: Mistrzowie Spinjitzu</h5>
          </div>
        </div></div></div>
    </div>
    <div class="col">
        <div class="p-3 border bg-dark"><div class="n-container"><div class="n-zoom">
          <img src="images/ninjago-poster.jpg" alt="Avatar" class="n-image">
          <div class="n-overlay">
            <h5>LEGO Ninjago: Mistrzowie Spinjitzu</h5>
          </div>
        </div></div></div>
    </div>
    <div class="col">
        <div class="p-3 border bg-dark"><div class="n-container"><div class="n-zoom">
          <img src="images/ninjago-poster.jpg" alt="Avatar" class="n-image">
          <div class="n-overlay">
            <h5>LEGO Ninjago: Mistrzowie Spinjitzu</h5>
          </div>
        </div></div></div>
    </div>
    <div class="col">
      <div class="p-3 border bg-dark">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-dark">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-dark">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-dark">Row column</div>
    </div>
    <div class="col">
      <div class="p-3 border bg-dark">Row column</div>
    </div>
  </div>
</div>

<div class="break-carousel"></div>

<div class="container-sm">
  <h3><span class="m-series-text">Trending Now</span></h3>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-3 border bg-dark">
        <div class="m-container">
          <div class="m-zoom">
        <div class="cardh">
        <div class="card bg-dark">
          <a href="#">
            <img src="images/ninjagoposter.jpg" class="card-img-top m-image" alt="...">
          </a>288-162
        </div>
        <div class="card-body m-overlay">
          <a href="#" class="btn-play">
            <img class="btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg==">
            Odtwórz
          </a>
          <div class="break-main-page-hover"></div>
          <h5 class="card-title">LEGO Ninjago: Mistrzowie Spinjitzu</h5>
          <p class="card-text">Kai, Jay, Cole i Zane muszą opanować swoje moce i nauczyć się posługiwać
            bronią Spinjitzu, by ocalić krainę Ninjago, w której panoszą się ciemne siły.</p>
          <p class="card-text"><small class="text-muted">2011 | 7+ | 10 sezonów | Kreskówki</small></p>
        </div>
        </div>
      </div></div></div>
    </div>
      <div class="col">
        <div class="p-3 border bg-dark">
          <div class="m-container">
            <div class="m-zoom">
          <div class="cardh">
          <div class="card bg-dark">
            <a href="#">
              <img src="images/ninjagoposter.jpg" class="card-img-top m-image" alt="...">
            </a>
          </div>
          <div class="card-body m-overlay">
            <a href="#" class="btn-play">
              <img class="btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg==">
              Odtwórz
            </a>
            <div class="break-main-page-hover"></div>
            <h5 class="card-title">LEGO Ninjago: Mistrzowie Spinjitzu</h5>
            <p class="card-text">Kai, Jay, Cole i Zane muszą opanować swoje moce i nauczyć się posługiwać
              bronią Spinjitzu, by ocalić krainę Ninjago, w której panoszą się ciemne siły.</p>
            <p class="card-text"><small class="text-muted">2011 | 7+ | 10 sezonów | Kreskówki</small></p>
          </div>
          </div>
        </div></div></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">
          <div class="m-container">
            <div class="m-zoom">
          <div class="cardh">
          <div class="card bg-dark">
            <a href="#">
              <img src="images/ninjagoposter.jpg" class="card-img-top m-image" alt="...">
            </a>
          </div>
          <div class="card-body m-overlay">
            <a href="#" class="btn-play">
              <img class="btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg==">
              Odtwórz
            </a>
            <div class="break-main-page-hover"></div>
            <h5 class="card-title">LEGO Ninjago: Mistrzowie Spinjitzu</h5>
            <p class="card-text">Kai, Jay, Cole i Zane muszą opanować swoje moce i nauczyć się posługiwać
              bronią Spinjitzu, by ocalić krainę Ninjago, w której panoszą się ciemne siły.</p>
            <p class="card-text"><small class="text-muted">2011 | 7+ | 10 sezonów | Kreskówki</small></p>
          </div>
          </div>
        </div></div></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">
          <div class="m-container">
            <div class="m-zoom">
          <div class="cardh">
          <div class="card bg-dark">
            <a href="#">
              <img src="images/star-wars-episode-iv-new-hope-poster_horizontal.jpg" class="card-img-top m-image" alt="...">
            </a>
          </div>
          <div class="card-body m-overlay">
            <a href="#" class="btn-play">
              <img class="btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg==">
              Odtwórz
            </a>
            <div class="break-main-page-hover"></div>
            <h5 class="card-title">Gwiezdne wojny: część IV – Nowa nadzieja</h5>
            <p class="card-text">Młody chłopak z farmy, Luke Skywalker, zostaje wrzucony w wir galaktycznych przygód, gdy przechwytuje wezwanie pomocy od uwięzionej księżniczki Lei. Wkrótce wyruszy na śmiałą misję, aby uratować ją ze szponów Dartha Vadera i złego Imperium.</p>
            <p class="card-text"><small class="text-muted">2 godz. 5 min | 1977 | 12+ | Science fiction, Przygodowy</small></p>
          </div>
          </div>
        </div></div></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">
          <div class="m-container">
            <div class="m-zoom">
          <div class="cardh">
          <div class="card bg-dark">
            <a href="#">
              <img src="images/star-wars-episode-iv-new-hope-poster_horizontal.jpg" class="card-img-top m-image" alt="...">
            </a>
          </div>
          <div class="card-body m-overlay">
            <a href="#" class="btn-play">
              <img class="btn-play" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg==">
              Odtwórz
            </a>
            <div class="break-main-page-hover"></div>
            <h5 class="card-title">Gwiezdne wojny: część IV – Nowa nadzieja</h5>
            <p class="card-text">Młody chłopak z farmy, Luke Skywalker, zostaje wrzucony w wir galaktycznych przygód, gdy przechwytuje wezwanie pomocy od uwięzionej księżniczki Lei. Wkrótce wyruszy na śmiałą misję, aby uratować ją ze szponów Dartha Vadera i złego Imperium.</p>
            <p class="card-text"><small class="text-muted">2 godz. 5 min | 1977 | 12+ | Science fiction, Przygodowy</small></p>
          </div>
          </div>
        </div></div></div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark">Row column</div>
      </div>
      <div class="col">
        <div class="p-3 border bg-dark" style="padding: 0px!important; border:0px!important;">
          <img src="images/star-wars-episode-iv-new-hope-poster_horizontal.jpg" alt="ninjagoposter.jpg" class="main-image">
        </div>
      </div>
  </div>
</div>


<div class="break-carousel"></div>


      <!--<div class='col'><div class='p-3 border bg-dark'><div class='m-container'><div class='m-zoom'><div class='cardh'><div class='card bg-dark'>
            <a href='#'>
              <img src='images/star-wars-episode-iv-new-hope-poster_horizontal.jpg' class='card-img-top m-image' alt='...'>
            </a>
          </div>
          <div class='card-body m-overlay'>
            <a href='#' class='btn-play'>
              <img class='btn-play' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg=='>
              Odtwórz
            </a>
            <div class='break-main-page-hover'></div>
            <h5 class='card-title'>Gwiezdne wojny: część IV – Nowa nadzieja</h5>
            <p class='card-text'>Młody chłopak z farmy, Luke Skywalker, zostaje wrzucony w wir galaktycznych przygód, gdy przechwytuje wezwanie pomocy od uwięzionej księżniczki Lei. Wkrótce wyruszy na śmiałą misję, aby uratować ją ze szponów Dartha Vadera i złego Imperium.</p>
            <p class='card-text'><small class='text-muted'>2 godz. 5 min | 1977 | 12+ | Science fiction, Przygodowy</small></p>
          </div>
          </div>
        </div></div></div>
      </div>-->







      <div class="container-sm">
  <h3><span class="m-series-text">A long time ago in a galaxy far, far away..</span></h3>
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
<?php
	$baza=mysqli_connect("localhost","root","","test");
	if (mysqli_connect_errno())
	{echo "Wystąpił błąd połączenia z bazą";}
	$zapytanie="SELECT * FROM movies";
	//echo $zapytanie;
	$wynik = mysqli_query($baza,$zapytanie);
	while($row = mysqli_fetch_array($wynik))
	//{echo  $row['description']; echo "<br>"; }
    //{echo "<img src='images/".$row['poster_horizontal']."'>"; }
	//{echo $row['header'] . " " . $row['tresc']; echo "<br>"; }
    {echo "<div class='col'><div class='p-3 border bg-dark'><div class='m-container'><div class='m-zoom'><div class='cardh'><div class='card bg-dark'>";
    echo "<a href='".$row['link']."'><img src='images/".$row['poster_horizontal']."' class='card-img-top m-image' alt='".$row['poster_horizontal']."'></a>";
    echo "</div><div class='card-body m-overlay'><a href='".$row['link']."' class='btn-play'>";
    echo "<img class='btn-play' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAABmJLR0QA/wD/AP+gvaeTAAAC40lEQVRoge2ZvU8UQRjGnxc8QsAKtCBoZRQaC4WQ2An/g8FogS2JH3+DDdqqGDQkRgtrCz8aE1oTApXRiImFiJoo0IgJZ+HPYo7k2Ju925ud24t6v3J2953nmX13Z94ZqUOH/xuLEQToljQhaVLSmKRRSUOSDlZu2ZH0RdKapFVJS5KWzex3jP6DAY4CN4ENmucTcAM40g7hh4H7QDlAeJIysAAcKkr8BWArgvAkm8D5VgovAYstEJ7kHlCKLb4PeFGA+D2eA32xxJcKFr/HS6AnhoEi0iaNhbziL7ZR/B7T9TSmTmTAoKR3kor5vaWzLWnEzDZ9F7vqPDin9ouXpAFJ19Muet8Abnb8ICn/RxSHX5KOm9l68kLaG7iscPFnJZ2W9CbweR89kmYz3Ql04dYpQVTF6QVuxfmOAbfe6s5i4EyeXjzxZoCdGA6AiWR8XwpNZnpVGTGzR3JL7RgpNZVs8BkYj9DRPszsbSXu7ZyhxpINPgMncnbixcx2zeyapEuSfgaGGUk2+AwMBQbPRCWlxiW9Dni8RlvNPACUleP/b2aZylSgX9KKXPmZlbKZ9VY31JuJiyB3Te4zsJM3aCOAUUmv5MnpBvxINvgMfA0RlRVgRi51TgY8XqPNZ+B9QOCGUJmZJT2U1B8YZi3Z4DOwEhg8lUrKLEu6mjNUjTafgaWcnewjZ8okaawNt5hbD12sVMWJvZj7CNQMeE1DZbvvcegQAZPAKblRz5sy1Tz2bUX+LQVNWdIxM/ucvOCdyMxsQ9KDVqtqgkWfeKl+UT8g99tqd128JWm06aLezLYlXWmVqiaYTROfCdxeZbuYz20f6AaetEH8M+BAbgMVE324DdeieEqszd0qEyXcQUSrmSfWyKcYmQa+t0D4N+Bcy4QnTAwCd4HdCMJ3gTu433axAMO4g7qQtdM6MAcM59EQ65i1S65Qn5Lb+hiRNKz9x6wbcrXGityqcrXtx6wdOvwD/AF9k1llUbyXngAAAABJRU5ErkJggg=='>Odtwórz</a><div class='break-main-page-hover'></div>";
    echo "<h5 class='card-title'>".$row['name']."</h5><p class='card-text'>".$row['description']."</p><p class='card-text'><small class='text-muted'>".$row['info-about']."</small></p></div></div></div></div></div></div>";}
    mysqli_close($baza);
?>
</div></div>







<?php
	/*if (isset($_GET['page']))
	{
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
  }*/
	$page=1;
	$baza=mysqli_connect("localhost","root","","test");
	if (mysqli_connect_errno())
	{echo "Wystąpił błąd połączenia z bazą";}
	$zapytanie="SELECT * FROM movies WHERE id=".$page;
	//echo $zapytanie;
	$wynik = mysqli_query($baza,$zapytanie);
	while($row = mysqli_fetch_array($wynik))
	//{echo  $row['description']; echo "<br>"; }
    {echo "<img src='images/none".$row['poster_horizontal']."'>"; }
	//{echo $row['header'] . " " . $row['tresc']; echo "<br>"; }
	mysqli_close($baza);  
?>



  <div style="height:900px; width:200px;"></div>


<div class="footer">
  <footer>
    <div class="footer-up">
      <ul style="list-style: none;">
        <li>
          <a class="footer-href" href="index.html">Home</a>
        </li>
        <li>
          <a class="footer-href" href="#">Films</a>
        </li>
        <li>
          <a class="footer-href" href="#">Series</a>
        </li>
        <li>
          <a class="footer-href" href="#">Latest</a>
        </li>
        <li>
          <a class="footer-href" href="#">FAQs</a>
        </li>
      </ul>
    </div>
    <div class="footer-down">© 2021 Company, Inc</div>
  </footer>
</div>
<style>
  .footer{
    max-width: 1140px;
  }
  footer{
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none!important;
  }
  .footer-up{
    padding-bottom: 1rem!important;
    margin-bottom: 1rem!important;
    justify-content: center!important;
    border-bottom: 1px solid #dee2e6!important;
  }
  .footer-href{
    text-decoration: none;
    color: rgba(255,255,255,.55);
  }
  .footer-href:hover{
    color: rgba(255,255,255,.75);
  }
  .footer-down{
    text-align: center!important;
  }
</style>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
