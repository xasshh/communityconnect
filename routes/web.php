<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\RsvpController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\InvolvementResponseController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\GetInvolvedController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// In your routes/web.php file


Route::post('/dashboard/get-involved', [GetInvolvedController::class, 'store'])->name('dashboard.getInvolved.submit');
// web.php

use App\Http\Controllers\PayPalController;

// 

Route::get('/paypal', [PayPalController::class, 'payWithPaypal'])
    ->name('pay_with_paypal');

Route::post('/paypal', [PayPalController::class, 'handlePayment'])
    ->name('handle_payment');

Route::get('/success', [PayPalController::class, 'paymentSuccess'])
    ->name('payment_success');

Route::get('/cancel', [PayPalController::class, 'paymentCancel'])
    ->name('payment_cancel');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
// In web.php

Route::patch('/profile/update', [UserProfileController::class, 'update'])->name('profilee.update');


Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Event routes
    Route::get('/events/{id}', [DashboardController::class, 'index'])->name('joinedEvents');
    Route::post('events', [EventController::class, 'store'])->name('events.store');
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/fetch', [EventController::class, 'fetchEvents'])->name('events.fetch');
    Route::post('/join-event', [EventController::class, 'joinEvent'])->name('join.event');
    Route::resource('events', EventController::class);
    // RSVP routes
    Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');
    Route::delete('/rsvp/{id}', [RsvpController::class, 'cancel'])->name('rsvp.cancel');
    Route::get('/rsvp/{id}/edit', [RsvpController::class, 'edit'])->name('rsvp.Edit');
    Route::patch('/rsvp/{id}', [RsvpController::class, 'update'])->name('rsvp.update');
    Route::patch('/rsvp/{id}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/rsvp/create', [RsvpController::class, 'create'])->name('rsvp.create');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Notifications routes
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::delete('notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.delete');
});

// Testimonial routes (no authentication needed)
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

// Forum routes (protected by auth middleware)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/forums', [ForumController::class, 'index'])->name('forums.index');
    Route::get('/forums/create', [ForumController::class, 'create'])->name('forums.create');
    Route::post('/forums', [ForumController::class, 'store'])->name('forums.store');
    Route::get('/forums/{id}', [ForumController::class, 'show'])->name('forums.show');
    Route::delete('/forums/{id}', [ForumController::class, 'destroy'])->name('forums.destroy');
    Route::get('/forums/{id}/edit', [ForumController::class, 'edit'])->name('forums.edit');
    Route::put('/forums/{id}', [ForumController::class, 'update'])->name('forums.update');
});

// Thread routes (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::post('/threads', [ThreadController::class, 'store'])->name('threads.store');
    Route::get('/threads/{id}', [ThreadController::class, 'show'])->name('threads.show');
    Route::delete('/threads/{id}', [ThreadController::class, 'destroy'])->name('threads.destroy');
    Route::get('/threads/{id}/edit', [ThreadController::class, 'edit'])->name('threads.edit');
    Route::put('/threads/{id}', [ThreadController::class, 'update'])->name('threads.update');
    Route::get('/threads/{id}', [ThreadController::class, 'show'])->name('threads.show');

});


// Other routes...

// Route to store a reply
Route::post('/threads/{thread}/replies', [ReplyController::class, 'store'])->name('replies.store');


// Community routes (for authenticated users)
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [CommunityController::class, 'profile'])->name('community.profile');
    Route::get('/spot/{id}', [CommunityController::class, 'showSpot'])->name('community.spot');
    Route::get('/leader/{id}', [CommunityController::class, 'showLeader'])->name('leader.show');
});

// Public Community routes
Route::get('/join', [CommunityController::class, 'join'])->name('join');
Route::get('/discover', [CommunityController::class, 'index'])->name('discover.index');


Route::get('/blogs/create', function () {
    return view('blogs.create'); // Ensure to create this view
})->middleware('auth')->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->middleware('auth')->name('blogs.store');
// Route to display blogs on the welcome page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');



// Messaging routes
Route::middleware('auth')->group(function () {
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/show', [MessageController::class, 'show'])->name('messages.show');
    Route::post('/messages/send', [MessageController::class, 'send'])->name('messages.send');
    // Route::post('/messages/{message}/reply', [MessageController::class, 'reply'])->name('messages.reply');
    Route::post('/messages/reply/{notification}', [MessageController::class, 'reply'])->name('messages.reply');
Route::get('/search-users', [MessageController::class, 'search'])->name('messages.search');

});

// routes/web.php
Route::post('/get-involved', [InvolvementResponseController::class, 'save'])->name('getinvolved.submit');
// Route::post('/get-involved-submit', [InvolvementController::class, 'submit'])->name('getinvolved.submit');
// Route::post('/dashboard/join-event', [EventController::class, 'joinEvent'])->name('events.join');
Route::middleware('auth')->group(function() {
    Route::post('/join-event', [EventController::class, 'joinEvent'])->name('events.join');
});

// Add this route in the web.php file
// Route::post('/get-involved-submit', [InvolvementController::class, 'submit'])->name('getinvolved.submit');



Route::resource('spaces', SpaceController::class);

// Route::POST('/rsvp/store', [RsvpController::class, 'store'])->name('rsvp.store');

Route::get('/mail', function () {
    return view('mail');
})->name('view.mail');
Route::post('/mail', function (\Illuminate\Http\Request $request) {
    // Handle the form submission here
    // For example, you can process the form data or send an email
    return 'Form submitted successfully!';
})->name('mail.submit');

// Authentication Routes

// Custom Logout Route
Route::POST('/logout', [LoginController::class, 'logout'])->name('logout');
// Route for the Discover page
Route::get('/discover', [DiscoverController::class, 'index'])->name('discover.index');
// Other routes...
// Registration routes provided by Laravel Breeze
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

require __DIR__.'/auth.php';
