<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <!-- TODO: aggiungi logo ed elimina questo commento -->
    <a class="navbar-brand" href="home.php"><img src="gjcode.png" width="150px" height="75px" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <?php

            $pages = array('Home', 'Web', 'Desktop', 'Mobile', 'Frameworks');
            $page = basename($_SERVER['PHP_SELF'], '.php');
            $page = strtolower($page);

            foreach ($pages as $value) {

                $filterdPageName = str_replace(' ', '_', $value);
                $filterdPageName = strtolower($filterdPageName);
                $href = "";
                if ($filterdPageName !== "home")
                $href = "sezione.php?nome=" . $filterdPageName . '.php';
                else
                    $href = $filterdPageName . '.php';

                if ($page === $filterdPageName) {

                    echo '<li class="nav-item active ">
                <a class="nav-link col" href="' . $href . '">' . $value . '<span class="sr-only">(current)</span></a>
            </li> ';

                } else {

                    echo '<li class="nav-item ">
                <a class="nav-link col " href="' . $href . '">' . $value . '</a>
            </li>';

                }

            }


            ?>
        </ul>

        <!-- SEARCH SECTION -->
        <form class="form-inline offset-2 my-2 my-lg-0 hide-on-smartphone">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
        </form>

    </div>
</nav>
