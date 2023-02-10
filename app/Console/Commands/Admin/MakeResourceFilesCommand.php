<?php

namespace App\Console\Commands\Admin;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeResourceFilesCommand extends Command
{
    protected string $uc_singular;

    protected string $uc_plural;

    protected string $lc_singular;

    protected string $lc_plural;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:make:resource-files {name : The name of the setting class}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        $this->uc_singular = Str::singular(ucwords($name));
        $this->uc_plural = Str::plural($this->uc_singular);

        $this->lc_singular = Str::replace('-', '_', Str::kebab(Str::singular($name)));
        $this->lc_plural = Str::plural($this->lc_singular);

        $this->makeService();
        $this->makeViews();
        $this->makeController();
        $this->makeRequests();
        $this->makeModel();
        $this->makeTable();

        return Command::SUCCESS;
    }

    public function makeViews()
    {
        $source = resource_path('views/admin/examples');
        $target = resource_path('views/admin/'.$this->lc_plural);

        File::copyDirectory($source, $target);

        foreach (File::allFiles($target) as $file) {
            $contents = $file->getContents();
            $result = Str::replace(
                ['Examples', 'Example', 'examples', 'example'],
                [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
                $contents
            );
            File::put($file->getPathname(), $result);
        }
    }

    public function makeController()
    {
        $source = app_path('Http/Controllers/Admin/ExampleController.php');
        $target = app_path('Http/Controllers/Admin/'.$this->uc_singular.'Controller.php');

        File::copy($source, $target);
        $contents = File::get($target);
        $result = Str::replace(
            ['Examples', 'Example', 'examples', 'example'],
            [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
            $contents
        );
        File::put($target, $result);
    }

    public function makeRequests()
    {
        // Store
        $source = app_path('Http/Requests/Admin/Example/StoreExampleRequest.php');
        $target = app_path('Http/Requests/Admin/'.$this->uc_singular.'/Store'.$this->uc_singular.'Request.php');

        File::copy($source, $target);
        $contents = File::get($target);
        $result = Str::replace(
            ['Examples', 'Example', 'examples', 'example'],
            [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
            $contents
        );
        File::put($target, $result);

        // Update
        $source = app_path('Http/Requests/Admin/Example/UpdateExampleRequest.php');
        $target = app_path('Http/Requests/Admin/'.$this->uc_singular.'/Update'.$this->uc_singular.'Request.php');

        File::copy($source, $target);
        $contents = File::get($target);
        $result = Str::replace(
            ['Examples', 'Example', 'examples', 'example'],
            [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
            $contents
        );
        File::put($target, $result);
    }

    public function makeModel()
    {
    }

    public function makeTable()
    {
        // Table
        $source = app_path('Tables/ExamplesTable.php');
        $target = app_path('Tables/'.$this->uc_plural.'Table.php');

        File::copy($source, $target);
        $contents = File::get($target);
        $result = Str::replace(
            ['Examples', 'Example', 'examples', 'example'],
            [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
            $contents
        );
        File::put($target, $result);
    }

    public function makeService()
    {
        $source = app_path('Services/ExampleService.php');
        $target = app_path('Services/'.$this->uc_singular.'Service.php');

        File::copy($source, $target);
        $contents = File::get($target);
        $result = Str::replace(
            ['Examples', 'Example', 'examples', 'example'],
            [$this->uc_plural, $this->uc_singular, $this->lc_plural, $this->lc_singular],
            $contents
        );
        File::put($target, $result);
    }
}
