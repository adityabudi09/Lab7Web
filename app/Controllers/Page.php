<?php
namespace App\Controllers;
class Page extends BaseController
{    
public function artikel()
{
return view('artikel', [
'title' => 'Halaman Artikel',
'content' => 'Ini adalah halaman artikel yang menjelaskan tentang artikel
halaman ini.'
]);
}
public function about()
{
return view('about', [
'title' => 'Halaman About',
'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
halaman ini.'
]);
}
public function contact()
{
return view('contact', [
'title' => 'Halaman Kontak',
'content' => 'Ini adalah halaman Kontak.'
]);
}
public function faqs()
{
echo "Ini halaman FAQ";
}
public function tos()
{
echo "ini halaman Term of Services";
}
}


