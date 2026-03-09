<?php

namespace App\Filament\Resources\Categories\Pages;

use App\Filament\Resources\Categories\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;


    // php artisan make:filament-resource Post --generate
    // perintah create resource 1 modul crud sesuain namanya dengan model



    // ini untuk redirect ke index jika sudah menambahkan atau edit
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
