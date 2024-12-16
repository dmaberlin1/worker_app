<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Project;
use App\Models\ProjectWorker;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//    $this->prepareData();
//        $this->positionsMethod();
//    $this->prepareManyToMany();

       $worker=Worker::find(5);
       $project=Project::find(2);
       $worker->projects->toggle($project->id);
       dd($worker->projects->toArray());
    }


    private function prepareManyToMany()
    {

        $workerLead1 = Worker::find(3);
        $workerDeveloper1 = Worker::find(1);
        $workerQa1 = Worker::find(5);

        $workerLead2 = Worker::find(7);
        $workerDeveloper2 = Worker::find(4);
        $workerQa2 = Worker::find(2);

        $project1 = Project::create([
            'title' => 'Shop'
        ]);
        $project2 = Project::create([
            'title' => 'Blog'
        ]);
        //project 1
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerLead1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerDeveloper1->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project1->id,
            'worker_id' => $workerQa1->id,
        ]);

        //project 2
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerLead2->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerDeveloper2->id,
        ]);
        ProjectWorker::create([
            'project_id' => $project2->id,
            'worker_id' => $workerQa1->id,
        ]);

    }

    public function positionsMethod(): void
    {
        $workers = Worker::whereIn('id', [1, 2, 3])->get();

        $posId = $workers->pluck('position_id')->unique();

        $positions = Position::whereIn('id', $posId)->get();
        dd($positions->toArray());
    }

    private function prepareData()
    {
        $position1 = Position::create([
            'title' => 'Software engineer',
        ]);
        $position2 = Position::create([
            'title' => 'QA engineer',
        ]);
        $position3 = Position::create([
            'title' => 'Manager',
        ]);

        $workerData1 = [
            'name' => 'Ivan',
            'surname' => 'Ivanov',
            'email' => 'ivanov111@gmail.com',
            'position_id' => $position1->id,
            'age' => '35',
            'description' => 'ivanov descr',
            'is_married' => false,
        ];
        $workerData2 = [
            'name' => 'Carl',
            'surname' => 'Johnov',
            'email' => 'johnov123@gmail.com',
            'position_id' => $position2->id,
            'age' => '22',
            'description' => 'Johnov descr',
            'is_married' => false,
        ];
        $workerData3 = [
            'name' => 'Tony',
            'surname' => 'Montana',
            'email' => 'montana@gmail.com',
            'position_id' => $position3->id,
            'age' => '42',
            'description' => 'montana descr',
            'is_married' => false,
        ];
        $workerData4 = [
            'name' => 'Kate',
            'surname' => 'Tomson',
            'email' => 'tomson@gmail.com',
            'position_id' => $position3->id,
            'age' => '25',
            'description' => 'kate tomson descr',
            'is_married' => false,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);
        $worker4 = Worker::create($workerData4);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Tokyo',
            'skill' => 'developer php',
            'experience' => '5',
            'finished_study_at' => '2018-06-01',
        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'NY',
            'skill' => 'qa php',
            'experience' => '2',
            'finished_study_at' => '2022-06-01',
        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'NY',
            'skill' => 'php tech lead',
            'experience' => '2',
            'finished_study_at' => '2022-06-01',
        ];
        $profileData4 = [
            'worker_id' => $worker4->id,
            'city' => 'NY',
            'skill' => 'php tech lead',
            'experience' => '2',
            'finished_study_at' => '2022-06-01',
        ];
        Profile::create($profileData1);
        Profile::create($profileData2);
        Profile::create($profileData3);
        Profile::create($profileData4);

//        dd($profile->id);
    }
}
