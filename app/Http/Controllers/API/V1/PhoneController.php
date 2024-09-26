<?php

namespace App\Http\Controllers\API\V1;

use App\Models\Phone;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePhoneRequest;
use App\Http\Requests\UpdatePhoneRequest;
use App\Interfaces\PhoneRepositoryInterface;
use Illuminate\Http\Response;

class PhoneController extends Controller
{
    private PhoneRepositoryInterface $phoneRepository;

    public function __construct(PhoneRepositoryInterface $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhoneRequest $request)
    {
        $phoneValidated = $request->validated();

        return response()->json(
            [
                'data' => $this->phoneRepository->createPhone($phoneValidated)
            ],
            Response::HTTP_CREATED
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhoneRequest $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Phone $phone)
    {
        //
    }
}
