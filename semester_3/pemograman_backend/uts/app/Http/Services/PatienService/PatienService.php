<?php


namespace App\Http\Services\PatienService;

use App\Models\Patien;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatienService implements PatienInterface {
    private $patien;

    public function __construct(Patien $patien)
    {
        $this->patien = $patien;
    }

    public function index() : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->all();

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function store($data) : array
    {
        $dataReturn = [];

        try {
            DB::beginTransaction();

            $patien = $this->patien->create($data);

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'created',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            DB::commit();

            return $dataReturn;

        } catch (\Throwable $th) {
            DB::rollback();

            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }
    }

    public function detail($patienId) : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->find($patienId);

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien ID not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function update($data, $patienId) : array
    {
        $dataReturn = [];

        try {
            DB::beginTransaction();

            $patien = $this->patien->find($patienId);

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien ID not found!';
                return $dataReturn;
            }

            $patien->update($data);

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'updated',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            DB::commit();

            return $dataReturn;

        } catch (\Throwable $th) {
            DB::rollback();

            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }
    }

    public function delete($patienId) : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->find($patienId);

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien ID not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'deleted'
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function searchByName($name) : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->where('name', 'like', '%' . $name . '%')->get();;

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien Name not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function searchByStatusPositive() : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->where('status', 'positive')->get();;

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien Name not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function searchByStatusRecovered() : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->where('status', 'recovered')->get();;

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien Name not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }

    public function searchByStatusDead() : array
    {
        $dataReturn = [];

        try {
            $patien = $this->patien->where('status', 'dead')->get();;

            if (!$patien) {
                $dataReturn['statusInterface'] = 'failed';
                $dataReturn['messageInterface'] = 'Patien Name not found!';
                return $dataReturn;
            }

            $dataReturn['statusInterface'] = 'success';

            $responseForLogin = (object) [
                'response' => 'geted',
                'data' => $patien
            ];

            $dataReturn['dataInterface'] = $responseForLogin;

            return $dataReturn;
        } catch (\Throwable $th) {
            $dataReturn['statusInterface'] = 'failed-code';
            $dataReturn['errorDataInterface'] = $th->getMessage();

            return $dataReturn;

        }

    }
}
