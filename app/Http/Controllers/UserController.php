<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        $ads = DB::table('quangcao')->get();
        $playlists = DB::table('paylist')->get();
        $baihats = DB::table('baihat')->orderBy('LuotThich', 'DESC')->take(10)->get();
        return view("user.index" , compact("ads","playlists","baihats"));
    }



    public function alls(){
        $topics = DB::table('idchude')->get();
        $playlists = DB::table('paylist')->get();
        $genres = DB::table('theloai')->get();
        return view("user.alls" , compact("topics" , "playlists" , "genres"));
    }

    public function albums(){
        $albums = DB::table('idalbum')->get();
        return view("user.albums", compact("albums"));
    }

    public function Detailalbum($id){
        $albumObj = DB::table("idalbum")->where("idAlbum" , $id)->first();
        $albums = DB::table('baihat')->where("idAlbum" , $id)->get();
        return view("user.detailsAlbum" , compact("albumObj" , "albums"));
    }
    public function Detailplaylist($id){
        $playlistObj = DB::table("paylist")->where("idPayList" , $id)->first();
        $playlists = DB::table('baihat')->where("idPayList" , 'like', '%'.$id.'%')->get();
        return view("user.detailsPlaylist" , compact("playlistObj" , "playlists"));
    }

    public function getPlaylistAsJson($id){
        $results = DB::table('baihat')->where("idPayList" , $id)->get();
        echo json_encode($results , JSON_UNESCAPED_UNICODE );
    }

    public function getAlbumAsJson($id){
        $results = DB::table('baihat')->where("idAlbum" , $id)->get();
        echo json_encode($results , JSON_UNESCAPED_UNICODE );
    }

    public function getAdsAsJson($id){
        $results = DB::table('quangcao')->leftJoin('baihat','baihat.idBaiHat','quangcao.idBaiHat')->get();  
        echo json_encode($results , JSON_UNESCAPED_UNICODE );
    }

    public function addLike($id){
        $entity = DB::table('baihat')->where("idBaiHat" , $id)->first();
        $array = json_decode(json_encode($entity), true);
        $array["LuotThich"] = $array["LuotThich"] + 1;
        DB::table('baihat')->where("idBaiHat" , $id)->update($array);
        return redirect()->back();
    }

    public function search($tukhoa) {
        $entity = DB::table('baihat')->where("TenBaiHat" , 'like', '%'.$tukhoa.'%')->first();
        $entity = [$entity];
        echo json_encode($entity , JSON_UNESCAPED_UNICODE );
    }

    public function getCategoryAsJson($id){
        $results = DB::table('baihat')->where("idTheLoai" , $id)->get();
        echo json_encode($results , JSON_UNESCAPED_UNICODE );
    }

    public function DetailCategory($id){

        $genreObj = DB::table ("theloai")->where("idTheLoai" , $id)->first();
        $genres = DB::table ("baihat")->where("idTheLoai" , $id)->get();
        return view("user.detailsCategory" , compact("genreObj" , "genres"));
    }
    public function getTopicAsJson($id){
        $genres = DB::table("theloai")->where("idChude",$id)->first();
        $sings = DB::table("baihat")->where("idTheLoai" , $genres->idTheLoai)->get();
        echo json_encode($sings , JSON_UNESCAPED_UNICODE );
    }
    public function DetailTopic($id){
     
        $topics = DB::table("idchude")->where("idChude",$id)->first();
        $genres = DB::table("theloai")->where("idChude",$id)->first();

        if ($genres == null) {
            return redirect()->back()->withSuccess('Không có thể loại!');
        }
        $sings = DB::table("baihat")->where("idTheLoai" , $genres->idTheLoai)->get();

        return view("user.detailsTopic" , compact("topics" , "genres", "sings"));  
    }

    public function getFavAsJson(){
        $baihats = DB::table('baihat')->orderBy('LuotThich', 'DESC')->take(10)->get();
        echo json_encode($baihats , JSON_UNESCAPED_UNICODE );
    }
}
