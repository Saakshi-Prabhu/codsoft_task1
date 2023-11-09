// navbar.js
function createNavbar() {
    const navbarHtml = `
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                APEX ACHIEVERS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="billionaires.html">Billionaires</a></li>
                            <li><a class="dropdown-item" href="actors.html">Actors</a></li>
                            <li><a class="dropdown-item" href="cricketers.html">Cricketers</a></li>
                            <li><a class="dropdown-item" href="singers.html">Popstar</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../contactus.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    `;

    // Create a div to hold the Bootstrap navbar HTML
    const navbarContainer = document.createElement('div');
    navbarContainer.innerHTML = navbarHtml;

    // Return the generated navbar
    return navbarContainer.firstElementChild;
}

// Add the Bootstrap navbar to the current page
const navbar = createNavbar();
document.body.insertBefore(navbar, document.body.firstChild);
