<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProtectedFarmingController;
use App\Http\Controllers\GrowingSystemController;
use App\Http\Controllers\AutomationController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes (Clean Frontend URLs)
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Company
Route::controller(CompanyController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/global', 'global')->name('global');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/future-agri-infra-agricultural-consultation-seo', 'consultationSeo')->name('consultation.seo');
});

// Contact Form Submission (POST only)
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Services
Route::controller(ServiceController::class)->group(function () {
    Route::get('/plan-farm', 'planFarm')->name('services.plan-farm');
    Route::get('/turnkey', 'turnkey')->name('services.turnkey');
    Route::get('/consultation', 'consultation')->name('services.consultation');
    Route::get('/agronomy-support', 'agronomySupport')->name('services.agronomy-support');
    Route::get('/agrotourism', 'agrotourism')->name('services.agrotourism');
    Route::get('/sales-market-linkage', 'salesMarketLinkage')->name('services.sales-market-linkage');
    Route::get('/farming-model', 'farmingModel')->name('services.farming-model');
});

// Protected Farming
Route::controller(ProtectedFarmingController::class)->group(function () {
    Route::get('/protected-farming', 'protectedFarming')->name('protected-farming.index');
    Route::get('/protected-farming-structure', 'protectedFarmingStructure')->name('protected-farming.structure');
    Route::get('/protected-structure', 'protectedStructure')->name('protected-farming.compare-structures');
    Route::get('/polyhouse-fanpad', 'polyhouseFanpad')->name('protected-farming.polyhouse-fanpad');
});

// Growing Systems
Route::controller(GrowingSystemController::class)->group(function () {
    Route::get('/growing', 'growing')->name('growing.index');
    Route::get('/indoor-vertical-farming', 'indoorVerticalFarming')->name('growing.indoor-vertical');
    Route::get('/outdoor-hydroponics-system', 'outdoorHydroponics')->name('growing.outdoor-hydroponics');
    Route::get('/cocopeat-based-system', 'cocopeat')->name('growing.cocopeat');
    Route::get('/soil-based-grown', 'soilBased')->name('growing.soil-based');
});

// Automation
Route::controller(AutomationController::class)->group(function () {
    Route::get('/automation', 'automation')->name('automation.index');
    Route::get('/iot', 'iot')->name('automation.iot');
    Route::get('/sensor', 'sensor')->name('automation.sensor');
});

// Crops
Route::controller(CropController::class)->group(function () {
    Route::get('/crop-solution', 'cropSolution')->name('crops.index');
    Route::get('/exotic-leafy', 'exoticLeafy')->name('crops.exotic-leafy');
    Route::get('/fruits-vegi', 'fruitsVegi')->name('crops.fruits-vegi');
});

// Projects
Route::controller(ProjectController::class)->group(function () {
    Route::get('/our-project', 'index')->name('projects.index');
    Route::get('/project-details', 'details')->name('projects.details');
});

// Training
Route::controller(TrainingController::class)->group(function () {
    Route::get('/online-training', 'online')->name('training.online');
    Route::get('/offline-training', 'offline')->name('training.offline');
    Route::get('/training-detail', 'detail')->name('training.detail');
});

// Blog
Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog.index');
    Route::get('/blog-detail', 'detail')->name('blog.detail');
    Route::get('/blog-details', 'details')->name('blog.details');
});

// Resources & Tools
Route::controller(ResourceController::class)->group(function () {
    Route::get('/resources', 'resources')->name('resources.index');
    Route::get('/tool', 'tool')->name('resources.tool');
});

// Legal
Route::controller(LegalController::class)->group(function () {
    Route::get('/privacy-policy', 'privacy')->name('legal.privacy');
    Route::get('/terms-conditions', 'terms')->name('legal.terms');
});

/*
|--------------------------------------------------------------------------
| 301 Permanent Redirects for Legacy .html URLs
|--------------------------------------------------------------------------
*/
$legacyRedirects = [
    'index.html'                                            => '/',
    'about.html'                                            => '/about',
    'global.html'                                           => '/global',
    'contact.html'                                          => '/contact',
    'future-agri-infra-agricultural-consultation-seo.html'  => '/future-agri-infra-agricultural-consultation-seo',
    'planfarm.html'                                         => '/plan-farm',
    'turnkey.html'                                          => '/turnkey',
    'consultation.html'                                     => '/consultation',
    'agronomy-support.html'                                 => '/agronomy-support',
    'agrotourism.html'                                      => '/agrotourism',
    'sales&market-linkage.html'                             => '/sales-market-linkage',
    'sales&amp;market-linkage.html'                         => '/sales-market-linkage',
    'farming-model.html'                                    => '/farming-model',
    'protected-farming.html'                                => '/protected-farming',
    'protected-farming-structure.html'                      => '/protected-farming-structure',
    'protected-structure.html'                              => '/protected-structure',
    'polyhouse-fanpad.html'                                 => '/polyhouse-fanpad',
    'growing.html'                                          => '/growing',
    'indoor-vertical-farming.html'                          => '/indoor-vertical-farming',
    'outdoor-hydroponics-system.html'                       => '/outdoor-hydroponics-system',
    'cocopeat-based-system.html'                            => '/cocopeat-based-system',
    'soil-based-grown.html'                                 => '/soil-based-grown',
    'automation.html'                                       => '/automation',
    'iot.html'                                              => '/iot',
    'sensor.html'                                           => '/sensor',
    'crop-solution.html'                                    => '/crop-solution',
    'exotic-leafy.html'                                     => '/exotic-leafy',
    'fruits-vegi.html'                                      => '/fruits-vegi',
    'our-project.html'                                      => '/our-project',
    'project-details.html'                                  => '/project-details',
    'online-training.html'                                  => '/online-training',
    'offline-training.html'                                 => '/offline-training',
    'training-deatil.html'                                  => '/training-detail',
    'training-deatil'                                       => '/training-detail',
    'blog.html'                                             => '/blog',
    'blog-detail.html'                                      => '/blog-detail',
    'blog-details.html'                                     => '/blog-details',
    'resources.html'                                        => '/resources',
    'tool.html'                                             => '/tool',
    'privacy-policy.html'                                   => '/privacy-policy',
    'terms-conditions.html'                                 => '/terms-conditions',
];

foreach ($legacyRedirects as $old => $new) {
    Route::permanentRedirect($old, $new);
}

/*
|--------------------------------------------------------------------------
| Admin & Authentication Routes
|--------------------------------------------------------------------------
*/
Auth::routes(['register' => false]);
Route::get('admin', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');

Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Profile Routes
        Route::get('/profile', [App\Http\Controllers\Admin\ProfileController::class, 'index'])->name('profile.index');
        Route::post('/profile/change-password', [App\Http\Controllers\Admin\ProfileController::class, 'changePassword'])->name('profile.change-password');
        
        // Testimonials
        Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class)->except(['create', 'edit']);

        // Contact Leads
        Route::resource('contact-leads', App\Http\Controllers\Admin\ContactLeadController::class)->only(['index', 'show', 'update', 'destroy']);

        // Resources Routes
        Route::resource('resources', App\Http\Controllers\Admin\ResourceController::class);

        // Blog CMS Routes
        Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
        Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class)->except(['create', 'edit', 'show']);
        Route::resource('tags', App\Http\Controllers\Admin\TagController::class)->except(['create', 'edit', 'show']);
        
        // Media Library
        Route::resource('media', App\Http\Controllers\Admin\MediaController::class)->except(['create', 'edit', 'show'])->parameters(['media' => 'media']);

        // Site Settings
        Route::get('/settings', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
        Route::post('/settings/header', [App\Http\Controllers\Admin\SettingController::class, 'saveHeader'])->name('settings.header');
        Route::post('/settings/footer', [App\Http\Controllers\Admin\SettingController::class, 'saveFooter'])->name('settings.footer');

        // SEO Settings
        Route::get('/seo-settings', [App\Http\Controllers\Admin\SeoSettingController::class, 'index'])->name('seo-settings.index');
        Route::post('/seo-settings/save', [App\Http\Controllers\Admin\SeoSettingController::class, 'save'])->name('seo-settings.save');
    });
