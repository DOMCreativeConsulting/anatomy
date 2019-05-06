<?php

namespace App\Model;

class Model
{

    public function cadastrar()
    {
        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        return redirect('users');
    }

}