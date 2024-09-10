<footer>
    <div class="container">
        <!-- Top Section with Icons -->
        <div class="row justify-content-center align-items-center text-center icon-container">
            <div class="col-md-2 col-6">
                <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="Digital Comics"
                    class="img-fluid icon-img">
                <p class="icon-text">DIGITAL COMICS</p>
            </div>
            <div class="col-md-2 col-6">
                <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="DC Merchandise" class="img-fluid icon-img">
                <p class="icon-text">DC MERCHANDISE</p>
            </div>
            <div class="col-md-2 col-6">
                <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="Subscription"
                    class="img-fluid icon-img">
                <p class="icon-text">SUBSCRIPTION</p>
            </div>
            <div class="col-md-2 col-6">
                <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="Comic Shop Locator"
                    class="img-fluid icon-img">
                <p class="icon-text">COMIC SHOP LOCATOR</p>
            </div>
            <div class="col-md-2 col-6">
                <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="DC Power Visa" class="img-fluid icon-img">
                <p class="icon-text">DC POWER VISA</p>
            </div>
        </div>

        <!-- Footer Links -->
        <div class="row">
            <div class="col-md-3 col-6">
                <h5>DC COMICS</h5>
                <ul>
                    @foreach ($dcComicsItems as $item)
                        <li><a href="{{ $item['link'] }}" class="text-white">{{ ucfirst($item['link']) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5>SHOP</h5>
                <ul>
                    @foreach ($shopItems as $item)
                        <li><a href="{{ $item['link'] }}" class="text-white">{{ ucfirst($item['link']) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5>DC</h5>
                <ul>
                    @foreach ($dcItems as $item)
                        <li><a href="{{ $item['link'] }}" class="text-white">{{ ucfirst($item['link']) }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3 col-6">
                <h5>SITES</h5>
                <ul>
                    @foreach ($sitesItem as $item)
                        <li><a href="{{ $item['link'] }}" class="text-white">{{ ucfirst($item['link']) }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
