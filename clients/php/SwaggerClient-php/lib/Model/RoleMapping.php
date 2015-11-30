<?php
/**
 * RoleMapping
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2015 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * RoleMapping Class Doc Comment
 *
 * @category    Class
 * @description Map principals to roles
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RoleMapping implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'double',
        'principal_type' => 'string',
        'principal_id' => 'string',
        'role_id' => 'double'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'principal_type' => 'principalType',
        'principal_id' => 'principalId',
        'role_id' => 'roleId'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'principal_type' => 'setPrincipalType',
        'principal_id' => 'setPrincipalId',
        'role_id' => 'setRoleId'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'principal_type' => 'getPrincipalType',
        'principal_id' => 'getPrincipalId',
        'role_id' => 'getRoleId'
    );
  
    
    /**
      * $id 
      * @var double
      */
    protected $id;
    
    /**
      * $principal_type The principal type, such as user, application, or role
      * @var string
      */
    protected $principal_type;
    
    /**
      * $principal_id 
      * @var string
      */
    protected $principal_id;
    
    /**
      * $role_id 
      * @var double
      */
    protected $role_id;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->id = $data["id"];
            $this->principal_type = $data["principal_type"];
            $this->principal_id = $data["principal_id"];
            $this->role_id = $data["role_id"];
        }
    }
    
    /**
     * Gets id
     * @return double
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param double $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets principal_type
     * @return string
     */
    public function getPrincipalType()
    {
        return $this->principal_type;
    }
  
    /**
     * Sets principal_type
     * @param string $principal_type The principal type, such as user, application, or role
     * @return $this
     */
    public function setPrincipalType($principal_type)
    {
        
        $this->principal_type = $principal_type;
        return $this;
    }
    
    /**
     * Gets principal_id
     * @return string
     */
    public function getPrincipalId()
    {
        return $this->principal_id;
    }
  
    /**
     * Sets principal_id
     * @param string $principal_id 
     * @return $this
     */
    public function setPrincipalId($principal_id)
    {
        
        $this->principal_id = $principal_id;
        return $this;
    }
    
    /**
     * Gets role_id
     * @return double
     */
    public function getRoleId()
    {
        return $this->role_id;
    }
  
    /**
     * Sets role_id
     * @param double $role_id 
     * @return $this
     */
    public function setRoleId($role_id)
    {
        
        $this->role_id = $role_id;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(get_object_vars($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(get_object_vars($this));
        }
    }
}