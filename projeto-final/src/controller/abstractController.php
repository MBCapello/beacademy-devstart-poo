<?php

declare(strict_types=1);

namespace App\Controller;
abstract class AbstractController
{
    public function render(string $viewPath) : void
    {
        include dirname(__DIR__)."/view/{$viewPath}.php";
    }
}