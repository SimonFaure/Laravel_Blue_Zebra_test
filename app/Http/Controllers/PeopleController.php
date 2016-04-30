<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peoples;
use App\Http\Requests;
use Illuminate\Http\RedirectResponse;


class PeopleController extends Controller
{
    public function index(){

        $peoples = Peoples::all();


        return view('people/list', compact('peoples'));
    }

    public function detail($id){

        $individual = Peoples::find($id);

        return view('people/detail', compact('individual'));

    }


    public function add(){

        return view('people/add');

    }


    public function create(Request $request){

        $peoples = Peoples::all();

        $infos   = $request->all();

        $this->validate($request, [
                'firstName' => 'required|max:255',
                'lastName'  => 'required|max:255',
                'birthday'  => 'required|max:10|date',
                'email'     => 'required|unique:peoples|max:255|email',
        ]);



        $peopleInfos = Peoples::firstOrCreate([
            'firstName' => $infos['firstName'],
            'lastName'  => $infos['lastName'],
            'birthday'  => $infos['birthday'],
            'email'     => $infos['email'],
        ]);

        $request->session()->flash('status', 'Ajout effectué!');

        return redirect('/');

    }

    public function modify(Request $request){

        $individualInfos =$request->all();

        $individual = Peoples::find($individualInfos['id']);


        return view('people/modify', compact('individual'));
    }

    public function updateIndividual(Request $request){

        $individualInfos =$request->all();

        $individual = Peoples::find($individualInfos['id']);

        $this->validate($request, [
            'firstName' => 'required|max:255',
            'lastName'  => 'required|max:255',
            'birthday'  => 'required|max:10|date',
            'email'     => 'required|max:255|email',
        ]);


        $individual->firstName = $individualInfos['firstName'];
        $individual->lastName  = $individualInfos['lastName'];
        $individual->birthday  = $individualInfos['birthday'];
        $individual->email     = $individualInfos['email'];
        $individual->save();

        $request->session()->flash('status', 'Changement(s) effectué(s)!');

        return redirect('/');
     }

    public function delete(Request $request){

        $individualInfos =$request->all();

        $individual = Peoples::find($individualInfos['id']);

        $individual->delete();

        $request->session()->flash('status', 'Personne supprimée!');

        return redirect('/');
    }
}