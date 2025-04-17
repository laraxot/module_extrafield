<?php

declare(strict_types=1);

namespace Modules\ExtraField\Tests\Unit;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Modules\ExtraField\Tests\TestCase;

class ExtraFieldTest extends TestCase
{
    // use RefreshDatabase;
    use DatabaseMigrations;

    // use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        // Artisan::call('migrate');
        $this->assertTrue(true);
    }
}
