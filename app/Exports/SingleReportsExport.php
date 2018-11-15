<?php

namespace App\Exports;

use App\Reports;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SingleReportsExport implements FromCollection, WithHeadings
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($id){
        $this->id=$id;
    }
    public function collection()
    {
        $report=Reports::whereId($this->id)->first();
        // dd($report);
        // dd($report);
        // return $report;
        return collect([
            [
                'Name'=>$report->session->user->first_name." ".$report->session->user->last_name,
                'Are they partner?'=>$report->partner,
                'Date of Trainning'=>$report->tranning_date,
                'Venue of Trainning'=>$report->venue,
                'Level of Trainning'=>$report->level,
                'Were the press present?'=>$report->press,
                'Number of females present'=>$report->females,
                'Number of males present'=>$report->male,
                'Number facebook users'=>$report->facebook,
                'Number of new Facebook users'=>$report->newfacebook,
                'Number instagram users'=>$report->instagram,
                'Number of new Instagram users'=>$report->newinstagram,
                'Number whatsapp users'=>$report->whatsapp,
                'Questions'=>$report->question,
                'All questions'=>$report->allquestion,
                'Answers'=>$report->answer,
                'Trainer\'s feedback'=>$report->trainer_feedback,
                'Assistance'=>$report->assistance,
                'Google drive link'=>$report->googledrivelink,
                'Pictures Link'=>$report->pictureslink,
                'Status'=>($report->status==1?'approved':'rejected'),
                'Reply'=>$report->reply
            ],
        ]);
    }

    public function headings(): array
    {
        return [
                            'Name',
							'Are they partner?',
							'Date of Trainning',
							'Venue of Trainning',
							'Level of Trainning',
							'Were the press present?',
							'Number of females present',
							'Number of males present',
							'Number facebook users',
							'Number of new Facebook users',
							'Number instagram users',
							'Number of new Instagram users',
							'Number whatsapp users',
							'Questions',
							'All questions',
							'Answers',
							'Trainer\'s feedback',
							'Assistance',
							'Google drive link',
							'Pictures Link',
							'Status',
							'Reply'
        ];
    }
}
