<?php

use App\Console\Commands\DeleteUnusedFiles;
use App\Console\Commands\GenerateSitemap;
use Illuminate\Support\Facades\Schedule;

Schedule::command(DeleteUnusedFiles::class)->daily()->withoutOverlapping();
Schedule::command(GenerateSitemap::class)->daily()->withoutOverlapping();
