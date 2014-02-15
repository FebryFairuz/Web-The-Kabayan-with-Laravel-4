<?php

class TestimonialsController extends BaseController {

	protected $testimonial;

	public function __construct(Testimonial $testimonial){
		$this->$testimonial = $testimonial;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $per_page = 6;
        $testimonial = Testimonial::orderBy('id_testi','DESC')->paginate($per_page);
        return View::make('content.testimonial')
        	-> with('testimonial',$testimonial);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('testimonials.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$nama = Input::get('name');
		$pesan = Input::get('pesan');
		$photo = Input::file('photo');

		$destinationPath = 'uploads/';
		$filename = $photo->getClientOriginalName();
		$upload_success = Input::file('photo')->move($destinationPath,$filename);
		$sql = DB::statement('insert into testimonials (nama,pesan,photo) values (?,?,?)', array($nama,$pesan,$filename));
		
		if($sql == null){
			return Redirect::route('testimonial.index')
				->with('gagal',true);
		}else{
			return Redirect::route('testimonial.index')
				->with('message',true);
		}			
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('testimonials.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('testimonials.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
