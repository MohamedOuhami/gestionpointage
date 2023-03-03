<?php
class Service
{
   private $id;
   private $code;
   private $name;

   // Constructor

   function __construct($id, $code, $name)
   {
      $this->id = $id;
      $this->code = $code;
      $this->name - $name;
   }

   //  Getters

   function getId()
   {
      return $this->id;
   }
   function getCode()
   {
      return $this->code;
   }

   function getName()
   {
      return $this->name;
   }

   // Setters

   function setId($id)
   {
      $this->id = $id;
   }
   function setCode($code)
   {
      $this->code = $code;
   }
   function setName($name)
   {
      $this->name = $name;
   }
}