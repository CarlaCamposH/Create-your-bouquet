<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WebController;

        Route::match(['get','post'],'/orders', [AdminController::class,'orders'])->name('admin.orders');
     
        Route::multilingual('your-bouquet',[WebController::class, 'yourBouquet']);
        
        Route::post('yourBouquetCart', [WebController::class, 'yourBouquetCart']);
