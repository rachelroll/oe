@extends('layouts.master')
@section('content')
    <body>



        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
                            <h5 class="center">Speeds up development</h5>

                            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                            </div>

                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                            </div>

                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6">
                        <div class="icon-block">
                            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                            <h5 class="center">User Experience Focused</h5>

                            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{--new  feature--}}

    <div id="shopify-section-featured-collection" class="shopify-section">
        <div class="featured-collection-wrapper  container ">
            <div class="">
                <h2 class="collection-title">Featured collection</h2>
                <div class="rte">
                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span>
                </div>
            </div>
            <div class="gallery gallery-masonry row">
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="sacred-geometry" data-tag="circle">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/sacredgeometry1_450x450.jpg?v=1495867992" alt="Circle" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Circle</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10174302861"></span>
                                <span class="price" data-product-price>$20.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Circle</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$20.00</span>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="38431487053">
                                            Default Title
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                    <div class="tags-wrapper">
                                        <label>tags</label>
                                        <div class="tags">
                                            <div class="chip"><a href="/?constraint=circle" title="Show products matching tag circle">circle</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span></p>
                                <div id="shopify-product-reviews" data-id="10174302861">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }

                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Circle">
                                                <span class="spr-starrating spr-summary-starrating">
                                                        <meta itemprop="bestRating" content="5">
                                                        <meta itemprop="worstRating" content="1">
                                                        <meta itemprop="reviewCount" content="6">
                                                        <meta itemprop="ratingValue" content="3.8333333333333335">
                                                        <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star-empty' style=''></i>
                                                    </span>
                                                <span class="spr-summary-caption">
                                                        <span class='spr-summary-actions-togglereviews'>Based on 6 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions"><a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10174302861);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10174302861' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10174302861'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light"><i class="material-icons">star</i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="poly">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-sun_450x450.jpg?v=1495836249" alt="Sun" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Sun</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10170742029"></span>
                                <span class="price" data-product-price>$60.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Sun</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$60.00</span>
                                            <span class="visually-hidden" data-compare-text>Regular price</span>
                                            <s data-compare-price>$100.00</s>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="38412061709">
                                            Default Title
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span>
                                </p>
                                <div id="shopify-product-reviews" data-id="10170742029">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }
                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Sun">
                                                <span class="spr-starrating spr-summary-starrating">
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="worstRating" content="1">
                                                    <meta itemprop="reviewCount" content="8">
                                                    <meta itemprop="ratingValue" content="5.0">
                                                    <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i></span>
                                                <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 8 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions">
                                                        <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10170742029);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10170742029' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10170742029'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light">
                                <i class="material-icons">star</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="poly">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/sintel-wallpaper-ishtar_450x450.jpg?v=1503359011" alt="Ishtar" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Ishtar</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10553013133"></span>
                                <span class="price" data-product-price>$60.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Ishtar</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$60.00</span>
                                            <span class="visually-hidden" data-compare-text>Regular price</span>
                                            <s data-compare-price>$100.00</s>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="41284090381">
                                            Default Title
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span></p>
                                <div id="shopify-product-reviews" data-id="10553013133">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }

                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Ishtar">
                                                <span class="spr-starrating spr-summary-starrating">
                                                        <meta itemprop="bestRating" content="5">
                                                        <meta itemprop="worstRating" content="1">
                                                        <meta itemprop="reviewCount" content="17">
                                                        <meta itemprop="ratingValue" content="3.8823529411764706">
                                                        <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star-empty' style=''></i>
                                                    </span>
                                                <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 17 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions"><a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10553013133);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10553013133' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10553013133'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light"><i class="material-icons">star</i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="poly">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-cave_450x450.jpg?v=1495836608" alt="Cavern" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Cavern</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10170810573"></span>
                                <span class="price" data-product-price>$40.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Cavern</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$40.00</span>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="38412174157">
                                            Default Title
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span></p>
                                <div id="shopify-product-reviews" data-id="10170810573">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }

                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Cavern">
                                                <span class="spr-starrating spr-summary-starrating">
                                                        <meta itemprop="bestRating" content="5">
                                                        <meta itemprop="worstRating" content="1">
                                                        <meta itemprop="reviewCount" content="2">
                                                        <meta itemprop="ratingValue" content="4.0">
                                                        <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star-empty' style=''></i>
                                                    </span>
                                                <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 2 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions">
                                                        <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10170810573);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10170810573' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10170810573'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light"><i class="material-icons">star</i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="sacred-geometry" data-tag="hexagon" data-size="small">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/sacredgeometry3_450x450.jpg?v=1496215840" alt="Hexagon" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Hexagon</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10208943373"></span>
                                <span class="price" data-product-price>$90.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Hexagon</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$90.00</span>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <div class="selector-wrapper js">
                                        <label for="SingleOptionSelector-0">
                                            Size
                                        </label>
                                        <select id="SingleOptionSelector-0" data-single-option-selector data-index="option1">
                                            <option value="Small" selected="selected">Small
                                            </option>
                                            <option value="Medium">Medium
                                            </option>
                                            <option value="Large">Large
                                            </option>
                                        </select>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="38652727501">
                                            Small
                                        </option>
                                        <option value="39442296589">
                                            Medium
                                        </option>
                                        <option value="39442296653">
                                            Large
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                    <div class="tags-wrapper">
                                        <label>tags</label>
                                        <div class="tags">
                                            <div class="chip"><a href="/?constraint=hexagon" title="Show products matching tag Hexagon">Hexagon</a></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Literally venmo before they sold out, DIY heirloom forage polaroid offal yr pop-up selfies health goth. Typewriter scenester hammock truffaut meditation, squid before they sold out polaroid portland tousled taxidermy vice. Listicle butcher thundercats, taxidermy pitchfork next level roof party crucifix narwhal kinfolk you probably haven't heard of them portland small batch.</span></p>
                                <div id="shopify-product-reviews" data-id="10208943373">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }

                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Hexagon">
                                                <span class="spr-starrating spr-summary-starrating">
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="worstRating" content="1">
                                                    <meta itemprop="reviewCount" content="6">
                                                    <meta itemprop="ratingValue" content="4.666666666666667">
                                                    <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i>
                                                    </span>
                                                <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 6 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions">
                                                    <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10208943373);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10208943373' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10208943373'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light"><i class="material-icons">star</i></a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4 gallery-item gallery-expand gallery-filter" data-type="poly">
                    <div class="gallery-curve-wrapper">
                        <a class="gallery-cover gray">
                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-ice_450x450.jpg?v=1501549123" alt="Ice" crossorigin="anonymous" />
                        </a>
                        <div class="gallery-header">
                            <span class="title">Ice2222</span>
                            <div class="product-ratings-price">
                                <span class="shopify-product-reviews-badge" data-id="10208890573"></span>
                                <span class="price" data-product-price>$40.00</span>
                            </div>
                        </div>
                        <div class="gallery-body">
                            <div class="title-wrapper">
                                <h3>Ice</h3>
                            </div>
                            <div class="checkout-column">
                                <form action="/cart/add" method="post" enctype="multipart/form-data">
                                    <div class="price-quantity-wrapper">
                                        <div class="price-wrapper" data-price-wrapper>
                                            <label>price</label>
                                            <span class="price" data-product-price>$40.00</span>
                                        </div>
                                        <div class="input-field quantity-counter">
                                            <label for="Quantity">quantity</label>
                                            <i class="material-icons remove">remove_circle_outline</i>
                                            <input type="number" id="Quantity" name="quantity" value="1" min="1">
                                            <i class="material-icons add">add_circle_outline</i>
                                        </div>
                                    </div>
                                    <select name="id" class="no-js" data-product-select>
                                        <option selected="selected" value="38651713165">
                                            Default Title
                                        </option>
                                    </select>
                                    <button class="btn-large z-depth-0" type="submit" name="add" data-add-to-cart>
                                        <span data-add-to-cart-text>Add to Cart</span>
                                    </button>
                                </form>
                            </div>
                            <div class="description">
                                <p>
                                    <meta charset="utf-8"><span>Paleo vaporware normcore voluptate veniam synth pour-over tousled small batch. Elit chambray cloud bread snackwave culpa williamsburg adipisicing bicycle rights meh pour-over normcore ea fashion axe hashtag kogi.</span></p>
                                <div class="carousel-wrapper">
                                    <div class="carousel">
                                        <a class="carousel-item" href="#!">
                                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-cave_fd0357f3-4673-454f-a70e-be5735e25182_medium.jpg?v=1501549123">
                                        </a>
                                        <a class="carousel-item" href="#!">
                                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-sun_9423c5b9-a80f-43b0-beec-576356709e68_medium.jpg?v=1501549123">
                                        </a>
                                        <a class="carousel-item" href="#!">
                                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-maze_5028634c-26f3-4ca8-9fef-b38b6fd7f8a3_medium.jpg?v=1501549123">
                                        </a>
                                        <a class="carousel-item" href="#!">
                                            <img src="//cdn.shopify.com/s/files/1/2030/2737/products/geometric-grapefruit_medium.jpg?v=1501549123">
                                        </a>
                                    </div>
                                </div>
                                <div id="shopify-product-reviews" data-id="10208890573">
                                    <style scoped>
                                        .spr-container {
                                            padding: 24px;
                                            border-color: #ECECEC;
                                        }

                                        .spr-review,
                                        .spr-form {
                                            border-color: #ECECEC;
                                        }
                                    </style>
                                    <div class="spr-container">
                                        <div class="spr-header">
                                            <h2 class="spr-header-title">Customer Reviews</h2>
                                            <div class="spr-summary" itemscope itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating">
                                                <meta itemprop="itemreviewed" content="Ice">
                                                <span class="spr-starrating spr-summary-starrating">
                                                    <meta itemprop="bestRating" content="5">
                                                    <meta itemprop="worstRating" content="1">
                                                    <meta itemprop="reviewCount" content="4">
                                                    <meta itemprop="ratingValue" content="4.25">
                                                    <i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star' style=''></i><i class='spr-icon spr-icon-star-half-alt' style=''></i>
                                                    </span>
                                                <span class="spr-summary-caption"><span class='spr-summary-actions-togglereviews'>Based on 4 reviews</span>
                                                    </span>
                                                <span class="spr-summary-actions">
                                                        <a href='#' class='spr-summary-actions-newreview' onclick='SPR.toggleForm(10208890573);return false'>Write a review</a>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="spr-content">
                                            <div class='spr-form' id='form_10208890573' style='display: none'></div>
                                            <div class='spr-reviews' id='reviews_10208890573'></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-action">
                            <a class="go-to-ratings btn-floating btn-large waves-effect waves-light">
                                <i class="material-icons">star</i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="center">
                <a href="/collections/frontpage" title="See all of the Home page collection" class="btn-large">See all</a>
            </div>
        </div>
    </div>

        <div class="container">
            <h3>FEATURED COLLECTION</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eius error fugiat fugit nam officiis perferendis quaerat tempore. Aut blanditiis esse facilis impedit molestiae nam omnis optio quam suscipit tenetur!</p>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="waves-effect waves-light btn-large">SEE ALL</a>
        </div>
        <div class="container">
            <h3>PRODUCT COLLECTION</h3>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image">
                            <img src="http://materializecss.com/images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>

                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                            </div>

                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m6">
                        <div class="card">
                            <div class="card-image">
                                <img src="http://materializecss.com/images/sample-1.jpg">
                                <span class="card-title">Card Title</span>
                            </div>

                            <div class="card-action">
                                <a href="#">This is a link</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Company Bio</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Connect</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>

    @section('js')
        <script>
            $('.dropdown-button').dropdown({
                    inDuration: 300,
                    outDuration: 225,
                    constrainWidth: false, // Does not change width of dropdown to that of the activator
                    hover: true, // Activate on hover
                    gutter: 0, // Spacing from edge
                    belowOrigin: false, // Displays dropdown below the button
                    alignment: 'left', // Displays dropdown with edge aligned to the left of button
                    stopPropagation: false // Stops event propagation
                }
            );

        </script>
        @stop
    </body>
    @stop