<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class projectCrudTest extends TestCase
{
    use RefreshDatabase;

    private $testData = [
        'title' => 'Sample Title',
        'description' => 'Sample description',
        'tags' =>  "{\"1\":\"sample tag\"}",
        'url' => "http://www.sample_url.com",
        'image' => "sample.jpeg"
    ];

    private $testUpdatedData = [
        'title' => 'Sample Updated Title',
        'description' => 'Sample updated description',
        'tags' =>  "{\"1\":\"updated sample tag\"}",
        'url' => "http://www.sample_updated_url.com",
        'image' => "updated_sample.jpeg"
    ];

    private $incorrectFormatTestData = [
        'title' => 'sample title',
        'description' => 'Sample description',
        'tags' => "{\"1\":\"sample tag\"}",
        'url' => "http://www.sample_url.com",
        'image' => "sample.jpeg"
    ];

    private $htmlEscapeTitleTestData = [
        'title' => '<p>sample title<p>',
        'description' => 'Sample description',
        'tags' =>  "{\"1\":\"sample tag\"}",
        'url' => "http://www.sample_url.com",
        'image' => "sample.jpeg"
    ];

    private $htmlEscapeDescriptionTestData = [
        'title' => 'Sample Title',
        'description' => '<p>Sample description<p>',
        'tags' =>  "{\"1\":\"sample tag\"}",
        'url' => "http://www.sample_url.com",
        'image' => "sample.jpeg"
    ];

    private $htmlEscapeTagTestData = [
        'title' => 'Sample Title',
        'description' => '<p>Sample description<p>',
        'tags' =>  "{\"1\":\"<p>sample tag</p>\"}",
        'url' => "http://www.sample_url.com",
        'image' => "sample.jpeg"
    ];


    /**
     * Sets up fake data for each test in the database
     * 
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('db:seed');


        Sanctum::actingAs(
            User::factory()->create(),
            ['*']
        );

        $this->post('/api/admin/projects', $this->testData);
    }

    /**
     * This test will check to see if all Json Project info is displayed
     * 
     * @return void
     */
    public function test_to_see_if_all_json_project_reesources_route_is_shown()
    {

        $response = $this->get('/api/admin/projects');

        $response->assertStatus(200);
    }

    /**
     * This test will check to see if info Json project is displayed
     * 
     * @return void
     */
    public function test_to_see_if_resources_data_is_shown()
    {
        $response = $this->get('/api/admin/projects');

        $response->assertSee('Title', true);
    }

    /**
     * This test will check to see if one Json record can be displayed
     * 
     * @return void
     */
    public function test_to_see_if_one_record_can_be_seen()
    {
        $response = $this->get('/api/admin/projects/1');

        $response->assertSee('title', true);
    }

    /**
     * This test will check to see if one Json record can be added
     * 
     * @return void
     */
    public function test_to_see_if_one_record_can_be_added()
    {
        $response = $this->get('/api/admin/projects/11');

        $response->assertSee('Sample Title', true);
    }

    /**
     * This test will check to see if a Json record can be deleted
     * 
     * @return void
     */
    public function test_to_see_if_a_record_can_be_deleted()
    {

        $this->delete('/api/admin/projects/11', $this->testData);

        $response = $this->get('/api/admin/projects/11');

        $response->assertDontSee($this->testData);
    }

    /**
     * This test will check to see if a record can be edited
     * 
     * @return void
     */
    public function test_to_see_if_a_record_can_be_updated()
    {

        $this->put('/api/admin/projects/11', $this->testUpdatedData);

        $response = $this->get('/api/admin/projects/11');

        $response->assertSee('updated sample tag');
    }

    /**
     * This test will check to see if the title is propertly uppercase
     * 
     * @return void
     */
    public function test_to_see_if_title_is_properly_uppercase()
    {
        $this->post('/api/admin/projects', $this->incorrectFormatTestData);

        $response = $this->get('/api/admin/projects/12');

        $response->assertSee('Sample Title');
    }

    /**
     * This test will check to see if the title is html escaped properly
     * 
     * @return void
     */
    public function test_to_see_if_title_is_properly_escaped()
    {
        $this->post('/api/admin/projects', $this->htmlEscapeTitleTestData);

        $response = $this->get('/api/admin/projects/12');

        $response->assertSee('Sample Title');
    }

    /**
     * This test will check to see if the description is html escaped properly
     * 
     * @return void
     */
    public function test_to_see_if_description_is_properly_escaped()
    {
        $this->post('/api/admin/projects', $this->htmlEscapeDescriptionTestData);

        $response = $this->get('/api/admin/projects/12');

        $response->assertSee('Sample description');
    }

    /**
     * This test will check to see if tags are properly html escaped
     * 
     * @return void
     */
    public function test_to_see_if_tags_are_properly_html_escaped()
    {
        $this->post('/api/admin/projects', $this->htmlEscapeTagTestData);

        $response = $this->get('/api/admin/projects/12');

        $response->assertSee("sample tag");
    }
}