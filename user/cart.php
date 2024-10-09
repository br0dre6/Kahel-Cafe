
<?php include '../user/inc/navigation.php'; ?>

<!DOCTYPE html>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    
     <style>
            .body-cart{
                display: flex;
    box-sizing: border-box;
    flex-direction: column;
    margin: 0;
    padding: 0;
    height: 100%;
    
    font-family: 'Poppins', sans-serif;
    position: relative; 
}

.container-cart{
    display: flex;
    flex-direction: row;
    
   
}
/*-------------------------CART LEFT ------------------------------------------------ */
.cart-left{
    display: flex;
   
    
    flex-direction: column;
    width: 70%;
    
    padding: 2rem;
}
.cart-table-container-order{
    width: 100%;
    border-radius: 1rem;

}


.header-left-cart{
    display: flex;
    flex-direction: row;
   
    width: 100%;
    gap: 0.8rem;
}

.order-h1{
    
    text-decoration: underline;
    text-decoration-color: #FF902A;

}

.order-item-img-holder{
    display: flex;
    flex-direction: row-reverse;
    justify-content: space-around;
}

.scale-size-order {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    vertical-align: middle;
    width: 15rem;
    margin: 0 3rem;
}

#order-item-img {
    width: 10rem;
    height: 8rem;
    border: 1px solid black;
    border-radius: 10px;
}

.table th, .table td {
    
    text-align: center; /* Center align for both header and body */
    vertical-align: middle; /* Vertical alignment */
   
}

.order-item-img-holder {
    display: flex;
    justify-content: center; /* Center images within the cell */
    align-items: center;
    text-align: center;
    gap: 1rem;
}

.input-group.scale-size-order {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}

.order-item-name{
    color: #FF902A;
    font-weight: bold;
}

#order-item-name{
    font-weight: bold;
}

.custom-header {
            background-color: #FF902A;
            color: white; 
        }
.rounded-table {
            border-radius: 15px; 
            overflow: hidden; 
            box-shadow: 0px 10px 29px 0px rgba(67,67,67,0.15);
        }

        .header-h1-note{
            margin-top: 2rem;
            color: #616161;
            font-weight: bold;
            font-size:1.5rem;
        }

        #note-area{
            border-radius: 1rem;
            height: 100%;
            width: 100%;
            padding: 0.5rem;
            resize: none;
        }

/*-------------------------CART RIGHJT ------------------------------------------------ */


.cart-right{
    display: flex;
    justify-content: center;
    width: 30%;
  flex-direction: column;
  padding: 2rem;
    box-shadow: -10px 0px 29px 0px rgba(67,67,67,0.15);
   
}

.cart-right-header1{
    font-size: 1.3rem;
    font-weight: bold;
    color: #FF902B;

    
}
.seat-reservation,
.cart-right-header1{
   width: 100%;
  margin-top: 0.8rem;
    flex-direction: column;
   
}


.reservation-color{
    display: grid;
    grid-template-columns: 1fr 1fr;
    width: 100%;
    gap: 1rem;
    margin-top: 1rem;
    width: 100%;
    
}

.no-slots{
    border-radius: 0.4rem;
    display: flex;
    justify-content: center;
    background-color: #17A1FA;
    color: #FFFFFF;
    padding: 0.5rem;
    width: 100%;
}

.available{
    border-radius: 0.4rem;
    display: flex;
    justify-content: center;
    background-color: #07D090;
    color: #FFFFFF;
    padding: 0.5rem;
    width: 100%;
}

.fully-booked{
    border-radius: 0.4rem;
    display: flex;
    justify-content: center;
    background-color:#E60000 ;
    color: #FFFFFF;
    padding: 0.5rem;
    width: 100%;
}

.your-reservation{
    border-radius: 0.4rem;
    display: flex;
    justify-content: center;
    background-color:#9647FF ;
    color: #FFFFFF;
    padding: 0.5rem;
    width: 100%;
    
}



  .reservation-type-container{
   display: flex;
   flex-direction: column;

  }

  .party-size,
  .reservation-type1{
    display: grid;
grid-template-columns: 1fr 1fr;
justify-content: center;
align-items: center;
   margin: 0.3rem;
   
}

small{
    font-size: 0.9rem;
}   

#button-minus,
#button-plus,
#button-minus-order,
#button-plus-order{
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #616161;
    font: #ffffff;
    border: none;
    height: 2rem;
    margin: 0.4rem 0.4rem;
    border-radius:0.4rem ;
    color: white;
    
}

#number-input,
#number-input-order{
   text-align: center;
    border: solid #212529 1px;
    height: 2rem;
    margin: 0.4rem 0.4rem;
    border-radius:0.4rem ;
    color: black;
    font-weight: bold;
}

.btn-group{
    display: flex;
    flex-direction: column;
   
}

.dropdown-item-type-select{
    color: #FF902A;
    background: none;
    border: none;
   
}
#otc,
#pickup{
    
    width: 100%;
    background: none;
    border: none;
    color:#616161;
    padding: 0.4rem; 
    border-radius: 1rem 0 1rem 0;
}

#otc:hover{
    background-color: #FF902A;
    color: #ffffff;
}


#pickup:hover{
    background-color: #FF902A;
    color: #ffffff;
}

.dropdown-item-type-show {
  display: none;
  flex-direction: column;
    position: absolute; 
    z-index: 9999;
  background-color: white;
    margin-top: 2rem; 
    justify-content: center; 
    align-items: center; 
 
    border-radius: 1rem;
    width: 100%;
   
    box-shadow: 0px 10px 29px 0px rgba(67,67,67,0.15);
}

.reservation-info{
    display: grid;
    grid-template-columns: 1fr 1fr;
}


.result-sum{
 color: #616161;
}

#confirm-order{
    width: 100%;
    background: #FF902A;
    border: none;
    color: #ffffff;
    padding: 0.5rem;
    border-radius: 1.2rem;
    
}

#reservation-info-total-price p{
    font-weight: bold;
}
/* Default layout (large screens, min-width: 1281px) */
.container {
    display: flex;
    flex-direction: row; /* Horizontal layout by default */
    justify-content: space-between;
}

.left-cart, .right-cart {
    width: 48%; /* Both carts take up nearly half the space */
}

.order-item-img-holder {
            display: flex;
            align-items: center;
        }

        .order-item-img-holder img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        .custom-header {
            background-color: #f8f9fa;
        }

        /* Scrollbar for the table wrapper */
        .table-wrapper {
            max-height: 300px; /* Set your desired max height */
            overflow-y: auto; /* Enable vertical scrolling */
        }

        /* Ensure horizontal scroll on mobile view without resizing */
        .table-responsive {
            overflow-x: auto; /* Enable horizontal scroll */
            white-space: nowrap; /* Prevent table contents from wrapping */
        }

        /* Ensure the input group remains in a row and never shrinks */
        .input-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            flex-wrap: nowrap;
            justify-content: flex-start;
            width: 180px; /* Set a fixed width */
        }

        .input-group button, .input-group input {
            flex: 0 0 auto;
            min-width: 50px; /* Ensure minimum width for buttons and input */
            text-align: center;
        }

        .input-group input {
            width: 60px; /* Fixed width to prevent shrinking */
        }

/* Large laptops (min-width: 1025px and max-width: 1280px) */
@media (min-width: 1025px) and (max-width: 1280px) {
    .container {
        display: flex;
        flex-direction: row;
    }

    .left-cart, .right-cart {
        width: 48%;
    }

    .your-h1,
    .order-h1 {
        font-size: 2.5rem; /* Adjust font size for large screens */
    }

    .cart-left, .cart-right {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        width: 100%;
    }

    .cart-right-header1 {
        text-align: left;
    }

    .reservation-color {
        flex-direction: row;
    }

    .note {
        width: 80%;
    }
}

/* Small laptops and tablets (min-width: 769px and max-width: 1024px) */
@media (min-width: 805px) to (max-width: 1024px) {
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center the content horizontally */
        align-items: center; /* Center the content vertically */
    }

    .left-cart, .right-cart {
        width: 48%;
        display: flex;
        justify-content: center; /* Center the content inside left-cart */
        align-items: center;
    }

    .your-h1,
    .order-h1 {
        font-size: 2rem; /* Responsive font size for tablets */
    }

    .cart-left, .cart-right {
        display: flex;
        justify-content: center; /* Center left and right carts */
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: row;
        justify-content: center; /* Center the entire container-cart */
        align-items: center;
        width: 100%;
    }

    .cart-right-header1 {
        text-align: center;
    }

    .reservation-color {
        flex-direction: column;
    }

    .note {
        width: 90%;
    }
}

/* Mobile devices (360px width) */
@media (max-width: 360px) {
    .container {
        display: flex;
        flex-direction: column; /* Stack the items vertically */
        align-items: center; /* Center the items */
        width: 100%;
    }

    .left-cart, .right-cart {
        width: 100%; /* Take full width of the screen */
        margin-bottom: 20px; /* Add space between the carts */
    }

    .your-h1,
    .order-h1 {
        font-size: 1.5rem; /* Adjust font size for smaller screens */
        text-align: center;
    }

    .cart-left, .cart-right {
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .cart-right-header1 {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .reservation-color {
        display: flex;
        flex-direction: column;
    }

    .note {
        width: 100%; /* Take full width for notes */
    }
}



/* Tablets and small devices (min-width: 601px and max-width: 768px) */
@media (min-width: 601px) and (max-width: 768px) {
    .container {
        display: flex;
        flex-direction: column; /* Switch to column layout on tablets */
    }

    .left-cart, .right-cart {
        width: 100%; /* Each cart takes full width in column layout */
        margin-bottom: 20px; /* Add space between carts */
    }

    .your-h1,
    .order-h1 {
        font-size: 1.8rem; /* Smaller font size for tablets */
    }

    .cart-left, .cart-right {
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .cart-right-header1 {
        text-align: center;
    }

    .reservation-color {
        flex-direction: column;
    }

    .note {
        width: 100%;
    }
}

/* Mobile devices (min-width: 375px and max-width: 600px) */
@media (min-width: 375px) and (max-width: 600px) {
    .your-h1,
    .order-h1 {
        font-size: 1.5rem; /* Smaller font for mobile */
    }

    .cart-left, .cart-right {
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .cart-right-header1 {
        text-align: center;
    }

    .reservation-color {
        flex-direction: column;
    }

    .note {
        width: 100%;
    }
}

/* Mobile devices (max-width: 480px) */
@media (max-width: 480px) {
    .your-h1,
    .order-h1 {
        font-size: 2rem;
    }

    .header-left-cart {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cart-left {
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .container-cart {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }

    .cart-right {
        display: flex;
        justify-content: center;
        align-items: center;
        box-shadow: none;
        width: 100%;
    }

    .cart-right-header1 {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .reservation-color {
        display: flex;
        flex-direction: column;
    }

    .note {
        width: 100%;
    }
}






        </style>
    </head>

     <body class="body-cart">

  
        
        <div class="container-cart">
 
         <!----CART-LEFT----->
        <div class="cart-left">
             <div class="header-left-cart">
             <h1 class="your-h1">Your</h1><h1 class="order-h1">Order</h1>
 
             </div>
 
             <div class="container mt-5">
    <div class="table-responsive">
        <div class="table-wrapper">
            <table class="table table-borderless rounded-table">
                <thead class="custom-header">
                    <tr>
                        <th scope="col" style="width: 40%;">Order Item</th>
                        <th scope="col" style="width: 30%;">Price</th>
                        <th scope="col" style="width: 30%;">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <tr id="empty-cart-message">
                    <td colspan="3" class="text-center" id="cart-empty">Your cart is empty</td>
                </tr>
                <tr id="cart-not-empty">
                    <td>
                        <div class="order-item-img-holder">
                        <p id="order-item-name">Item Name</p>
                            <img src="https://via.placeholder.com/50" alt="Item" id="order-item-img">
                           
                        </div>
                    </td>
                    <td class="order-item-name">199</td>
                    <td>
                        <div class="input-group">
                            <button class="btn btn-outline-secondary" type="button" id="button-minus-order">-</button>
                            <input type="number" class="form-control" value="0" id="number-input-order" min="0">
                            <button class="btn btn-outline-secondary" type="button" id="button-plus-order">+</button>
                        </div>
                    </td>
                </tr>
              
              
               
                </tbody>
            </table>
        </div>
    </div>
</div>

 
             <div class="note">
                    <h1 class="header-h1-note">Note</h1>

                    <textarea name="note-area" id="note-area" maxlength="300"></textarea>
             </div>
 
         </div>
 
          <!----CART-RIGHT----->
 
          <div class="cart-right">
             <div class="seat-reservation">
                 <h1 class="cart-right-header1">Seat Reservation</h1>

                 <div class="reservation-color">
                    <p class="no-slots">No slots</p>
                    <p class="available">Available</p>
                    <p class="fully-booked">Fully Booked</p>
                    <p class="your-reservation">Your Reservation</p>
                 </div>
 
             </div>
 
             <div class="Available-Dates">
              <h1 class="cart-right-header1">Available Dates</h1>
               <div class="available-dates-show" id="available-dates-show"></div>
               <div class="no-available-dates" id="no-available-dates">
                <p class="no-available">No available dates</p>
               </div>
               <div class="available-dates-closed" id="-closedavailable-dates-closed"></div>
 
             </div>
 
             <div class="reservation-type-container">

             <div class="reservation-type1">
                <div class="type" id="type">
                    <small>Reservation Type</small>

                </div>

               
             
                <div class="btn-group">

                    <button class="dropdown-item-type-select" id="select-type" type="button">Select > </button >

          <div class="dropdown-item-type-show">
                <button class="dropdown-item-type" id="otc" type="button">Over the counter</button>
                    <button class="dropdown-item-type" id="pickup" type="button">Pick-up</button>

                    </div>
                  
                  
                </ul>

               
                    
                    
            
                </div>
              
                </div>
                <div class="party-size " id="party-size">
                

                <small>Party Size</small>
                <div class="input-group scale-size">

                <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                <input type="number" class="form-control" value="0" id="number-input" min="0">
                <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                </div>

                </div>

                <div class="order-summary-container">
                <h1 class="cart-right-header1">Order Summary</h1>

                <div class="order-summary-info">
                    <form action="post">
                    <div class="reservation-info" id="reservation-info-name">
                        <p class="name" id="name">Name</p>
                        <p class="result-sum name-result" id="name-result">Name Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-transaction-no">
                        <p class="transaction-no" id="transaction-no">Transaction no.</p>
                        <p class="result-sum transaction-no-result" id="transaction-no-result">Transaction No Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-reservation-type">
                        <p class="reservation-type" id="reservation-type">Reservation Type</p>
                        <p class="result-sum reservation-type-result" id="reservation-type-result">Reservation Type Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-party-size">
                        <p class="party-size-info" id="party-size">Party Size</p>
                        <p class="result-sum party-size-result" id="party-size-result">Party Size Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-date">
                        <p class="date" id="date">Date</p>
                        <p class="result-sum date-result" id="date-result">Date Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-time">
                        <p class="time" id="time">Time</p>
                        <p class="result-sum time-result" id="time-result">Time Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-sub-total">
                        <p class="sub-total" id="sub-total">Sub total</p>
                        <p class="result-sum sub-total-result" id="sub-total-result">Sub Total Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-reservation-fee">
                        <p class="reservation-fee" id="reservation-fee">Reservation Fee</p>
                        <p class="result-sum reservation-fee-result" id="reservation-fee-result">Reservation Fee Result</p>
                    </div>
                    <div class="reservation-info" id="reservation-info-total-price">
                        <p class="total-price" id="total-price">Total Price</p>
                        <p class="result-sum total-price-result" id="total-price-result">Total Price Result</p>
                    </div>

                    <button type="submit" id="confirm-order">Confirm Order</button>

                    </form>
                </div>
                </div>
 
             </div>
 
         </div>
 
 
 
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


       

        <script>

            $(document).ready(function(){
                //Ayusin ko na lang pag may back end na hahaha
            const isCartEmpty = true;

                $("#select-type").on("click", function(){
                    $(".dropdown-item-type-show").toggle();
                })

               const cart_emptry =  $("#cart-empty");
               const cart_not_emptry =  $("#cart-not-empty");

               if (isCartEmpty){
                $("#cart-not-empty").show();
                $("#cart-empty").hide();
               }

               else{
                $("#cart-not-empty").hide();
                $("#cart-empty").show();
               }
                
            }) 
            

            document.getElementById('button-minus').addEventListener('click', function() {
            const input = document.getElementById('number-input');
            input.value = Math.max(input.value - 1, input.min);
            });

            document.getElementById('button-plus').addEventListener('click', function() {
            const input = document.getElementById('number-input');
            input.value = parseInt(input.value) + 1; 
            });

            document.getElementById('button-minus-order').addEventListener('click', function() {
            const input = document.getElementById('number-input-order');
            input.value = Math.max(input.value - 2, input.min);
            });

            document.getElementById('button-plus-order').addEventListener('click', function() {
            const input = document.getElementById('number-input-order');
            input.value = parseInt(input.value) + 1; // Change increment as needed
            });


        </script>
        
     </body>
</html>