<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Dropdown</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
  <style>
    .gambaralbum {
      width: 200px;
      height: 200px;
    }

    .gambarmember {
      width: 130px;
      height: 150px;
    }

    .justifytext {
      text-align: justify;
    }

    .custombutton {
      background-color: rgb(38, 67, 148);
      color: rgb(253, 255, 255);
      border-radius: 5px;
      border-color: rgb(38, 67, 148);
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="jumbotron">
      <h1 class="display-3">Welcome to <br>Tomorrow X Together page</h1>
    </div>

    <!--bagian atas-->
    <div class="row">
      <!--member-->
      <div class="col-8">
        <h4>Member</h4>
        <div class="row text-center">
          <div class="col">
            <img src="https://i.pinimg.com/736x/6b/3e/84/6b3e84dfec856b4eeec3c4caa28f13f3.jpg"
              class="gambarmember rounded">
            <p class="mt-2">Choi Soobin</p>
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/736x/a4/41/25/a4412560f9d1aeb88303ae1383a2ac21.jpg"
              class="gambarmember rounded">
            <p class="mt-2">Choi Yeonjun</p>
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/736x/5a/9c/3d/5a9c3dd23fe17e8372ea10387dae0743.jpg"
              class="gambarmember rounded">
            <p class="mt-2">Choi Beomgyu</p>
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/736x/7e/da/8e/7eda8ef47bbe18b6d82febfa512ebe1a.jpg"
              class="gambarmember rounded">
            <p class="mt-2">Kang Taehyun</p>
          </div>
          <div class="col">
            <img src="https://i.pinimg.com/736x/bc/b5/67/bcb5675b6913e8d7db23ea8d209408c8.jpg"
              class="gambarmember rounded">
            <p class="mt-2">Hueningkai</p>
          </div>
        </div>
      </div>

      <!--about-->
      <div class="col-4">
        <h4>About</h4>
        <p class="justifytext">
          Tomorrow X Together (Korean: 투모로우바이투게더; Tomorrow by Together, stylized in all caps), commonly abbreviated as
          TXT, is a South Korean boy band formed by Big Hit Entertainment. The group consists of five members:
          Yeonjun, Soobin, Beomgyu, Taehyun, and Hueningkai.
          <br><br>
          They debuted on March 4, 2019, with the extended play (EP) The Dream Chapter: Star. The EP debuted and
          peaked at number one on the Gaon Album Chart and Billboard World Albums Chart and entered the US Billboard
          200 at number 140, the highest-charting debut album by any male K-pop group at the time. Its lead single
          "Crown" debuted at number one on the Billboard World Digital Songs chart. The group also topped the
          Billboard Emerging Artists chart. TXT was the first Korean boy band to perform and headline at Lollapalooza,
          one of the biggest music festivals in the US.
        </p>
      </div>
    </div>
  </div>

  <!--bagian bawah-->
  <div class="container mt-3">
    <h4 class="text-center">Tomorrow X Together Discography</h4>
    <br>
    <div class="row">
      <!--TDC:S-->
      <div class="col-3">
        <img src="https://i.pinimg.com/1200x/c2/65/f8/c265f86561c3077a76efa30073005c28.jpg"
          class="rounded img-fluid gambaralbum">
      </div>
      <div class="col-9">
        <div>
          <h5>The Dream Chapter: Star</h5>
          <p>2019</p>
          <p class="justifytext">
            The Dream Chapter: Star (stylized The Dream Chapter: STAR; Korean: 꿈의 장: Star; RR: Kkum-ui jang: seuta) is
            the debut extended play by South Korean boy band Tomorrow X Together, released by Big Hit Entertainment and
            Republic Records, and distributed by iRiver Inc on March 4, 2019, in both digital and physical versions.
          </p>
          <h6>Song List</h6>
          <!--Crown-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Crown</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--Our summer-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Our
              Summer</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--Cat n dog-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Cat and
              Dog</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--Noas-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Nap of A
              Star</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <br>
        </div>
      </div>

      <!--tdc:m-->
      <div class="col-3">
        <img src="https://i.pinimg.com/736x/10/78/22/1078220ababf179e3d1466abb184ad3c.jpg"
          class="gambaralbum rounded img-fluid">
      </div>
      <div class="col-9">
        <div>
          <h5>The Dream Chapter: Magic</h5>
          <p>2019</p>
          <p class="justifytext">
            The Dream Chapter: Magic (Korean: 꿈의 장: Magic; RR: Kkum-ui jang: maejik) is the debut studio album by South
            Korean boy band Tomorrow X Together. It was released on October 21, 2019, by Big Hit Entertainment and
            Republic Records.[1] It serves as a follow-up to the band's debut extended play The Dream Chapter: Star
            (2019). The album contains eight songs, including the lead single, "9 and Three Quarters (Run Away)".
            Musically, the album incorporates different genres including R&B, tropical house, acoustic pop, and hip-hop.
            Commercially, the album debuted atop South Korea's Gaon Album Chart, becoming Tomorrow X Together's second
            chart-topping release of the year. It also charted on the US Billboard World Albums chart at number three.
            To promote the album, the band appeared on several South Korean music programs.
          </p>
          <h6>Song List</h6>
          <!--nr-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">New Rules</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--runaway-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">9 and Three
              Quarters (Run Away)</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--roller coaster-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Roller
              Coaster</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--poppin star-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Poppin'
              Star</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--Cwjltma-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Can't We Just
              Leave the Monster
              Alive</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--magic island-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Magic
              Island</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--20cm-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">20 cm</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <!--aod-->
          <div class="dropdown">
            <button type="button" class="custombutton dropdown-toggle rounded" data-toggle="dropdown">Angel or
              Devil</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Youtube</a>
              <a class="dropdown-item" href="#">Spotify</a>
              <a class="dropdown-item" href="#">Apple Music</a>
            </div>
          </div>
          <p></p>
          <div class="text-center">
            <p><a href="#">Show more TXT discography</a></p>
          </div>
        </div>
      </div>
</body>

</html>
