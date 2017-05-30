<?php

namespace App\Http\Controllers\Music;
use DB;
use App\Http\Controllers\Controller;
/**
 *
 */
class SongController extends Controller
{

  function __construct()
  {
    # code...
  }

  public function index()
  {
    //return 'Hello From Song Controller';
    return view('song.index');

  }

  public function play()
  {
      //การส่งค่าแบบแนบค่าไป
      //return view('song/player');
      /*
      return view('song/player')
      ->with('band', 'OASIS')
      ->with('album','Morning') ;
      */
      /*
      return view('song/player')->with([
        'band' => 'OASIS',
        'album' => 'Slide away'
      ]);
      */
      //return view('song/player')->withBand('OASIS')->withAlbum('Slide');
      $this->data = array(
          'band' => 'OASIS',
          'album' => 'Wonder Wall'
      );
      return view('song/player', $this->data);
  }



  public function band()
  {
    $aCss = array('css/song/style.css');
    $aScript = array('js/song/main.js');
    //$band = DB::update('update blog_tbl set title = "red day69" where id = ?', ['3']); //เเก้จากgreenday ใน ไอดีที่3 เป็น redday
//$band = DB::insert('insert into blog_tbl (title , url_th, description) values (?, ?, ?)',['green day','www.google.com','sssssss']);
//$band_del = DB::delete('delete from blog_tbl where id = ?',['2']); //ลบจาก id  ที่2
    $band = DB::table('blog_tbl')->get();
          dd($band);
    $this->data = array(
        'title' => 'Music Band',
        'band' => 'Metallica',
        'song' => '<u>Black</u>',
        'style' => $aCss,
        'script' => $aScript
    );
    return view('song/band', $this->data);

  }
}
