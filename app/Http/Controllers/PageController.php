<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan halaman About
    public function about()
    {
        return view('about'); // Pastikan ada view 'about.blade.php'
    }

    // Method untuk menampilkan halaman Contact
    public function contact()
    {
        return view('contact'); // Pastikan ada view 'contact.blade.php'
    }

    public function services()
    {
    
    return view('services'); // Pastikan ada view 'services.blade.php'
    }

    public function comingSoon()
    {

    return view('coming-soon'); // Pastikan Anda memiliki view 'coming-soon.blade.php'
    }

}
