<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Visit;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class VisitsChart extends ChartWidget
{
    protected static ?string $heading = '拜訪數';

    protected function getData(): array
    {

        $data = Trend::model(Visit::class)
            ->dateColumn('created_at')
            ->between(
                start: now()->startOfYear(), // 本年的開始日期
                end: now()->endOfYear() // 本年的結束日期
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => '拜訪數',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
