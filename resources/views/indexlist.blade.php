<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>CSS untuk List</title>
  <style>
    ul{
        background:grey
    }

    ul.square {
      list-style-type: square;
    }

    ul.circle{
        list-style-type: circle;
    }

    ul.image{
        list-style-image: url('sqpurple.gif');
    }

    ol{
        background: red
    }

    ol.ur {
        list-style-type: upper-roman;
    }

    ol.la {
        list-style-type: lower-alpha;
    }

    dl {
        background: burlywood
    }

    dt {
      font-weight: bold;
      background:white;
    }

  </style>
</head>
<body>

  <h2>Unordered List</h2>

  <ul>
    <li>Kopi</li>
    <li>Teh</li>
    <li>Susu</li>
  </ul>

  <ul class="square">
    <li>Kopi</li>
    <li>Teh</li>
    <li>Susu</li>
  </ul>

  <ul class="circle">
    <li>Kopi</li>
    <li>Teh</li>
    <li>Susu</li>
  </ul>

  <h2>Ordered List</h2>

  <ol>
    <li>Bangun</li>
    <li>Sholat</li>
    <li>Sarapan</li>
  </ol>

  <ol class="ur">
    <li>Bangun</li>
    <li>Sholat</li>
    <li>Sarapan</li>
  </ol>

  <ol class="la">
    <li>Bangun</li>
    <li>Sholat</li>
    <li>Sarapan</li>
  </ol>

  <h2>Description List</h2>
  <dl>
    <dt>HTML</dt>
    <dd>Bahasa markup standar untuk membuat halaman web.</dd>
    <dt>CSS</dt>
    <dd>Bahasa untuk mendesain tampilan halaman web.</dd>
  </dl>

</body>
</html>
