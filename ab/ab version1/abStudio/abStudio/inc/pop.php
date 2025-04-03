<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>





<style>
/* Add some basic styling to the popup form */
.modal-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="number"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
}

input[type="image"] {
  width: 100%;
  padding: 10px;
  border: none;
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
}

input[type="image"]:hover {
  background-color: #3e8e41;
}


.btn-blue-yellow {
  background-color: yellow; /* blue background color */
  color: white; /* yellow text color */
  border-radius: 20px; /* curved button */
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  width: 150px;
  height: 40px;
  transition: all 0.3s ease-in-out; /* animation transition */
}

.btn-blue-yellow:hover {
  background-color: #0069d9; /* darker blue background color on hover */
  color: #ffff66; /* lighter yellow text color on hover */
  transform: scale(1.1); /* scale up on hover */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* add a shadow on hover */
}

.animated.pulse {
  animation: pulse 2s infinite; /* pulse animation */
}

@keyframes pulse {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.1);
  }
  100% {
    transform: scale(1);
  }
}


</style>






<body>
<style>
       .service a:hover {
    text-decoration: none;
}

.service-item a:hover {
    text-decoration: none;
}
    </style>
    
    <!-- Button to trigger the popup form -->
    

    <!-- The popup form -->
    <div class="modal fade" id="afripayModal" tabindex="-1" role="dialog" aria-labelledby="afripayModalLabel" aria-hidden="true"
    >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="afripayModalLabel">Pay with AfriPay | MTN MoMo | Bank | MasterCard</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="https://www.afripay.africa/checkout/index.php" method="post" id="afripayform">
                        <div class="form-group">
                            <label for="amount">Enter amount:</label>
                            <input type="number" name="amount" id="amount" value="100000" required>
                        </div>
                        <div class="form-group">
                            <label for="currency">Select currency:</label>
                            <select name="currency" id="currency">
                                <option value="RWF">RWF</option>
                                <option value="USD">USD</option>
                                <!-- Add more options here -->
                            </select>
                        </div>
                        <input type="hidden" name="comment" value="Order 122">
                        <input type="hidden" name="client_token" value="">
                        <input type="hidden" name="return_url" value="index.php">
                        <input type="hidden" name="app_id" value="f1726776df7d6361605332ae3d52c513">
                        <input type="hidden" name="app_secret" value="JDJ5JDEwJGtBdDEw">
                        <p>



                        <button class="btn btn-anim" onclick="document.getElementById('afripayform').submit();">
  <i class="fas fa-mobile-alt" aria-hidden="true"></i> Continue
  <span class="tooltip">Pay with AfriPay</span>
</button>

<style>
  .btn-anim {
  background-color: #4CAF50; /* Green */
  color: #ffffff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s; /* Add a transition effect */
  height: 40px;
  width: 100%;
}

.btn-anim:hover {
  background-color: #3e8e41; /* Darker green on hover */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

.btn-anim:active {
  transform: translateY(2px); /* Move the button down on click */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
}

.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -60px;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>