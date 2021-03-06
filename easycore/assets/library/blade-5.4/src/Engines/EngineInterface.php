<?php

namespace Xiaoler\Blade\Engines;

interface EngineInterface
{
    /**
     * Get the evaluated contents of the views.
     *
     * @param  string  $path
     * @param  array   $data
     * @return string
     */
    public function get($path, array $data = []);
}
