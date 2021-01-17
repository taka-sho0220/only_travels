<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\travel;
use App\Models\contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\TravelRequest;
use App\Http\Requests\ContactRequest;

class TravelController extends Controller
{
    public function showMain()
    {
        return view('mains.travel');
    }
    public function showContact()
    {
        return view('mains.contact');
    }
    public function exeMail(ContactRequest $request)
    {
        $contacts = $request->all();
        Mail::to($contacts['email'])->send(new ContactMail($contacts));
        \DB::beginTransaction();
        try {
            Contact::create($contacts);
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', 'メールを送信しました。');
        return redirect()->route('contact');

    }
    public function showForm()
    {
        return view('travel_pages.form');
    }
    public function showDetail($id)
    {
        $travel = Travel::find($id);

        if (is_null($travel)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        return view('travel_pages.detail', ['travel' => $travel]);
    }
    /**
     * @param int $id
     * @return view
     */
    public function showEdit($id)
    {
        $travel = Travel::find($id);

        if (is_null($travel)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        return view('travel_pages.edit', ['travel' => $travel]);
    }
    public function exeCreate(TravelRequest $request)
    {
        $inputs = $request->all();

        $files = $request->file('photos');

        if ($request->hasFile('photos') && $files->isValid()) {
            $file_name = $request->file('photos')->getClientOriginalName();
            $request->file('photos')->storeAs('public/profiles', $file_name);
        };
        $inputs['photos'] = $file_name;
        \DB::beginTransaction();
        
        try {
            Travel::create($inputs);
            
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }
        \Session::flash('err_msg', 'データを登録しました。');
        return redirect(route('home'));
    }
    public function exeDelete($id)
    {
        if (empty($id)) {
            \Session::flash('err_msg', 'データがありません。');
            return redirect(route('home'));
        }
        try {
            Travel::destroy($id);
        } catch (\Throwable $e) {
            abort(500);
        }

        \Session::flash('err_msg', 'データを削除しました。');
        return redirect(route('home'));
    }
    public function exeUpdate(TravelRequest $request)
    {
        $inputs = $request->all();
        \DB::beginTransaction();
        try {
            $travel = Travel::find($inputs['id']);
            $travel->fill([
                'name' => $inputs['name'],
                'place' => $inputs['place'],
                "gender" => $inputs['gender'],
                'age' => $inputs['age'],
                'evaluation' => $inputs['evaluation'],
                'impressions' => $inputs['impressions'],
                'photos' => $inputs['photos'],
            ]);
            $travel->save();
            \DB::commit();
        } catch (\Throwable $e) {
            \DB::rollback();
            abort(500);
        }

        \Session::flash('err_msg', 'データを更新しました。');
        return redirect(route('home'));
    }
    public function showHoka_toho()
    {
        $hokkaidous =  Travel::where('place', '北海道')->get();
        $aomoris = Travel::where('place', '青森県')->get();
        $iwates = Travel::where('place', '岩手県')->get();
        $miyagis = Travel::where('place', '宮城県')->get();
        $akitas = Travel::where('place', '秋田県')->get();
        $yamagatas = Travel::where('place', '山形県')->get();
        $hukushimas = Travel::where('place', '福島県')->get();

            return view('travel_pages.place_parts.hoka_toho')
            ->with('hokkaidous',$hokkaidous)
            ->with('aomoris',$aomoris)
            ->with('iwates',$iwates)
            ->with('miyagis',$miyagis)
            ->with('akitas',$akitas)
            ->with('yamagatas',$yamagatas)
            ->with('hukushimas',$hukushimas);
    }
    public function showKanto()
    {
        $ibarakis = Travel::where('place', '茨木県')->get();
        $tochigis = Travel::where('place', '栃木県')->get();
        $gunmas = Travel::where('place', '群馬県')->get();
        $saitamas = Travel::where('place', '埼玉県')->get();
        $chibas = Travel::where('place', '千葉県')->get();
        $tokyos = Travel::where('place', '東京都')->get();
        $kanagawas = Travel::where('place', '神奈川県')->get();
        
            return view('travel_pages.place_parts.kanto')
            ->with('ibarakis',$ibarakis)
            ->with('tochigis',$tochigis)
            ->with('gunmas',$gunmas)
            ->with('saitamas',$saitamas)
            ->with('chibas',$chibas)
            ->with('tokyos',$tokyos)
            ->with('kanagawas',$kanagawas);
    }
    public function showTubu()
    { 
        $nigatas = Travel::where('place', '新潟県')->get();
        $toyamas = Travel::where('place', '富山県')->get();
        $ishikawas = Travel::where('place', '石川県')->get();
        $hukuis = Travel::where('place', '福井県')->get();
        $yamanashis = Travel::where('place', '山梨県')->get();
        $naganos = Travel::where('place', '長野県')->get();
        $gihus = Travel::where('place', '岐阜県')->get();
        $shizuokas = Travel::where('place', '静岡県')->get();
        $aichis = Travel::where('place', '愛知県')->get();
        
            return view('travel_pages.place_parts.tubu')
            ->with('nigatas',$nigatas)
            ->with('toyamas',$toyamas)
            ->with('ishikawas',$ishikawas)
            ->with('hukuis',$hukuis)
            ->with('yamanashis',$yamanashis)
            ->with('naganos',$naganos)
            ->with('gihus',$gihus)
            ->with('shizuokas',$shizuokas)
            ->with('aichis',$aichis);
    }
    public function showKansai()
    {
        $mies = Travel::where('place', '三重県')->get();
        $shigas = Travel::where('place', '滋賀県')->get();
        $kyotos = Travel::where('place', '京都府')->get();
        $osakas = Travel::where('place', '大阪府')->get();
        $hyogos = Travel::where('place', '兵庫県')->get();
        $naras = Travel::where('place', '奈良県')->get();
        $wakayamas = Travel::where('place', '和歌山県')->get();

            return view('travel_pages.place_parts.kansai')
            ->with('mies',$mies)
            ->with('shigas',$shigas)
            ->with('kyotos',$kyotos)
            ->with('osakas',$osakas)
            ->with('hyogos',$hyogos)
            ->with('naras',$naras)
            ->with('wakayamas',$wakayamas);

    }
    public function showCyugoku()
    {
        $tottoris = Travel::where('place', '鳥取県')->get();
        $shimanes = Travel::where('place', '島根県')->get();
        $okayamas = Travel::where('place', '岡山県')->get();
        $hiroshimas = Travel::where('place', '広島県')->get();
        $yamaguchis = Travel::where('place', '山口県')->get();

            return view('travel_pages.place_parts.cyugoku')
            ->with('tottoris',$tottoris)
            ->with('shimanes',$shimanes)
            ->with('okayamas',$okayamas)
            ->with('hiroshimas',$hiroshimas)
            ->with('yamaguchis',$yamaguchis);
    }
    public function showShikoku()
    {
        $tokushimas = Travel::where('place', '徳島県')->get();
        $kagawas = Travel::where('place', '香川県')->get();
        $ehimes = Travel::where('place', '愛媛県')->get();
        $kouchis = Travel::where('place', '高知県')->get();

            return view('travel_pages.place_parts.shikoku')
            ->with('tokushimas',$tokushimas)
            ->with('kagawas',$kagawas)
            ->with('ehimes',$ehimes)
            ->with('kouchis',$kouchis);
    }
    public function showKyu_oki()
    {
        $hukuokas =  Travel::where('place', '福岡県')->get();
        $sagas = Travel::where('place', '佐賀県')->get();
        $nagasakis = Travel::where('place', '長崎県')->get();
        $kumamotos = Travel::where('place', '熊本県')->get();
        $oitas = Travel::where('place', '大分県')->get();
        $miyazakis = Travel::where('place', '宮崎県')->get();
        $kagoshimas = Travel::where('place', '鹿児島県')->get();
        $okinawas = Travel::where('place', '沖縄県')->get();

            return view('travel_pages.place_parts.kyu_oki')
            ->with('hukuokas',$hukuokas)
            ->with('sagas',$sagas)
            ->with('nagasakis',$nagasakis)
            ->with('kumamotos',$kumamotos)
            ->with('oitas',$oitas)
            ->with('miyazakis',$miyazakis)
            ->with('kagoshimas',$kagoshimas)
            ->with('okinawas',$okinawas);
    }    
}
