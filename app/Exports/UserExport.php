<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return User::find(2)->get("id", "name", "email", "created_at");
    }

    public function headings(): array
    {
        return ["ID", "NAME", "EMAIL", "FECHA DE CREACION"];
    }
}
