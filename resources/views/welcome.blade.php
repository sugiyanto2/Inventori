<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventarix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="icon" type="icon" href="./img/inventarix.png">
</head>
<body>
    <div class="container-fluid px-0" style="font-weight: 900">
        <nav class="navbar navbar-expand-lg bg-primary bg-opacity-50">
            <a href="#" class="navbar-brand">
                <img src="/img/inventarix.png" alt="Logo" width="50" height="50"
                    class="d-inline-block text-center ms-5 me-3">
                Inventarix
            </a>
            <div class="navbar navbar-collapse px-5 mb-0" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#scrollspyHeading1">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#scrollspyHeading2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#scrollspyHeading3">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-4" href="#scrollspyHeading4">Contact</a>
                    </li>

                    @auth
                    <div class="btn-group no-wrap px-5">
                        <a href="/dashboard" class="text-decoration-none" style="color: black">
                            <img src="img/{{ $image }}" alt="User" width="40" height="40"
                                class="rounded-circle me-0">
                        </a>
                    </div>
                    @endauth
                    @guest
                    <div class="btn-group no-wrap px-5">
                      <a href="/login" class="text-decoration-none" style="color: black">
                          <img src="img/{{ $image }}" alt="User" width="40" height="40"
                              class="rounded-circle me-0">
                      </a>
                  </div>
                  @endguest

            </div>
        </nav>
    </div>
    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
        <h1 id="scrollspyHeading1" class="text-center mb-3 mt-5" style="font-weight: 900">Welcome to Inventarix!</h1>
        <h4 class="text-center px-5 mb-0" style="font-weight: bold">Quickly and efficiently manage your inventory with
            our innovative inventory management system.</h4>
        <h4 class="text-center px-5 mb-4" style="font-weight: bold">Whether you run a small business or a large
            enterprise, our system is designed to give you complete control over your inventory.</h4>
        <div id="carouselExample" class="carousel slide d-flex align-items-center justify-content-center">
            <div id="carouselExample" class="carousel slide mt-4 mb-5" style="width: 1800px; height: 800px;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/Dashboard.png" class="d-block w-100 img-fluid" alt="Lobster">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Orders.png" class="d-block w-100 img-fluid" alt="Udang">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Stock.png" class="d-block w-100 img-fluid" alt="Ikan">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/Charts.png" class="d-block w-100 img-fluid" alt="Ikan">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <h1 class="text-center mt-5 mb-3 pt-5" style="font-weight: 900">How Does Our System Work?</h1>
        <h5 class="text-center"><span style="font-weight: 900;">Real-Time Monitoring :</span> Monitor your stock items
            anytime, anywhere. With real-time updates, you can make decisions based on the latest information.</h5>
        <h5 class="text-center mt-3"><span style="font-weight: 900;">Purchasing Management :</span> Automate purchasing
            and stock renewal processes to avoid inventory shortages or excesses.</h5>
        <h5 class="text-center mt-3"><span style="font-weight: 900;">Data Analysis Reports :</span> Access feature-rich
            data analysis reports to support your strategic decision making.</h5>
        <div class="container-fluid mt-4 py-5">
            <hr>
    </div>
        <h1 id="scrollspyHeading2" class="text-center mb-4 mt-4" style="font-weight: 900">Why Should Inventarix?</h1>
        <h5 class="text-start px-5 me-5 ms-5">Optimize Operational Efficiency : 
          <p class="px-5 me-5 ms-5" style="font-weight: 400">With Inventarix, you can optimize daily operations with better monitoring of inventory. This helps avoid unnecessary understocks or overstocks, ensuring that you always have the items you need without consuming too much storage space or capital.</p>
        </h5>
        <h5 class="text-start px-5 me-5 ms-5">Monitor Inventory in Real-Time : 
          <p class="px-5 me-5 ms-5" style="font-weight: 400">Inventarix provides the ability to monitor inventory in real-time. With automatic updates, you can see stock changes as they occur on the spot. This allows for faster and more accurate decision making.</p>
        </h5>
        <h5 class="text-start px-5 me-5 ms-5">Better Purchase Planning : 
          <p class="px-5 me-5 ms-5" style="font-weight: 400">With the right data and reports, Inventarix helps you plan your purchases better. You can identify sales trends, predict demand, and manage product lifecycles more effectively.</p>
        </h5>
        <h5 class="text-start px-5 me-5 ms-5">Deep Data Analysis :
          <p class="px-5 me-5 ms-5" style="font-weight: 400">Inventarix not only records the number of items in the warehouse, but also provides in-depth data analysis reports. It helps you identify product performance, identify customer purchasing patterns, and make strategic decisions based on solid data.</p>
        </h5>
        <h5 class="text-start px-5 me-5 ms-5">Improve Data Security :
          <p class="px-5 me-5 ms-5" style="font-weight: 400">Inventarix helps keep your inventory data secure. With limited access and strict controls, your inventory information is safer and more secure.</p>
        </h5>
        <h1 class="text-center mt-5 mb-5 py-5" style="font-weight: 900">Management Team</h1>
        <div class="img-container d-flex align-items-center justify-content-center mb-5">
          <figure class="text-center">
              <img src="./img/Sugiyanto.jpg" class="img-thumbnail rounded-circle mx-5" alt="#" style="width: 350px; height: 350px">
              <figcaption class="mt-3" style="font-weight: bolder; font-size: 20px">Sugiyanto</figcaption>
          </figure>
          
          <figure class="text-center">
              <img src="./img/Rama.jpg" class="img-thumbnail rounded-circle mx-5" alt="#" style="width: 350px; height: 350px">
              <figcaption class="mt-3" style="font-weight: bolder; font-size: 20px">M. Ramandha Satrya</figcaption>
          </figure>
          
          <figure class="text-center">
              <img src="./img/Raihan.jpg" class="img-thumbnail rounded-circle mx-5" alt="#" style="width: 350px; height: 350px">
              <figcaption class="mt-3" style="font-weight: bolder; font-size: 20px">M. Raihan Valentino</figcaption>
          </figure>
        </div>
        <div class="container-fluid mt-5 py-5">
          <hr>
        </div>
        <h1 id="scrollspyHeading3" class="text-center mb-4 mt-4" style="font-weight: 900">Inventarix Increase Your Business Efficiency with a Modern Inventory Management System</h1>
        <h5 class="px-5 ms-5 me-5 text-center" style="font-weight: bolder">In an era where business competition is increasingly fierce, having complete control over inventory is the key to success. Integrating a sophisticated inventory management solution, like Inventarix, can take your business to the next level. Let's explore how Inventarix empowers businesses to optimize stock management processes and improve operational efficiency.</h5>
        <h4 class="text-center mb-2 mt-4" style="font-weight: 900">Unmatched Real-Time Monitoring</h4>
        <h6 class="text-center mb-0 mt-2">Inventarix allows you to track inventory in real-time with a high level of accuracy. Without delay, you can see the most up-to-date information about product availability, avoiding the risk of missing sales or unnecessary overstocks.</h6>
        <h4 class="text-center mb-2 mt-4" style="font-weight: 900">Automated Purchasing Management</h4>
        <h6 class="text-center mb-0 mt-2">Forget worrying about stock shortages or overstock. Inventarix automatically plans and manages the purchasing process, ensuring inventory is always optimal. This not only reduces costs but also increases warehouse management efficiency.</h6>
        <h4 class="text-center mb-2 mt-4" style="font-weight: 900">In-Depth Data Analysis Reports</h4>
        <h6 class="text-center mb-0 mt-2">With Inventarix, you not only manage stock, but also gain deep insights through feature-rich data analysis reports. Identify sales trends, evaluate product performance, and make informed decisions to plan your business strategy.</h6>
        <h4 class="text-center mb-2 mt-4" style="font-weight: 900">Unmatched Flexibility and Security</h4>
        <h6 class="text-center mb-0 mt-2">Inventarix is designed to provide flexibility and high security for your inventory data. With customizable features, this system can be adapted to suit your business' unique needs while maintaining data security.</h6>
        <h4 class="text-center mb-2 mt-4" style="font-weight: 900">Easy Implementation and Full Support</h4>
        <h6 class="text-center mb-0 mt-2">Inventarix not only makes implementing an inventory management system easy, but also provides full support during the transition process. Our team is ready to help you optimize the use of Inventarix to suit your business needs.</h6>
        <h5 class="px-5 ms-5 me-5 mt-4 mb-5 text-center" style="font-weight: bolder">If you are looking for a comprehensive and innovative inventory management solution, Inventarix is the answer. Join thousands of businesses that have increased their efficiency and profitability. Discover the benefits Inventarix can bring to your business today!</h5>
      </div>
      <div class="container-fluid px-0" style="font-weight: 900" id="scrollspyHeading4">
        <nav class="navbar navbar-expand-lg bg-primary bg-opacity-50">
          <div class="container">
            <a href="#" class="navbar-brand fs-2">
              <img src="/img/inventarix.png" alt="Logo" width="100" height="100"
                  class="d-inline-block text-center ms-5 me-3">
              Inventarix
          </a>
          <div>
            <table>
              <div class="container-fluid">
                <h4 class="mb-5" style="font-weight: bold">Contact Information</h4>
                <tbody>
                  <tr>
                    <td class="pb-2">Sugiyanto</td>
                    <td class="ps-5 pb-2">
                    <a href="https://www.instagram.com/sugiyanto_tan02/?hl=id" style="text-decoration: none">
                      @sugiyanto_tan02
                    </a>
                  </td>
                  </tr>
                  <tr>
                    <td class="pb-2">M. Ramandha Satrya</td>
                    <td class="ps-5 pb-2">
                      <a href="https://www.instagram.com/ramaaaaaaaaaa.a/?hl=id" style="text-decoration: none">
                        @ramaaaaaaaaaa.a
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td class="pb-2">M. Raihan Valentino</td>
                    <td class="ps-5 pb-2">
                      <a href="https://www.instagram.com/raihanvlntn/?hl=id" style="text-decoration: none">
                        @raihanvlntn
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>  
              </div>
          </div>
          </div>
        </nav>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/js/landing-page.js"></script>
</body>

</html>
