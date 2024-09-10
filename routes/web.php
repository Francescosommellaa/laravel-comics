<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $title = ['Characters'];

    // Array per il footer
    $topFooterItems = [
        [
            'img' => asset('img/buy-comics-digital-comics.png'),
            'title' => 'DIGITAL COMICS'
        ],
        [
            'img' => asset('img/buy-comics-merchandise.png'),
            'title' => 'DC MERCHANDISE'
        ],
        [
            'img' => asset('img/buy-comics-subscriptions.png'),
            'title' => 'SUBSCRIPTION'
        ],
        [
            'img' => asset('img/buy-comics-shop-locator.png'),
            'title' => 'COMIC SHOP LOCATOR'
        ],
        [
            'img' => asset('img/buy-dc-power-visa.svg'),
            'title' => 'DC POWER VISA'
        ]
    ];

    // Array per la sezione DC Comics
    $dcComicsItems = [
        ['link' => 'characters'],
        ['link' => 'comics'],
        ['link' => 'movies'],
        ['link' => 'tv'],
        ['link' => 'games'],
        ['link' => 'videos'],
        ['link' => 'news'],
    ];

    // Array per la sezione Shop
    $shopItems = [
        ['link' => 'shop-dc'],
        ['link' => 'shop-merchandise'],
    ];

    // Array per la sezione DC
    $dcItems = [
        ['link' => 'terms-of-use'],
        ['link' => 'privacy-policy'],
        ['link' => 'ad-choices'],
        ['link' => 'advertising'],
        ['link' => 'jobs'],
        ['link' => 'subscriptions'],
        ['link' => 'talent-workshops'],
        ['link' => 'CPSC-certificates'],
        ['link' => 'ratings'],
        ['link' => 'shop-help'],
        ['link' => 'contact-us'],
    ];

    // Array per la sezione Siti
    $sitesItem = [
        ['link' => 'DC'],
        ['link' => 'MAD-magazine'],
        ['link' => 'DC-kids'],
        ['link' => 'DC-universe'],
        ['link' => 'DC-power-visa'],
    ];
    return view('home', compact('title', 'topFooterItems', 'dcComicsItems', 'shopItems', 'dcItems', 'sitesItem'));;
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');

Route::get('/comics', function () {
    // Array per la sezione DC Comics
    $dcComicsItems = [
        ['link' => 'characters'],
        ['link' => 'comics'],
        ['link' => 'movies'],
        ['link' => 'tv'],
        ['link' => 'games'],
        ['link' => 'videos'],
        ['link' => 'news'],
    ];

    // Array per la sezione Shop
    $shopItems = [
        ['link' => 'shop-dc'],
        ['link' => 'shop-merchandise'],
    ];

    // Array per la sezione DC
    $dcItems = [
        ['link' => 'terms-of-use'],
        ['link' => 'privacy-policy'],
        ['link' => 'ad-choices'],
        ['link' => 'advertising'],
        ['link' => 'jobs'],
        ['link' => 'subscriptions'],
        ['link' => 'talent-workshops'],
        ['link' => 'CPSC-certificates'],
        ['link' => 'ratings'],
        ['link' => 'shop-help'],
        ['link' => 'contact-us'],
    ];

    // Array per la sezione Siti
    $sitesItem = [
        ['link' => 'DC'],
        ['link' => 'MAD-magazine'],
        ['link' => 'DC-kids'],
        ['link' => 'DC-universe'],
        ['link' => 'DC-power-visa'],
    ];

    return view('comics', compact('dcComicsItems', 'shopItems', 'dcItems', 'sitesItem'));
})->name('comics');
