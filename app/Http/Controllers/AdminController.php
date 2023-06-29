<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Hash;

class AdminController extends Controller
{
    public function index(){
        return redirect()->route("songs");
    }
    public function login(){
        return view("login");
    }
    public function postLogin(Request $res){
        if (Auth::attempt(['username' => $res->username, 'password' => $res->password])) { 
            return redirect()->route("adminIndex");
        }
        else {
            return "error";
        }
    }
    public function createAccount($username , $password){
        DB::table('users')->delete();
        DB::table('users')->insert(["username" => $username , "password" => Hash::make($password)]);
    }

    public function songs(){
        // $songs = DB::table("baihat")
        // ->leftJoin('idalbum','baihat.idAlbum','idalbum.idAlbum')
        // ->innerjoin('theloai','theloai.idTheLoai','theloai.idTheLoai')
        // ->innerjoin('paylist','baihat.idPayList','paylist.idPayList')
        // ->get();
        // dd($songs);
        //$songs = DB::select(DB::raw("SELECT * FROM baihat as t1 LEFT JOIN theloai as t2 ON find_in_set(t2.idTheLoai, t1.idTheLoai)"));
        DB::statement("SET SQL_MODE=''");
        $songs = DB::select("
            select *,
            group_concat(genres.TenTheLoai) as genre
            from baihat songs left join idalbum albums on albums.idAlbum = songs.idAlbum
            left join theloai genres on find_in_set(genres.idTheLoai,songs.idTheLoai)
            group by songs.idBaiHat;
        ");

        $genreEntities = DB::table("theloai")->get(["idTheLoai" , "TenTheLoai"]);
        $albumEntities = DB::table("idalbum")->get(["idAlbum" , "TenAlbum"]);
        $playlistEntities = DB::table("paylist")->get(["idPayList" , "Ten"]);
        return view("admin.songs.index" , compact("songs" , "genreEntities" , "albumEntities" , "playlistEntities"));
    }

    public function addSong(Request $res){
        $uniqid = uniqid();
        $HinhBaiHat_fileName = $uniqid . "-" . $res->HinhBaiHat->getClientOriginalName();
        $LinkBaiHat_fileName = $uniqid . "-" . $res->LinkBaiHat->getClientOriginalName();

        $res->HinhBaiHat->move(public_path("HinhBaiHat"), $HinhBaiHat_fileName);
        $res->LinkBaiHat->move(public_path("LinkBaiHat"), $LinkBaiHat_fileName);

        $entity = $res->except("_token");
        $entity["HinhBaiHat"] = "/HinhBaiHat/" . $HinhBaiHat_fileName;
        $entity["LinkBaiHat"] = "/LinkBaiHat/" . $LinkBaiHat_fileName;
        $entity["idAlbum"] = (boolval($entity["idAlbum"])) ? $entity["idAlbum"] : null;
        $entity["idTheLoai"] = (isset($entity["idTheLoai"])) ? implode(",",$entity["idTheLoai"]) : null;
        $entity["idPayList"] = (isset($entity["idPayList"])) ? implode(",",$entity["idPayList"]) : null;
        
        DB::table('baihat')->insert($entity);
        return redirect()->back();
    }

    // public function getupdate($id){
    //     $updatesong = DB::table("baihat")->where("idBaiHat",$id)->first();
    //     return view("admin.songs.updateSong" , compact("updatesong" ));
    // }
    // public function uppdatesong(Request $res){
    //     $baihat = DB::table("baihat")->find($res ->$id);

    //     $uniqid = uniqid();
    //     $baihat->$HinhBaiHat_fileName = $uniqid . "-" . $res->HinhBaiHat->getClientOriginalName();
    //     $baihat->$LinkBaiHat_fileName = $uniqid . "-" . $res->LinkBaiHat->getClientOriginalName();

    //     $baihat->$res->HinhBaiHat->move(public_path("HinhBaiHat"), $HinhBaiHat_fileName);
    //     $baihat->$res->LinkBaiHat->move(public_path("LinkBaiHat"), $LinkBaiHat_fileName);

    //     $baihat->$entity = $res->except("_token");
    //     $baihat->$entity["HinhBaiHat"] = "/HinhBaiHat/" . $HinhBaiHat_fileName;
    //     $baihat->$entity["LinkBaiHat"] = "/LinkBaiHat/" . $LinkBaiHat_fileName;
    //     $baihat->$entity["idAlbum"] = (boolval($entity["idAlbum"])) ? $entity["idAlbum"] : null;
    //     $baihat->$entity["idTheLoai"] = (isset($entity["idTheLoai"])) ? implode(",",$entity["idTheLoai"]) : null;
    //     $baihat->$entity["idPayList"] = (isset($entity["idPayList"])) ? implode(",",$entity["idPayList"]) : null;

    //     $baihat->save();
        
    //     DB::table('baihat')->insert($entity);
    //     return redirect()->back();
    // }



    public function deleteSong($id){
        DB::table("baihat")->where("idBaiHat" , $id)->delete();
        return redirect()->back();
    }

    public function genres(){
        $genres = DB::table('theloai')->leftJoin('idchude','theloai.idChude','idchude.idChude')->get();
        $topicEntities = DB::table('idchude')->get(["idChude" , "TenChuDe"]);
        return view("admin.genres.index" , compact("genres" , "topicEntities"));
    }

    public function addGenre(Request $res){
        $entity = $res->except("_token");
        $uniqid = uniqid();
        $HinhTheLoai_fileName = $uniqid . "-" . $res->HinhTheLoai->getClientOriginalName();
        $res->HinhTheLoai->move(public_path("HinhTheLoai"), $HinhTheLoai_fileName);
        $entity["HinhTheLoai"] = "/HinhTheLoai/" . $HinhTheLoai_fileName;
        $entity["idChude"] = (boolval($entity["idChude"])) ? $entity["idChude"] : null;
        DB::table('theloai')->insert($entity);
        return redirect()->back();
    }

    public function deleteGenre($id) {
        DB::table("theloai")->where("idTheLoai" , $id)->delete();
        return redirect()->back();
    }

    public function playlists(){
        $playlists = DB::table("paylist")->get();
        return view("admin.playlists.index" , compact("playlists"));
    }

    public function addPlaylist(Request $res){
        $entity = $res->except("_token");
        $uniqid = uniqid();
        $HinhNen_fileName = $uniqid . "-" . $res->HinhNen->getClientOriginalName();
        $HinhIcon_fileName = $uniqid . "-" . $res->HinhIcon->getClientOriginalName();
        $res->HinhNen->move(public_path("HinhNen"), $HinhNen_fileName);
        $res->HinhIcon->move(public_path("HinhIcon"), $HinhIcon_fileName);
        $entity["HinhNen"] = "/HinhNen/" . $HinhNen_fileName;
        $entity["HinhIcon"] = "/HinhIcon/" . $HinhIcon_fileName;
        DB::table('paylist')->insert($entity);
        return redirect()->back();
    }

    public function deletePlaylist($id) {
        DB::table('paylist')->where("idPayList",$id)->delete();
        return redirect()->back();
    }


    public function albums(){
        $albums = DB::table("idalbum")->get();
        return view("admin.albums.index" , compact("albums"));
    }
    public function addAlbum(Request $res){
        $entity = $res->except("_token");
        $uniqid = uniqid();
        $HinhAlbum_fileName = $uniqid . "-" . $res->HinhAlbum->getClientOriginalName();
        $res->HinhAlbum->move(public_path("HinhAlbum"), $HinhAlbum_fileName);
        $entity["HinhAlbum"] = "/HinhAlbum/" . $HinhAlbum_fileName;
        DB::table('idalbum')->insert($entity);
        return redirect()->back();
    }
    public function deleteAlbum($id) {
        DB::table("idalbum")->where("idAlbum" , $id)->delete();
        DB::table("baihat")->where("idAlbum" , $id)->delete();
        return redirect()->back();
    }



    public function topics(){
        $topics = DB::table("idchude")->get();
        return view("admin.topics.index" , compact("topics"));
    }
    public function addTopic(Request $res){
        $entity = $res->except("_token");
        $uniqid = uniqid();
        $HinhChuDe_fileName = $uniqid . "-" . $res->HinhChuDe->getClientOriginalName();
        $res->HinhChuDe->move(public_path("HinhChuDe"), $HinhChuDe_fileName);
        $entity["HinhChuDe"] = "/HinhChuDe/" . $HinhChuDe_fileName;
        DB::table('idchude')->insert($entity);
        return redirect()->back();
    }
    public function deleteTopic($id) {
        DB::table("idchude")->where("idChude" , $id)->delete();
        return redirect()->back();
    }

    public function ads(){
        $ads = DB::table("quangcao")->get();
        $songEntities = DB::table("baihat")->get(["idBaiHat" , "TenBaiHat"]);
        return view("admin.ads.index" , compact("ads" , "songEntities"));
    }
    public function addAd(Request $res){
        $entity = $res->except("_token");
        $uniqid = uniqid();

        $hinhanh_fileName = $uniqid . "-" . $res->hinhanh->getClientOriginalName();
        $res->hinhanh->move(public_path("hinhanh"), $hinhanh_fileName);
        $entity["hinhanh"] = "/hinhanh/" . $hinhanh_fileName;

        $banner_fileName = $uniqid . "-" . $res->banner->getClientOriginalName();
        $res->banner->move(public_path("banner"), $banner_fileName);
        $entity["banner"] = "/banner/" . $banner_fileName;

        DB::table('quangcao')->insert($entity);
        return redirect()->back();
    }
    public function deleteAd($id) {
        DB::table("quangcao")->where("id" , $id)->delete();
        return redirect()->back();
    }


}
