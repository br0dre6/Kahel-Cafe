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
            grid-template-rows: 9.5% 90%;
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
            height: auto; /* Adjust based on content */
            display: grid;
            grid-template-columns: 1fr;
            grid-auto-rows: max-content; 
            padding: 1rem;
            overflow-y: auto;
            overflow: scroll;
            scrollbar-width: none; 
        }
        

        .itemMenu {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 2rem;
            justify-content: center; 
            width: 100%;
            height: auto; 
            padding: 1rem;
        }

        .item {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 100%; /* Let the items take full width */
            height: 100%; 
            background-color: white;
            border-radius: 1rem;
            box-shadow: 0.1rem 0.1rem gray;
            position: relative;
            padding: 1rem;
        }
        
        .item-details {
            display: flex;
            justify-content: space-between;
            margin: 1.5%;
            height: 20%;
            width: 90%;
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
            margin-top: 1.5%;
            margin-left: 1.5%;
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

        



        /*jj*/
/* General modal styling */
#orderItem {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1;
}

.orderItem-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    width: 60%;
    display: flex;
    flex-direction: column;
    gap: 10px;
}



/* Title section with 5% height */
.orderTitle {
    flex: 0 0 5%; /* Takes 5% of the modal height */
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4;
}

/* Description section with 85% height */
.description {
    display: flex;
    justify-content: space-between;
    flex: 0 0 85%; /* Takes 85% of the modal height */
}

/* Each part of the description gets 45% width */
.itemDescription, .orderDescription {
    flex: 0 0 45%; /* 45% width for each column */
    padding: 10px;
    border-radius: 5px;
}

/* Action section with 8% height */
.action {
    flex: 0 0 8%; /* Takes 8% of the modal height */
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
}

/* Styling for action buttons */
.action button {
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    font-size: 16px;
}

.action {
    display: flex; /* Ensure buttons are aligned side by side */
    justify-content: space-between; /* Add space between buttons */
}

.action .cancel {
    background-color: white;
    width: 48%;
    border-radius: 1rem;
    border: 0.1rem solid orange;
    color: orange;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

.action .addOrder {
    background-color: orange;
    width: 48%;
    border-radius: 1rem;
    border: 0.1rem solid orange;
    color: white;
    transition: background-color 0.3s, color 0.3s; /* Smooth transition */
}

/* Hover effects to exchange styles */
.action:hover .cancel {
    background-color: white; /* Change background to white on hover */
    color: orange; /* Change text color to orange on hover */
}

.action:hover .addOrder {
    background-color: white; /* Change background to white on hover */
    color: orange; /* Change text color to orange on hover */
}

/* Individual button hover effect to switch styles */
.action .cancel:hover {
    background-color: orange; /* Change background to orange */
    color: white; /* Change text color to white */
}

.action .addOrder:hover {
    background-color: orange; /* Change background to orange */
    color: white; /* Change text color to white */ 
   
}

.size-btn, .temperature-btn
{
    width: 6rem;
    border-radius: 1rem;
}

.size-btn:hover, .temperature-btn:hover 
{
    width: 6rem;
    border-radius: 1rem;
    background-color: orange;
    border-color: orange;
}



#quantityInput
{
    border-radius: 1rem;
    width: 2rem;
    text-align: center;
}

#quantityRange
{
    color: orange;
}

#orderItemItemImage
{
    width: 100%;
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
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P280</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>

                <div class="item">
                    <img class="item-image" src="../../common/resources/product/coffee.png" alt="">
                    <div class="item-details">
                        <span class="item-name">Cappuccino</span>
                        <span class="item-price">P180</span>
                    </div>
                    <button id="addOrder"><i class="bi bi-cart3"></i>Add Order</button>
                </div>
            </div>
        </div>
        
        <div id="orderItem" class="orderItem">
    <div class="orderItem-content">
        <div class="orderTitle">
            <h2><span id="orderItemItemName"></span></h2>
        </div>

        <div class="description">
            <div class="itemDescription">
            <img id="orderItemItemImage" src="" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quos nemo, repudiandae tenetur a nobis nam,
                    cupiditate omnis animi pariatur velit praesentium, consequatur recusandae? Ipsam animi sed suscipit ratione saepe.</p>
            </div>

            <div class="orderDescription">
    <!-- Size Selection -->
    <h3>Size</h3>
    <div id="sizeButtons">
        <button type="button" class="size-btn" data-size="small">Small</button>
        <button type="button" class="size-btn" data-size="medium">Medium</button>
        <button type="button" class="size-btn" data-size="large">Large</button>
    </div>

    <!-- Temperature Selection -->
    <h3>Temperature</h3>
    <div id="temperatureButtons">
        <button type="button" class="temperature-btn" data-temperature="hot">Hot</button>
        <button type="button" class="temperature-btn" data-temperature="cold">Cold</button>
    </div>

    <!-- Quantity Selection with Input and Range Slider -->
    <h3>Quantity</h3>
    <input type="number" id="quantityInput" name="quantity" min="1" max="50" value="1" />
    <input type="range" id="quantityRange" name="quantity" min="1" max="50" value="1" oninput="document.getElementById('quantityInput').value=this.value" />
    <!-- Display the price -->
    <p>Price: <span id="orderItemItemPrice"></span></p>
</div>

        </div>

        <div class="action">
            <button class="cancel">Cancel</button>
            <button class="addOrder">Add Order</button>
        </div>
    </div>
</div>

</div>


    </div>
    

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


        // Handle size button selection
    document.querySelectorAll('.size-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.size-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            // Update price based on selected size if needed
            let selectedSize = this.getAttribute('data-size');
            console.log('Selected size:', selectedSize);
        });
    });

    // Handle temperature button selection
    document.querySelectorAll('.temperature-btn').forEach(button => {
        button.addEventListener('click', function() {
            document.querySelectorAll('.temperature-btn').forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            // Update logic based on temperature selection
            let selectedTemperature = this.getAttribute('data-temperature');
            console.log('Selected temperature:', selectedTemperature);
        });
    });

    // Sync quantity input and range slider
    document.getElementById('quantityInput').addEventListener('input', function() {
        document.getElementById('quantityRange').value = this.value;
    });

// Get the orderItem element and close button
const orderItem = document.getElementById("orderItem");
const cancelButton = document.querySelector(".cancel");
const addOrderButton = document.querySelector(".addOrder");

// Hide the modal when the page loads
orderItem.style.display = "none";

// Select all buttons with id 'addOrder' (outside the modal)
const addOrderButtons = document.querySelectorAll('#addOrder');

// Loop through each button and add a click event listener
addOrderButtons.forEach(button => {
    button.addEventListener('click', function() {
        const item = this.closest('.item');  // Find the closest item container
        const itemName = item.querySelector('.item-name').textContent;  
        const itemPrice = item.querySelector('.item-price').textContent; 
        const itemImage = item.querySelector('.item-image').src;

        // Set the item name and price in the orderItem modal
        document.getElementById('orderItemItemName').textContent = itemName;
        document.getElementById('orderItemItemPrice').textContent = itemPrice;
        document.getElementById('orderItemItemImage').src = itemImage;

        // Show the orderItem modal
        orderItem.style.display = "flex";
    });
});

// Close the orderItem modal when the cancel button is clicked
cancelButton.onclick = function() {
        orderItem.style.display = "none";

        // Reset the quantity input and range to 1
        document.getElementById('quantityInput').value = 1;
        document.getElementById('quantityRange').value = 1;
        
        // Optionally, you can also reset the selected size and temperature buttons
        document.querySelectorAll('.size-btn, .temperature-btn').forEach(btn => btn.classList.remove('active'));
    };

// Handle add order logic
addOrderButton.onclick = function() {
    alert("Item added to order!");  // Placeholder logic for adding the order
    orderItem.style.display = "none";  // Hide the modal after adding the item
};

// Close the orderItem modal if clicked outside the modal content
window.onclick = function(event) {
    if (event.target === orderItem) {
        orderItem.style.display = "none";
    }
};




    </script>
    
    </body>
</html>
