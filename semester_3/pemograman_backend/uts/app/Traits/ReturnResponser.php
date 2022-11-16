<?php
namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait ReturnResponser
{
    /**
     * Return a success JSON response.
     *
     * @param  string  $response
     * @param  string|null  $message
     * @param  int  $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function success($response, string $message = null, int $code = null): JsonResponse
    {
        if ($response == "created") {
            $optionMessage = "Data successfully created!";
            $optionCode = 201;
        }
        elseif ($response == "updated") {
            $optionMessage = "Data successfully updated!";
            $optionCode = 201;
        }
        elseif ($response == "deleted") {
            $optionMessage = "Data successfully deleted!";
            $optionCode = 200;
        }
        elseif ($response == "uploaded") {
            $optionMessage = "Data successfully uploaded!";
            $optionCode = 200;
        }
        elseif ($response == "downloaded") {
            $optionMessage = "Data successfully downloaded!";
            $optionCode = 200;
        }
        elseif ($response == "searched") {
            $optionMessage = "Data successfully searched!";
            $optionCode = 200;
        }
        elseif ($response == "geted") {
            $optionMessage = "Data successfully geted!";
            $optionCode = 200;
        }
        else {
            $message = "Error! Hubungi Admin!";
            $optionCode = 400;
        }

        if ($message == null) {
            $message = $optionMessage;
        }

        if ($code == null) {
            $code = $optionCode;
        }

        return response()->json([
			'status' => 'ok',
            'response' => 'successfully-' .  $response,
			'message' => $message,
		], $code);

    }

    /**
     * Return a success JSON response.
     *
     * @param  array|string  $response
     * @param  string|null  $message
     * @param  array|object  $data
     * @param  int $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successData($response, $data, string $message = null, int $code = null): JsonResponse
    {
        if ($response == "created") {
            $optionMessage = "Data successfully created!";
            $optionCode = 201;
        }
        elseif ($response == "updated") {
            $optionMessage = "Data successfully updated!";
            $optionCode = 201;
        }
        elseif ($response == "deleted") {
            $optionMessage = "Data successfully deleted!";
            $optionCode = 200;
        }
        elseif ($response == "uploaded") {
            $optionMessage = "Data successfully uploaded!";
            $optionCode = 200;
        }
        elseif ($response == "downloaded") {
            $optionMessage = "Data successfully downloaded!";
            $optionCode = 200;
        }
        elseif ($response == "searched") {
            $optionMessage = "Data successfully searched!";
            $optionCode = 200;
        }
        elseif ($response == "geted") {
            $optionMessage = "Data successfully geted!";
            $optionCode = 200;
        }
        else {
            $optionMessage = "Error! Hubungi Admin!";
            $optionCode = 400;
        }

        if ($message == null) {
            $message = $optionMessage;
        }

        if ($code == null) {
            $code = $optionCode;
        }

        return response()->json([
			'status' => 'ok',
            'response' => 'successfully-' .  $response,
			'message' => $message,
            'data' => $data
		], $code);

    }

    /**
     * Return a success JSON response with route.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
	protected function successRouteCRUD($response, $route, string $message = null, int $code): JsonResponse
	{
        if ($response == "created") {
            $optionMessage = "Data successfully created!";
            $optionCode = 201;
        }
        elseif ($response == "updated") {
            $optionMessage = "Data successfully updated!";
            $optionCode = 201;
        }
        elseif ($response == "deleted") {
            $optionMessage = "Data successfully deleted!";
            $optionCode = 200;
        }
        elseif ($response == "uploaded") {
            $optionMessage = "Data successfully uploaded!";
            $optionCode = 200;
        }
        elseif ($response == "downloaded") {
            $optionMessage = "Data successfully downloaded!";
            $optionCode = 200;
        }
        elseif ($response == "searched") {
            $optionMessage = "Data successfully searched!";
            $optionCode = 200;
        }
        elseif ($response == "geted") {
            $optionMessage = "Data successfully geted!";
            $optionCode = 200;
        }
        else {
            $message = "Error! Hubungi Admin!";
            $optionCode = 400;
        }

        if ($message == null) {
            $message = $optionMessage;
        }

        if ($code == null) {
            $code = $optionCode;
        }

		return response()->json([
			'status' => 'ok',
            'response' => 'successfully-' .  $response,
			'message' => $message,
            'route' => $route
		], $code);
	}

    /**
     * Return a success JSON response with route.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
	protected function successRoute($response, $route, string $message = null, int $code = 200): JsonResponse
	{
		return response()->json([
			'status' => 'ok',
            'response' => 'successfully-' .  $response,
			'message' => $message,
            'route' => $route
		], $code);
	}

    /**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
	protected function error(string $message = null, int $code, $data = null): JsonResponse
	{
		return response()->json([
			'status' => 'failed',
            'response' => 'failed-result',
			'message' => $message,
			'data' => $data
		], $code);
	}

    /**
     * Return an error Validator JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
	protected function errorvalidator(string $errors = null, int $code = 422): JsonResponse
	{
        return response()->json([
            'status' => 'failed',
            'response' => 'failed-validation',
            'message' => 'Error! The request not expected!',
            'errors' => $errors
        ], $code);
	}

    /**
     * Return an error Code JSON response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
	protected function errorCode($errorData, int $code = 400) : JsonResponse
	{
        return response()->json([
            'status' => 'failed',
            'response' => 'failed-code',
            'message' => "Failed! Something wrong with your code!",
            'errorData' => $errorData
        ], $code);
	}

}
