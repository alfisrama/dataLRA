<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Provinsi;
use App\Kabkota;
use Illuminate\Support\Facades\Auth;

class SearchProvinsiServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        //kabkota
        view()->composer('kabkota.index', function($view) {
            $view->with('list_provinsi', Provinsi::pluck('nama_provinsi', 'id'));
        });
        view()->composer('kabkota.pencarian', function($view) {
            $view->with('list_provinsi', Provinsi::pluck('nama_provinsi', 'id'));
        });
        view()->composer('kabkota.edit', function($view) {
            $view->with('list_provinsi', Provinsi::pluck('nama_provinsi', 'id'));
        });

        //lra
        view()->composer('lra.form', function($view) {
            $view->with('list_provinsi', Provinsi::pluck('nama_provinsi', 'id'));
            $view->with('list_kabkota', Kabkota::pluck('nama_kabkota', 'id'));
        });
        view()->composer('lra.pencarian', function($view) {
            $view->with('list_provinsi', Provinsi::pluck('nama_provinsi', 'id'));
            $view->with('list_kabkota', Kabkota::pluck('nama_kabkota', 'id'));
        });
    }
}
