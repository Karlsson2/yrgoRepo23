<?php


//Your job is to build the features to create servers and channels. 
//Create the class Server which accepts the properties $name and $channels. 
//Create the class Channel which accepts the properties $name and $type. 
//If the type isn't equal to either text or voice, throw a new exception with the message Invalid channel type [the-type-parameter].. 
//Within the exercise file, run the snippet below within a try/catch.

class Server
{
    public function __construct(public string $name, public array $channels)
    {
        foreach ($channels as $channel) {
            if ($channel->type != "text" && $channel->type != "voice") {
                throw new Exception('Invalid channel type [' . $channel->type . ']');
            }
        }
    }
}

class Channel
{
    public function __construct(public string $name, public string $type)
    {
    }
}
//Invalid channel type [editor].