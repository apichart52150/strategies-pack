<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Teacher;
use App\Model\Classroom;
use App\Model\DataInsert;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
    	$this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    *
    ดึงข้อมูลห้องเรียนมาแสดง
    *
    */
 
    public static function get_dashboard_v2()//golf
    {
        //$data = Classroom::get_classroom_v2();
        $users = DB::select('select * from video');

        //dd(Auth::user()->password);

        return view('admin.admin_page',['users'=>$users]);
    } 

    public function submit(Request $request){

        $data = $request->input();
        $insert_topic = new DataInsert;

        if($request->file('file_path') != null){
            $filenameWithExt = $request->file('file_path')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file_path')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'.'.$extension;
            // Upload File
            $path = $request->file('file_path')->storeAs('public/file',$fileNameToStore);
            // save File
        }else{
            $fileNameToStore = ".";
        }

        $insert_topic->file_path = $fileNameToStore;
 
        $insert_topic->topic = $data['topic'];
        $insert_topic->title = $data['title'];
        $insert_topic->status = $data['status'];
        $insert_topic->link = $data['link'];
        $insert_topic->authur = Auth::user()->name;
        //dd($path);
        $insert_topic->save();
        return redirect('admin_page')->with('status',"Insert successfully");
    }

    public function edit(Request $request) {

        if($request->file('file_path') != null){

            $filenameWithExt = $request->file('file_path')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file_path')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'.'.$extension;
            // Upload File
            $path = $request->file('file_path')->storeAs('public/file',$fileNameToStore);
            // save File
            $file_path = $fileNameToStore;

        }else{
            $file_path = null;
        }

        $id = $request->input('id');
        $topic = $request->input('topic');
        $title = $request->input('title');
        $status = $request->input('status');
        $link = $request->input('link');
        $updated_at = Carbon::now();
        $authur = $request->input('authur');
       
        //dd($updated_at);
        if($file_path != null){
            DB::update('update video set topic = ?, title=? ,updated_at = ?, authur = ?,status=?,link=?,file_path=? where id = ?',[$topic,$title,$updated_at,$authur,$status,$link,$file_path,$id]);
        }else{
            DB::update('update video set topic = ?, title= ?,updated_at = ?, authur = ?,status=?,link=? where id = ?',[$topic,$title,$updated_at,$authur,$status,$link,$id]);
        }
 
        return redirect('admin_page')->with('status',"Insert successfully");

    }
    
    public function destroy($id) {
        DB::delete('delete from video where id = ?',[$id]);
        return redirect('admin_page')->with('status',"Insert successfully");
    }


}
