@vite('resources/js/banner.js')
<header class="hea">
    <div class="backgrounds-container absolute top-0 left-0 w-full h-full z-[-2]">
        <img src="{{ asset('img/banner.png') }}" alt="Banner" class="w-full h-full object-cover background showing">
        <img src="{{ asset('img/kkuHowTo.png') }}" alt="How To" class="w-full h-full object-cover background">
    </div>
</header>

<style>
.hea {
    position: relative;
    height: 500px;
    overflow: hidden;
}

.hea-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000000;
    opacity: 0.4;
    z-index: -1;
}

.backgrounds-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
}

.background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
}

.showing {
    opacity: 1;
}

/* Responsive styles */
@media screen and (max-width: 1200px) {
    .hea {
        height: 400px;
    }
}

@media screen and (max-width: 768px) {
    .hea {
        height: 300px;
    }
}

@media screen and (max-width: 480px) {
    .hea {
        height: 200px;
    }
}
</style>
