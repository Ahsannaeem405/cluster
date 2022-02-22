<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class install extends Controller
{
    function install_script(Request $request)
    {
       // dd($request->input());
        $request->validate([
            'dbhost' => 'required',
            'dbname' => 'required',
            'dbusername' => 'required',
            'email' => 'required',
            'pwd' => 'required',
               
        ]);
    $dbhost=$request->dbhost;
    $dbname=$request->dbname;
    $dbusername = $request->dbusername;
    $dbpass=$request->dbpass;




        $myfile = fopen("../.env", "w") or die("Unable to open file!");
        $txt0 = "APP_NAME=Laravel\n
        APP_NAME=Laravel\n
        APP_ENV=local\n
        APP_KEY=base64:ZTQ6Z06QE1/WXpuORbsNqEaka3zzdmEwHiVxm+QDZl4=\n
        APP_DEBUG=false\n
        APP_URL=http://localhost\n
        LOG_CHANNEL=stack\n
        LOG_DEPRECATIONS_CHANNEL=null\n
        LOG_LEVEL=debug\n
        DB_CONNECTION=mysql\n";
        $txt10 =  "DB_HOST=".$dbhost."\n";
        $txt11 = "DB_PORT=3306\n";
        $txt12 = "DB_DATABASE=".$dbname."\n";
        $txt13 = "DB_USERNAME=".$dbusername."\n";
        $txt14 = "DB_PASSWORD=".$dbpass."\n";

        $txt15 = "BROADCAST_DRIVER=log\n";
        $txt16 = "CACHE_DRIVER=file\n";
        $txt17 = "FILESYSTEM_DRIVER=local\n";
        $txt18 = "QUEUE_CONNECTION=sync\n";
        $txt19 = "SESSION_DRIVER=file\n";
        $txt20 = "SESSION_LIFETIME=120\n";

        $txt21 = "MEMCACHED_HOST=127.0.0.1\n";

        $txt22 = "REDIS_HOST=127.0.0.1\n";
        $txt23 = "REDIS_PASSWORD=null\n";
        $txt24 = "REDIS_PORT=6379\n";


  

        $txt25 = "MAIL_MAILER=sendmail\n";
        $txt26 = "MAIL_HOST=smtp.gmail.com\n";
        $txt27 = "MAIL_PORT=587\n";
        $txt28 = "MAIL_USERNAME=demotalha1@gmail.com\n";
        $txt29 = "MAIL_PASSWORD=demo@123456789\n";
        $txt30 = "MAIL_ENCRYPTION=null\n";
        $txt31 = "MAIL_FROM_ADDRESS=tls\n";
        $txt33 = "MAIL_FROM_NAME=Cluster\n";

        $txt34 = "AWS_ACCESS_KEY_ID=\n";
        $txt35 = "AWS_SECRET_ACCESS_KEY=\n";
        $txt36 = "AWS_DEFAULT_REGION=us-east-1\n";
        $txt37 = "AWS_BUCKET=\n";
        $txt38 = "AWS_USE_PATH_STYLE_ENDPOINT=false\n";

        $txt39 = "PUSHER_APP_ID=\n";
        $txt40 = "PUSHER_APP_KEY=\n";
        $txt41 = "PUSHER_APP_SECRET=\n";
        $txt42 = "PUSHER_APP_CLUSTER=mt1\n";

        $txt43 = "MIX_PUSHER_APP_KEY=null\n";
        $txt44 = "MIX_PUSHER_APP_CLUSTER=null\n";

        fwrite($myfile, $txt0);
        fwrite($myfile, $txt10);
        fwrite($myfile, $txt11);
        fwrite($myfile, $txt12);
        fwrite($myfile, $txt13);
        fwrite($myfile, $txt14);
        fwrite($myfile, $txt15);
        fwrite($myfile, $txt16);
        fwrite($myfile, $txt17);
        fwrite($myfile, $txt18);
        fwrite($myfile, $txt19);
        fwrite($myfile, $txt20);
        fwrite($myfile, $txt21);
        fwrite($myfile, $txt22);
        fwrite($myfile, $txt23);
        fwrite($myfile, $txt24);
        fwrite($myfile, $txt25);
        fwrite($myfile, $txt26);
        fwrite($myfile, $txt27);
        fwrite($myfile, $txt28);
        fwrite($myfile, $txt29);
        fwrite($myfile, $txt30);
        fwrite($myfile, $txt31);
        fwrite($myfile, $txt33);
        fwrite($myfile, $txt34);
        fwrite($myfile, $txt35);
        fwrite($myfile, $txt36);
        fwrite($myfile, $txt37);
        fwrite($myfile, $txt38);
        fwrite($myfile, $txt39);
        fwrite($myfile, $txt40);
        fwrite($myfile, $txt41);
        fwrite($myfile, $txt42);
        fwrite($myfile, $txt43);
        fwrite($myfile, $txt44);
        fclose($myfile);
   
        $email=$request->email;
        $pwd=$request->pwd;
        session()->put('EMAIL',$email);
        session()->put('PWD',$pwd);
  
        
        return redirect('/migrate');

       
        //sleep(10);
     
       

        

    }


   
}
