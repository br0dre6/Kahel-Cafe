<?php include 'inc/header.php'; ?>

<!-- Banner -->
<div class="banner">
    <img src="img/kahel-cafe-banner.jpg" class="banner-img" alt="kahel cafe banner"/>
</div>

<!-- Special Offers -->
<div class="special-offers">
    <h2 class="title-text">Special Offers</h2>
    
    <div class="orange-line">
        <img src="img/special-offers/orange-line.png" class="orange-line-img" alt="orange line"/>
    </div>

    <div class="special-offers-container">
        <!-- Cappuccino -->
        <div class="special-offers-menu">
            <div class="special-offers-image-container">
                <img src="img/special-offers/cappuccino.png" class="menu" alt="cappuccino" width="309.42px" height="226px"/>

                <div class="special-offers-rating">
                    <span class="rating">4.8<span>
                    <img src="img/special-offers/star.png" class="star" alt="star"/>
                </div>

                <div class="special-offers-details">
                    <h3>Cappuccino</h3>
                    <p>P110</p>
                    <button class="special-offers-btn">
                        <img src="img/special-offers/cart.png" class="cart" alt="cart"/>
                        Add Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Espresso -->
        <div class="special-offers-menu">
            <div class="special-offers-image-container">
                <img class="menu" src="img/special-offers/espresso.jpg" alt="espresso" width="309.42px" height="226px"/>

                <div class="special-offers-rating">
                    <span class="rating">4.8<span>
                    <img src="img/special-offers/star.png" class="star" alt="star"/>
                </div>

                <div class="special-offers-details">
                    <h3>Espresso</h3>
                    <p>P140</p>
                    
                    <button class="special-offers-btn">
                        <img src="img/special-offers/cart.png" class="cart" alt="cart"/>
                        Add Order
                    </button>
                </div>
            </div>
        </div>

        <!-- Caffe Latte -->
        <div class="special-offers-menu">
            <div class="special-offers-image-container">
                <img src="img/special-offers/caffe-latte.jpg" class="menu" alt="Caffe Latte" width="309.42px" height="226px"/>

                <div class="special-offers-rating">
                    <span class="rating">4.8<span>
                    <img src="img/special-offers/star.png" class="star" alt="star"/>
                </div>

                <div class="special-offers-details">
                    <h3>Caffe Latte</h3>
                    <p>P110</p>
                    <button class="special-offers-btn">
                        <img src="img/special-offers/cart.png" class="cart" alt="cart"/>
                        Add Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Virtual Tour -->
<div class="virtual-tour">
    <div class="slide">
        <img src="img/virtual-tour/vt1.png" alt="vt-img-1"/>
    </div>

    <div class="slide">
        <img src="img/virtual-tour/vt2.jpg" alt="vt-img-2"/>
    </div>

    <div class="slide">
        <img src="img/virtual-tour/vt3.jpg" alt="vt-img-3"/>
    </div>

    <div class="slide-text">
        <h2>Virtual Tour</h2>
        <p class="text-1">Explore our cafe to know more about</p>
        <p class="text-2">our space</p>
        <p class="text-3">and environment!</p>
    </div>

    <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
    <button class="next" onclick="changeSlide(1)">&#10095;</button>

    <div class="dots">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</div>
<script src="js/virtual-tour.js"></script>

<!--How to order and reserve-->
<div class="order-and-reserve">
    <h2>How to order and reserve</p>

    <div class="how">
        <img src="img/order-and-reserve/Advance.png" class="arrow-1" alt="arrow-1">
        <img src="img/order-and-reserve/make-order.png" class="order" alt="make order">
        <img src="img/order-and-reserve/Advance.png" class="arrow-2" alt="arrow-2">
        <img src="img/order-and-reserve/receive.png" class="receive" alt="receive">
        <img src="img/order-and-reserve/Food.png" class="food" alt="food">
    </div>
</div>

<!--Sched reservation-->
<div class="sched-reservation">
    <div class="sched-banner">
        <img src="img/sched-reservation/sched-banner.png" class="sched-banner" alt="sched-reservation-banner">
    </div>
    
    <img src="img/sched-reservation/calendar.png" class="calendar" alt="calendar">

    <div class="sched-res-text">
        <h2>Schedule your reservation</h2>
        <p class="sched-res-text-1">Reserve Your Order Today – Get Ahead of</p>
        <p class="sched-res-text-2">the Queue!</p>
    </div>

    <div class="sched-res-btn">
        <button class="reserve-btn">
            <img src="img/sched-reservation/Reserve.png" class="reserve-img" alt="cart"/>    
            Reserve now
        </button>

        <button class="order-btn">
            <img src="img/sched-reservation/Add Shopping Cart.png" class="order-now-img" alt="cart"/>    
            Order now
        </button>
    </div>
</div>

<?php include 'inc/footer.php'; ?>
