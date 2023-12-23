<?php

namespace Juzaweb\FormBuilder\Http\Controllers;

use Juzaweb\CMS\Http\Controllers\BackendController;

class FormBuilderController extends BackendController
{
    public function index()
    {
        //

        return view(
            'jufo::index',
            [
                'title' => 'Title Page',
            ]
        );
    }
}
