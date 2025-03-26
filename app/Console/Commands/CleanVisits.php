<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CleanVisits extends Command
{
    protected $signature = 'visits:clean';
    protected $description = 'Clean old records from the visits table';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // 定義保留的天數（例如 30 天）
        $daysToKeep = 30;
        $dateThreshold = now()->subDays($daysToKeep);

        // 刪除 30 天前的記錄
        $deletedRows = DB::table('visits')
            ->where('created_at', '<', $dateThreshold)
            ->delete();

        // 輸出結果
        $this->info("Deleted {$deletedRows} old visit records.");

        // （可選）優化表以釋放空間
        DB::statement('OPTIMIZE TABLE visits');
    }
}
