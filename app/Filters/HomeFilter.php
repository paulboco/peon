<?php

namespace App\Filters;

use Peon\Auth;
use Peon\Filter;
use Peon\Response;

class HomeFilter extends Filter
{
    /**
     * Run The Filter
     *
     * @return void
     */
    public function run()
    {
        if ($this->auth->check()) {
            $this->response->redirect('page/home');
        }
    }
}
