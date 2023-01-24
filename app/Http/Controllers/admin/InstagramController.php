<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instagram;
use Illuminate\Http\Request;
use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;

class InstagramController extends Controller
{
    public function index()
    {
        $instagram = new InstagramBasicDisplay([
            'appId' => env('APP_ID'),
            'appSecret' => env('APP_SECRET'),
            'redirectUri' => env('REDIRECT_URI')
        ]);



        if (Instagram::find(1)) {
            print_r('last update token = <strong>' . Instagram::find(1)->day . '</strong><br>');
        }
        echo "<a href='{$instagram->getLoginUrl()}'>Login with Instagram</a>";

        if (isset($_GET['code'])) {
            $code = $_GET['code'];

            $token = $instagram->getOAuthToken($code, true);
            $token = $instagram->getLongLivedToken($token, true);


            $token60Days = $instagram->refreshToken($token)->access_token;

            $today = date('d-m-Y');


            if (Instagram::find(1)) {
                Instagram::find(1)->update([
                    'token' => $token60Days,
                    'last_update' => $today
                ]);
            } else {
                Instagram::create([
                    'token' => $token60Days,
                    'last_update' => $today
                ]);
            }

            return redirect()->route('admin.home.index');
        }


        // check token
        // use EspressoDev\InstagramBasicDisplay\InstagramBasicDisplay;
        // add model
        // use use App\Models\Insta;

        if (Instagram::find(1)) {
            $insta = Instagram::find(1);
            $day = date('d-m-Y', strtotime("+30 day", strtotime($insta->day)));

            if (strtotime($day) < strtotime(date('d-m-Y'))) {
                $token60Days = $instagram->refreshToken($insta->token)->access_token;
                $insta->update([
                    'token' => $token60Days,
                    'last_update' => date('d-m-Y')
                ]);
                echo '<h1>Token was updated</h1>';
            } else {
                echo '<h1>Good<h1>';
            }

            echo '<br><br><a href="' . route('admin.home.index') . '">Go to admin panel</a>';
        }
    }
    public function instaToken()
    {
        $instagram = new InstagramBasicDisplay([
            'appId' => env('APP_ID'),
            'appSecret' => env('APP_SECRET'),
            'redirectUri' => env('REDIRECT_URI')
        ]);

        if (Instagram::find(1)) {
            $insta = Instagram::find(1);
            $day = date('d-m-Y', strtotime("+30 day", strtotime($insta->day)));

            if (strtotime($day) < strtotime(date('d-m-Y'))) {
                $token60Days = $instagram->refreshToken($insta->token)->access_token;
                $insta->update([
                    'token' => $token60Days,
                    'last_update' => date('d-m-Y')
                ]);
                echo '<h1>Token was updated</h1>';
            } else {
                echo '<h1>Good<h1>';
            }

            // Add to cron url
        }
    }

    public function getPosts()
    {
        if (Instagram::find(1)) {
            $insta = Instagram::find(1);
            $instagram = new InstagramBasicDisplay([
                'appId' => env('APP_ID'),
                'appSecret' => env('APP_SECRET'),
                'redirectUri' => env('REDIRECT_URI')
            ]);

            $instagram->setAccessToken($insta->token);
            $media = $instagram->getUserMedia('me', 4);
            $data = [];


            foreach ($media->data as $item) {

                if ($item->media_type == 'VIDEO') {
                    array_push($data, ['image' => $item->thumbnail_url, 'image_url' => $item->permalink]);
                }
                if ($item->media_type == 'IMAGE') {
                    array_push($data, ['image' => $item->media_url, 'image_url' => $item->permalink]);
                } elseif ($item->media_type == 'CAROUSEL_ALBUM') {
                    foreach ($item->children->data as $itemChildren) {
                        if ($itemChildren->media_type == 'IMAGE') {
                            array_push($data, ['image' => $item->media_url, 'image_url' => $item->permalink]);
                            break;
                        }
                    }
                }
            }

            return response()->json([
                'data' => $data,
                'status' => 200,
            ]);

            //if u want to show in the view
            // @foreach ($global_data['insta_image'] as $item)
            //     <a href="{{$item['image_url']}}" target="_blank"><img src="{{$item['image']}}" alt="" style="max-width:150px"></a>
            //     <br>
            // @endforeach
        }
    }
}
