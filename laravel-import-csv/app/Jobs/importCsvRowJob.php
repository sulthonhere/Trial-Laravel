<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ImportCsvRowJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $row;

    public function __construct(array $row)
    {
        $this->row = $row;
    }

    public function handle(): void
    {
        DB::table('table1')->insert(['name' => $this->row[0] ?? null, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('table2')->insert(['email' => $this->row[1] ?? null, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('table3')->insert(['phone' => $this->row[2] ?? null, 'created_at' => now(), 'updated_at' => now()]);
        DB::table('table4')->insert(['region' => $this->row[3] ?? null, 'created_at' => now(), 'updated_at' => now()]);
    }
}
