<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Transaction;
use App\Models\Transaction_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$members = Member::with('user')->get();

        //$books = Book::with('publisher' ,'catalog')->get();
        //$catalog = Catalog::with('books')->get();
       //$author = Author::with('books')->get();
       //$publisher = Publisher::with('books')->get();

       //no 1.
      // $data = Member::select('*')
        //     ->join('users', 'users.member_id', '=', 'members.id')
          //   ->get();
        
     //no 2

     //$data2 = Member::select('*')
       //      ->leftJoin('users', 'users.member_id', '=', 'members.id')
         //    ->where('users.id', NULL)
           //  ->get();
 
    //no 3
    //$data3 = Transaction::select('members.id', 'members.name')
      //       ->rightJoin('members','members.id','=', 'transactions.member_id')
        //     ->where('transactions.member_id', NULL)
          //   ->get();

    //no 4
    //$data4 = Member::select('members.id','members.name','members.phone_number')
      //       ->join('transactions','transactions.member_id', '=', 'members.id')
        ///     ->orderBy('members.id','asc')
           ///  ->get();

    //no 5
    //$data5 = Member::select('members.id', 'members.name', 'members.phone_number')
      //      ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //     ->selectRaw('COUNT(transactions.id) as total_transactions')
          //   ->groupBy('members.id', 'members.name', 'members.phone_number')
            // ->having('total_transactions', '>', 1)
             //->orderBy('members.id', 'asc')
              //->get();
 
    //no 6
    //$data6 = Member::select(
      //  'members.name', 
     //   'members.phone_number', 
       // 'members.address', 
        //'transactions.date_start', 
        //'transactions.date_end'
   // )
    //->join('transactions', 'transactions.member_id', '=', 'members.id') 
    //->get();

    //no 7

    //$data7 = Member::select(
      //  'members.name', 
     //   'members.address', 
       // 'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end'
    //)
    //->join('transactions', 'transactions.member_id', '=', 'members.id') 
    //->whereMonth('transactions.date_end', 6) 
    //->get();

    //no8
    
    //$data8 = Member::select(
   //     'members.name', 
     //   'members.address', 
       // 'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end'
   // )
    //->join('transactions', 'transactions.member_id', '=', 'members.id') 
 //   ->whereMonth('transactions.date_start', 5) 
   // ->get();



    //no 9

    //$data9 = Member::select(
      //  'members.name', 
        //'members.address', 
        //'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end'
    //)
 //   ->join('transactions', 'transactions.member_id', '=', 'members.id') 
 //   ->whereMonth('transactions.date_start',  5) 
 //   ->whereMonth('transactions.date_end',  5) 
   /// ->get();

    //no 10 

    //$data10 = Member::select(
      //  'members.name', 
        //'members.address', 
        //'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end'
   // )
    //->join('transactions', 'transactions.member_id', '=', 'members.id') 
    //->where('members.address', 'LIKE', '%Bandung%')
    //->get();

     //no 11
     //$data11 = Member::select(
      //  'members.name', 
        //'members.address', 
        //'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end'
    //)
    //->join('transactions', 'transactions.member_id', '=', 'members.id') 
    //->where('members.address', 'LIKE', '%Bandung%') 
    //->where('members.gender', 'female') 
    //->get();

    //no 12
    //$data12 = Member::select(
      //  'members.name', 
        //'members.address', 
        //'members.phone_number', 
        //'transactions.date_start', 
        //'transactions.date_end', 
        //'transaction_details.book_id', // atau 'isbn' jika kolom ini ada
        //'transaction_details.qty'
  //  )
  //  ->join('transactions', 'transactions.member_id', '=', 'members.id') 
   // ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
    //->get();

//no 13
//$data13 = Member::select(
  //  'members.name', 
    //'members.phone_number', 
  //  'members.address', 
    //'transactions.date_start', 
    //'transactions.date_end', 
    //'transaction_details.book_id', 
    //'transaction_details.qty', 
    //'books.title as book_title', 
    //'books.price as book_price', 
    //DB::raw('transaction_details.qty * books.price AS total_price')
//)
//->join('transactions', 'transactions.member_id', '=', 'members.id')
//->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
//->join('books', 'books.id', '=', 'transaction_details.book_id') // Hubungkan berdasarkan kolom id
//->orderBy('transaction_details.transaction_id', 'asc')
//->get();

//no 14
//$data14 = Member::select(
  //  'members.name as member_name',
  //  'members.phone_number',
    //'members.address',
 //   'transactions.date_start as date_start',
   // 'transactions.date_end as date_end',
    //'transaction_details.isbn',
    //'transaction_details.qty',
    //'books.title as book_title',
    //'publishers.name as publisher_name',
    //'authors.name as author_name',
    //'catalogs.name as catalog_name'
//)
//->join('transactions', 'transactions.member_id', '=', 'members.id') 
//->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id') 
//->join('books', 'books.id', '=', 'transaction_details.book_id') 
//->join('publishers', 'publishers.id', '=', 'books.publisher_id') 
//->join('authors', 'authors.id', '=', 'books.author_id') 
//->join('catalogs', 'catalogs.id', '=', 'books.catalog_id') 
//->orderBy('transactions.date_start', 'asc') 
//->get();

//no 15
//$data15 = Catalog::select(
  //  'catalogs.id',            
  //  'catalogs.name as catalog_name',            
   // 'books.title as book_title', 
    //'books.price as book_price'
//)
//->join('books', 'books.catalog_id', '=', 'catalogs.id')   
//->orderBy('catalogs.id', 'asc')  
//->get();

//no16
//$data16 = Book::select(
  //  'books.id', 
    //'books.title', 
    //'books.isbn', 
    //'books.price', 
    //'publishers.name as publisher_name'
//)
//->leftJoin('publishers', 'publishers.id', '=', 'books.publisher_id') 
//->orderBy('books.id', 'asc')
//->get();

//no17
//$data17 = Book::where('books.author_id', 'PG05') 
  //          ->count(); 

//no18
//$data18 = Book::where('price', '>', 10000)  
  //          ->get();  

//no19
//$data19 = Book::join('publishers', 'publishers.id', '=', 'books.publisher_id')  
           // ->where('publishers.id', '01')  
            //->where('books.qty', '>', 10)  
           // ->get();  

//no20
//$data20 = Member::whereMonth('created_at', 6)  
            //  ->whereYear('created_at', now()->year)  
             // ->get();  


       // return $data20;

        return view('home');
    }
}
