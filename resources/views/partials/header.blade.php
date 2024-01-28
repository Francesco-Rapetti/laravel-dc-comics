<header>
    <!-- Wrapper for the navbar -->
    <div id="navbar-wrapper" class="w-100 bg-white px-3 position-fixed">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg w-100 mx-auto py-0 d-flex justify-content-between">
            <!-- Navbar Brand -->
            <a href="{{ route('home') }}" class="navbar-brand py-3">
                <img id="logo" src="/images/dc-logo.png" alt="DC logo">
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Spacer -->
                <div class="w-100"></div>

                <!-- Navbar Links -->
                <ul class="navbar-nav mb-2 mb-lg-0 justify-self-end">
                    <!-- Loop through navbarLinks array -->
                    @foreach ($links as $link)
                        <li class="nav-item fw-bold header-link">
                            <!-- Individual Navbar Link -->
                            <a aria-current="page" class="{{ $link['url'] == request()->path() ? 'active' : '' }}" href="{{ $link['url'] != '#' ? route($link['url']) : '#' }}">{{ $link['title'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>
    </div>
    <div id="navbar-spacer"></div>
</header>

<style>
    /* CSS for the navbar wrapper */
    #navbar-wrapper {
        position: relative;
        z-index: 99;
        transition: all 0.3s ease-in-out;
    }

    /* Spacer height for the navbar */
    #navbar-spacer {
        height: 135px;
    }

    /* CSS for images with transition and width */
    img {
        transition: all 0.3s ease-in-out;
        width: 103px;
    }

    /* Styles for the navigation bar */
    nav {
        max-width: 1400px;
        display: flex !important;
        justify-content: space-between !important;
    }

    /* Styles for the unordered list */
    ul {
        gap: 30px !important;
        height: 100% !important;
    }

    li.header-link {
        height: 1.3em;
        overflow: hidden;
    }

    /* Styles for the links in the list items */
    li.header-link a {
        color: #484c51;
        text-decoration: none;
        border-bottom: 6px solid transparent;
        transition: all 0.3s ease-in-out;
    }

    li.header-link a.active {
        color: #0c7cec;
        border-color: #0c7cec;
    }

    /* Styles for the links when hovered */
    li.header-link a:hover {
        color: #0c7cec;
    }

    /* Styles for the active link */
    li.header-link a.active {
        color: #0c7cec;
        border-color: transparent;
    }

    /* Media query for screens larger than 992px */
    @media screen and (min-width: 992px) {

        li.header-link {
            height: auto;
            overflow: visible;
        }

        /* Additional styles for the links in the media query */
        li.header-link a {
            padding-top: 58px;
            padding-bottom: 53px;
        }

        /* Additional styles for the links when hovered in the media query */
        li.header-link a:hover {
            color: #0c7cec;
        }

        /* Additional styles for the active link in the media query */
        li.header-link a.active {
            color: #0c7cec;
            border-color: #0c7cec;
        }
    }
</style>