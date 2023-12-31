<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="icon" type="/images/logo.png" href="../images/logo.png" />

    <title>HDMovies - Watch TV Shows Online, Watch Movies Online</title>

    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/subscription.css">

</head>

<body>
    <header>
        <div class="login-top nav container">
            <a href="login_page.html" class="logo">
                <img src="../images/logotext red.png" alt="">
            </a>
        </div>
    </header>


    <div class="d-flex justify-content-center align-items-center container">
        <section class="login-box" style="width: 50rem; height: 35rem">
        <form action="checkout.php" method="post">
        <div class="pricing-table">
                <h2 class="text-white" style="text-align: center;">Choose your plan</h2>
                <div class="grid">
                    <div class="box basic">
                        <div class="title">Basic</div>
                        <div class="price text-white">
                            <b>$23.99</b>
                            <span>for 3 months</span>
                        </div>
                        <div class="features">
                            <div>Unlimited ad-free movies and TV shows</div>
                            <div>Great plan to start from</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subscription" value="3"
                                id="flexRadioDefault3">
                        </div>
                    </div>
                    <div class="box standard">
                        <div class="title">Standard</div>
                        <div class="price text-white">
                            <b>$44.99</b>
                            <span>for 6 months</span>
                        </div>
                        <div class="features">
                            <div>Unlimited ad-free movies and TV shows</div>
                            <div>More months, more watching time</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subscription" value="6"
                                id="flexRadioDefault6">
                        </div>
                    </div>
                    <div class="box premium">
                        <div class="title">Premium</div>
                        <div class="price text-white">
                            <b>$79.99</b>
                            <span>for 12 months</span>
                        </div>
                        <div class="features">
                            <div>Unlimited ad-free movies and TV shows</div>
                            <div>A great deal for the enthusiasts</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="subscription" value="12"
                                id="flexRadioDefault12">
                        </div>
                    </div>

                </div>
            </div>
            <div class="save-cancel">
                <input type="button" class="btn btn-primary" id="choosePlanBtn" value="Choose plan">
            </div>
        </form>

        </section>
    </div>

    <div class="copy_login text-white" style="margin-top: 5rem;">
        <i class="bi bi-c-circle"></i>
        <span>HDMovies All Rights Reserved</span>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var radioButtons = document.querySelectorAll('input[type="radio"]');
        var choosePlanBtn = document.getElementById('choosePlanBtn');

        choosePlanBtn.addEventListener('click', function () {
            var selectedRadioButton = document.querySelector('input[name="subscription"]:checked');

            if (selectedRadioButton) {
                // Get the value of the selected radio button
                var selectedValue = selectedRadioButton.value;

                // Redirect to checkout.php with the selected plan value
                window.location.href = 'checkout.php?plan=' + selectedValue;
            } else {
                // No radio button selected
                alert('Please select a subscription plan');
            }
        });

        radioButtons.forEach(function (radio) {
            radio.addEventListener("change", function () {
                // Remove style from all boxes
                document.querySelectorAll('.pricing-table .grid .box').forEach(function (box) {
                    box.classList.remove('selected-box');
                });

                // Add style to the selected box
                var selectedBox = this.closest('.box');
                selectedBox.classList.add('selected-box');
            });
        });
    });
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>