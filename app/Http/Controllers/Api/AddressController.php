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
     *                     property="house",
     *                     type="string",
     *                     example="номер дома"
     *                 ),
     *         @OA\Property(
     *                     property="corpus",
     *                     type="string",
     *                     example="корпус"
     *                 ),
     *         @OA\Property(
     *                     property="liter",
     *                     type="string",
     *                     example="литера"
     *                 ),
     *         @OA\Property(
     *                     property="villa",
     *                     type="string",
     *                     example="номер дачи"
     *                 ),
     *         @OA\Property(
     *                     property="parcel",
     *                     type="string",
     *                     example="номер участка"
     *                 ),
     *         @OA\Property(
     *                     property="construction",
     *                     type="string",
     *                     example="сооружение"
     *                 ),
     *         @OA\Property(
     *                     property="build_number",
     *                     type="string",
     *                     example="номер строения"
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
            'house'=>'nullable|string',
            'corpus'=>'nullable|string',
            'liter'=>'nullable|string',
            'villa'=>'nullable|string',
            'parcel'=>'nullable|string',
            'construction'=>'nullable|string',
            'build_number'=>'nullable|string',
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
    public function show($id_address_eas)
    {
        $address = Address::find($id_address_eas);

        if (is_null($address)) {
            return $this->errorResponse('Address does not exist.');
        }
        return $this->successResponse('Address successfully fetched.', new AddressResource($address));

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
     *   property="house",
     *   description="номер дома",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="corpus",
     *   description="корпус",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="liter",
     *   description="литера",
     *   type="string",
     *   example="А"
     * ),
     *   @OA\Property(
     *   property="villa",
     *   description="номер дачи",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="parcel",
     *   description="номер участка",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="construction",
     *   description="сооружение",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="build_number",
     *   description="номер строения",
     *   type="string",
     *   example="2"
     * ),
     *   @OA\Property(
     *   property="paddress",
     *   description="полный адрес",
     *   type="string",
     *   example="Воронежская улица, дом 33"
     * ),
     *   @OA\Property(
     *   property="base_address_flag",
     *   description="признак основного адреса",
     *   type="string",
     *   example="Y"
     * ),
     *   @OA\Property(
     *   property="id_user",
     *   description="код пользователя",
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
            'id_building_eas' => 'required',
            'id_raion'=> 'required',
            'id_okrug'=> 'required',
            'id_prefiks'=> 'required',
            'id_geonim'=> 'required',
            'house'=>'nullable|string',
            'corpus'=>'nullable|string',
            'liter'=>'nullable|string',
            'villa'=>'nullable|string',
            'parcel'=>'nullable|string',
            'construction'=>'nullable|string',
            'build_number'=>'nullable|string',
            'paddress' => 'required',
            'base_address_flag'=> 'required',
            'id_user'=> 'required',
        ]);

        if($addresses->fails()){
            return $this->errorResponse('Error validation.', $addresses->errors());
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
