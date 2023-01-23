<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Color;
use App\Models\Contact;
use App\Models\Hero;
use App\Models\Intro;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['intros'] = Intro::orderBy('id', 'ASC')->get();
        $data['colors'] = Color::orderBy('id', 'ASC')->get();
        $data['bags'] = Product::where('type', 0)->get();
        $data['cases'] = Product::where('type', 1)->get();
        $data['access'] = Product::where('type', 2)->get();
        $data['heroes'] = Hero::with('color')->get();
        $data['contacts'] = Contact::find(1);
        return view('home.index', compact('data'));
    }

    public function send(Request $req)
    {
        $number = $req->data['number'];
        $name = $req->data['title'];
        $comment = null;
        if (isset($req->data['comment'])) {
            $comment = $req->data['comment'];
        }
        $product = null;

        if (isset($req->data['product'])) {
            $product = $req->data['product'];
        }

        $pay = null;

        if (isset($req->data['pay'])) {
            $pay = $req->data['pay'] == '0' ? 'Наличные' : 'Онлайн оплата';
        }

        $mailData = [
            'number' => $number,
            'name' => $name,
            'product' => $product,
            'pay' => $pay,
        ];

        FacadesMail::to(env('ADMIN_EMAIL'))->send(new SendMail($mailData));


        return true;
    }

    public function product(Request $req)
    {
        $product = Product::with('color')->find($req->id);
        return $product;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
