<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="image/whiteshortlogo.png">
        <title>Your Cart</title>
        <link rel= "stylesheet" href="detail.css"></link>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">

    </head>
    <body>
        <div class="row cover">
            <img id="cover" style="background-repeat: repeat-x; height: 250px; width: 100%;" src="https://64.media.tumblr.com/cfc17dc02ee2c0639d3cfdd91ddf5b33/63fc8e06f2a59fa5-34/s1280x1920/17624d776b48a72c2a5cf57c5646b85a34ada8a5.gif">
        </div>
        <div class="main-fix">
            <div class="navbar header">
              <div class="row left">
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" class="logo">
                          <img height="60px" width="200px" src="image/whitelogo.png">
                      </a>
                      <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1:5500/home.html">Store</a>
                          </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Category</a>
                            <div class="dropdown-menu">
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
                            <a class="nav-link" href="http://127.0.0.1:5500/cart.html" target="_blank">Cart</a>
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
                            <input placeholder="Search the name of game..." class="form-control autosearch-form"
                            type="text" name="email" title="Search the name of game you are looking for"
                            enterkeyhint="Search" autocomplete="off" autocorrect="off" aria-label="Search" 
                            aria-autocomplete="list" aria-controls="react-autowhatever-1" autocapitalize="off" value=""
                            style="width: 500px; border-radius: 10px;">
                            <span class="input-group-append">
                              <button class="btn p-0 border-0" style="width: 20px; margin:-10px 0 0 10px;">
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
                          <a class="nav-link" href="http://127.0.0.1:5500/category.html#">
                            <img src="image/whiteshortlogo.png" height="40px" width="50px">
                          </a>
                  </ul>
              </div>
            </div>
            <div class="container-fluid" id="content">
                <h2 style="margin: 0px 0px 40px 200px;">YOUR CART</h2>
                <div class="cart-detai container" style="background-color: #CBE4DE; width: 75%; border-radius: 5px;">
                    <h3 style="color: #2E4F4F; height: 60px; border-radius: 3px; 
                                border-bottom: #2E4F4F; border-color: #2E4F4F;
                                border-bottom-style: dashed;">Order Summary</h3>
                    <table class="order-summary-table" style="width: 100%;">
                        <tr class="header-table">
                            <th style="color: #2E4F4F;font-size: 24px;">NAME</th>
                            <th></th>
                            <th style="color: #2E4F4F;font-size: 24px;">PRICE</th>
                        </tr>
                        <tr class="detai-table">
                            <td><img src="image/game10.jpg"></td>
                            <td>Stardew Valley</td>
                            <td>165.000đ</td>
                            <td>
                                <i class="fa-solid fa-trash-can" style=""></i>
                            </td>
                        </tr>
                        <tr class="detai-table">
                            <td><img src="image/game10.jpg"></td>
                            <td>Stardew Valley</td>
                            <td>165.000đ</td>
                            <td>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                        <tr class="detai-table">
                            <td><img src="image/game10.jpg"></td>
                            <td>Stardew Valley</td>
                            <td>165.000đ</td>
                            <td>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total:3</td>
                            <td>495.000đ</td>
                            <td>
                                <a href="#" class="
                                btn btn-purchase" style="background-color: #2E4F4F; color: aliceblue;">Purchase Now</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="navbar footer-top bg-dark">
                <div class="pageinfo row">
                    <ul id="servicemenu" class="nav left-top-bar">
                        <li>
                            <a href="http://127.0.0.1:5500/termsofservice.html" target="_blank">Company</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:5500/termsofservice.html" target="_blank">Affiliation Program</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:5500/termsofservice.html" target="_blank">Helps</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:5500/termsofservice.html" target="_blank">Docs</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:5500/termsofservice.html" target="_blank">Terms of service</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:5500/privacypolicy.html" target="_blank">Privacy policy</a>
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
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Game Details</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">All Games</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Books</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Review</a>
                  </div>
                  <div class="footer-links col-sm-3">
                      <h2 class="pb-1 h6 text-uppercase">Infomation
                      </h2>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">About Y2K</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">All Games</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Books</a>
                      </br>
                      <a href="http://127.0.0.1:5500/?snr=1_4_4___12" target="_blank">Review</a>
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
                          <a href="http://127.0.0.1:5500/privacypolicy.html" target="_blank" 
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
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

        <script type="text/javascript" src="detail.js"></script>
    </html>