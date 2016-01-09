<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
#This code provided by:
#Andreas Hadiyono (andre.hadiyono@gmail.com)
#Gunadarma University

require_once './config/application.php';
$path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
$temp_path = explode($REQUEST, $path);


$elements = explode('/', $temp_path[1]);                // Split path on slashes
$data = array_filter($elements);

if (count($data) == 0)                       // No path elements means home
     include "./index.php";
else
//untuk main menu
     switch ($data[1]) {             // Pop off first item and switch
           case 'home':
					include "view/home.php";
               /* Isi+
                * Location 
                * General info
                * Traveller's Essential
                */
               

               break;

          case 'today':
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Today's Festival";
                    include "./view/today_festival_management.php";
               } else if ($data[2] == "edit") {
                    $id = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($id == "") {
                         $UTILITY->popup_message("Maaf data today festival tidak ada");
                         $UTILITY->location_goto("content/today");
                    } else {
                         $title_tab = "Edit Today's Festival";
                         include "./view/today_festival_management.php";
                    }
               } else
                    include "./view/today_festival.php";
               break;
               
          case 'album':
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Album";
                    include "./view/album_management.php";
               } else if ($data[2] == "edit") {
                    $id_album = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($id_album== "") {
                         $UTILITY->popup_message("Maaf data album tidak ada");
                         $UTILITY->location_goto("content/album");
                    } else {
                         $title_tab = "Edit Album";
                         include "./view/album_management.php";
                    }
               } else
                    include "./view/album.php";
               break;
               
           case 'foto':
                $id_album=$data[2];
               if ($data[3] == "tambah") {
                    $title_tab = "Tambah Foto";
                    include "./view/foto_management.php";
               } else if ($data[3] == "edit") {
                    $id_foto = $purifier->purify($data[4]);
                    $status_edit = 1;
                    if ($id_album== "") {
                         $UTILITY->popup_message("Maaf data foto tidak ada");
                         $UTILITY->location_goto("content/foto/$id_album");
                    } else {
                         $title_tab = "Edit Foto";
                         include "./view/foto_management.php";
                    }
               } else
                    include "./view/foto.php";
               break;
          case 'about':
               /* Isi+
                * Location 
                * General info
                * Traveller's Essential
                */
               switch ($data[2]) {
                    case 1:
                         $title_tab = "Location";
                         $kategori = 1;
                         include "./view/about.php";
                         break;
                    case 2:
                         $title_tab = "General Info";
                         $kategori = 2;
                         include "./view/about.php";
                         break;
                    case 3:
                         $title_tab = "Traveller's Esential";
                         $kategori = 3;
                         include "./view/about.php";
                         break;

                    case "tambah":
                         $title_tab = "Tambah About";
                         include "./view/about_management.php";
                         break;
                    case "edit":
                         $id = $purifier->purify($data[3]);
                         $status_edit = 1;
                         if ($id == "") {
                              $UTILITY->popup_message("Maaf data about tidak ada");
                              $UTILITY->location_goto("content/about/1");
                         } else {
                              $title_tab = "Edit About";
                              include "./view/about_management.php";
                         }
                         break;
                    default:
                         $title_tab = "Location";
                         $kategori = 1;
                         include "./view/about_management.php";
                         break;
                         break;
               }
               break;

               break;
          case 'destination':
               /* Isi:
                * Recommend ---> sama dengan berita
                * Spectacular Indonesia Spot
                * Region --> pulau di Indonesia (Sumatera, Jawa, Kalimantan, Sulawesi, Maluku, NTT, Bali, Papua)
                * Cities ---> sama dengan berita
                */
                switch ($data[2]) {
                    case 1:
                         $title_tab = "Recommended";
                         $kategori = 1;
                         include "./view/international_conference.php";
                         break;
                    case 2:
                         $title_tab = "Spectacular Indonesia Spot";
                         $kategori = 1;
                         include "./view/international_conference.php";
                         break;
                    
                       case 3:
                         $title_tab = "Region";
                         $kategori = 3;
                         include "./view/destination.php";
                         break;    
                    case "tambah":
                         $title_tab = "Tambah Destination";
                         include "./view/destination_management.php";
                         break;
                    case "edit":
                         $id = $purifier->purify($data[3]);
                         $status_edit = 1;
                         if ($id == "") {
                              $UTILITY->popup_message("Maaf data destination tidak ada");
                              $UTILITY->location_goto("content/destination/1");
                         } else {
                              $title_tab = "Edit Destination";
                              include "./view/destination_management.php";
                         }
                         break;
                    default:
                         $title_tab = "Recommended";
                         $kategori = 1;
                         include "./view/destination_management.php";
                         break;
                         break;
               }
               break;
          case 'attraction':
               /* Isi:    
                * Travel Highlight
                * Event
                * 
                */
              switch ($data[2]) {
                    case 1:
                         $title_tab = "Travel Highlights";
                         $kategori = 1;
                         include "./view/attraction.php";
                         break;
                    case 2:
                         $title_tab = "Events";
                         $kategori = 2;
                         include "./view/attraction.php";
                         break;
                    

                    case "tambah":
                         $title_tab = "Tambah Attraction";
                         include "./view/attraction_management.php";
                         break;
                    case "edit":
                         $id = $purifier->purify($data[3]);
                         $status_edit = 1;
                         if ($id == "") {
                              $UTILITY->popup_message("Maaf data attraction tidak ada");
                              $UTILITY->location_goto("content/attraction/1");
                         } else {
                              $title_tab = "Edit Attraction";
                              include "./view/attraction_management.php";
                         }
                         break;
                    default:
                         $title_tab = "Attraction";
                         $kategori = 1;
                         include "./view/attraction_management.php";
                         break;
                         break;
               }
               break;
          case 'culture':
               /* Isi:
                * Culture
                * Art
                * Craft
                * Music/Instructment    
                */
               switch ($data[2]) {
                    case 1:
                         $title_tab = "Culture";
                         $kategori = 1;
                         include "./view/culture.php";
                         break;
                    case 2:
                         $title_tab = "Arts";
                         $kategori = 2;
                         include "./view/culture.php";
                         break;
                    case 3:
                         $title_tab = "Craft";
                         $kategori = 3;
                         include "./view/culture.php";
                         break;
                    case 4:
                         $title_tab = "Music/Instrument";
                         $kategori = 4;
                         include "./view/culture.php";
                         break;

                    case "tambah":
                         $title_tab = "Tambah Culture";
                         include "./view/culture_management.php";
                         break;
                    case "edit":
                         $id = $purifier->purify($data[3]);
                         $status_edit = 1;
                         if ($id == "") {
                              $UTILITY->popup_message("Maaf data culture tidak ada");
                              $UTILITY->location_goto("content/culture/1");
                         } else {
                              $title_tab = "Edit Culture";
                              include "./view/culture_management.php";
                         }
                         break;
                    default:
                         $title_tab = "Culture";
                         $kategori = 1;
                         include "./view/culture.php";
                         break;
                         break;
               }

               break;
          case "food":
               /* Isi:
                * regional Dishes
                * Feast
                * beverages
                * Eating    establishment  
                * Snacks
                * Fruits
                */
               switch ($data[2]) {
                    case 1:
                         $title_tab = "Regional Dishes";
                         $kategori = 1;
                         include "./view/food.php";
                         break;
                    case 2:
                         $title_tab = "Feast";
                         $kategori = 2;
                         include "./view/food.php";
                         break;
                    case 3:
                         $title_tab = "Beverages";
                         $kategori = 3;
                         include "./view/food.php";
                         break;
                    case 4:
                         $title_tab = "Eating Establishment";
                         $kategori = 4;
                         include "./view/food.php";
                         break;
                    case 5:
                         $title_tab = "Snack";
                         $kategori = 5;
                         include "./view/food.php";
                         break;
                    case 6:
                         $title_tab = "Fruit";
                         $kategori = 6;
                         include "./view/food.php";
                         break;
                    case "tambah":
                         $title_tab = "Tambah Food";
                         include "./view/food_management.php";
                         break;
                    case "edit":
                         $id = $purifier->purify($data[3]);
                         $status_edit = 1;
                         if ($id == "") {
                              $UTILITY->popup_message("Maaf data shopping tidak ada");
                              $UTILITY->location_goto("content/food/1");
                         } else {
                              $title_tab = "Edit Food";
                              include "./view/food_management.php";
                         }
                         break;
                    default:
                         $title_tab = "Regional Dishes";
                         $kategori = 1;
                         include "./view/food.php";
                         break;
                         break;
               }

               break;
          case "shopping":
               /*
                *   
                */
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Shopping";
                    include "./view/shopping_management.php";
               } else if ($data[2] == "edit") {
                    $id = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($id == "") {
                         $UTILITY->popup_message("Maaf data shopping tidak ada");
                         $UTILITY->location_goto("content/shopping");
                    } else {
                         $title_tab = "Edit Shopping";
                         include "./view/shopping_management.php";
                    }
               } else
                    include "./view/shopping.php";
               break;

          case "setting":
               /*
                *   
                */
               if ($data[2] == "tambah") {
                    $title_tab = "Tambah Pengguna";
                    include "./view/setting_pengguna.php";
               } else if ($data[2] == "edit") {
                    $user_id = $purifier->purify($data[3]);
                    $status_edit = 1;
                    if ($user_id == "") {
                         $UTILITY->popup_message("Maaf data user tidak ada");
                         $UTILITY->location_goto("content/setting");
                    } else {
                         $title_tab = "Edit Pengguna";
                         include "./view/setting_pengguna.php";
                    }
               } else
                    include "./view/setting.php";

               break;


          default:
               header('HTTP/1.1 404 Not Found');
               include "view/404.php";
     }
?>
