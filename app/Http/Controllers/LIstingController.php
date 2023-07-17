<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class LIstingController extends Controller
{
    //show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
        ]);
    }

    // show single listing
    public function show (Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // create listing
    public function create () {
        return view('listings.show');
    }
}