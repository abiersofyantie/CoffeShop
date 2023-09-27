<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menus = [
            [
                'nama_menu' => 'Cucumber Salad with Lime',
                'deskripsi' => 'Perpaduan antara timun yang segar dan perasan jeruk lemon',
                'harga' => 'Rp.28.000',
                'gambar' => 'Cucumber.png',
            ],

            [
                'nama_menu' => 'Coffe Creamy Latte',
                'deskripsi' => 'Minuman kopi yang dibuat dengan espreso, susu cream, dan whipe cream',
                'harga' => 'Rp.23.000',
                'gambar' => 'CoffeLatte.png',
            ],

            [
                'nama_menu' => 'Honey Jalapeño Turkey Burger',
                'deskripsi' => 'Burgernya juicy dan beraroma, disajikan dengan roti panggang dengan sauce salsa jagung segar',
                'harga' => 'Rp.30.000',
                'gambar' => 'TurkeyBurger.png',
            ],

            [
                'nama_menu' => 'Dalgona Coffe',
                'deskripsi' => 'Minuman kopi yang dibuat dengan mix espreso dan menggunakan susu vanilla',
                'harga' => 'Rp.20.000',
                'gambar' => 'Dalgona.png',
            ],

            [
                'nama_menu' => 'Waffle',
                'deskripsi' => 'Kue garing yang dipanggang berbentuk sarang lebah lapisan tipis adonan matang secara merata dan renyah.',
                'harga' => 'Rp.18.000',
                'gambar' => 'Waffle.png',
            ],

            [
                'nama_menu' => 'Meatball Sandwich',
                'deskripsi' => 'Bakso buatan sendiri dipadukan dengan saus tomat, dan keju provolone meleleh yang disajikan di atas baguette panggang ringan.',
                'harga' => 'Rp.20.000',
                'gambar' => 'Sandwich.png',
            ],

        ];

        return view('welcome', compact('menus'));
    }
}
