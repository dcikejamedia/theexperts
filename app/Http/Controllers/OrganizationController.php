<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OrganizationController extends Controller
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
     * @param Organization $organization
     * @return JsonResponse
     */
    public function show(Organization $organization): JsonResponse
    {
        return $this->success();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Organization $organization
     * @return JsonResponse
     */
    public function edit(Organization $organization): JsonResponse
    {
        return $this->success();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Organization $organization
     * @return JsonResponse
     */
    public function update(Request $request, Organization $organization): JsonResponse
    {
        return $this->success();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Organization $organization
     * @return JsonResponse
     */
    public function destroy(Organization $organization): JsonResponse
    {
        return $this->success();
    }
}
