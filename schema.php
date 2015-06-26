<?php

$config = array(
	"host"=>"localhost",
	"user"=>"root",
	"password"=>"",
	"db"=>"hellodurk"
	);

$schema = array(
	"client"=>array(
		"config"=>array(
			"super"=>null,
			"method"=>"post",
			"action"=>"default",
			"name"=>"default"
			),
		"fields"=>array(
			"id"=>array("type"=>"ai_pk"),
			"name"=>array("type"=>"varchar","size"=>100,"field"=>"text","label"=>"Nombre","required"=>true),
			"lastname"=>array("type"=>"varchar","size"=>100,"field"=>"text","label"=>"Apellido","required"=>true),
			"address"=>array("type"=>"varchar","size"=>500,"field"=>"textarea","label"=>"Direccion","required"=>true),
			"phone"=>array("type"=>"varchar","size"=>20,"field"=>"text","label"=>"Telefono"),
			"email"=>array("type"=>"varchar","size"=>100,"field"=>"text","label"=>"Email"),
			"created_at"=>array("type"=>"now"),
			"submit"=>array("type"=>"submit","value"=>"Agregar")
			)
		),
	"category"=>array(
		"config"=>array(
			"super"=>null,
			"method"=>"post",
			"action"=>"default",
			"name"=>"default"
			),
		"fields"=>array(
			"id"=>array("type"=>"ai_pk"),
			"name"=>array("type"=>"varchar","size"=>100,"field"=>"text","label"=>"Nombre","required"=>true),
			"created_at"=>array("type"=>"now"),
			"submit"=>array("type"=>"submit","value"=>"Agregar")
			)
		),
	"post"=>array(
		"config"=>array(
			"super"=>null,
			"method"=>"post",
			"action"=>"default",
			"name"=>"default"
			),
		"fields"=>array(
			"id"=>array("type"=>"ai_pk"),
			"title"=>array("type"=>"varchar","size"=>100,"field"=>"text","label"=>"Nombre","required"=>true),
			"content"=>array("type"=>"varchar","size"=>1000,"field"=>"textarea","label"=>"Contenido"),
			"category_id"=>array("type"=>"int","field"=>"text","label"=>"Categoria"),
			"created_at"=>array("type"=>"now"),
			"submit"=>array("type"=>"submit","value"=>"Agregar")
			)
		)

	);

?>