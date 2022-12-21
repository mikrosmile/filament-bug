<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Forms\Components\Select;
use Filament\Pages\Actions\Action;
use Filament\Pages\Page;

class Testing extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.testing';

    protected function getActions(): array
    {
        return [
            Action::make('select')
                ->action('select')
                ->form([
                    Select::make('select')
                        ->options(function (){
                            return User::all()->pluck('name','id');
                        })->multiple()
                ])
        ];
    }

    public function select()
    {

    }
}
