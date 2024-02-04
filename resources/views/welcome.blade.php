<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="cart.css" />

    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!-- <div class="app"> -->
    <div id="menu-page" class="page">
      <header id="sticky-header">
        <div class="header">
          <div style="flex-grow: 1; position: relative; height: 45px">
            <div class="inside_header">
              <img class="header__logo" src="images/logo.png" alt="website" />
              <div class="header__restaurant-name"><h1>Food Order</h1></div>
            </div>
          </div>
            <!-- <button
              class="bt"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              English
            </button> -->
        </div>
        <section class="categories-section categories-section--medium-photo">
          <div class="categories-section__container">
            <div
              class="menu-category menu-category--active"
              data-category-id="-2"
              data-long-press-delay="1000"
            >
              <div
                class="menu-category__highlight"
                id="menu-category__highlight"
                style="transform: translateX(7.95001px); display: block"
              ></div>
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/popular/all/"
                  ><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/popular.png?v3"
                    alt="Popular"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/popular/all/"
                    ><!--[-->Popular<!--]--></a
                  >
                </div>
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="85"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <!-- <a href="/menu/s/en/wagamama/curry/all/"> -->
                  <img src="images/curry-rice_1f35b3.png" alt="curry"/>
                <!-- </a> -->
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/curry/all/"
                    ><!--[-->curry<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="86"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/ramen/all/"
                  ><!--[--><img
                    src="images/steaming-bowl_1f35c5.png"
                    alt="ramen"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/ramen/all/"
                    ><!--[-->ramen<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="87"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/teppanyaki/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/steaming-bowl_1f35c4.png?v3"
                    alt="teppanyaki"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/teppanyaki/all/"
                    ><!--[-->teppanyaki<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="88"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/donburi/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/shallow-pan-of-food_1f9582.png?v3"
                    alt="donburi"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/donburi/all/"
                    ><!--[-->donburi<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="89"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/kokoro-bowls/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/shallow-pan-of-food_1f9583.png?v3"
                    alt="kokoro bowls"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/kokoro-bowls/all/"
                    ><!--[-->kokoro bowls<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="90"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/sides/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/green-salad_1f957.png?v3"
                    alt="sides"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/sides/all/"
                    ><!--[-->sides<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="91"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/desserts/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/shortcake_1f370.png?v3"
                    alt="desserts"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/desserts/all/"
                    ><!--[-->desserts<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="92"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/drinks/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/tropical-drink_1f379.png?v3"
                    alt="drinks"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/drinks/all/"
                    ><!--[-->drinks<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="99"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/kids/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/23/5037cb1f26a8125dba31b1d1bb460c15.png?v3"
                    alt="kids"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/kids/all/"
                    ><!--[-->kids<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
            <div
              class="menu-category"
              data-category-id="100"
              data-long-press-delay="1000"
            >
              <!---->
              <div class="menu-category__img">
                <a href="/menu/s/en/wagamama/extras/all/"
                  ><!--[--><img
                    src="https://instalacarte.com/media/cache/emoji_small/emoji/cooked-rice_1f35a1.png?v3"
                    alt="extras"
                  /><!--]--></a
                >
              </div>
              <div class="menu-category__name no-wrap">
                <div>
                  <a href="/menu/s/en/wagamama/extras/all/"
                    ><!--[-->extras<!--]--></a
                  >
                </div>
                <!---->
              </div>
            </div>
          </div>
        </section>
      </header>

      <!-- MENU-CONTENT -->

      <div class="menu-content--categories-medium-photo menu-content">
        <section
          class="menu-products-section menu-products-section--grid"
          style="padding-bottom: 160px"
        >
          <div class="menu-grid">
            <!----><!--[--><a
              href="/menu/s/en/wagamama/curry/prawn/prawn-raisukaree/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/131/f035a5b685caa0cb87b98d8a8babd57c.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      prawn raisukaree
                    </div>
                    <div class="menu-product__item__price no-wrap">12.00 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    a mild, coconut and citrus curry, with prawns, mangetout,
                    peppers, red and spring onions. ...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    12.00 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/curry/prawn/firecracker-prawn/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/133/20ecdf82f6a62411ec5db7344906b865.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      firecracker prawn
                    </div>
                    <div class="menu-product__item__price no-wrap">11.00 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    a fiery mix of prawns, mangetout, red and green peppers,
                    onions and hot red chillies. serv...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    11.00 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/curry/chicken/hot-chicken-katsu-curry/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                      l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/136/29e3d4a21483129c0db1843f03bb9b98.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      hot chicken katsu curry
                    </div>
                    <div class="menu-product__item__price no-wrap">9.75 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    spicy! chicken in crispy panko breadcrumbs and covered in
                    our spicy curry sauce. sticky wh...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    9.75 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/curry/veg/tofu-firecracker/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/137/07d6a8cce41e44666f8113fc5964a8cc.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      tofu firecracker
                    </div>
                    <div class="menu-product__item__price no-wrap">9.75 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    bold + fiery. tofu. mangetout. red + green peppers. onion.
                    hot red chillies. sesame seeds....
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    9.75 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/ramen/prawn/chilli-prawn-kimchee-ramen/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/145/d107f513b73f884d5b11f8a7c23e6fae.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      chilli prawn + kimchee ramen
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    marinated tail-on prawns, kimchee and beansprouts on top of
                    noodles in a spicy vegetable b...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/ramen/beef/chilli-sirloin-steak-ramen/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/146/27e2ca50d59ab3772ba97bead2f01344.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      chilli sirloin steak ramen
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    noodles in a spicy chicken broth topped with sirloin steak,
                    red onion, spring onions, bean...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/ramen/pork/shirodashi-ramen/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/149/9ca1f6c79c5ffcfee9fef255cb6e79ed.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      shirodashi ramen
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    slow-cooked, seasoned pork belly on top of noodles in a rich
                    chicken broth with dashi and ...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/ramen/chicken/chicken-ramen/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/150/c8931f7498305088186ef8210ab09531.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      chicken ramen
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    marinated chicken on top of noodles in a rich chicken broth
                    with dashi and miso. topped wi...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/teppanyaki/all/teriyaki-sirloin-steak-soba/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/151/4a38af667e7ab6485643d7f871c8472f.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      teriyaki sirloin steak soba
                    </div>
                    <div class="menu-product__item__price no-wrap">12.25 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    grilled sirloin steak with soba noodles cooked in curry oil
                    with mangetout, bok choi, red ...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    12.25 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/teppanyaki/all/cod-mokutan-soba/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/156/4534c7e1a1a1f8abcc0cac035d9baba7.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      cod mokutan soba
                    </div>
                    <div class="menu-product__item__price no-wrap">8.75 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    black charcoal soba noodles in a soy sauce with two fillets
                    of miso-glazed cod, stir-fried...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.75 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/teppanyaki/all/yaki-udon/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/159/b15678a54149d8a026a711baa2ee1e01.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      yaki udon
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    udon noodles in curry oil with chicken, prawns, chikuwa,
                    egg, beansprouts, leeks, mushroom...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/donburi/all/teriyaki-beef-donburi/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/162/238315a8f34c6e084caa7fd0ad87354e.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      teriyaki beef donburi
                    </div>
                    <div class="menu-product__item__price no-wrap">10.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    beef brisket in teriyaki sauce with sticky white rice,
                    shredded carrots, pea shoots and on...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    10.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/kokoro-bowls/all/avant-gard-n/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/164/4787847795664f7e9206af12203cd9b1.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      avant gard'n
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    made in collaboration with gaz oakley barbecue-glazed seitan
                    served with a coconut + srira...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><a
              href="/menu/s/en/wagamama/curry/veg/hot-vegatsu/"
              style="
                display: contents;
                -webkit-tap-highlight-color: transparent;
              "
              ><div class="menu-product">
                <div class="menu-product__item">
                  <!---->
                  <div class="menu-product__item__toolbar">
                    <div style="flex-grow: 1"></div>
                    <button
                      class="btn btn--icon btn--icon--xsm"
                      style="
                        background-color: rgb(238, 238, 238);
                        -webkit-font-smoothing: antialiased;
                        padding: 5px;
                      "
                    >
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        stroke="#222222"
                        stroke-width="1.2px"
                        x="0px"
                        y="0px"
                        viewBox="-1 -2 14 13"
                        xml:space="preserve"
                      >
                        <path
                          d="M11,1c-0.6-0.6-1.5-1-2.3-1C7.8,0,7,0.4,6.3,1L6,1.3L5.7,1C5,0.3,4.2,0,3.3,0S1.6,0.3,1,1C0.3,1.6,0,2.4,0,3.3S0.3,5,1,5.7
                l4.8,4.8C5.9,10.6,6,10.6,6,10.6c0.1,0,0.2,0,0.2-0.1L11,5.7c0.6-0.6,1-1.5,1-2.4S11.7,1.6,11,1z"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="menu-product__item__img">
                    <img
                      class="menu-product__item__img__full"
                      src="https://instalacarte.com/media/cache/mobile_image/product/23/275/c41df04d7b946c32818b21db4ed01e3b.png"
                      alt="Item image"
                      decoding="async"
                    />
                  </div>
                  <div class="menu-product__item__top-block">
                    <div class="menu-product__item__name text-overflow">
                      hot vegatsu
                    </div>
                    <div class="menu-product__item__price no-wrap">8.95 £</div>
                  </div>
                  <div class="menu-product__item__description">
                    spicy! vegetables in crispy panko breadcrumbs and covered in
                    our spicy curry sauce. sticky...
                  </div>
                  <div class="menu-product__item__price-bottom no-wrap">
                    8.95 £
                  </div>
                </div>
              </div></a
            ><!--]-->
          </div>
          <!---->
        </section>
      </div>
    </div>
    <!-- </div> -->

    <!-- MODAL PAGES -->

    <div id="pages">
      <!-- CART -->
      <div
        id="basket-overlay"
        class="page modal-window-page basket-overlay none"
      ></div>

      <section
        class="page page--no-shadow basket-page basket-page--expanded basket-page--enable-transition basketPage basketClose"
      >
        <div class="basket-page__header" id="basket">
          <div>Order</div>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            fill="white"
            height="25"
            width="25"
            version="1.1"
            id="upArrow"
            viewBox="0 0 330 330"
            xml:space="preserve"
          >
            <path
              id="XMLID_224_"
              d="M325.606,229.393l-150.004-150C172.79,76.58,168.974,75,164.996,75c-3.979,0-7.794,1.581-10.607,4.394  l-149.996,150c-5.858,5.858-5.858,15.355,0,21.213c5.857,5.857,15.355,5.858,21.213,0l139.39-139.393l139.397,139.393  C307.322,253.536,311.161,255,315,255c3.839,0,7.678-1.464,10.607-4.394C331.464,244.748,331.464,235.251,325.606,229.393z"
            />
          </svg>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink"
            fill="white"
            height="25"
            width="25"
            version="1.1"
            id="downArrow"
            viewBox="0 0 330 330"
            xml:space="preserve"
            style="display: none"
          >
            <path
              id="XMLID_225_"
              d="M325.607,79.393c-5.857-5.857-15.355-5.858-21.213,0.001l-139.39,139.393L25.607,79.393  c-5.857-5.857-15.355-5.858-21.213,0.001c-5.858,5.858-5.858,15.355,0,21.213l150.004,150c2.813,2.813,6.628,4.393,10.606,4.393  s7.794-1.581,10.606-4.394l149.996-150C331.465,94.749,331.465,85.251,325.607,79.393z"
            />
          </svg>
        </div>
        <div class="basket-page__content" style="touch-action: none">
          <div
            style="
              margin: 40px auto;
              display: flex;
              flex-direction: column;
              align-items: center;
            "
          >
            <div><img src="images/empty_bag.png" alt="Empty bag" /></div>
            <div style="font-size: 1.5rem; margin-top: 20px">
              Nothing to order
            </div>
          </div>
          <div class="basket-order-button-container">
            <button
              class="btn btn--brand basket-page__content__order-btn basket-page__content__order-btn--disabled"
              style="width: 50%"
            >
              Order
            </button>
          </div>
        </div>
      </section>

      <!-- Modal -->
      <div
        class="modal fade"
        id="exampleModalCenter"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <!-- <div class="modal-body">
              <div class="choose-language-page">
                <div
                  class="choose-language-page__lang choose-language-page__lang--active"
                >
                  English
                </div>
                <div class="choose-language-page__lang">Español</div>
                <div class="choose-language-page__lang">Italiano</div>
                <div class="choose-language-page__lang">Français</div>
                <div class="choose-language-page__lang">Deutsch</div>
                <div class="choose-language-page__lang">Türkçe</div>
                <div class="choose-language-page__lang">Português</div>
                <div class="choose-language-page__lang">漢語</div>
                <div class="choose-language-page__lang">اللغة العربية</div>
                <div class="choose-language-page__lang">日本語</div>
                <div class="choose-language-page__lang">हिन्दी</div>
                <div class="choose-language-page__lang">Русский</div>
                <div class="choose-language-page__lang">Polski</div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="cart.js"></script>
  <script src="script.js"></script>
</html>
