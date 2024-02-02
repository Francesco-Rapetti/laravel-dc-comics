<footer>
    @include('partials.quickLinks')
    <div id="jumbo-footer" class="w-100">
        <div class="wrapper footer d-flex align-items-center position-relative py-5">
            <div class="text-container h-100">
                <div class="d-flex flex-column flex-wrap h-100">
                    <!-- Iterate over each item in the otherLinks array -->
                    @foreach ($footerLinks as $item)
                    <div class="me-5">
                        <!-- Render the title of the item -->
                        <h4>{{ $item['title'] }}</h4>
                        <ul id="ul-footer-links">
                            <!-- Iterate over each link in the links array of the current item -->
                            @foreach ($item['links'] as $link)
                            <li>
                                <!-- Render the link name and set the href attribute -->
                                <a class="footer-link" href="{{ $link['link'] != '#' ? route($link['link']) : '#' }}">{{ $link['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
    
                </div>
            </div>
            <!-- Render the DC logo image -->
            <div id="dc-logo" class="position-absolute">
                <img src="/images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    
    <div id="footer-social">
        <div class="wrapper d-flex justify-content-between align-items-center py-4">
            <button>SIGN-UP NOW!</button>
            <div id="social" class="d-flex align-items-center">
                <h5 class="m-0">FOLLOW US</h5>
                <!-- Loop through the socials array -->
                @foreach ($socials as $social)
                    <a href="{{ $social['link'] != '#' ? route($social['link']) : '#' }}">
                        <img class="social" src="{{ url($social['img']) }}" alt="{{ $social['img'] }}">
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>

<style scoped>
    /* Set the color of all elements to white */
    body {
        color: white;
    }
    
    /* Styling for the jumbo element */
    #jumbo-footer {
        background-image: url(/images/footer-bg.jpg);
        background-position: center;
        background-size: cover;
        overflow: hidden;
    }
    
    /* Styling for the wrapper element */
    .wrapper.footer {
        height: 418px;
    }
    
    /* Styling for the text container */
    .text-container {
        position: relative;
        z-index: 1;
    }
    
    /* Styling for the DC logo */
    #dc-logo {
        right: 16px;
    }

    #dc-logo img {
        width: 650px;
    }
    
    /* Styling for unordered lists */
    ul#ul-footer-links {
        list-style-type: none;
        padding: 0;
    }
    
    /* Styling for anchor tags */
    a.footer-link {
        text-decoration: none;
        color: #878787;
    }
    
    /* Styling for anchor tags on hover */
    a.footer-link:hover {
        color: white;
    }

    #footer-social {
        background-color: #333333;
    }

    #footer-social button {
        color: white;
        background-color: transparent;
        border: 2px solid #0282F9;
        padding: 10px 20px;
        font-weight: 600;
    }

    #footer-social button:hover {
        background-color: #0282F9;
    }

    #footer-social #social {
        gap: 20px;
        color: #0282F9;
    }

    img.social {
        width: 30px;
    }
</style>