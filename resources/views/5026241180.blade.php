<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap 4 Grid</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <style>
    .titillium {
      font-family: "Titillium Web", sans-serif;
      font-style: normal;
    }

    .subscription {
      border: 2px solid #999;
      border-radius: 0;
      padding: 40px 20px;
      height: 100%;
    }

    .subs-title {
      font-weight: 700;
      margin-bottom: 1;
    }

    .pricetext {
      margin-bottom: 4;
      color: #999;
      font-size: medium;
    }

    .btn-plannow {
      background-color: #a5a5a5;
      border: none;
      color: white;
      font-weight: bold;
      cursor: default;
      padding: 10px 30px;
    }

    .btn-upgrade {
      background-color: #e35050;
      border: none;
      color: white;
      font-weight: bold;
      cursor: default;
      padding: 10px 30px;
    }

    .plan-text {
      font-family: "Roboto", sans-serif;
      font-optical-sizing: auto;
      font-style: normal;
      font-weight: 500;
      letter-spacing: 1px;

    }

    .feature-lists {
      list-style: none;
      padding: 0;
      font-size: 13;
      color: #999;
    }

    .feature-lists li {
      margin-bottom: 12px;
    }
  </style>
</head>

<body>

  <div class="container titillium text-center">
    <div class="text-center">
      <br><br>
      <h1 style="letter-spacing: 2px;"><b>SELECT A PLAN</b></h1>
      <p></p>
      <h4 class="lead" style="color: #999; font-weight: 400;">Choose your plan for better experiences</h4>
    </div>
    <br><br>
    <!--subscription area-->
    <div class="row justify-content-center">

      <!--personal-->
      <div class="col-md-3">
        <div class="subscription text-center">
          <h4 class="subs-title">PERSONAL</h4>
          <p class="pricetext">$9/Month</p>
          <br>
          <button class="button btn-plannow mb-4 plan-text">YOUR PLAN</button>
          <p></p>
          <ul class="feature-lists">
            <li><span style="color: #000000">Free</span> 2 User Access</li>
            <li><span style="color: #000000">Unlimited</span> Archive Projects</li>
            <li><span style="color: #000000">Unlimited</span> Storage Space</li>
            <li><span style="color: #000000">2x</span> Faster Processing</li>
            <li><span style="color: #000000">100x</span> Monthly Visitor</li>
          </ul>
        </div>
      </div>

      <!--professional-->
      <div class="col-md-3">
        <div class="subscription text-center">
          <h4 class="subs-title">PROFESSIONAL</h4>
          <p class="pricetext">$16/Month</p>
          <br>
          <button class="button btn-upgrade mb-4 plan-text">UPGRADE</button>
          <p></p>
          <ul class="feature-lists">
            <li><span style="color: #000000">Free</span> 2 User Access</li>
            <li><span style="color: #000000">Unlimited</span> Archive Projects</li>
            <li><span style="color: #000000">Unlimited</span> Storage Space</li>
            <li><span style="color: #000000">2x</span> Faster Processing</li>
            <li><span style="color: #000000">100x</span> Monthly Visitor</li>
          </ul>
        </div>
      </div>

      <!--business-->
      <div class="col-md-3">
        <div class="subscription text-center">
          <h4 class="subs-title">BUSINESS</h4>
          <p class="pricetext">$24/Month</p>
          <br>
          <button class="button btn-upgrade mb-4 plan-text">UPGRADE</button>
          <p></p>
          <ul class="feature-lists">
            <li><span style="color: #000000">Free</span> 2 User Access</li>
            <li><span style="color: #000000">Unlimited</span> Archive Projects</li>
            <li><span style="color: #000000">Unlimited</span> Storage Space</li>
            <li><span style="color: #000000">2x</span> Faster Processing</li>
            <li><span style="color: #000000">100x</span> Monthly Visitor</li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
