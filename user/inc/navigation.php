<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <title>Kahel Cafe</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>



.signup-form {
  max-height: 90vh; /* 90% of the view height */
  overflow-y: auto; /* Allow scrolling if content is too tall */
}

       body {
    display: flex;
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    height: 100%;
    
    font-family: 'Poppins', sans-serif;
    position: relative; /* Ensure the parent container is relative */
}



        .navbar {
            transition: padding 0.3s ease-in-out;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0px 10px 29px 0px rgba(67,67,67,0.15);
            padding: 0 4rem;
           
            position: relative;
        }
        .navlinks {
            display: flex;
            gap: 2rem;
           
        }
        .navlinks a {
            color: black;
            text-decoration: none;
        }
        .navlinks a:hover,
        .navlinks i:hover
         {
           
            color: #FF902B;
        }

      
        .logo img {
            width: 100%;
            max-width: 80px;
        }
        .burger-menu {
            display: none;
            flex-direction: column;
            cursor: pointer;
            
        }
        .burger-menu div {
            width: 25px;
            height: 3px;
            background-color: black;
            margin: 4px 0;
            
        }

        .navlinks a.active  {
            color: #FF902B;
        }

        .backdrop {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    backdrop-filter: blur(5px); /* Apply blur effect */
    display: none; /* Hidden by default */
    z-index: 999; /* Make sure it sits above other content */
}

.have-account,
#openLogin,
#back-login{
            font-size: 0.9rem;
           text-align: left;

        }
        #openLogin{
         
            color:#B87514;
        }
        .have-account{
            color:#8D8D8D;
        }
       

    

   
      
     
        
small{
    color:#313131;
}
     
        
        #openReg,
        #openLogin
       
        {
            background: none;
            outline: none;
            border: none;
            color: #B87514;
            padding: 0;
            margin: 0;
            outline:none;
        }

        #back-login
        {
            font-weight: bold;
            background: none;
            outline: none;
            border: none;
            color: #313131;
            padding: 0;
            margin: 0;
            outline:none;
            font-size: 0.9rem;
        }

        .fa-less-than{
            font-size: 1rem;
            color: #313131;
            font-weight: bold;
        }

       

        .header-h1{
            font-size: 2rem;
            font-weight: bold;
        }

      

        .no-account{
            color:#8D8D8D;
            
        }


        #forgot-pass{
            display: flex;
            text-align: right;
            background: none;
            outline: none;
            border: none;
            color: #AD3113;
            
        }

     

        .input-field input{
           border-color:#ADADAD ;
            border-radius: 10px;
            padding: 0.6rem;
            outline: none;
            
           border-style: solid; 

        }

        .input-field input:active{
            border-color:#4285F4 ;
        }

        .input-field input:hover{
            border-color:#4285F4 ;
        }

        .input-field input::placeholder{
            font-size: 0.8rem;
        }


        #signup, 
        #signin
        {

            outline:none;
            border:none;
           
            background-color: #E48700;
            color: white;
           
            border-radius: 8px;
        }

        #email-forgot-pass{

            outline:none;
            border:none;

            background-color: #E48700;
            color: white;

            border-radius: 4px;
            }

        #forgot-pass{

            font-size: 0.8rem;


           
        }

       /*------------------------ Notification -----------------------------*/



     /*------------------------ Media-------------------------------*/
        @media (max-width: 379px) {
    .navbar {
        padding: 0 0.5rem; /* Reduce padding for smaller screens */
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: relative;
    }

    .navlinks {
        display: none; /* Hidden by default */
        justify-content: center;
        align-items: center;
        height: 100vh; /* Fullscreen on mobile */
        flex-direction: column; /* Stack links vertically */
        width: 100%;
        background-color: white;
        position: fixed; /* Fixed position for full-screen dropdown */
        top: 0;
        left: 0;
        z-index: 1000;
        margin: 0;
    }

    .navlinks.active {
        display: flex; /* Show links when active */
    }

    .burger-menu {
        display: flex;
        position: absolute;
        right: 1rem; /* Positioned in the top-right corner */
        top: 1rem;
        z-index: 1100; /* Higher z-index than nav */
        cursor: pointer; /* Pointer for interactivity */
    }
    
    /* Adjust nav link appearance */
    .navlinks a {
        margin: 1rem 0; /* Space between links */
        font-size: 1.1rem; /* Adjust font size for smaller screens */
        text-align: center;
        width: 100%; /* Ensure links take full width */
    }

    /* Adjust height for smaller screens */
    .navlinks {
        height: 100vh; /* Take full vertical space */
        overflow-y: auto; /* Allow scrolling if content exceeds height */
    }
}


@media (min-width: 375px) and (max-width: 600px) {
    .navbar {
        padding: 0 2rem;
    }
    
    .navlinks {
        display: none;
        justify-content: center;
        align-items: center;
        height: 100%;
        flex-direction: column;
        width: 100%;
        background-color: white;
      
        z-index: 1000;
        margin-right: 0;
    }

    .navlinks.active {
        display: flex;
    }

    .burger-menu {
        display: flex;
    }

   
}

@media (min-width: 601px) and (max-width: 768px) {
    .navbar {
        padding: 0 2rem;
    }

   

}

@media (min-width: 769px) and (max-width: 1024px) {
   

    .navbar {
        padding: 0 3rem;
    }
}

@media (min-width: 1025px) and (max-width: 1280px) {
    .navbar {
        padding: 0 4rem;
    }

    
}

@media (min-width: 1281px) {
    .navbar {
        padding: 0 5rem;
    }

}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}




    </style>
</head>
<body>
    <nav class="navbar" id="navbar">
        <div class="logo" id="logo">
            <img src="../user/icons/kahel-cafe-logo.png" alt="Kahel-Cafe-Logo" class="logo" id="logo">
        </div>
        <div class="burger-menu" id="burger-menu">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="navlinks" id="navlinks"></div>
    </nav>

  

  

      
    <!-------------------------------------------------Login--------------------------------------->

      <div class="backdrop" id="backdrop"></div>
      <div class="modal rounded-5" id="login-reg">
  <div class="modal-dialog modal-dialog-centered" id="loginmodal">
    <div class="modal-content rounded-4">
      <div class="d-flex justify-content-end m-3">
        <button type="button" id="btn-close"class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="row justify-content-between mt-2 mb-1 mx-5">
        <div class="col">
          <h1 class="header-h1">Log in</h1>
        </div>

        <div class="col-auto no-account-con">
          <p class="no-account">No Account?</p>
          <button type="button" class="btn btn-link" id="openReg">Sign up</button>
        </div>
      </div>

      <div class="modal-body mt-2 mb-1 mx-5">
        <form id="login" method="post">
          <div class="form-group">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control my-2" id="email" placeholder="Enter email address">
           
          </div>
          <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control my-2" id="password" placeholder="Password">
          </div>
          <div class="forgot-con d-flex justify-content-end">
  <button type="button" id="forgot-pass" class="btn btn-link">Forgot Password</button>
</div>

          <div class="d-grid mb-5">
            <button type="submit" class="btn btn-primary m-0" id="signin">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>

    <!-------------------------------------------------Register--------------------------------------->

  <div class="modal-dialog modal-dialog-centered" id="registerModal">
    <div class="modal-content rounded-5">
      <div class="d-flex justify-content-end m-3">
        <button type="button" id="btn-close1" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="row justify-content-between mt-2 mb-1 mx-5">
        <div class="col">
          <h1 class="header-h1">Sign up</h1>
        </div>

        <div class="col-auto no-account-con text-start">
  <p class="have-account ">Have Account?</p>
  <button type="button" class="btn btn-link" id="openLogin">Sign in</button>
</div>

      </div>

      <div class="modal-body mb-0 mx-5">
        <form id="register" method="post">
          <div class="form-group">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control my-2" id="email" placeholder="Email address">
           
          </div>

          <div class="row justify-content-between mt-2 mb-1 ">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control my-2" id="fullname" placeholder="Full Name">
            </div>
            <div class="col">
                <label for="contactnumber" class="form-label">Contact Number</label>
                <input type="number" class="form-control my-2" id="contactnumber" placeholder="Contact Number">
            </div>

          </div>

          <div class="form-group">
                <div class="form-group">
                <label for="password" class="form-label">Create Password</label>
                <input type="password" class="form-control my-2" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                <label for="con-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control my-2" id="con-password" placeholder="Confirm your Password">
                </div>
            </div>
        
          <div class="d-grid ">
            <button type="submit" class="btn btn-primary mb-3 mt-1 " id="signup">Sign up</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
    <!-------------------------------------------------Forgot-Password-Email--------------------------------------->

    <div class="modal-dialog modal-dialog-centered" id="forgotModal">
    <div class="modal-content rounded-5">
    

      <div class="row justify-content-between mt-5 mb-1 mx-5">
      <div class="d-flex justify-content-start">
      <button id="back-login"><i class="fa-solid fa-less-than" ></i>&nbsp;&nbsp;Back to login</button>

      </div>
        <div class="col mt-3 " >
          <h1 class="header-h1">Forgot your password?</h1>
          <small>Don’t worry, happens to all of us. Enter your email below to recover your password</small>
        </div>

       

      </div>

      <div class="modal-body mb-0 mx-5">
        <form id="forgot-form" method="post">
          <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control my-2" id="email" placeholder="john.doe@gmail.com">
           
          </div>

        
          <div class="d-grid mb-4 mt-4">
            <button type="submit" class="btn btn-primary " id="email-forgot-pass">Submit</button>
          </div>

        </form>

      </div>
    </div>
  </div>

   <!------------------------------------------------Notification--------------------------------------->

   <div class="notification-container" id="notification-container">

    <div class="notification-header">
        <h3 id="notification-h3">Notification</h3>
       
    </div>

    <div class="notification-body" id="notificaiton-body">
            <div class="notification-alert" id="notification-alert">

            </div>
    </div>

   </div>



    </div>
  



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    const currentPage = window.location.pathname.split('/').pop(); 

    const guestNavItems = [
        { name: 'Home', link: '../user/index.php' },
        { name: 'Order now', link: '../user/order.php' },
        { name: 'Reservation', link: '#reservation' },
        { icon: '<i class="fa-solid fa-bell" id="notification"></i>' },
        { icon: '<i class="fa-solid fa-cart-shopping" id="cart"></i>', link: '../user/cart.php' },
        { name: 'Login', id: '#log_btn' },
    ];

    const userNavItems = [
        { name: 'Home', link: '#home' },
        { name: 'Order now', link: '#order' },
        { name: 'Reservation', link: '#reservation' },
        { icon: '<i class="fa-solid fa-bell"></i>' },
        { icon: '<i class="bi bi-cart"></i>', link: '../user/cart.php' },
        { name: 'Logout', id: '#logout' },
    ];

    const isUserLoggedIn = false;

    

    const renderNav = () => {
    const navlinks = document.getElementById('navlinks');
    let navItems;

    if (isUserLoggedIn) {
        navItems = userNavItems;
    } else {
        navItems = guestNavItems;
    }

    navItems.forEach(item => {
        const navLink = document.createElement('a');

        if (item.link) {
            navLink.href = item.link;
            if (currentPage === item.link.split('/').pop()) {
                navLink.classList.add('active');
            }
        } else if (item.id) {
            navLink.href = item.id;
            navLink.id = item.id.slice(1);  // Remove # from ID
        }

        if (item.icon) {
            navLink.innerHTML = item.icon;
        } else {
            navLink.textContent = item.name;
        }

        navlinks.appendChild(navLink);
    });

   
            $('#log_btn').on("click", function() {
                $("#login-reg").toggle(); 
                $("#backdrop").toggle();  
            });

            $('#backdrop').on("click", function() {
                $("#login-reg").hide(); 
                $("#backdrop").hide();  
            });

            $('#openReg').on("click", function() {
                let loginFade = $("#loginmodal").fadeOut(0); 

                if (loginFade){
                    $("#registerModal").fadeIn();  
                }
                
            });

            $('#forgot-pass').on("click", function() {
                
               $("#loginmodal").fadeOut(0); 
               $("#registerModal").fadeOut(0); 
              $("#forgotModal").fadeIn(0);  
               
            
        });

        

        $('#back-login').on("click", function() {
                
                $("#loginmodal").fadeIn(0); 
                $("#registerModal").fadeOut(0); 
               $("#forgotModal").fadeOut(0); 
                
             
         });

            $('#openLogin').on("click", function() {
                let signupFade = $("#registerModal").fadeOut(0); 

                if (signupFade){
                    $("#loginmodal").fadeIn();  
                }
                
            });

            
            $('#btn-close').on("click", function() {
                
                    $("#login-reg").hide(); 
                    $("#backdrop ").hide();
                
            });

            $('#btn-close1').on("click", function() {
                
                $("#login-reg").hide(); 
                $("#backdrop ").hide();
            
        });



};

renderNav();


document.getElementById('burger-menu').addEventListener('click', function() {
    const navlinks = document.getElementById('navlinks');
    navlinks.classList.toggle('active');

    $('#notification').on('click', function() {
    $(this).css('color', 'red');  // Change the color to red on click
});


    
});

</script>



</body>
</html>
