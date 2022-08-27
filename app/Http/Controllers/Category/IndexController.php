<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use function Doctrine\Common\Cache\Psr6\get;

class IndexController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('category.index');
    }
}
