<?php

declare(strict_types=1);

use App\Orchid\Screens\Examples\ExampleActionsScreen;
use App\Orchid\Screens\Examples\ExampleCardsScreen;
use App\Orchid\Screens\Examples\ExampleChartsScreen;
use App\Orchid\Screens\Examples\ExampleFieldsAdvancedScreen;
use App\Orchid\Screens\Examples\ExampleFieldsScreen;
use App\Orchid\Screens\Examples\ExampleGridScreen;
use App\Orchid\Screens\Examples\ExampleLayoutsScreen;
use App\Orchid\Screens\Examples\ExampleScreen;
use App\Orchid\Screens\Examples\ExampleTextEditorsScreen;
use App\Orchid\Screens\PlatformScreen;
use App\Orchid\Screens\Role\RoleEditScreen;
use App\Orchid\Screens\Role\RoleListScreen;
use App\Orchid\Screens\User\UserEditScreen;
use App\Orchid\Screens\User\UserListScreen;
use App\Orchid\Screens\User\UserProfileScreen;
use App\Orchid\Screens\DomainListScreen;
use App\Orchid\Screens\DomainEditScreen;
use App\Orchid\Screens\MenuItemScreen;
use App\Orchid\Screens\GalleryCategoryListScreen;
use App\Orchid\Screens\GalleryCategoryEditScreen;
use App\Orchid\Screens\GalleryProjectListScreen;
use App\Orchid\Screens\GalleryProjectEditScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the need "dashboard" middleware group. Now create something great!
|
*/

// Main
Route::screen('/main', PlatformScreen::class)
    ->name('platform.main');

// Platform > Profile
Route::screen('profile', UserProfileScreen::class)
    ->name('platform.profile')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Profile'), route('platform.profile')));

// Platform > System > Users > User
Route::screen('users/{user}/edit', UserEditScreen::class)
    ->name('platform.systems.users.edit')
    ->breadcrumbs(fn (Trail $trail, $user) => $trail
        ->parent('platform.systems.users')
        ->push($user->name, route('platform.systems.users.edit', $user)));

// Platform > System > Users > Create
Route::screen('users/create', UserEditScreen::class)
    ->name('platform.systems.users.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.users')
        ->push(__('Create'), route('platform.systems.users.create')));

// Platform > System > Users
Route::screen('users', UserListScreen::class)
    ->name('platform.systems.users')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Users'), route('platform.systems.users')));

// Platform > System > Roles > Role
Route::screen('roles/{role}/edit', RoleEditScreen::class)
    ->name('platform.systems.roles.edit')
    ->breadcrumbs(fn (Trail $trail, $role) => $trail
        ->parent('platform.systems.roles')
        ->push($role->name, route('platform.systems.roles.edit', $role)));

// Platform > System > Roles > Create
Route::screen('roles/create', RoleEditScreen::class)
    ->name('platform.systems.roles.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.systems.roles')
        ->push(__('Create'), route('platform.systems.roles.create')));

// Platform > System > Roles
Route::screen('roles', RoleListScreen::class)
    ->name('platform.systems.roles')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push(__('Roles'), route('platform.systems.roles')));

// Example...
Route::screen('example', ExampleScreen::class)
    ->name('platform.example')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Example Screen'));

Route::screen('/examples/form/fields', ExampleFieldsScreen::class)->name('platform.example.fields');
Route::screen('/examples/form/advanced', ExampleFieldsAdvancedScreen::class)->name('platform.example.advanced');
Route::screen('/examples/form/editors', ExampleTextEditorsScreen::class)->name('platform.example.editors');
Route::screen('/examples/form/actions', ExampleActionsScreen::class)->name('platform.example.actions');

Route::screen('/examples/layouts', ExampleLayoutsScreen::class)->name('platform.example.layouts');
Route::screen('/examples/grid', ExampleGridScreen::class)->name('platform.example.grid');
Route::screen('/examples/charts', ExampleChartsScreen::class)->name('platform.example.charts');
Route::screen('/examples/cards', ExampleCardsScreen::class)->name('platform.example.cards');

// Platform > Domains
Route::screen('domains', DomainListScreen::class)
    ->name('platform.domains')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Домены', route('platform.domains')));

Route::screen('domains/create', DomainEditScreen::class)
    ->name('platform.domains.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.domains')
        ->push('Создание домена', route('platform.domains.create')));

Route::screen('domains/{domain}/edit', DomainEditScreen::class)
    ->name('platform.domains.edit')
    ->breadcrumbs(fn (Trail $trail, $domain) => $trail
        ->parent('platform.domains')
        ->push('Редактирование домена', route('platform.domains.edit', $domain)));

// Platform > Menu
Route::screen('menu', MenuItemScreen::class)
    ->name('platform.menu');

// Platform > Gallery > Categories
Route::screen('gallery/categories', GalleryCategoryListScreen::class)
    ->name('platform.gallery.categories')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Категории галереи', route('platform.gallery.categories')));

Route::screen('gallery/categories/create', GalleryCategoryEditScreen::class)
    ->name('platform.gallery.categories.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.gallery.categories')
        ->push('Создание категории', route('platform.gallery.categories.create')));

Route::screen('gallery/categories/{category}/edit', GalleryCategoryEditScreen::class)
    ->name('platform.gallery.categories.edit')
    ->breadcrumbs(fn (Trail $trail, $category) => $trail
        ->parent('platform.gallery.categories')
        ->push('Редактирование категории', route('platform.gallery.categories.edit', $category)));

// Platform > Gallery > Projects
Route::screen('gallery/projects', GalleryProjectListScreen::class)
    ->name('platform.gallery.projects')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Проекты галереи', route('platform.gallery.projects')));

Route::screen('gallery/projects/create', GalleryProjectEditScreen::class)
    ->name('platform.gallery.projects.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.gallery.projects')
        ->push('Создание проекта', route('platform.gallery.projects.create')));

Route::screen('gallery/projects/{project}/edit', GalleryProjectEditScreen::class)
    ->name('platform.gallery.projects.edit')
    ->breadcrumbs(fn (Trail $trail, $project) => $trail
        ->parent('platform.gallery.projects')
        ->push('Редактирование проекта', route('platform.gallery.projects.edit', $project)));

// Platform > Brands
Route::screen('brands', \App\Orchid\Screens\BrandListScreen::class)
    ->name('platform.brands')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Brands', route('platform.brands')));

Route::screen('brands/create', \App\Orchid\Screens\BrandEditScreen::class)
    ->name('platform.brands.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.brands')
        ->push('Create Brand', route('platform.brands.create')));

Route::screen('brands/{brand}/edit', \App\Orchid\Screens\BrandEditScreen::class)
    ->name('platform.brands.edit')
    ->breadcrumbs(fn (Trail $trail, $brand) => $trail
        ->parent('platform.brands')
        ->push('Edit Brand', route('platform.brands.edit', $brand)));

// Platform > Materials
Route::screen('materials', \App\Orchid\Screens\MaterialListScreen::class)
    ->name('platform.materials')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.index')
        ->push('Materials', route('platform.materials')));

Route::screen('materials/create', \App\Orchid\Screens\MaterialEditScreen::class)
    ->name('platform.materials.create')
    ->breadcrumbs(fn (Trail $trail) => $trail
        ->parent('platform.materials')
        ->push('Create Material', route('platform.materials.create')));

Route::screen('materials/{material}/edit', \App\Orchid\Screens\MaterialEditScreen::class)
    ->name('platform.materials.edit')
    ->breadcrumbs(fn (Trail $trail, $material) => $trail
        ->parent('platform.materials')
        ->push('Edit Material', route('platform.materials.edit', $material)));
