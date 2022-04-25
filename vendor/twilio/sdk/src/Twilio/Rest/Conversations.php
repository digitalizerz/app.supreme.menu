<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Conversations\V1;

/**
 * @property \Twilio\Rest\Conversations\V1 $v1
 * @property \Twilio\Rest\Conversations\V1\ConfigurationList $configuration
 * @property \Twilio\Rest\Conversations\V1\ConversationList $conversations
 * @property \Twilio\Rest\Conversations\V1\CredentialList $credentials
 * @property \Twilio\Rest\Conversations\V1\RoleList $roles
 * @property \Twilio\Rest\Conversations\V1\ServiceList $services
 * @property \Twilio\Rest\Conversations\V1\UserList $users
 * @method \Twilio\Rest\Conversations\V1\ConfigurationContext configuration()
 * @method \Twilio\Rest\Conversations\V1\ConversationContext conversations(string $sid)
 * @method \Twilio\Rest\Conversations\V1\CredentialContext credentials(string $sid)
 * @method \Twilio\Rest\Conversations\V1\RoleContext roles(string $sid)
 * @method \Twilio\Rest\Conversations\V1\ServiceContext services(string $sid)
 * @method \Twilio\Rest\Conversations\V1\UserContext users(string $sid)
 */
class Conversations extends Domain {
    protected $_v1;

    /**
     * Construct the Conversations Domain
     *
     * @param Client $client Client to communicate with Twilio
     */
    public function __construct(Client $client) {
        parent::__construct($client);

        $this->baseUrl = 'https://conversations.twilio.com';
    }

    /**
     * @return V1 Version v1 of conversations
     */
    protected function getV1(): V1 {
        if (!$this->_v1) {
            $this->_v1 = new V1($this);
        }
        return $this->_v1;
    }

    /**
     * Magic getter to lazy load version
     *
     * @param string $name Version to return
     * @return \Twilio\Version The requested version
     * @throws TwilioException For unknown versions
     */
    public function __get(string $name) {
        $method = 'get' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown version ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) {
        $method = 'context' . \ucfirst($name);
        if (\method_exists($this, $method)) {
            return \call_user_func_array([$this, $method], $arguments);
        }

        throw new TwilioException('Unknown context ' . $name);
    }

    protected function getConfiguration(): \Twilio\Rest\Conversations\V1\ConfigurationList {
        return $this->v1->configuration;
    }

    protected function contextConfiguration(): \Twilio\Rest\Conversations\V1\ConfigurationContext {
        return $this->v1->configuration();
    }

    protected function getConversations(): \Twilio\Rest\Conversations\V1\ConversationList {
        return $this->v1->conversations;
    }

    /**
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     */
    protected function contextConversations(string $sid): \Twilio\Rest\Conversations\V1\ConversationContext {
        return $this->v1->conversations($sid);
    }

    protected function getCredentials(): \Twilio\Rest\Conversations\V1\CredentialList {
        return $this->v1->credentials;
    }

    /**
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     */
    protected function contextCredentials(string $sid): \Twilio\Rest\Conversations\V1\CredentialContext {
        return $this->v1->credentials($sid);
    }

    protected function getRoles(): \Twilio\Rest\Conversations\V1\RoleList {
        return $this->v1->roles;
    }

    /**
     * @param string $sid The SID of the Role resource to fetch
     */
    protected function contextRoles(string $sid): \Twilio\Rest\Conversations\V1\RoleContext {
        return $this->v1->roles($sid);
    }

    protected function getServices(): \Twilio\Rest\Conversations\V1\ServiceList {
        return $this->v1->services;
    }

    /**
     * @param string $sid A 34 character string that uniquely identifies this
     *                    resource.
     */
    protected function contextServices(string $sid): \Twilio\Rest\Conversations\V1\ServiceContext {
        return $this->v1->services($sid);
    }

    protected function getUsers(): \Twilio\Rest\Conversations\V1\UserList {
        return $this->v1->users;
    }

    /**
     * @param string $sid The SID of the User resource to fetch
     */
    protected function contextUsers(string $sid): \Twilio\Rest\Conversations\V1\UserContext {
        return $this->v1->users($sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Conversations]';
    }
}