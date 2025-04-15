<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeFill(array $data): array //edit the value in edit form view
    {
        $data['price'] = $data['price'];

        return $data;
    }



    protected function mutateFormDataBeforeSave(array $data): array //edit the value in edit form action
    {
        $data['price'] = $data['price'];

        return $data;
    }
}
