<?php
namespace App\Http\Middleware; use Closure; use Illuminate\Support\Facades\Auth; class RedirectIfAuthenticated { public function handle($spc7d8a5, Closure $sp73eae2, $sp129df1 = null) { if (Auth::guard($sp129df1)->check()) { return redirect('/home'); } return $sp73eae2($spc7d8a5); } }