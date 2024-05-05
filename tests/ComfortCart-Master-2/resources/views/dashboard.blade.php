<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://use.typekit.net/qij6wkv.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/dashboard.css">
</head>

<body>
    <script src="script.js"></script>
    <div class="container">
        <div class="sideBar">
            <div class="header">
                <div class="menu-list">
                    <a href="#">
                        <img src="asset/logo.svg" alt="icon ComfortCart" class="logo">
                        <span class="description-header">ComfortCart</span>
                    </a>
                </div>
            </div>
            <div class="menu">
                <div class="menu-list">
                    <a href="#">
                        <img src="asset/hideMenu.svg" alt="icon hide menu" class="logo"> 
                        <span class="description-menu">Hide Menu</span>
                    </a>
                </div>
                <div class="menu-list">
                    <a href="#">
                        <img src="asset/home.svg" alt="icon home" class="logo"> 
                        <span class="description-menu">Home</span>
                    </a>
                </div>
                <div class="menu-list">
                    <a href="#">
                        <img src="asset/order.svg" alt="icon Order" class="logo"> 
                        <span class="description-menu">Order</span>
                    </a>
                </div>
                <div class="menu-list">
                    <a href="#">
                        <img src="asset/logout.svg" alt="icon Log Out" class="logo"> 
                        <span class="description-menu">Log Out</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="main-content">
            <div class="header-bar">
                <a href="#">
                    <img src="assets/notification.svg" alt="">
                    <img src="assets/Pofile Pict.svg" alt="">
                    <span class="description-menu">John Doe</span>
                </a>
            </div>
            <div class="store-menu">
                <span class="description-menu">Store Performance</span>
                <hr class="divider">
                <div class="content-card">
                    <div class="card">
                        <div class="circle"></div>
                        <div class="description-menu">
                            <h3 class="description">Visitor</h3>
                            <br>
                            <h2 class="main-description">1000</h2>
                            <br>
                            <h3 class="description">5% Since last month</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="circle"></div>
                        <div class="description-menu">
                            <h3 class="description">Product Seen</h3>
                            <br>
                            <h2 class="main-description">500</h2>
                            <br>
                            <h3 class="description">5% Since last month</h3>
                        </div>
                    </div>
                    <div class="card">
                        <div class="circle"></div>
                        <div class="description-menu">
                            <h3 class="description">Order</h3>
                            <br>
                            <h2 class="main-description">200</h2>
                            <br>
                            <h3 class="description">5% Since last month</h3>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="product-menu">
                <span class="description-menu">Product Information</span>
                <hr class="divider">
                <div class="content-card">
                    <div class="Box">
                        <div class="Rectangle36"></div>
                        <div class="InfoBar">
                          <div class="ParticipantBar30">
                            <div class="ProductInfo">
                              <div class="ProductInformation">Product Information</div>
                            </div>
                            <div class="PriceInfo">
                              <div class="Price">Price</div>
                            </div>
                            <div class="StockInfo">
                              <div class="Stock">Stock</div>
                            </div>
                            <div class="StatusInfo">
                              <div class="Status">Status</div>
                            </div>
                            <div class="ActionInfo">
                              <div class="Action">Action</div>
                            </div>
                          </div>
                          <div class="Line1"></div>
                        </div>
                        <img class="Image2" src="https://via.placeholder.com/39x45" />
                        <div class="Frame78">
                          <div class="Group17">
                            <div class="HighCollarWoolSweater">High Collar Wool Sweater</div>
                            <div class="priceNum">Rp899.000</div>
                            <div class="Action">
                              <div class="Frame86">
                                <img class="Pencil" src="https://via.placeholder.com/20x20" />
                                <img class="Remove" src="https://via.placeholder.com/21x21" />
                              </div>
                            </div>
                            <div class="Status">
                              <div class="Rectangle37"></div>
                              <div class="OnSale">On Sale</div>
                            </div>
                            <div>10</div>
                          </div>
                        </div>
                      </div>
                      <div class="Search">
                        <img src="assets/Magnifying Glass.svg" alt="">
                        <span class="description-menu">Search here</span>
                      </div>
                      <div class="Filter">
                        <img src="assets/Polygon 1.svg" alt="">
                        <span class="description-menu">Filter</span>
                      </div>
                      <div class="addProduct">
                        <span class="description-menu">Add Product</span>
                        <img src="assets/Plus Math.svg" /> 
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>