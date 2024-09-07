<nav class="navbar">
        <div class="logo">
            <a href="#">ACT</a>
        </div>
        <ul class="nav-links">
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="material-icons">home</span>
                    <span class="nav-text">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="material-icons">account_balance_wallet</span>
                    <span class="nav-text">Creditors</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="material-icons">people</span>
                    <span class="nav-text">Debitors</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="material-icons">bar_chart</span>
                    <span class="nav-text">Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <span class="material-icons">settings</span>
                    <span class="nav-text">Settings</span>
                </a>
            </li>
        </ul>
        <div class="hamburger">
            <span class="material-icons">menu</span>
        </div>
    </nav>

    <!-- JavaScript for Mobile Menu -->
    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>