<?php
namespace App\Http\Middleware\Permission; use Closure; class SalesMiddleware { public function handle($spc7d8a5, Closure $sp73eae2, $sp129df1 = null) { if (!\Sentinel::check()) { return redirect()->route('login')->with('flashMessage', array('class' => 'warning', 'message' => 'Login terlebih dahulu.')); } $sp7612e0 = \Sentinel::getUser(); $sp2c921f = $sp7612e0->permissions; if (!isset($sp2c921f['admin.sales'])) { \Sentinel::logout($sp7612e0); return redirect()->route('login')->with('flashMessage', array('class' => 'warning', 'message' => 'Login terlebih dahulu.')); } if ($sp2c921f['admin.sales'] != 1) { \Sentinel::logout($sp7612e0); return redirect()->route('login')->with('flashMessage', array('class' => 'warning', 'message' => 'Login terlebih dahulu.')); } return $sp73eae2($spc7d8a5); } }