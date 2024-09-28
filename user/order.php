<?php include '../user/inc/navigation.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="">

        <!-- <style>
        body{
            display: flex;
            flex-direction: column;
        }
        </style> -->

        <style>
                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: grid;
            grid-template-rows: 9.5% 80% 7.5%;
            font-family: Arial, sans-serif;
        }


        .order-now {
            display: grid;
            grid-template-rows: 30% 10% 10% auto;
            height: 100%;
            width: 100%;
            overflow: hidden;
            width: 95%;
            margin: auto;
        }
        
        .slide {
            width: 100%;
            height: 100%;
            display: flex;
        }


        .banner {
            margin: auto;
            width: 100%;
            height: 100%;
            position: relative;
            border-radius: 2em;
            overflow: hidden;  
            margin-top: 1%;
        }

        .bannerContainer img {
            width: 300%;
            height: 100%;
            object-fit: cover;
        }

        .bannerContainer {
            width: 300%;
            display: flex;
            animation: slide 10s infinite;
        }

        .textbanner {
            position: absolute; 
            width: 40%;
            margin-left: 5%;
            top: 30%;   
            color: white;
            font-size: 2rem;
            z-index: 1; 
        }

        .ourMenu-search {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            grid-row: 50%;
            position: relative;
            width: 100%;
            height: 100%;
            align-items: center;
        }

        .search-bar {
            position: relative;
            background-color: #b4b4b4;
            border: .2em, #b4b4b4, ssolid ;
            border-radius: 1em;
            width: 23em;
            height: 2em;
            display: flex;
            align-items: center;
            margin: auto 0;
        }

        #searchbar {
            border: none;
            background-color: #b4b4b4;
            width: 80%;
            height: 90%;
            font-size: 1em;
            padding-left: 1.5em;
            color: white;
            border-radius: 1em;
        }

        ::placeholder {
            color: black;
        }

        .search-icon {
            position: absolute;
            right: 1em;
            font-size: 1.3em;
            color: black;
        }

        .menuType {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            overflow-x: hidden;
            white-space: nowrap;
            cursor: grab;
            width: 100%;
            height: 100%;
            user-select: none;
            font-size: 1.2rem;
        }

        .menuItem {
            display: flex;
            align-items: center;
            margin-right: 1em;
        }

        .menuItem img {
            margin-right: 0.5em;
            width: 1.2rem;
            height: 1.2rem;
        }

        /* .item img{
            height: 10rem;
            width: 15rem;
        } */

        .menu {
            width: 100%;
            height: 100%;
            display: grid;
            grid-template-columns: 1fr;
            grid-auto-rows: max-content; 
            overflow-y: auto;
            padding: 1rem;
            overflow: scroll;
            scrollbar-width: none; 
        }

        .itemMenu {
            display: flex;
            flex-direction: row;
            justify-content: space-between; 
            width: 100%;
            height: 20rem;
            margin-bottom: 1rem; 
            
        }


        .item {
            width: 20%; 
            height: 100%; 
            background-color: white;
            border-radius: 1rem;
            box-shadow: .1rem .1rem gray;
        }

        #ratings i
        {
            color: orange;
        }
        
        #ratings
        {
            position: absolute; 
            background-color: white;
            width: 20%;
            border: .1rem solid gray;
            border-radius: 2rem;
            margin: .5%;
            padding: 0 1%
            
        }

        #addOrder
        {
            border-radius: 2rem;
            width: 90%;
            height: 2rem;
            background-color: orange;
            border-color: transparent;
        }



        @keyframes slide {
            0% { transform: translateX(0); }
            33% { transform: translateX(0); }
            34% { transform: translateX(-33.33%); }
            66% { transform: translateX(-33.33%); }
            67% { transform: translateX(-67%); }
            100% { transform: translateX(-67%); }
        }
    </style>
    </head>
    <body>
        <div class="order-now">      
            <div class="slide">
                <div class="banner"> 
                    <div class="bannerContainer">
                        <img src="../../common/resources/img/cafe_bg.png" alt="">
                        <img src="../../common/resources/img/cafe_bg2.png" alt="">
                        <img src="../../common/resources/img/cafe_bg3.png" alt="">
                    </div>
                    <div class="textbanner">
                        <h2 id="tbanner">Order Your Favorites at Kahel Café!</h2>
                    </div>
                </div>
            </div>

            <div class="ourMenu-search">
            <h2 class>Our Menu</h2>

            <div class="search-bar">
                <input id="searchbar" type="text" name="search" placeholder="Search item...">
                <i class="bi bi-search search-icon"></i>
            </div>
        </div>

        <div class="menuType">
            <div class="menuItem">
                <img src="../../common/resources/icons/favorites(1).png" alt="">
                <p>Popular Now</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Discount (1).png" alt="">
                <p>Special Offer</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/like.png" alt="">
                <p>Signature</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Coffee.png" alt="">
                <p>Coffee</p>
            </div>
            
                <div class="menuItem">
                <img src="../../common/resources/icons/cup.png" alt="">
                <p>Non-Coffee</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Milkshake.png" alt="">
                <p>Frappe</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Tapas.png" alt="">
                <p>starters</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Noodles.png" alt="">
                <p>Pasta</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Sandwich (1).png" alt="">
                <p>Sandwich</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Rice (1).png" alt="">
                <p>Rice Meal</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/Food (1).png" alt="">
                <p>All Day Breakfast</p>
            </div>

                <div class="menuItem">
                <img src="../../common/resources/icons/AddOn(1).png" alt="">
                <p>Aadd-On</p>
            </div>

            <div class="menuItem">
                <img src="../../common/resources/icons/up(1).png" alt="">
                <p>Upsize</p>
            </div>

        </div>

        <div class="menu">
            <div class="itemMenu">
                <div class="item">
                    <p id="ratings">4.8 <i class="bi bi-star-fill"></i></p>
                    <img src="../../common/resources/product/coffee.png" alt="">
                    <p id="itemNAme">Cappuccino</p>
                    <p id="price">P 180</p>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>
            </div>

            <div class="itemMenu">
                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>

                <div class="item">
                    <img src="../../common/resources/product/coffee.png" alt="">
                </div>
            </div>
        </div>
        
    </div>
    
    <footer>
        <h1> this is the footer</h1>
    </footer>

        <script>
        const menuType = document.querySelector('.menuType');
        let isDragging = false;
        let startPos = 0;
        let scrollLeft = 0;

        menuType.addEventListener('mousedown', (e) => {
            isDragging = true;
            menuType.classList.add('active');
            startPos = e.pageX - menuType.offsetLeft;
            scrollLeft = menuType.scrollLeft;
        });

        menuType.addEventListener('mouseleave', () => {
            isDragging = false;
            menuType.classList.remove('active');
        });

        menuType.addEventListener('mouseup', () => {
            isDragging = false;
            menuType.classList.remove('active');
        });

        menuType.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            e.preventDefault();
            const x = e.pageX - menuType.offsetLeft;
            const walk = (x - startPos) * 3;
            menuType.scrollLeft = scrollLeft - walk;
        });
    </script>
    
    </body>
</html>