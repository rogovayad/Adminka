<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Adminka",
 *      description="Adminka"
 * )
 *
 * @OA\Get(
 *     path="/address",
 *     description="Address",
 *     @OA\Response(response="default", description="Address")
 * )
 */
class AddressController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Get(
     *      path="/api/address",
     *      operationId="index",
     *      tags={"api/address"},
     *      summary="Функция получения адресов",
     *      description="Функция получения адресов",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *        type="object",
     *        @OA\Property(property="result", type="boolean"),
     *        @OA\Property(property="fields", type="array", @OA\Items(type="string", example = "id")),
     *        @OA\Property(property="outfields", type="object",
     *
     *        @OA\Property(
     *                     property="id_address_eas",
     *                     type="string",
     *                     example="код адреса"
     *                 ),
     *         @OA\Property(
     *                     property="id_building_eas",
     *                     type="string",
     *                     example="код строения"
     *                 ),
     *         @OA\Property(
     *                     property="id_raion",
     *                     type="string",
     *                     example="код района"
     *                 ),
     *         @OA\Property(
     *                     property="id_okrug",
     *                     type="string",
     *                     example="код округа"
     *                 ),
     *         @OA\Property(
     *                     property="id_prefiks",
     *                     type="string",
     *                     example="код префикса"
     *                 ),
     *         @OA\Property(
     *                     property="id_geonim",
     *                     type="string",
     *                     example="код геонима"
     *                 ),
     *         @OA\Property(
     *                     property="paddress",
     *                     type="string",
     *                     example="адрес"
     *                 ),
     *         @OA\Property(
     *                     property="base_address_flag",
     *                     type="string",
     *                     example="признак основного адреса"
     *                 ),
     *         @OA\Property(
     *                     property="id_user",
     *                     type="string",
     *                     example="код пользователя"
     *                 ),
     *                 )),
     *        @OA\Property(property="data", type="object", @OA\Property(property="data",type="array",@OA\Items())),
     *        @OA\Property(property="message", type="string")
     *       )
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Bad Request"
     *      ),
     * )
     */
    public function index(Address $address)
    {
        $address = Address::all();
        return AddressResource::collection($address);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Post(
     *      path="/api/address",
     *      operationId="store",
     *      tags={"api/address"},
     *      summary="Функция создания адреса",
     *      description="Функция создания адреса",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *        type="object",
     *        @OA\Property(property="result", type="boolean"),
     *        @OA\Property(property="fields", type="array", @OA\Items(type="string", example = "id")),
     *        @OA\Property(property="outfields", type="object",
     *
     *        @OA\Property(
     *                     property="id_address_eas",
     *                     type="string",
     *                     example="код адреса"
     *                 ),
     *         @OA\Property(
     *                     property="id_building_eas",
     *                     type="string",
     *                     example="код строения"
     *                 ),
     *         @OA\Property(
     *                     property="id_raion",
     *                     type="string",
     *                     example="код района"
     *                 ),
     *         @OA\Property(
     *                     property="id_okrug",
     *                     type="string",
     *                     example="код округа"
     *                 ),
     *         @OA\Property(
     *                     property="id_prefiks",
     *                     type="string",
     *                     example="код префикса"
     *                 ),
     *         @OA\Property(
     *                     property="id_geonim",
     *                     type="string",
     *                     example="код геонима"
     *                 ),
     *         @OA\Property(
     *                     property="paddress",
     *                     type="string",
     *                     example="адрес"
     *                 ),
     *         @OA\Property(
     *                     property="base_address_flag",
     *                     type="string",
     *                     example="признак основного адреса"
     *                 ),
     *         @OA\Property(
     *                     property="id_user",
     *                     type="string",
     *                     example="код пользователя"
     *                 ),
     *                 ),
     *     @OA\Property(property="editfields", type="array",@OA\Items(
     *               type="object",
     *                 @OA\Property(
     *                     property="paddress",
     *                     type="string",
     *                     example="Невский проспект"
     *                 ),
     *                 @OA\Property(
     *                     property="type",
     *                     type="string",
     *                     example="input"
     *                 ),
     *                 @OA\Property(
     *                     property="label",
     *                     type="string",
     *                     example="Адрес"
     *                 )
     *                 )),
     *        @OA\Property(property="data", type="object", @OA\Property(property="data",type="array",@OA\Items())),
     *        @OA\Property(property="message", type="string")
     *       )
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Bad Request"
     *      ),
     * )
     */
    public function store(Request $request)
    {
        $address=$this->validate($request, [
            'id_address_eas'=>'required',
            'id_building_eas'=>'required',
            'id_raion'=>'required',
            'id_okrug'=>'required',
            'id_prefiks'=>'required',
            'id_geonim'=>'required',
            'paddress'=>'required',
            'base_address_flag'=>'required',
            'id_user'=>'required',
        ],
        [
            'required'=>'The :attribute field is required.'
        ],
          );

        return $this->successResponse('Address successfully created.', new AddressResource(
            Address::create($request->all())
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Put(
     *      path="/api/address/{id_address_eas}",
     *      operationId="update",
     *      tags={"api/address/{id_address_eas}"},
     *      summary="Функция обновления адреса по id_address_eas",
     *      description="Функция обновления адреса по id_address_eas",
     *   @OA\Parameter(
     *   name="id_address_eas",
     *   description="Код адреса",
     *   example="1",
     *   @OA\Schema(
     *     type="integer"
     *   ),
     *   in="path",
     *   required=true
     * ),
     * @OA\RequestBody(
     * required=true,
     * @OA\MediaType(
     * mediaType="application/json",
     * @OA\Schema(
     *  @OA\Property(
     *   property="id_building_eas",
     *   description="код строения",
     *   type="integer",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="id_raion",
     *   description="код района",
     *   type="integer",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="id_okrug",
     *   description="код округа",
     *   type="integer",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="id_prefiks",
     *   description="код префикса",
     *   type="integer",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="id_geonim",
     *   description="код геонима",
     *   type="integer",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="id_user",
     *   description="код пользователя",
     *   type="integer",
     *   example="2"
     * ),
     *  @OA\Property(
     *   property="base_address_flag",
     *   description="признак основного адреса",
     *   type="integer",
     *   example="2"
     * ),
     * ),
     * ),
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *        type="object",
     *        @OA\Property(property="result", type="boolean",example="true"),
     *        @OA\Property(property="message", type="string",example="Данные успешно обновлены")
     * )
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Bad Request"
     *      ),
     * )
     */
    public function update(Request $request, Address $address)
    {
        $addresses = Validator::make($request->all(), [
            'id_address_eas' => 'required',
            'id_building_eas' => 'required',
            'id_raion'=> 'required',
            'id_okrug'=> 'required',
            'id_prefiks'=> 'required',
            'id_geonim'=> 'required',
            'paddress' => 'required',
            'base_address_flag'=> 'required',
            'id_user'=> 'required',
        ]);

        if($addresses->fails()){
            return $this->errorResponse('Error validation11.', $addresses->errors());
        }

       $input = $addresses->validated();
       $address->update($input);
       $address->save();

       return $this->successResponse('Address successfully updated.', new AddressResource($address));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Address  $address
     * @return \Illuminate\Http\Response
     */
    /**
     * @OA\Delete(
     *      path="/api/address/{id_address_eas}",
     *      operationId="destroy",
     *      tags={"api/address/{id_address_eas}"},
     *      summary="Функция удаления записи из справочника адресов по id_address_eas",
     *      description="Функция удаления записи из справочника адресов по id_address_eas",
     *   @OA\Parameter(
     *   name="id_address_eas",
     *   description="Код адреса",
     *   example="1",
     *   @OA\Schema(
     *     type="integer"
     *   ),
     *   in="path",
     *   required=true
     * ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(
     *        type="object",
     *        @OA\Property(property="result", type="boolean",example="true"),
     *        @OA\Property(property="message", type="string",example="Данные успешно удалены")
     * )
     *       ),
     *      @OA\Response(
     *          response=500,
     *          description="Bad Request"
     *      ),
     * )
     */
    public function destroy($id_address_eas)
    {
        $address = Address::find($id_address_eas);

        if (is_null($address)) {
            return $this->errorResponse('Address does not exist.');
        }

        $address->delete();
        return $this->successResponse('Address successfully deleted.');
    }
}
