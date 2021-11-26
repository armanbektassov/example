<?php

namespace Amarkets\Events\Handler\Pipeline;

use Illuminate\Support\Facades\App;

class CheckEnvironment
{
    /**
     * Check environment.
     *
     * @param array $data
     * @param \Closure $next
     *
     * @return mixed|null
     */
    public function handle(array $data, \Closure $next)
    {
        if (!in_array(App::environment(), ['dev', 'production'])) {
            return;
        }

        return $next($data);
    }
}
