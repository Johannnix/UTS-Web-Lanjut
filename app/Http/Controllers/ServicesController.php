<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            [
                'path' => asset('images/pexels-andrea-piacquadio-845451 2.png'),
                'title' => 'Technology',
                'description' => 'We focus on providing the right tool for product innovation and digital communication',
                'services' => [
                    'Web Design and App Development',
                    'Mobile Apps',
                    'Technology Consulting',
                ],
            ],
            [
                'path' => asset('images/pexels-andrea-piacquadio-845451 3.png'),
                'title' => 'Hardware',
                'description' => 'Service laptop pc',
                'services' => [
                    'Instalasi software',
                    'Re-installing windows',
                    'Hardware problem',
                ],
            ],
            [
                'path' => asset('images/pexels-andrea-piacquadio-845451 4.png'),
                'title' => 'Design & Animation',
                'description' => 'Totality services towards reaching the optimal success for every client',
                'services' => [
                    'Design Logo',
                    'Product',
                    'Motion Graphics',
                ],
            ],
        ];
        return view('services', ['data' => $data]);
    }
}
