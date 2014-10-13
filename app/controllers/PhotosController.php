<?php

class PhotosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('photos.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
		$input = Input::all();

		// getClientOriginalName()：アップロードしたファイルのオリジナル名を取得します
		$fileName = $input['fileName']->getClientOriginalName();

		// getRealPath()：アップロードしたファイルのパスを取得します。
		$image = Image::make($input['fileName']->getRealPath());

		// Auth::user()->nameのフォルダがあるかどうかを確認し、ない場合は新規作成する
		File::exists(public_path() . '/images/' . Auth::user()->name) or File::makeDirectory(public_path() . '/images/' . Auth::user()->name);

		// 画像を保存する
		$image->save(public_path() . '/images/' . Auth::user()->name . '/' . $fileName)
					->resize(200, null, function ($constraint) {$constraint->aspectRatio();})
					->greyscale()
					->save(public_path() . '/images/' . Auth::user()->name . '/200-' . $fileName);
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
