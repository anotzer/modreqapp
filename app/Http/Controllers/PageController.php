<?php

namespace App\Http\Controllers;
use App\Models\MainTable;
use App\Models\ModebusRequester;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
require "../public/PhpSerialModbusmaster/PhpSerialModbus.php";
class PageController extends Controller
{
    //
    private $modbusFl;

    public function __construct ()
    {
        // return $this->middleware('auth');
    }

    public function index () {
        return view('mainPage');
    }

    public function info () {
        $id = rand(1,4);
        $res = MainTable::findOrFail($id);

        $deleteProp = ['id', 'DeviceTime', 'created_at'];

        foreach($deleteProp as $prop) {
            unset($res[$prop]);
        }

        return $res;
    }

    public function column_name () {
        //$columns = \Schema::getColumnListing('main'); // users table
        $name = MainTable::latest()->first();
        //dd($name);
        return $name;
    }

    public function chartData () {
        $chartData = MainTable::get(['SOC', 'created_at']);
        return $chartData;
    }

    public function settings (Request $request) {

        // $input    = $request->all();
        // $settings = Settings::where('id', 1)->get();

        // if ($settings[0] != null){
        //     $settings[0]->update($input);
        // }

        return view('settings');
    }

    public function get_curr_day_report () {
        $query = "select DeviceTime, status from main where DeviceTime >= date_sub(current_date(), interval  1 day)";
        $ms_query = DB::select($query);


        $list = array();

        $headers = ["DeviceTime", "status", "Total voltage of pack",
                    "Current", "SOC", "Average cell voltage",
                    "Average temperature", "Voltage difference",
                    "Temperature difference", "Current current",
                    "Current voltage", "voltage solar panel",
                    "current solar panel", "power solar panel",
                    "Output power full", "Output power active",
                    "Output power reactive", "Output voltage",
                    "Output current", "freq of cell", "charge inventor"
                    ];


        array_push($list, $headers);



        $csvFile = fopen("report.csv", "w");
        foreach ($list as $column) {
            fputcsv($csvFile, $column);
        }

        return redirect()->back()->with('message', 'Report sent successfully');

    }

    public function month_send_Click (Request $request) {
        $Hi = intval($request['Hi']);
        $Lo = intval($request['Lo']);
        dd($Hi, $Lo, $request['Month']);
        $Month = $request['Month'];
        $host    = "127.0.0.1";
        $port    = 1111;
        $message = $Month.','.$Hi.','.$Lo;
        echo "Message To server :".$message;
        // create socket
        $socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");

        // connect to server
        $result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
        while(!$result)
        {
            $result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");
        }
        // send string to server
        socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
        // get server response
        //$result = socket_read ($socket, 1024) or die("Could not read server response\n");
        //echo "Reply From Server  :".$result;
        // close socket
        socket_close($socket);

        return redirect()->back()->with(['message' => 'Values has sent']);

    }

}
