<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Traits\Respondable;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\Images\ImageStoreRequest;

class ImageController extends Controller
{
    use Respondable;

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(): JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ImageStoreRequest $request
     * @return JsonResponse
     */
    public function store(ImageStoreRequest $request): JsonResponse
    {
        $image = $request->file('image');
        $fileName = $image->getClientOriginalName();
        $extension = $image->getExtension();
        $image->storeAs('images/', $fileName, 's3');

        //image or all documents
    }

    /**
     * Display the specified resource.
     *
     * @param Image $image
     * @return JsonResponse
     */
    public function show(Image $image): JsonResponse
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Image $image
     * @return JsonResponse
     */
    public function update(Request $request, Image $image): JsonResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Image $image
     * @return JsonResponse
     */
    public function destroy(Image $image): JsonResponse
    {
        //
    }
}
