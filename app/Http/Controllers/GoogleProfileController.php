<?php

namespace Modules\SocialGoogle\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\SocialGoogle\Models\GoogleProvider;

class GoogleProfileController extends Controller
{
  public function show(Request $request) {
    // Ambil akun Google yang terhubung dengan user login
    $user = $request->user();
    $googleAccount = GoogleProvider::whereHas('provider', function ($query) use ($user) {
      $query->where('user_id', $user->id);
    })->first();

    if (!$googleAccount) {
      abort(404, 'Akun Google belum terhubung.');
    }

    $data = $googleAccount->data ?? [];

    return view('socialgoogle::profile', compact('googleAccount', 'data'));
  }
}