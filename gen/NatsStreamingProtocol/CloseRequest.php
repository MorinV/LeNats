<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: protoc/nats_streaming.proto

namespace NatsStreamingProtocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protocol for a client to close a connection
 *
 * Generated from protobuf message <code>NatsStreamingProtocol.CloseRequest</code>
 */
class CloseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Client name provided to Connect() requests
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     */
    private $clientID = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $clientID
     *           Client name provided to Connect() requests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Protoc\NatsStreaming::initOnce();
        parent::__construct($data);
    }

    /**
     * Client name provided to Connect() requests
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     * @return string
     */
    public function getClientID()
    {
        return $this->clientID;
    }

    /**
     * Client name provided to Connect() requests
     *
     * Generated from protobuf field <code>string clientID = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setClientID($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientID = $var;

        return $this;
    }

}
