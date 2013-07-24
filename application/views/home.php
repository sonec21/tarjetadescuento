

            <div class="row-fluid">
                <div class="span12 alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    Now special <strong> only &euro; 5,- </strong> express delivery!
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div class="slider-wrapper theme-bar">
                        <div class="ribbon"></div>
                        <div id="slider1" class="nivoslider">
                        <?php foreach ($food_discounts as $key => $discount) :  ?>
                                     <a href="#"><img src="img/header_<?php echo ($discount['company_id']) ?>.jpg" alt="" title="<?php echo $discount["description"] ?>"></a>

                       <?php  endforeach; ?>
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">

                    <div class="row-fluid">
                        <div class="span9">
                            <h2>Special selection</h2>
                        </div>
                        <div class="span3">
                            
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <ul class="thumbnails product-list-inline-small">
                                <?php foreach ($food_discounts as $key => $discount) :  ?>
                                    <li class="span4">
                                        <div class="thumbnail">
                                            <a href="#"><img src="img/header_<?php echo ($discount['company_id']) ?>.jpg" alt="" t></a>
                                             <div class="caption">
                                                <a href="#"><?php echo $discount["description"] ?></a>
                                                <p><?php echo $discount["short_tag"] ?><span class="label label-info price pull-right"><?php echo $discount["label"] ?></span></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php  endforeach; ?>

                            </ul>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <div class="article">
                                <img src="img/nominate.png" align="right">
                                <h4>Newly Nominated!</h4>
                                <h5>Vote for us now!</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. <a href="#">More <i class="icon-chevron-right icon-color"></i></a></p>
                            </div>
                        </div>
                        <div class="span6">
                            <div class="article">
                                <img src="img/starway.png" align="right">
                                <h4>Use the star way!</h4>
                                <h5>Order now!</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <a href="#">More <i class="icon-chevron-right icon-color"></i></a></p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--div class="span4">

                    <br>
                    <div class="row-fluid">
                        <div class="span12 well well-small">
                            <ul class="nav nav-list">
                                <li class="nav-header">Top 3 most popular</li>
                                <li><a href="#">Product A</a></li>
                                <li><a href="#">Product B</a></li>
                                <li><a href="#">Product C</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Top 3 best selling</li>
                                <li><a href="#">Product D</a></li>
                                <li><a href="#">Product E</a></li>
                                <li><a href="#">Product F</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="slider-wrapper theme-light">
                                <div class="ribbon"></div>
                                <div id="slider2" class="nivoslider">
                                    <img src="img/banner_01.jpg" alt="" title="This is an example of an optional long caption text" />
                                    <img src="img/banner_02.jpg" alt="" title="" />
                                    <img src="img/banner_03.jpg" alt="" title="" />
                                    <img src="img/banner_04.jpg" alt="" title="Another caption" />
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                </div-->
            </div>

            <hr>

            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails product-list-inline-large">
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <span class="label label-info price">&euro; 2,<sup>99</sup></span>
                                    <span class="label label-important price price-over">&euro; 1,<sup>99</sup></span>
                                    <img data-hover="img/product_04b.jpg" src="img/product_04.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product A</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <div class="label label-info price">&euro; 93,<sup>99</sup></div>
                                    <img data-hover="img/product_05b.jpg" src="img/product_05.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product B</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <div class="label label-info price">&euro; 1023,<sup>99</sup></div>
                                    <img data-hover="img/product_06b.jpg" src="img/product_06.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product C</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <div class="label label-info price">&euro; 123,<sup>99</sup></div>
                                    <span class="label label-important price price-over">&euro; 122,<sup>99</sup></span>
                                    <img data-hover="img/product_07b.jpg" src="img/product_07.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product D</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails product-list-inline-large">
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <span class="label label-info price">&euro; 2,<sup>99</sup></span>
                                    <img data-hover="img/product_08b.jpg" src="img/product_08.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product A</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <div class="label label-info price">&euro; 93,<sup>99</sup></div>
                                    <img data-hover="img/product_09b.jpg" src="img/product_09.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product B</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <div class="label label-info price">&euro; 1023,<sup>99</sup></div>
                                    <span class="label label-important price price-over">&euro; 999,<sup>99</sup></span>
                                    <img data-hover="img/product_10b.jpg" src="img/product_10.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product C</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <div class="label label-info price">&euro; 123,<sup>99</sup></div>
                                    <img data-hover="img/product_11b.jpg" src="img/product_11.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product D</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails product-list-inline-large">
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <span class="label label-info price">&euro; 2,<sup>99</sup></span>
                                    <img data-hover="img/product_12b.jpg" src="img/product_12.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product A</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <div class="label label-info price">&euro; 93,<sup>99</sup></div>
                                    <span class="label label-important price price-over">&euro; 89,<sup>99</sup></span>
                                    <img data-hover="img/product_13b.jpg" src="img/product_13.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product B</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail light">
                                <a href="#">
                                    <div class="label label-info price">&euro; 1023,<sup>99</sup></div>
                                    <img data-hover="img/product_14b.jpg" src="img/product_14.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product C</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                        <li class="span3">
                            <div class="thumbnail dark">
                                <a href="#">
                                    <div class="label label-info price">&euro; 123,<sup>99</sup></div>
                                    <img data-hover="img/product_15b.jpg" src="img/product_15.jpg" alt="">
                                </a>
                                <div class="caption">
                                    <a href="#">Product D</a>
                                </div>
                                <a href="#" class="btn btn-block">all products in category</a>
                            </div>
                        </li>
                    </ul>
                </div>