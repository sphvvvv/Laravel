<?php

namespace Tests\Feature;

use Tests\TestCase;
//use Illuminate\Foundation\Testing\WithoutMiddleware;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\User;
//use App\Person;
use Faker\Generator as Faker;

class ProductTest extends TestCase
{
//   use DatabaseMigrations;
  protected $user;

  protected function setUp() :void
  {
parent::setUp();

    $this->user = new User;

    $this->user->firstName = 'John';
    $this->user->lastName =  'Doe';
  }


public function nameProvider()
{
    return [
      ["John","Doe","John Doe"],
      ["Jane","Doe","Jane Doe"],
      ["John","Smith","John Smith"],
    ];
}


/** 
 * @test 
 */
    public function example()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

    $response = $this->get('/about');

//    $response->assertStatus(200);
    }


/** 
 * @test 
 * @dataProvider nameProvider
 */
    public function return_full_name($firstName, $lastName, $expect){
  $user = new User;

  $user->firstName = $firstName;

  $user->lastName = $lastName;
  
  $result = $user->getFullName();
        $this->assertSame($expect, $result);  // 型の一致も確認
    }


/** 
 * @test 
 * @dataProvider nameProvider
 */
    public function return_first_name_charactor_count($firstName, $lastName, $expect){


die(var_dump(factory(User::class)->create()));  // 途中で終わらせる場合


//$this->markTestSkipped(); // skip
        $result = $this->user->getFirstNameCount();

        $this->assertEquals(4, $result);


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    $aa =  [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

die(var_dump($aa));  // 途中で終わらせる場合
    }



/*

    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

   public function testProduct()
   {

        $this->assertTrue(true);

        $arr = [];
        $this->assertEmpty($arr);

        $msg = "Hello";
        $this->assertEquals("Hello", $msg);

        $n = random_int(0,100);
        $this->assertLessThan(100, $n);


       // ダミーで利用するデータ
       factory(User::class)->create([
           'name' => 'AAA',
           'email' => 'BBB@CCC.COM',
           'password' => 'ABCABC',
       ]);
       factory(User::class, 10)->create();

       $this->assertDatabaseHas('users', [
           'name' => 'AAA',
           'email' => 'BBB@CCC.COM',
           'password' => 'ABCABC',
       ]);

       // ダミーで利用するデータ
       factory(Person::class)->create([
           'name' => 'XXX',
           'mail' => 'YYY@ZZZ.COM',
           'age' => 123,
       ]);
       factory(Person::class, 10)->create();

       $this->assertDatabaseHas('people', [
           'name' => 'XXX',
           'mail' => 'YYY@ZZZ.COM',
           'age' => 123,
       ]);

   }
*/
}

