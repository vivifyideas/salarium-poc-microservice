<?php

namespace App\Http\Controllers;

    /**
 * @SWG\Swagger(
 *     schemes={"http","https"},
 *     basePath="/",
 *     @SWG\Info(
 *         version="1.0.0",
 *         title="Salarium POC Microservice",
 *         description="Microservice to demonstrate AWS Infrastructure on POC",
 *         termsOfService="",
 *         @SWG\Contact(
 *             email="contact@vivifyideas.com"
 *         ),
 *         @SWG\License(
 *             name="Private License",
 *             url="URL to the license"
 *         )
 *     )
 * )
 */
class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

     /**
     * @SWG\Get(
     *      path="/",
     *      operationId="getStatus",
     *      tags={"Status"},
     *      summary="Get current status and version of microservice",
     *      description="Returns object with status and version",
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation"
     *       ),
     *       @SWG\Response(response=500, description="Server side error"),
     *     )
     *
     * Returns list of projects
     */
    public function index() {
        return response()->json([
            'status' => 'OK',
            'version' => app()->version()
        ]);
    }
}
