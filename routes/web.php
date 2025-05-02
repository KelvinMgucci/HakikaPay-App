<?php
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DisputeController;
use App\Http\Controllers\EscrowController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PayoutController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyerController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified', 'RoleManager:buyer'])->group(function () {
    Route::prefix('buyer')->group(function () {
        Route::get('/dashboard', [BuyerController::class, 'index'])->name('dashboard');

        // Escrows
        Route::get('/escrows', [EscrowController::class, 'buyerindex'])->name('buyer.escrows.view');
        Route::get('/escrows/create', [EscrowController::class, 'buyercreate'])->name('buyer.escrows.create'); // move this above
        Route::get('/escrows/{id}', [EscrowController::class, 'buyershow'])->name('buyer.escrows.show');
        Route::post('/buyer/escrows/store', [EscrowController::class, 'store'])->name('buyer.escrows.store');
        Route::post('/buyer/escrows/{id}/confirm-delivery', [EscrowController::class, 'confirmDelivery'])->name('buyer.escrows.confirmDelivery');
    
        // Orders/Deliveries
        Route::get('/orders', [DeliveryController::class, 'buyerindex'])->name('buyer.orders.orders');
        Route::post('/orders/update/{id}', [DeliveryController::class, 'buyershow'])->name('buyer.orders.show');
    
        // Disputes
        Route::get('/disputes', [DisputeController::class, 'buyerindex'])->name('buyer.disputes.view');
    
        // Payouts (optional for buyer if applicable)
       // Route::get('/payouts/history', [PayoutController::class, 'buyerindex'])->name('buyer.payouts.view');
      //  Route::post('/payouts/request', [PayoutController::class, 'requestPayout'])->name('buyer.payouts.show');
    
        // Notifications
        Route::get('/notifications', [NotificationController::class, 'buyerindex'])->name('buyer.notifications.view');
    
        // Settings
        Route::get('/settings', [SettingsController::class, 'buyerindex'])->name('buyer.settings.view');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('buyer.settings.update');
    });
    });


// Admin Routes
Route::middleware(['auth', 'verified', 'RoleManager:admin'])->prefix('admin')->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin');

    // Delivery
    Route::get('/delivery/manage', [DeliveryController::class, 'listAll'])->name('admin.delivery.manage');
    Route::get('/delivery/track', [DeliveryController::class, 'track'])->name('admin.delivery.track');

    // Disputes
    Route::get('/disputes/view', [DisputeController::class, 'index'])->name('admin.disputes.viewdisputes');
    Route::get('/disputes/solve', [DisputeController::class, 'resolve'])->name('admin.disputes.solvedisputes');
    // Escrow
    Route::get('/admin/escrow/auto-release', [EscrowController::class, 'autoRelease'])->middleware(['auth', 'verified', 'RoleManager:admin']);
    // Notifications
    Route::get('/notification/view', [NotificationController::class, 'index'])->name('admin.notifications.viewnotifications');

    // Payouts
    Route::get('/payouts/view', [PayoutController::class, 'history'])->name('admin.payouts.viewpayouts');

    // Reports
    Route::get('/reports/view', [AdminController::class, 'view_reports'])->name('admin.reports.viewreports');

    // Settings
   Route::get('/settings/view', [SettingsController::class, 'index'])->name('admin.settings.viewsettings');
    

    // Transactions
    Route::get('/transactions/view', [TransactionController::class, 'index'])->name('admin.transactions.viewtransactions');
    Route::get('/transactions/release', [EscrowController::class, 'release'])->name('admin.transactions.releasefund');

    // Users
    Route::get('/users/view', [UserController::class, 'index'])->name('admin.users.viewuserdetails');
    Route::get('/users/manage', [UserController::class, 'index'])->name('admin.users.usermanagement');
});



Route::middleware(['auth', 'verified', 'RoleManager:seller'])->group(function () {
    Route::prefix('seller')->group(function () {
        Route::get('/dashboard', [SellerController::class, 'index'])->name('seller');

        // Escrow
       Route::get('/escrows', [EscrowController::class, 'sellerindex'])->name('seller.escrows.view');
       Route::get('/escrows/{id}', [EscrowController::class, 'sellershow'])->name('seller.escrows.show');
       Route::post('/escrows/mark-delivered/{id}', [EscrowController::class, 'markDelivered'])->name('seller.escrows.markDelivered');

        // Orders/Deliveries
        Route::get('/orders', [DeliveryController::class, 'sellerindex'])->name('seller.orders.orders');
        Route::post('/orders/update/{id}', [DeliveryController::class, 'updateStatus'])->name('seller.orders.update');

        // Disputes
        Route::get('/disputes', [DisputeController::class, 'sellerindex'])->name('seller.disputes.view');
        Route::post('/disputes/create', [DisputeController::class, 'sellercreate'])->name('seller.disputes.create');

        // Payouts
        Route::get('/payouts/history', [PayoutController::class, 'sellerindex'])->name('seller.payouts.view');
        Route::post('/payouts/request', [PayoutController::class, 'requestPayout'])->name('seller.payouts.request');

        // Notifications
        Route::get('/notifications', [NotificationController::class, 'sellerindex'])->name('seller.notifications.view');

        // Settings
        Route::get('/settings', [SettingsController::class, 'sellerindex'])->name('seller.settings.view');
        Route::post('/settings/update', [SettingsController::class, 'sellerupdate'])->name('seller.settings.update');
    });
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
