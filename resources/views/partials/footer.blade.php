<footer class="my-5 text-center">
    <div class="top-nav">
        <ul class="">
            <li v-for="(item, index) in topFooterItems">
                <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                <h5>{{ $item['title'] }}</h5>
            </li>
        </ul>
    </div>

    <div class="footer">
        <div class="link-utili">
            <div>
                <h4>DC Comics</h4>
                <ul v-for="(item, index) in dcComicsItems">
                    @foreach ($dcComicsItems as $item)
                        <li><a href="{{ $item['link'] }}">{{ $item['link'] }}</a></li>
                    @endforeach
                </ul>
                <h4>Shop</h4>
                <ul>
                    @foreach ($shopItems as $item)
                        <li><a href="{{ $item['link'] }}">{{ $item['link'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <h4>Shop</h4>
            <ul>
                @foreach ($shopItems as $item)
                    <li><a href="{{ $item['link'] }}">{{ $item['link'] }}</a></li>
                @endforeach
            </ul>

            <h4>DC</h4>
            <ul>
                @foreach ($dcItems as $item)
                    <li><a href="{{ $item['link'] }}">{{ $item['link'] }}</a></li>
                @endforeach
            </ul>

            <h4>Siti</h4>
            <ul>
                @foreach ($sitesItem as $item)
                    <li><a href="{{ $item['link'] }}">{{ $item['link'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div>
        <img src="../assets/img/dc-logo-bg.png" alt="">
    </div>
    </div>
</footer>
