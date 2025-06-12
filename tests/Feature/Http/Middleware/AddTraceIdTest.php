<?php

declare(strict_types=1);

namespace Tests\Feature\Http\Middleware;

use Illuminate\Support\Facades\Context;
use Tests\TestCase;

final class AddTraceIdTest extends TestCase
{
    public function test_trace_id_is_in_context(): void
    {
        // Act
        $this->get('/');

        // Assert
        self::assertTrue(Context::has('trace_id'));
    }
}
