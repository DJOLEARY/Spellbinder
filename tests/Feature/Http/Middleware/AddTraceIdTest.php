<?php

namespace Tests\Feature\Http\Middleware;

use Illuminate\Support\Facades\Context;
use Tests\TestCase;

class AddTraceIdTest extends TestCase
{
    public function test_trace_id_is_in_context(): void
    {
        $this->get('/');

        static::assertTrue(Context::has('trace_id'));
    }
}
