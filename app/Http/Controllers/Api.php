<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat;
use App\pengaduan;
use Illuminate\Support\Facades\Hash;
class Api extends Controller
{
    public function index()
    {
        $data = Masyarakat::all();

        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }
    
    public function post()
    {
        $data = Pengaduan::all();

        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }

    public function simpan(Request $request)
    {
        $dates = date('YmdHis');
        $data = new Masyarakat();

        $data->nik                  = $request->nik;
        $data->nama                 = $request->nama;
        $data->email                = $request->email;
        $data->password             = Hash::make($request->password);
        $data->tempat_lahir         = $request->tempat_lahir;
        $data->tanggal_lahir        = $request->tanggal_lahir;
        $data->alamat               = $request->alamat;
        $data->domisili             = $request->domisili;
        $data->agama                = $request->agama;
        $data->no_telp              = $request->no_telp;
        $data->pekerjaan            = $request->pekerjaan;
        $data->status               = $request->status;
        $data->kewarganegaraan      = $request->kewarganegaraan;

        $fileName                   = $data->nik. "_". $dates . ".jpg";

        $data->upload_KTP           = $request->file('upload_KTP');
        $request->file('upload_KTP')->move('uploads/documents/', "KTP-".$fileName);
        $data->upload_KTP           = "uploads/documents/"."KTP-".$fileName;

        $data->upload_KK            = $request->file('upload_KK');
        $request->file('upload_KK')->move('uploads/documents/', "KK-".$fileName);
        $data->upload_KK           = "uploads/documents/"."KK-".$fileName;

        $data->upload_s_kesehatan   = $request->file('upload_s_kesehatan');
        $request->file('upload_s_kesehatan')->move('uploads/documents/', "SKS-".$fileName);
        $data->upload_s_kesehatan   = "uploads/documents/"."SKS-".$fileName;

        $data->approve_status       = $request->approve_status;
        $data->save();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }

    public function save(Request $request)
    {
        $dates = date('YmdHis');
        $data = new Pengaduan();

        $data->nik                  = $request->nik;
        $data->upload_foto          = $request->nama;
        $data->keterangan           = $request->email;
        $data->nama                 = $request->tempat_lahir;
        $data->no_tlp               = $request->tanggal_lahir;
        
        $fileName                   = $data->nik. "_". $dates . ".jpg";

        $data->upload_foto           = $request->file('upload_foto');
        $request->file('upload_foto')->move('uploads/documents/', "foto-".$fileName);
        $data->upload_foto           = "uploads/documents/"."foto-".$fileName;

        $data->approve_status       = $request->approve_status;
        $data->save();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }
    public function edit(Request $request)
    {

        $data = Masyarakat::where('id',$request->id)->first();
        if($data->id == $request->idate){
            if(isset($request->nik)){$data->nik = $request->nik;}
            if(isset($request->nama)){$data->nama = $request->nama;}
            if(isset($request->email)){$data->email = $request->email;}
            if(isset($request->password)){$data->password = Hash::make($request->nik);}
            if(isset($request->tempat_lahir)){$data->tempat_lahir = $request->tempat_lahir;}
            if(isset($request->tanggal_lahir)){$data->tanggal_lahir = $request->tanggal_lahir;}
            if(isset($request->alamat)){$data->alamat = $request->alamat;}
            if(isset($request->domisili)){$data->domisili = $request->domisili;}
            if(isset($request->agama)){$data->agama = $request->agama;}
            if(isset($request->no_telp)){$data->no_telp = $request->no_telp;}
            if(isset($request->pekerjaan)){$data->pekerjaan = $request->pekerjaan;}
            if(isset($request->status)){$data->status = $request->status;}
            if(isset($request->kewarganegaraan)){$data->kewarganegaraan = $request->kewarganegaraan;}
            
            if(isset($request->upload_KTP)){
                $data->upload_KTP           = $request->file('upload_KTP');
                $request->file('upload_KTP')->move('uploads/documents/', "KTP-".$fileName);
                $data->upload_KTP           = "uploads/documents/"."KTP-".$fileName;
            }
            if(isset($request->upload_KK)){
                $data->upload_KK            = $request->file('upload_KK');
                $request->file('upload_KK')->move('uploads/documents/', "KK-".$fileName);
                $data->upload_KTP           = "uploads/documents/"."KK-".$fileName;
            }
            if(isset($request->upload_s_kesehatan)){
                $data->upload_s_kesehatan   = $request->file('upload_s_kesehatan');
                $request->file('upload_s_kesehatan')->move('uploads/documents/', "SKS-".$fileName);
                $data->upload_s_kesehatan   = "uploads/documents/"."SKS-".$fileName;
            }
            if(isset($request->approve_status)){$data->approve_status = $request->approve_status;}

        }

        $data->update();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);

    }

    public function editing(Request $request)
    {

        $data = Pengaduan::where('id',$request->id)->first();
        if($data->id == $request->idate){
            if(isset($request->nik)){$data->nik = $request->nik;}
            
            if(isset($request->upload_foto)){
                $data->upload_foto           = $request->file('upload_foto');
                $request->file('upload_foto')->move('uploads/documents/', "foto-".$fileName);
                $data->upload_foto           = "uploads/documents/"."foto-".$fileName;
            }
            
            if(isset($request->keterangan))  {$data->keterangan     = $request->keterangan;}
            if(isset($request->nama))        {$data->nama           = $request->nama;}
            if(isset($request->no_tlp))      {$data->tempat_lahir   = $request->tempat_lahir;}
            
            if(isset($request->approve_status)){$data->approve_status = $request->approve_status;}

            }
            $data->update();
            return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);

    }
    public function update($id)
    {
        $data = Masyarakat::find($id)->first();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);

    }
    public function updating($id)
    {
        $data = Pengaduan::find($id)->first();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);

    }
    public function delete($id)
    {
        $data = Masyarakat::find($id)->delete();
        return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }

    public function deleting($id)
    
    {
    $data = Pengaduan::find($id)->delete();
    return $data ? response()->json(['status'=>true,'msg'=>'Successfully','data'=>$data]) : response()->json(['status'=>false,'msg'=>'Error']);
    }

    }
