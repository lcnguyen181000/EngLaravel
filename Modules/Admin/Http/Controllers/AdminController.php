<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use App\Models\Rating;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('admin::index');
    }

}
