<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Riset Operasi</title>
  <style>
    body,
    html{
      margin: 0;
      padding: 0;
      font-size: 20px;
      font-family: sans-serif,"Times New Romans";
      color: white;
      text-align: center;
    }
    strong
    {
      font-weight:bolder
    }
    .container {
      width: 100%;
      margin: 50px auto;
      border: 5px solid #333;
      box-sizing: border-box;
      padding: 5px;
    }

    .float-right{float:right!important}
    .float-left{float:left!important}
    header {
      background-color: #B063D8;
      padding: 3% 0;
      width: 3% 0;
    }
    footer {
      font-family:Arial;
      background-color: #666;
      padding: 0.5%;
      bottom:0;
      left:0;
      position:fixed;
      right:0;
      z-index:1032
    }

    .content::after {
      content: '';
      display: block;
      clear: both;
    }

    .sidebar {
      float: left;
      width: 40%;
      height: 40%;
    }

    .sidebar aside {
      background-color: #2F93FF;
      padding: 60px 0;
    }

    .sidebar nav {
      background-color: #E45765;
      padding: 100px 0;
    }

    main {
      background-color: #E0AA77;
      width: 60%;
      float: right;
      box-sizing: border-box;
      padding: 171.5px;
    }


  </style>

<body>
    <header>Header</header>
    <div class="content">
      <div class="sidebar">
        <aside>Aside</aside>
        <nav>navbar</nav>
      </div>
      <main>Main</main>
    </div>

    <footer>
      <div class="float-right">
        <b >Version :</b> Closed Beta 0.01
      </div>
      <div class="float-left">
      <strong>Copyright &copy; 2019-2020 .</strong> All rights
      reserved.
      </div>
  </footer>
</body>
