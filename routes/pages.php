<?php
Route::get('about-us', fn() => view('pages.about'))->name('about-us');
Route::get('disclaimer', fn()=>view('pages.disclaimer'))->name('disclaimer');
Route::get('privacy', fn()=>view('pages.privacy'))->name('privacy');
Route::get('pricing', fn()=>view('pages.pricing'))->name('pricing');