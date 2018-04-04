<?php

namespace App\Console\Commands;

use App\Queue\RabbitMQJob;
use Bunny\Message;
use Illuminate\Console\Command;
use Illuminate\Queue\QueueManager;
class AddQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:queue';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    private $manager;
    public function __construct(QueueManager $manager)
    {
        parent::__construct();
        $this->manager = $manager;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */

    public function handle()
    {
        //
        $handler = function (RabbitMQJob $job) {
            if ($job->attempts() > 1) {
                //throw new \RuntimeException('Job Failed'); // uncomment to fail job
                $job->delete();
            } else {
                $job->release();
            }
        };
        $message = new Message(
            'consumer_tag',
            'delivery_tag',
            false,
            '',
            'routing_key',
            ['Content-Type'  => 'application/json'],
            [
                'data' => [],
                'job' => $handler
            ]
        );
        $this->manager->connection('rabbitmq')->push($handler, ['message' => $message]);
    }
}
