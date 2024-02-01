<!-- Quick Links Component -->
<div id="quick-links" class="w-100 d-flex justify-content-center align-items-center">
    <div class="wrapper d-flex align-items-center justify-content-center flex-wrap w-100">
        <!-- Loop through the links -->
        @foreach ($quickLinks as $link)
            <a class="d-flex align-items-center" href="#">
                <div>
                    <!-- Display the image -->
                    <img class="w-100 link-img" src="{{ url($link['img']) }}" alt="{{ $link['text'] }}">
                </div>
                <!-- Display the link text -->
                <span class="ms-3">{{ $link['text'] }}</span>
            </a>
        @endforeach
    </div>
</div>

<style>
    /* Styling the container */
    #quick-links {
        background-color: #1881f3;
    }
    
    /* Styling the wrapper */
    .wrapper {
        gap: 100px;
        row-gap: 50px;
        padding: 50px 0;
    }
    
    /* Styling the images */
    img.link-img {
        max-height: 60px !important;
        max-width: 60px !important;
    }
    
    /* Styling the links */
    a {
        text-decoration: none;
        color: white;
    }
    </style>