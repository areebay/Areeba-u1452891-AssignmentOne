@extends('layouts.cardlayout')
@section('content')
@endsection

<html>
<head>
<body>
  <!--Add styles from layouts folder-->
  @include('layouts.master')

  <!--Set size, style and add relevant content-->
  <div style="margin-left:25%; padding:1px 16px;">
    <div class="titleOne">Dining</div>
        <div class="titleTwo">Dining at Mansfield Castle is a memorable experience. The elegant dining room
          boasts wonderful picture windows overlooking the castle grounds, which are floodlit
          at night.
      </div>

 <br>

      <p>
        The castle's chefs all have a passion for food and fine cuisine and are happiest when
        preparing culinary delights for discerning guests. Local product is always used and everything
        served is made by hand. The Highlands of Scotland offer the finest vension, game and poultry,
        wild salmon, trout and the freshest vegetables picked from the castle's own vegetable gardens.
      </p>

<br>

<!--Add image-->
<img src="http://www.celticcastles.com/castles/mansfield-castle/images/dining.jpg" alt="..." class="img-responsive">

<br>

      <p>
      View the current dinner menu, Mansifeld Castle has to offer. Do this by clicking on the relevant buttons below.
      </p>


  <!--Set size, style, add relevant content and create list with square bullet points-->
    <div style="text-align:center;font-size:19px;" ><strong>A La Carte Sample Evening Menu</strong></div>
    <button class="accordion">Starters</button>
    <div class="panel">
      <p>

          <li type="square">House Cured Beetroot Gravadlax of Scottish Salmon with Marinaded Fennel and Vodja Jus</li>
          <li type="square">Pressed Terrine of Confit Duck and Black Pudding with Orange Brioche and Balsamic Figs</li>
          <li type="square">Trio of Melon with Mint Granita and Cardamon Syrup</li>
          <li type="square">Seared Hand Dived Scallops, Fondue of Baby Gem and Saffron Beurre Blanc</li>
          <li type="square">Ravioli of Roast Quail with Sage Butter and Crispy Leeks</li>

      </p>
    </div>

    <button class="accordion">Main Courses</button>
    <div class="panel">
      <p>
        <li type="square">Ballotine of Blue Fin Tuna with Marinaded Vegetables and Wasabi Dressing</li>
        <li type="square">Breast of Pheasant with Confit Leg, Braised Swiss Chard and Caramelised Beetroot Jus</li>
        <li type="square">Fillet of Angus Beef with Truffle Scented Wild Mushrooms and Foie Gras Ravioli</li>
        <li type="square">Roast Wild SeaBass Flavoured with Porcini, Risotto of Crab and Parmesan Beignet</li>
        <li type="square">Wild Spinach and Goats Cheese Frittata eith Poached Free Range Egg and Basil Hollandaise</li>
        <li type="square">SeaFood Bouillabaise with Garlic Crostini and Lobster Remoulade</li>
      </p>
    </div>

    <button class="accordion">Desserts</button>
    <div class="panel">
      <p>
        <li type="square">Caramelised Banana Bread and Butter Pudding with Passion Fruit Semmi Freddo</li>
        <li type="square">Dark Chocolate and Marmalade Tart with Vanilla Ice Cream and Macaroon Biscuit</li>
        <li type="square">Iced Tiramisu Parfrait with Praline Tuille and Espresso Syrup</li>
        <li type="square">Vacherin of Poached Fruits with Tutti Fruitti Ice Cream</li>
        <li type="square">A Fine Selection of Scottish Cheeses with Picallilli and Wheat Crackers</li>
      </p>
    </div>

<!--Set actions to the buttons to display the dinner menu in a funky style-->
    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
          this.classList.toggle("active");

          this.nextElementSibling.classList.toggle("show");
        }
      }
    </script>

  </div>
</body>
</head>
</html>
