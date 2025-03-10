@extends('giaodien.index')

@section('menu', 'An Trà')

@section('main')

<div id="main-content" class="main-content">
    <div class="page-header">
        <figure class="post-thumbnail">
            <img alt="" src="../images/menus/menus.jpg">
        </figure>
        <h1 class="title"><span class="line-title">Menu<i class="fa">&#xf111;</i></span></h1>
    </div>
    <div class="page-content">
        <div id="menus" class="menus">
            <div class="container">
                <!-- <div id="filter" class="filter">
                    <button class="button" data-filter=".coffee">Coffee</button>
                    <button class="button" data-filter=".milk">Milk</button>
                    <button class="button" data-filter=".cocktail">Cocktail</button>
                    <button class="button" data-filter=".beverages">Beverages</button>
                    <button class="button" data-filter=".tea">Tea</button>
                    <button class="button" data-filter=".cake">Cake</button>
                </div> -->
                <div class="menus-inner">

                    <section id="coffee" class="section menu-item coffee">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="title">An trà</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu1.JPG">
                                </figure>
                            </div>
                            <div class="col-sm-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-1.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa-solid fa-dollar-sign"></i>29.00</span></h5>
                                            <p>Our selection of coffee beans have been rigorously tested with every different type of coffee machine to make.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-2.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa-solid fa-dollar-sign"></i></i>33.00</span></h5>
                                            <p>Coffee ice milk is the process that slowly and gradually releases the purest of essence.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-3.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Grown traditionally, harvested naturally and roasted lovingly, they're the star of every cup.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-4.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Some start life in Africa, others in South America, but all end up close to our heart.</p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="milk" class="section menu-item milk">
                        <div class="row">
                            <div class="col-sm-6 col-sm-push-6">
                                <h1 class="title">An trà</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu1.JPG">
                                </figure>
                            </div>
                            <div class="col-sm-6 col-sm-pull-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/tea-1.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>39.00</span></h5>
                                            <p>Add Kahlua, crème de Menthe, crème de cacao, milk and ice to a blender and blend on low speed until smooth.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/tea-2.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>45.00</span></h5>
                                            <p>There should be some ice crystals in the glass and the drink will be light and frothy.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/tea-3.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>White creme de cacao and milk, and served blended in a chilled highball glass topped with whipped cream and a small cookie</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/tea-4.JPG">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tea</span><span class="menu-price"><i class="fa fa-usd"></i>39.00</span></h5>
                                            <p>Get the mixers out and shape your Saturday night party like an Aspri Spirits night!</p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- <section id="cocktail" class="section menu-item cocktail">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="title">Cocktail</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu-3.png">
                                </figure>
                            </div>
                            <div class="col-sm-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/coctail-1.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Cocktaila Moscow Mule</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Top with ginger beer and garnish with a lime wedge and a mint sprig.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/coctail-2.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Bullfrog Cocktail</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>Add Cocktail Vodka Grapefruit and lime juice. Top up with ginger ale. Garnish with a lime wedge.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/coctail-3.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Cocktail Oranges</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>Top up with orange juice. Garnish with a Maraschino cherry and an orange wedge.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/coctail-4.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Cocktail dessert</span><span class="menu-price"><i class="fa fa-usd"></i>45.00</span></h5>
                                            <p>Impress your guests with a summer cocktail dessert recipe by Cava restaurant’s master chef, Christopher McDonald.</p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="beverages" class="section menu-item beverages">
                        <div class="row">
                            <div class="col-sm-6  col-sm-push-6">
                                <h1 class="title">Beverages</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu-4.png">
                                </figure>
                            </div>
                            <div class="col-sm-6  col-sm-pull-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/br-1.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Orange Ice</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>While I'm not generally into overly themed parties, especially the typical orange.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/br-2.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Milk ice</span><span class="menu-price"><i class="fa fa-usd"></i>45.00</span></h5>
                                            <p>There should be some ice crystals in the glass and the drink will be light and frothy.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/br-3.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Calyer royale</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>Strawberries make a perfect choice because they're naturally sweet.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/br-4.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Lemon ice</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>Shake over ice, strain into a shot glass and garnish with a small orange slice. </p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="tea" class="section menu-item tea">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="title">Tea</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu-5.png">
                                </figure>
                            </div>
                            <div class="col-sm-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-1.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Tiple Lemon Drop</span><span class="menu-price"><i class="fa fa-usd"></i>39.00</span></h5>
                                            <p>Combine the Lipton Ice Tea Lemon and the lemonade in a pitcher.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-2.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Citrus Iced Tea Punch</span><span class="menu-price"><i class="fa fa-usd"></i>45.00</span></h5>
                                            <p>Combine Lipton Ice Tea Lemon with the orange juice in a large pitcher; stir in the sliced fruit.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-3.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Mint Tea Juleps</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Thoroughly crush the mint with a wooden spoon on the side of the pitcher.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInRight">
                                        <img class="menu-img" alt="" src="../images/menus/tea-4.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Pina Tea-La Da</span><span class="menu-price"><i class="fa fa-usd"></i>39.00</span></h5>
                                            <p>Process all ingredients in a blender until smooth.</p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section>

                    <section id="cake" class="section menu-item cake">
                        <div class="row">
                            <div class="col-sm-6  col-sm-push-6">
                                <h1 class="title">Cake</h1>
                                <figure class="menu-thumbnail">
                                    <img alt="" src="../images/menus/menu-6.png">
                                </figure>
                            </div>
                            <div class="col-sm-6  col-sm-pull-6">
                                <div class="menu-inner">
                                    <aside class="clearfix animated" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/cake-1.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Cakes cocoa</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>Indispensable for lovers of coffee tiramisu dessert ... Special cake with cream and cocoa. powder lovers the choice of mild, sweet.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-25" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/cake-2.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Chocolate Guinness Cupcakes</span><span class="menu-price"><i class="fa fa-usd"></i>33.00</span></h5>
                                            <p>The top of the cheesecake was covered in chocolate. Who wants to wake up from such a sweet dream.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-50" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/cake-3.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Brickle cake</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Brickle cake, chocolate taste the great passion of lovers.</p>
                                        </div>
                                    </aside>
                                    <aside class="clearfix animated animation-delay-75" data-animate="fadeInLeft">
                                        <img class="menu-img" alt="" src="../images/menus/cake-4.png">
                                        <div class="menu-content">
                                            <h5 class="title menu-title"><span>Chocolate particle cake</span><span class="menu-price"><i class="fa fa-usd"></i>29.00</span></h5>
                                            <p>Orodispersible dough with chocolate chips and delicious flavor you will be addicted.</p>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </section> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
