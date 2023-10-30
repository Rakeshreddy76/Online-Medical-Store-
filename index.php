<?php
include "includes/head.php"
?>

<body>

  <div class="site-wrap">
    <?php
    include "includes/header.php"
    ?>
    <div class="site-blocks-cover" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">Effective Medicine, New Medicine Everyday</h2>
              <h1>Welcome To Pharma</h1>
              <p>
                <a href="store.php" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>Free <br> Shipping</h5>
                <p>
                  ₹0 charge for all your orders delivery
                  <strong>for Orders above ₹199.</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>Season <br> Sale 50% Off</h5>
                <p>
                  Up to 80% off on health products.

                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>New <br> Products</h5>
                <p>
                  Explore more than 10,000 products.
                </p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Products You Might Like</h2>
          </div>
        </div>

        <div class="row">
          <?php
          $data = all_products();
          $num = sizeof($data);
          for ($i = 0; $i < $num; $i++) {
          ?>
            <div class="col-sm-6 col-lg-4 text-center item mb-4">
              <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img class="rounded mx-auto d-block" style="width:20vw ; height:40vh ;" src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>
              <?php if (strlen($data[$i]['item_title']) <= 20) { ?>
                <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo $data[$i]['item_title'] ?></a></h3>
              <?php
              } else {
              ?>
                <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></a></h3>
              <?php
              }
              ?>
              <p class="price">₹<?php echo $data[$i]['item_price'] ?></p>
            </div>
          <?php
            if ($i == 5) {
              break;
            }
          }
          ?>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="store.php" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <?php
              $data = all_products_reverse();

              $num = sizeof($data);
              for ($i = 0; $i < $num; $i++) {
              ?>
                <!--  -->
                <div class="  text-center item mb-4">
                  <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>"> <img class="rounded mx-auto d-block" style="width:20vw ; height:vh ;" src="images/<?php echo $data[$i]['item_image'] ?>" alt="Image"></a>

                  <h3 class="text-dark"><a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>">Umcka Cold Care</a></h3>

                  <p class="price">₹<?php echo $data[$i]['item_price'] ?></p>
                </div>
                <!--  -->
              <?php
                if ($i == 5) {
                  break;
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase"><font color="#FF00FF"><u>AVAILABLE</u> &nbsp;&nbsp;<u>EMERGENCY</u>&nbsp;&nbsp;<u>DOCTORS.</u></font></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">

              <div class="testimony">
                <blockquote>
                  <img src="images/person_11.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
				<p>&ldquo;<font color="red">NAME :Dr.J YASHODA </font><br> ALLERGIST/IMMUNOLOGIST.
                    <br><font color="#808000">TREAT IMMUNE SYSTEM DISORDERS SUCH AS ASTHMA , ECZEMA , FOOD ALLERGIES,INSECT STING ALLERGIES , AND SOME  ATUOIMMUNE DISEASE..</font><br><font color="#000080">IF YOU NEED YOU CAN CONTACT ME </font><br><font color="#800080">Mobile Number :</font><font color="red">7847854968</font>.&rdquo;</p>
                </blockquote>

                <p>&mdash; j.yashoda</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_21.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;<font color="red">NAME :Dr.M SIDDHARTH </font><br> FAMILY PHYSICIAN.
                    <br><font color="blue">ALWAYS AVAIABLE FOR ANY FAMILY CHECKPS.</font><br><font color="green">YOU CAN CONTACT ME </font><br><font color="#800000">Mobile Number :</font><font color="red">7894581452</font>.&rdquo;</p>
                </blockquote>
				  <p>&mdash; m.siddharth</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_31.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;<font color="red">NAME :Dr.B ABHI KUMAR </font><br> DERMATOLOGIST
                    <br><font color="FFA500">HAVE PROBLEMS WITH YOUR SKIN, HAIR, NAILS?<br> I'M  ALWAYS  FOR  YOU !!</font><br><font color="green">YOU CAN CONTACT ME </font><br><font color="#800080">Mobile Number :</font><font color="red">9587465214</font>.&rdquo;</p>
                </blockquote>

                <p>&mdash; b.abhi kumar</p>
              </div>

              <div class="testimony">
                <blockquote>
                  <img src="images/person_41.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;<font color="red">NAME :Dr.G KARTHIK </font><br> FAMILY PHYSICIAN.
                    <br><font color="#FF00FF">GIVES TREATMENT FOR MENTAL ILLNESS.</font><br><font color="green">YOU CAN CONTACT ME </font><br><font color="#800080">Mobile Number :</font> <font color="red">8546859485</font>.&rdquo;</p>
                </blockquote>

                <p>&mdash; g.karthik goud</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <?php
    include "includes/footer.php"
    ?>
  </div>



</body>

</html>