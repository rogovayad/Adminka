<?php

namespace Tests\Feature;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\DataGenerators\AddressGenerator;
use Tests\DataGenerators\UserGenerator;
use App\Policies\AddressPolicy;
use Hash;
use Illuminate\Auth\Notifications\ResetPassword;
use Notification;
use Password;
use Tests\TestCase;


class AddressControllerTest extends TestCase
{
    use AddressGenerator, UserGenerator; //, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    const ROUTE_PASSWORD_REQUEST = 'password.request';
    const ROUTE_PASSWORD_RESET = 'password.reset';

    protected function SetUp():void
    {
        parent::SetUp();
        $user=$this->GenerateUser();
        $this->actingAs($user)->get('/login')->assertStatus(302);
    }

    public function test_pass()
    {
        $user=$this->GenerateUser();
        $response = $this->actingAs($user)->get('/login')->assertStatus(302);
        $this->get(route(self::ROUTE_PASSWORD_REQUEST))
            ->assertSuccessful()
            ->assertSee('Reset Password')
            ->assertSee('email')
            ->assertSee('Send Password Reset Link');
        $token = Password::broker()->createToken($user);

        $this->get(route(self::ROUTE_PASSWORD_RESET, [
            'token' => $token,]))
            ->assertSuccessful()
            ->assertSee('Reset Password')
            ->assertSee('email')
            ->assertSee('Password')
            ->assertSee('Confirm Password');
    }

    public function test_routes()
    {
        $this->GenerateAddresses();
        $user=$this->GenerateUser();
        $response = $this->actingAs($user)->get('/login')->assertStatus(302);
        $this->actingAs($user)->assertAuthenticated();
        $response = $this->get('/home');
        $response->assertStatus(200);
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response = $this->get('/register');
        $response->assertStatus(302);
        $response = $this->get('profile');
        $response->assertStatus(200);
        Auth::logout();
    }
    public function test_views()
    {
        $this->GenerateAddresses();
        $user=$this->GenerateUser();
        $response = $this->actingAs($user)->get('/login')->assertStatus(302);
        $response = $this->post(route('address.store'));
        $response->assertStatus(500);
        $this->call('GET', 'address');
        $response->assertStatus(500);
        $address=[];
        $response = $this->get(route('address.index',$address));
        $response->assertStatus(200);
        $response = $this->get(resource_path('address.show'));
        $response->assertStatus(404);
        $response = $this->get(route('address.create'));
        $response->assertStatus(403);
        $response = $this->get(route('address.edit',3));
        $response->assertStatus(403);
        $response = $this->put(route('address.update',3));
        $response->assertStatus(403);
        $response = $this->delete(route('address.destroy',3));
        $response->assertStatus(403);
        $this->assertDatabaseHas('public.address',['id_address_eas'=>3]);
        $response->assertStatus(403);
        Auth::logout();
    }
}
