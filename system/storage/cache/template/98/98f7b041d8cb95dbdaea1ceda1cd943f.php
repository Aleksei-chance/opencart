<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* multishop/template/common/home.twig */
class __TwigTemplate_6cacb379944e3d048de3a5a0f3c3d0c1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "


<!-- Carousel Start -->
<div class=\"container-fluid mb-3\">
    <div class=\"row px-xl-5\">
        <div class=\"col-lg-8\">
            <div id=\"header-carousel\" class=\"carousel slide carousel-fade mb-30 mb-lg-0\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#header-carousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#header-carousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#header-carousel\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item position-relative active\" style=\"height: 430px;\">
                        <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-1.jpg\" style=\"object-fit: cover;\">
                        <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                            <div class=\"p-3\" style=\"max-width: 700px;\">
                                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Men Fashion</h1>
                                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                        <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-2.jpg\" style=\"object-fit: cover;\">
                        <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                            <div class=\"p-3\" style=\"max-width: 700px;\">
                                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Women Fashion</h1>
                                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-item position-relative\" style=\"height: 430px;\">
                        <img class=\"position-absolute w-100 h-100\" src=\"catalog/view/theme/multishop/assets/img/carousel-3.jpg\" style=\"object-fit: cover;\">
                        <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                            <div class=\"p-3\" style=\"max-width: 700px;\">
                                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">Kids Fashion</h1>
                                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\" href=\"#\">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-4\">
            <div class=\"product-offer mb-30\" style=\"height: 200px;\">
                <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-1.jpg\" alt=\"\">
                <div class=\"offer-text\">
                    <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                    <h3 class=\"text-white mb-3\">Special Offer</h3>
                    <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                </div>
            </div>
            <div class=\"product-offer mb-30\" style=\"height: 200px;\">
                <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-2.jpg\" alt=\"\">
                <div class=\"offer-text\">
                    <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                    <h3 class=\"text-white mb-3\">Special Offer</h3>
                    <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class=\"container-fluid pt-5\">
    <div class=\"row px-xl-5 pb-3\">
        <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
            <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
                <h1 class=\"fa fa-check text-primary m-0 mr-3\"></h1>
                <h5 class=\"font-weight-semi-bold m-0\">Quality Product</h5>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
            <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
                <h1 class=\"fa fa-shipping-fast text-primary m-0 mr-2\"></h1>
                <h5 class=\"font-weight-semi-bold m-0\">Free Shipping</h5>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
            <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
                <h1 class=\"fas fa-exchange-alt text-primary m-0 mr-3\"></h1>
                <h5 class=\"font-weight-semi-bold m-0\">14-Day Return</h5>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-6 col-sm-12 pb-1\">
            <div class=\"d-flex align-items-center bg-light mb-4\" style=\"padding: 30px;\">
                <h1 class=\"fa fa-phone-volume text-primary m-0 mr-3\"></h1>
                <h5 class=\"font-weight-semi-bold m-0\">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class=\"container-fluid pt-5\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Categories</span></h2>
    <div class=\"row px-xl-5 pb-3\">
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-2.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-1.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-4.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"\">
                <div class=\"cat-item img-zoom d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/cat-3.jpg\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>Category Name</h6>
                        <small class=\"text-body\">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Featured Products</span></h2>
    <div class=\"row px-xl-5\">
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-1.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-2.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-3.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-4.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-5.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-6.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-7.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-8.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class=\"container-fluid pt-5 pb-3\">
    <div class=\"row px-xl-5\">
        <div class=\"col-md-6\">
            <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-1.jpg\" alt=\"\">
                <div class=\"offer-text\">
                    <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                    <h3 class=\"text-white mb-3\">Special Offer</h3>
                    <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"product-offer mb-30\" style=\"height: 300px;\">
                <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/offer-2.jpg\" alt=\"\">
                <div class=\"offer-text\">
                    <h6 class=\"text-white text-uppercase\">Save 20%</h6>
                    <h3 class=\"text-white mb-3\">Special Offer</h3>
                    <a href=\"\" class=\"btn btn-primary\">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->
<div class=\"container-fluid pt-5 pb-3\">
    <h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">Recent Products</span></h2>
    <div class=\"row px-xl-5\">
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-1.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-2.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-3.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-4.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-5.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-6.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-7.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star-half-alt text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" src=\"catalog/view/theme/multishop/assets/img/product-8.jpg\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-sync-alt\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"\">Product Name Goes Here</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>\$123.00</h5><h6 class=\"text-muted ml-2\"><del>\$123.00</del></h6>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center mb-1\">
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"fa fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small class=\"far fa-star text-primary mr-1\"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Products End -->


<!-- Vendor Start -->
<div class=\"container-fluid py-5\">
    <div class=\"row px-xl-5\">
        <div class=\"col\">
            <div class=\"owl-carousel vendor-carousel\">
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-1.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-2.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-3.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-4.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-5.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-6.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-7.jpg\" alt=\"\">
                </div>
                <div class=\"bg-light p-4\">
                    <img src=\"catalog/view/theme/multishop/assets/img/vendor-8.jpg\" alt=\"\">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->


<!-- Footer Start -->
<div class=\"container-fluid bg-dark text-secondary mt-5 pt-5\">
    <div class=\"row px-xl-5 pt-5\">
        <div class=\"col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5\">
            <h5 class=\"text-secondary text-uppercase mb-4\">Get In Touch</h5>
            <p class=\"mb-4\">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
            <p class=\"mb-2\"><i class=\"fa fa-map-marker-alt text-primary mr-3\"></i>123 Street, New York, USA</p>
            <p class=\"mb-2\"><i class=\"fa fa-envelope text-primary mr-3\"></i>info@example.com</p>
            <p class=\"mb-0\"><i class=\"fa fa-phone-alt text-primary mr-3\"></i>+012 345 67890</p>
        </div>
        <div class=\"col-lg-8 col-md-12\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Quick Shop</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">My Account</h5>
                    <div class=\"d-flex flex-column justify-content-start\">
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Home</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Our Shop</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shop Detail</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Shopping Cart</a>
                        <a class=\"text-secondary mb-2\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Checkout</a>
                        <a class=\"text-secondary\" href=\"#\"><i class=\"fa fa-angle-right mr-2\"></i>Contact Us</a>
                    </div>
                </div>
                <div class=\"col-md-4 mb-5\">
                    <h5 class=\"text-secondary text-uppercase mb-4\">Newsletter</h5>
                    <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                    <form action=\"\">
                        <div class=\"input-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Your Email Address\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary\">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class=\"text-secondary text-uppercase mt-4 mb-3\">Follow Us</h6>
                    <div class=\"d-flex\">
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-primary btn-square mr-2\" href=\"#\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"btn btn-primary btn-square\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row border-top mx-xl-5 py-4\" style=\"border-color: rgba(256, 256, 256, .1) !important;\">
        <div class=\"col-md-6 px-xl-0\">
            <p class=\"mb-md-0 text-center text-md-left text-secondary\">
                &copy; <a class=\"text-primary\" href=\"#\">Domain</a>. All Rights Reserved. Designed
                by
                <a class=\"text-primary\" href=\"https://htmlcodex.com\">HTML Codex</a>
            </p>
        </div>
        <div class=\"col-md-6 px-xl-0 text-center text-md-right\">
            <img class=\"img-fluid\" src=\"catalog/view/theme/multishop/assets/img/payments.png\" alt=\"\">
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary back-to-top\"><i class=\"fa fa-angle-double-up\"></i></a>


<!-- JavaScript Libraries -->
<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/easing/easing.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/lib/owlcarousel/owl.carousel.min.js\"></script>

<!-- Contact Javascript File -->
<script src=\"catalog/view/theme/multishop/assets/mail/jqBootstrapValidation.min.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/mail/contact.js\"></script>

";
        // line 868
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 869
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 869);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 869);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 869);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 871
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 872
            echo "    <script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 874
        echo "
<!-- Template Javascript -->
<script src=\"catalog/view/theme/multishop/assets/js/common.js\"></script>
<script src=\"catalog/view/theme/multishop/assets/js/main.js\"></script>
</body>

</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "multishop/template/common/home.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  937 => 874,  928 => 872,  924 => 871,  911 => 869,  907 => 868,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "multishop/template/common/home.twig", "");
    }
}
