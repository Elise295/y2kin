<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <link rel="icon" href="../resource/whiteshortlogo.png">
        <title>Welcome to Y2Kin - Steam Wallet Code </title>
        <link rel= "stylesheet" href="../css/home.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="row cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <!-- navbar -->
        <div class="navbar header" id="fixnav">
            <div class="row left">
                    <a href="../page/home.php" class="logo">
                        <img id="logo" height="60px" width="200px" src="../resource/whitelogo.png">
                    </a>
                    <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../page/home.php">Store</a>
                              </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                                <div class="dropdown-menu">
                                  <!-- thêm js -->
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Action</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Adventure</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Arcade</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Building</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Casual</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Dating</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Fighting</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Indie</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">JRPG</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">RPG</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Puzzle</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Role-Playing</a>
                                  <a class="dropdown-item" href="http://127.0.0.1:5500/category.html">Simulation</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../page/cart.php" target="_blank">Cart</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Library</a>
                            </li>
                    </ul>
            </div>
            <div class="middle">
                    <div class="inputsearch">
                      <form>
                        <div class="input-group" style="margin-bottom: 5px,">
                        <!-- lấn cấn name là email -->
                          <input placeholder="Search the name of game..." class="form-control autosearch-form"
                          type="text" name="email" title="Search the name of game you are looking for"
                          enterkeyhint="Search" autocomplete="off" autocorrect="off" aria-label="Search" 
                          aria-autocomplete="list" aria-controls="react-autowhatever-1" autocapitalize="off" value=""
                          style="width: 500px; border-radius: 10px;">
                          <span class="input-group-append">
                            <button class="btn p-0 border-0" style="width: 40px;">
                              <svg class="svg-inline--fa fa-search fa-w-16" data-icon="search" color="white"
                              role="img" data-prefix="fas" viewBox="0 0 512 512" xmnls="http://www.w3.org/2000/svg"
                              aria-hidden="true" focusable="false">
                              <path fill="currentColor" 
                              d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 
                              322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 
                              12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 
                              336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 
                              70.7-57.2 128-128 128z">
                              </path>
                              </svg>
                            </button>
                          </span>
                        </div>
                      </form>
                    </div>
            </div>
            <div class="right">
                <ul class="nav">
                    <li class="nav-item">
                       if(isset($_SESSION['name']) && $_SESSION['pass'])
 {
    $name = $_SESSION['name'];
    $password = $_SESSION['pass'];
    $sql = "SELECT * FROM `login` WHERE username = '$name' and password = '$password'";
    $login = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($login);
    if($count== 0)
    {
       header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
 }
                        <a class="nav-link" href="../page/login.php">Log In</a>
                        <!-- sửa lại: login thành công thì hiện thị avt để xem profile -->
                    </li>
                </ul>
            </div>
        </div>
        <!-- Content -->
        <div class="content">
          <div id="demo" class="carousel slide container" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../resource/gif7.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="../page/detail.php" target="_blank">
                    <p>ABC Monkey Game</p> <!--Price Truy vấn số tiền từ bảng, thay đổi theo game-->
                  </a>
                  <a href="#" class="btn btn-outline-dark">
                    <i class=" fa fa-shopping-cart" style="color:aliceblue"></i>
                    ADD TO CART</a>
                  <a href="#" class="btn btn-outline-dark">Buy now</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../resource/gif8.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="../page/detail.php" target="_blank">
                    <p>ABC Monkey Game</p> <!--Price Truy vấn số tiền từ bảng, thay đổi theo game-->
                  </a>
                  <a href="#" class="btn btn-outline-dark">
                    <i class=" fa fa-shopping-cart" style="color: aliceblue"></i>
                    ADD TO CART</a>
                  <a href="#" class="btn btn-outline-dark">Buy now</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../resource/gif9.gif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <a href="../page/detail.php" target="_blank">
                    <p>ABC Monkey Game</p> <!--Price Truy vấn số tiền từ bảng, thay đổi theo game-->
                  </a>
                  <a href="#" class="btn btn-outline-dark">
                    <i class=" fa fa-shopping-cart" style="color: aliceblue"></i>
                    ADD TO CART</a>
                  <a href="#" class="btn btn-outline-dark">Buy now</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Lastest Game</h2>
          </div>
          <div id="lastgame" class="carousel slide container" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cards-wrapper">
                  <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                    <img src="../resource/retro1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="../page/detail.php">
                        <h5 class="card-title">Crocodile Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">Dec 24th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                    <img src="../resource/retro2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="../page/detail.php">
                        <h5 class="card-title">Boom Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">April 20th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                    <img src="../resource/retro3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="../page/detail.php">
                        <h5 class="card-title">MakeUp Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">June 2th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div class="card" style="border-radius: 10px; background-color: #CBE4DE;" >
                      <img src="../resource/retro4.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="../page/detail.php">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Nov 2th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART
                          </a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/retro2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="../page/detail.html#">
                          <h5 class="card-title">Fashion Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/retro3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="../page/detail.php">
                          <h5 class="card-title">ABC Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART
                          </a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                      <img src="../resource/retro4.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                        <h6 class="card-price">165.000đ</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <p class="card-date">Dec 24th,2022</p>
                        <a id="add" href="#" class="btn btn-outline-dark">
                          <i class=" fa fa-shopping-cart" ></i>
                          ADD TO CART</a>
                        <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/retro3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="../page/detail.php">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/retro3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#lastgame" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#lastgame" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Free Game</h2>
          </div>
          <div id="freegame" class="carousel slide container" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cards-wrapper">
                  <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                    <img src="../resource/game7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="http://127.0.0.1:5500/detail.html#">
                        <h5 class="card-title">Boom Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">Dec 24th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                    <img src="../resource/game8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="http://127.0.0.1:5500/detail.html#">
                        <h5 class="card-title">Crocodile Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">Dec 24th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                  <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                    <img src="../resource/game9.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <a href="http://127.0.0.1:5500/detail.html#">
                        <h5 class="card-title">Crocodile Game</h5>
                      </a>
                      <h6 class="card-price">165.000đ</h6>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <p class="card-date">Dec 24th,2022</p>
                      <a id="add" href="#" class="btn btn-outline-dark">
                        <i class=" fa fa-shopping-cart" ></i>
                        ADD TO CART</a>
                      <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                    </div>
                  </div>
                </div>
                </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                      <img src="../resource/game10.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/game7.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/game8.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cards-wrapper">
                    <div class="card" style="border-radius: 10px;background-color: #CBE4DE;">
                      <img src="../resource/game9.webp" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/game10.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a>
                      </div>
                    </div>
                    <div class="card d-none d-md-block" style="border-radius: 10px; background-color: #CBE4DE;">
                      <img src="../resource/game7.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <a href="http://127.0.0.1:5500/detail.html#">
                          <h5 class="card-title">Crocodile Game</h5>
                        </a>
                          <h6 class="card-price">165.000đ</h6>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <p class="card-date">Dec 24th,2022</p>
                          <a id="add" href="#" class="btn btn-outline-dark">
                            <i class=" fa fa-shopping-cart" ></i>
                            ADD TO CART</a>
                          <a id="buy" href="#" class="btn btn-outline-dark">Buy now</a> 
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#freegame" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#freegame" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
          <div id="mediagame">
            <div class="label container justify-content-center" style="padding: 70px 0px 30px 0px;">
              <h2 style="padding-left: 40px;">Category</h2>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-media card-1">
                    <a href="http://127.0.0.1:5500/category.html">
                      <h5>Action</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-2">
                    <a href="http://127.0.0.1:5500/category.html">
                      <h5>Building</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-3">
                    <a href="http://127.0.0.1:5500/category.html">
                      <h5>Casual</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-4">
                    <a href="http://127.0.0.1:5500/category.html">
                      <h5>Dating</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-5">
                    <a href="http://127.0.0.1:5500/category.html">
                      <h5>RPG</h5>
                    </a>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-media card-6">
                    <a href="../page/category.html">
                      <h5>Simulation</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid contenedor text-center">
            <h1 class="text-center">RETRO GAMES BY Y2k Company</h1>
            <div class=" container text-center">
               <div class="col-lg-12 col-md-6 col-sm-8 col-xs-12 container_foto">
                  <div class="ver_mas text-center">
                     <span  class="lnr lnr-eye"></span>
                     <p>For those not in the know, Y2K roughly refers to the years 1997-2003 even though the name directly translates to “The Year 2000.” 
                      This era marked many beginnings, but the  one we are going to focus on was a new beginning for media itself.
                      You see, the early 2000s brought about a new aesthetic when it came to not just video games, but everything around them.</p>
                  </div>
                  <article class="text-left">
                     <h2>TITULO DE <br>LA GAME</h2>
                     <h4>The Game is a point-and-click adventure game developed by Runecraft</h4>
                  </article>
                  <img src="../resource/gif10.gif" alt="">
               </div>
            </div>
         </div>
         
      </div>
      <!-- footer -->
        <div class="footer">
            <div class="navbar footer-top bg-dark">
                <div class="pageinfo row">
                    <ul id="servicemenu" class="nav left-top-bar">
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Company</a>
                        </li>
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Affiliation Program</a>
                        </li>
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Helps</a>
                        </li>
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Docs</a>
                        </li>
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Terms of service</a>
                        </li>
                        <li>
                            <a href="../page/privacypolicy.html" target="_blank">Privacy policy</a>
                        </li>
                    </ul>
                    <ul id="socialmenu" class="nav right-top-bar">
                        <li>
                            <a href="https://www.youtube.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-youtube" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-facebook" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://discord.com/" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-discord" style="color: aliceblue;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home?lang=en" target="_blank">
                                <i aria-hidden="true" class="fa-brands fa-twitter" style="color: aliceblue;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer-breadcrumbs"></div>
            <div class="footer-mid">
                <div class="footer-links-container container-fluid bg-light">
                  <div class="row">
                    <div class="footer-links col-sm-3">
                      <h2 class="pb-1 h6 text-uppercase">Browse Categories
                      </h2>
                      <a href="../page/privacypolicy.html" target="_blank">Game Details</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">All Games</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">Books</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">Review</a>
                  </div>
                  <div class="footer-links col-sm-3">
                      <h2 class="pb-1 h6 text-uppercase">Infomation
                      </h2>
                      <a href="../page/privacypolicy.html" target="_blank">About Y2K</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">All Games</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">Books</a>
                      </br>
                      <a href="../page/privacypolicy.html" target="_blank">Review</a>
                  </div>
                  <div class=" email-container col-sm-4">
                    <h2 class="h6 pb-1 email-title">Join our Newsletter</h2>
                    <div class="email-subscribe">
                      <form>
                        <div class="input-group" style="margin-bottom: 5px">
                          <input required placeholder="Enter your email" class="form-control"
                          type="email" name="email" title="Enter your email address"
                          enterkeyhint="send" aria-label="email" value="">
                          <span class="input-group-append">
                            <button class="btn btn-outline-primary" type="submit">Sign Up</button>
                          </span>
                        </div>
                        <p class="small text" style="font-size: 10px;">
                          You can unsubscribe via the newsletter at any time. By subscribing to our newsletter you agree to our
                          <a href="../page/privacypolicy.html" target="_blank" 
                          rel="noopener noreferrer">Privacy Policy</a>.
                        </p>
                      </form>
                    </div>
                </div>
                  </div>
                </div>
            </div>
            <div class="footer-bot bg-dark" style="height: 80px;">
                <p class="companyinfo" style="font-size: 11px; color: aliceblue; margin: 30px 220px;padding-top: 30px">
                  © 2023 Focus Multimedia Ltd. All rights reserved. All trademarks are property of their respective owners. Terms and Conditions / Privacy Policy / Cookie Policy
                </p>
            </div>
        </div>
        </body>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</html>