<?php

class PemainsController extends BaseController {

	protected $pemain;

	public function __construct(Pemain $pemain){
		$this->$pemain = $pemain;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $pemain = DB::select('select pemains.nama, scores.score
								from pemains INNER JOIN scores
								ON pemains.id_score = scores.id_score
								ORDER BY scores.score DESC LIMIT 10');
        //$pemain = Pemain::orderBy('id_score', 'DESC')->take(10)->get();
        return View::make('content.highscore')
        	-> with('pemain',$pemain);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        //
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        //
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        //
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
