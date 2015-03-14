<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 14/03/2015
 * Time: 13:33
 */

class projectsController extends BaseController
{
    public function index()
    {
        return View::make('project.index');
    }
    public function edit()
    {
        return View::make('project.editForm');
    }
    public function update()
    {
        // récupération des données envoyer par le formulaire
        $name = Input::get('name');
        $description = Input::get('description');

        // On les retourne avec un tableau
        return View::make('project.updateForm', [
            'name' => $name,
            'description' => $description,
        ]);
    }
}