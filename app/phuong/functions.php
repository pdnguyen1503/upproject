<?php
    function subMenu($data,$id) {
        echo " <div class=\"custom-menu\">
                            <div class=\"row\">

                                <div class=\"col-md-4\">
                                    <ul class=\"list-links\">";
        foreach ($data as $item) {
            if ($item->parent_id==$id)
                echo " <li> <h3 class=\"list-links-title\">$item->name</h3></li>";
        }

    }






                                        /*<li><a href="#">Women’s Clothing</a></li>
                                        <li><a href="#">Men’s Clothing</a></li>
                                        <li><a href="#">Phones & Accessories</a></li>
                                        <li><a href="#">Jewelry & Watches</a></li>
                                        <li><a href="#">Bags & Shoes</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                            </div>
                            <div class="row hidden-sm hidden-xs">
                                <div class="col-md-12">
                                    <hr>
                                    <a class="banner banner-1" href="#">
                                            <img src="{{asset('public/client')}}/img/banner05.jpg" alt="">
                                        <div class="banner-caption text-center">
                                            <h2 class="white-color">NEW COLLECTION</h2>
                                            <h3 class="white-color font-weak">HOT DEAL</h3>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>*/

?>

