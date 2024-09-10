<header class="header">
    <div class="main-header-wraper main-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-sm-6 col-md-3 col-lg-2 col-xl-3">
                    <div class="logo-container">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html">
                                <img class='default-logo' src="assets/img/logo.png" data-rjs="2" alt="ecommerce">
                                <img class='sticky-logo' src="assets/img/logo2.png" data-rjs="2" alt="ecommerce">
                            </a>
                        </div>
                        <!-- End of Logo -->
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-6">
                    <!-- menu container -->
                    <div class="menu-container">
                        <div class="menu-wraper">
                            <nav>
                                <!-- Header-menu -->
                                <div class="header-menu dosis">
                                    <div id="menu-button">
                                    </div>
                                    <ul>
                                        <li class="navitem"><a class="navitem" href="index.php">Home</a></li>
                                        <li class="navitem"><a class="navitem" href="category.php">All Categories</a></li>
                                        <li class="navitem"><a class="navitem" href="#">Companies</a></li>
                                        <li class="navitem"><a href="#">News</a></li>
                                        <li class="navitem"><a href="#">My Activity</a></li>
                                        <li class="navitem"><a href="#">Refere</a></li>
                                    </ul>
                                </div>
                                <!-- End of Header-menu -->
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 top-order">
                    <!-- modal menu -->
                    <div class="modal-menu-container">
                        <ul class="list-unstyled mb-0">
                            <li>
                                <div class="search-btn" title="search">
                                    <a href="#">
                                        <img src="assets/img/icons/search-button.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="cart-btn" title="Cart list">
                                    <a href="login.html">
                                        <img src="assets/img/icons/add-bag.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="wishlist-btn-off" title="Wish list">
                                    <a href="#">
                                        <img src="assets/img/icons/wishlist.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="account-btn" title="account list">
                                    <a href="#">
                                        <img src="assets/img/icons/account.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div class="menu-btn" title="Category menu">
                                    <a href="#">
                                        <img src="assets/img/icons/manu-button.svg" alt="" class="svg">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End of modal menu -->
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    // Get all elements with the class "navitem"
    const navItems = document.querySelectorAll('.navitem');

    // Loop through each nav item
    navItems.forEach(item => {
        // Add a click event listener to each item
        item.addEventListener('click', function() {
            // Remove the 'active' class from all nav items
            navItems.forEach(nav => nav.classList.remove('active'));

            // Add the 'active' class to the clicked nav item
            this.classList.add('active');
        });
    });
</script>