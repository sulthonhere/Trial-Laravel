<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ImportCsvRowJob;
use Exception;

class ImportCsvCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'csv:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data dari file CSV ke database menggunakan queue';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("Memulai proses import CSV...");

        $filePath = storage_path('app/csv_data/2k_data.csv');

        if (!file_exists($filePath)) {
            $this->error("File tidak ditemukan di: {$filePath}");
            return 1;
        }

        try {
            $fileHandle = fopen($filePath, 'r');
            $totalRows = 0;

            if ($fileHandle === false) {
                throw new Exception("Tidak bisa membuka file CSV.");
            }

            $header = fgetcsv($fileHandle);

            while (fgets($fileHandle) !== false) {
                $totalRows++;
            }

            rewind($fileHandle);
            fgetcsv($fileHandle);

            $progressBar = $this->output->createProgressBar($totalRows);
            $progressBar->start();

            while (($row = fgetcsv($fileHandle)) !== false) {
                ImportCsvRowJob::dispatch($row);
                $progressBar->advance();
            }

            fclose($fileHandle);
            $progressBar->finish();

            $this->info("\n\nSemua baris CSV telah berhasil ditambahkan ke dalam antrian (queue).");
            $this->comment("Jalankan 'php artisan queue:work' untuk memulai pemrosesan data.");

        } catch (Exception $e) {
            $this->error("Terjadi error: " . $e->getMessage());
            return 1;
        }

        return 0;
    }
}