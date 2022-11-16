<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatienRequest;
use App\Http\Services\PatienService\PatienInterface;
use Illuminate\Http\Request;

class PatienController extends Controller
{
    protected $patienInterface;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PatienInterface $patienInterface)
    {
        $this->patienInterface = $patienInterface;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $patienInterface = $this->patienInterface->index();

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $patienRequest
     * @return \Illuminate\Http\Response
     */
    public function store(PatienRequest $patienRequest)
    {
        try {
            $data = $patienRequest->all();

            $patienInterface = $this->patienInterface->store($data);

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }

        } catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $patienInterface = $this->patienInterface->detail($id);

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $patienRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatienRequest $patienRequest, $id)
    {
        try {
            $data = $patienRequest->all();

            $patienInterface = $this->patienInterface->update($data, $id);

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }

        } catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $patienInterface = $this->patienInterface->delete($id);

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->success(
                    $patienInterface['dataInterface']->response
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Display the specified resource by name.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        try {

            $patienInterface = $this->patienInterface->searchByName($name);

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Display the specified resource by status positive.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function positive()
    {
        try {

            $patienInterface = $this->patienInterface->searchByStatusPositive();

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Display the specified resource by status recovered.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function recovered()
    {
        try {

            $patienInterface = $this->patienInterface->searchByStatusRecovered();

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }

    /**
     * Display the specified resource by status dead.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dead()
    {
        try {

            $patienInterface = $this->patienInterface->searchByStatusDead();

            if ($patienInterface['statusInterface'] == "failed-code") {
                return $this->errorCode($patienInterface['errorDataInterface']);
            }
            else if ($patienInterface['statusInterface'] == "failed") {
                return $this->errorvalidator($patienInterface['messageInterface']);
            }
            else {
                return $this->successData(
                    $patienInterface['dataInterface']->response,
                    $patienInterface['dataInterface']->data,
                );
            }
        }
        catch (\Throwable $th) {
            return $this->errorCode($th->getMessage());
        }
    }
}
