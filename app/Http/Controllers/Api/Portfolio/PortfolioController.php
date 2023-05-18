<?php

namespace App\Http\Controllers\Api\Portfolio;

use App\Http\Controllers\Controller;
use App\Repositories\Profile\AlbumRepository;

class PortfolioController extends Controller
{
    public function index()
    {
        return AlbumRepository::new()->getListWithPhotosPaginate();
    }
}
