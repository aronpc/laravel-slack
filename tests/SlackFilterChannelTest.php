<?php


namespace SLackMessage\Test;

use Illuminate\Contracts\Container\BindingResolutionException;
use Orchestra\Testbench\TestCase;
use SlackMessage\Models\SlackFilterChannel;
use SlackMessage\Providers\SlackProvider;

class SlackFilterChannelTest extends TestCase
{
    private $channelSlack;

    /**
     * @throws BindingResolutionException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->channelSlack = app()->make(SlackFilterChannel::class);
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            SlackProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app); // TODO: Change the autogenerated stub
    }

    /**
     *
     */
    public function testGetChannels()
    {
        // dd($this->app['config']->get('slack-message'));
        self::assertTrue(true);
    }

    public function testFilterChannels()
    {
        assertTrue($this->channelSlack->filter(['#geral','#academiafrontend'])->count() > 0);
    }

}