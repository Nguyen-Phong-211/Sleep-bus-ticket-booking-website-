<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Kernel;

class ListMiddleware extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'middleware:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all registered middleware';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        $kernel = app(Kernel::class);
        $globalMiddleware = $kernel->getMiddlewareGroups();
        $routeMiddleware = $kernel->getRouteMiddleware();

        $this->info("Global Middleware:");
        foreach ($globalMiddleware as $middleware) {
            if (is_array($middleware)) {
                $this->line("- " . implode(", ", $middleware)); 
            } else {
                $this->line("- $middleware");
            }
        }
        

        $this->info("\nRoute Middleware:");
        foreach ($routeMiddleware as $key => $middleware) {
            $this->line("$key => $middleware");
        }
    }
}
