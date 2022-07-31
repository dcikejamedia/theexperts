<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(): JsonResponse
    {
        return $this->success();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return $this->success();
    }

    /**
     * Display the specified resource.
     *
     * @param Professional $professional
     * @return JsonResponse
     */
    public function show(Professional $professional): JsonResponse
    {
        return $this->success();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Professional $professional
     * @return JsonResponse
     */
    public function edit(Professional $professional): JsonResponse
    {
        return $this->success();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Professional $professional
     * @return JsonResponse
     */
    public function update(Request $request, Professional $professional): JsonResponse
    {
        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Professional $professional
     * @return JsonResponse
     */
    public function destroy(Professional $professional): JsonResponse
    {
        return $this->success();
    }
}
