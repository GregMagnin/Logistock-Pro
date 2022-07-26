<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistockpro</title>
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lustria:400,700' rel='stylesheet' type='text/css'>
</head>


<body>
  <header>
  <?php include 'navbar.html'?> 
  </header>

<nav>
    <div class="container" style="margin-bottom: 30px;">
    <strong>Kit evo qu'est ce que c'est ?</strong>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magni, voluptas minima? lure eum dignissimos numquam! repellat inventore accusamus.</p>
    </div>
</nav>

<section>
  <br>
<div class="fontL">&emsp; Les meilleures ventes</div>
<br>
  <div class="container2">
  <div><img src="../Logistockpro/images/im1.png" alt="ecran" class="img2">
  <a class="prix-image">169€90</a></div>
  <div><img src="../Logistockpro/images/im2.png" alt="portable" class="img2">
  <a class="prix-image">599€90</a></div>
  <div><img src="../Logistockpro/images/im3.png" alt="memoire" class="img2">
  <a class="prix-image">59€90</a></div>
  <div><img src="../Logistockpro/images/im4.png" alt="ventilateur" class="img2">
  <a class="prix-image">39€90</a></div>
  <div><img src="../Logistockpro/images/im5.png" alt="boitier" class="img2">
  <a class="prix-image">159€90</a></div>
  </div>
  <br>

  <div class="container2">
     <div style="color:#003459; padding:0 0 0 80px;">Profitez de 1% de réduction immédiate grace au code promo : PASCHER</div>
     <a class="panier" style="width: 260px; height: 60px; line-height: 60px; white-space: nowrap">Trier les produits &emsp;<img src="../Logistockpro/images/filter.png" alt="icone_filter" style="position:relative;top:10px"></a>
     </div>
<br>

<div class="container">

<!-- Menu accordéon latéral -->
<section class="ac-container">
  <br>
  <div>
		<input id="ac-1" type="checkbox"/>
		<label for="ac-1">Catégorie</label>
		<article class="ac">
    <p><input type="checkbox" id="chkcat1" name="chkcat1">Portables</p>
      <p><input type="checkbox" id="chkcat2" name="chkcat2">Ecrans</p>
		</article>
  </div>
    <br> 
  <div>
		<input id="ac-2" type="checkbox"/>
		<label for="ac-2">Marque</label>
		<article class="ac">
			<p><input type="checkbox" id="chkmar1" name="chkmar1">Apple</p>
      <P><input type="checkbox" id="chkmar2" name="chkmar2">Dell</p>
      <p><input type="checkbox" id="chkmar3" name="chkmar3">Asus</p>
      <p><input type="checkbox" id="chkmar4" name="chkmar4">Acer</p>
		</article>
  </div>
    <br> 
  <div>
		<input id="ac-3" type="checkbox"/>
		<label for="ac-3">Prix</label>
		<article class="ac">
    <div class="circle"></div>
    <hr class="hr1"></hr>
    <div class="prix-ligne">9€<span>10000€</span></div>
		</article>
  </div>
    <br> 
  <div>
		<input id="ac-4" type="checkbox"/>
		<label for="ac-4">Système d'exploitation</label>
		<article class="ac">
			<p><input type="checkbox" id="chkse1" name="chkse1">Windows 10</p>
      <P><input type="checkbox" id="chkse2" name="chkse2">Linux</p>
      <p><input type="checkbox" id="chkse3" name="chkse3">Chromebook</p>
		</article>
  </div>
  <br> 
  <div>
		<input id="ac-5" type="checkbox"/>
		<label for="ac-5">Blablabla</label>
		<article class="ac">
			<p><input type="checkbox" id="chkse1" name="chkse1">Bla</p>
      <P><input type="checkbox" id="chkse2" name="chkse2">Blabla</p>
      <p><input type="checkbox" id="chkse3" name="chkse3">Blablabla</p>
		</article>
  </div>
</section>

<!-- Affichage résultats choix menu accordéon -->
<div class="container4">
  <div class="container3">
  <img src="../Logistockpro/images/im6.png" alt="ecran" style="width:85%">
  <p style="position:relative;top:90px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente, optio ipsa nemo fugiat dolor quo et voluptate.
  Fuga, similique beatae quas quis exercitationem aliquid dignissimos corporis. Obcaecati distinctio itaque fugiat tempora odit veritatis natus non incidunt enim quisquam.
  <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente.</p>
  <p>
  <br>
  <strong><a class="prix">269€90</a>
  <br>
  <a href="#" class="panier">Ajouter au panier &ensp;<img src="../Logistockpro/navbar/ressources/panier.png" alt="icone_filter" style="width:32px; position:relative;top:8px"></a>
  <br>
  <a href="#" class="panier">Quantité &emsp;<span class="qté1">1</span><span class="qté2"></span></a></strong>
  </p>
  </div>

  <div class="container3">
  <img src="../Logistockpro/images/im7.png" alt="disque dur" style="width:85%">
  <p style="position:relative;top:90px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente, optio ipsa nemo fugiat dolor quo et voluptate.
  Fuga, similique beatae quas quis exercitationem aliquid dignissimos corporis. Obcaecati distinctio itaque fugiat tempora odit veritatis natus non incidunt enim quisquam.
  <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente.</p>
  <p>
  <br>
  <strong><a class="prix">59€90</a>
  <br>
  <a href="#" class="panier">Ajouter au panier &ensp;<img src="../Logistockpro/navbar/ressources/panier.png" alt="icone_filter" style="width:32px; position:relative;top:8px"></a>
  <br>
  <a href="#" class="panier">Quantité &emsp;<span class="qté1">1</span><span class="qté2"></span></a></strong>
  </p>
  </div>

  <div class="container3">
  <img src="../Logistockpro/images/im8.png" alt="ventilateur" style="width:85%">
  <p style="position:relative;top:90px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente, optio ipsa nemo fugiat dolor quo et voluptate.
  Fuga, similique beatae quas quis exercitationem aliquid dignissimos corporis. Obcaecati distinctio itaque fugiat tempora odit veritatis natus non incidunt enim quisquam.
  <br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam laborum eos aut officiis cumque quam accusamus at quia exercitationem facere sapiente.</p>
  <p>
  <br>
  <strong><a class="prix">43€90</a>
  <br>
  <a href="#" class="panier">Ajouter au panier &ensp;<img src="../Logistockpro/navbar/ressources/panier.png" alt="icone_filter" style="width:32px; position:relative;top:8px"></a>
  <br>
  <a href="#" class="panier">Quantité &emsp;<span class="qté1">1</span><span class="qté2"></span></a></strong>
  </p>
  </div> 

  <div class="container6">
  <div><a href="#" class="panier" style="width: 260px; height: 60px; line-height: 60px; white-space: nowrap">PAGE PRECEDENTE</a></div>
  <div><a href="#" class="panier" style="width: 60px; height: 60px; line-height: 60px; white-space: nowrap">1</a></div>
  <div><a href="#" class="panier" style="width: 60px; height: 60px; line-height: 60px; white-space: nowrap">2</a></div>
  <div><a href="#" class="panier" style="width: 60px; height: 60px; line-height: 60px; white-space: nowrap">3</a></div>
  <div><a href="#" class="panier" style="width: 260px; height: 60px; line-height: 60px; white-space: nowrap">PAGE SUIVANTE</a></div>
  </div>
  <br>
</div>

</section>


<footer>
  <?php include 'footer.html'?> 
  </footer>


</body>
</html>

