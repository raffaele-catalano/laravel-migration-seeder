<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $title = 'Welcome to Trains Checker';
        $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse animi in ab a blanditiis ea, provident magnam harum dicta totam sapiente dolorem magni. Odio dignissimos corrupti consequuntur optio ad, vel eos tempora quam minima architecto illum similique beatae, sapiente non error atque sed amet. Animi quo, in cum culpa, mollitia asperiores corrupti corporis illo assumenda omnis eum delectus illum vel earum quae accusantium ut veniam eius fuga perspiciatis pariatur repellendus tempore placeat? Cum atque, suscipit at vitae sed est saepe enim ex maxime nobis odit, hic ratione ipsa ipsam sequi, inventore ab quasi similique tempore veritatis tempora quibusdam? Ex, aperiam.';

        $trains = Train::all();

        return view('home', compact('title', 'description', 'trains'));
    }
}
