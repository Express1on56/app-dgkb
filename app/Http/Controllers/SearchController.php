<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function search(Request $request)
{
    $search = $request->input('search');

    $results = User::where('surname', 'LIKE', '%'.$search.'%')
        ->orWhere('name', 'LIKE', '%'.$search.'%')
        ->orWhere('patronymic', 'LIKE', '%'.$search.'%')
        ->get();

    return response()->json($results);
}

}
