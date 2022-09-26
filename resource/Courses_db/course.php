<?php
	require_once './db/dbCourses_dbManager.php';
	
/*
 * SCHEMA DB course
 * 
	{
		name: {
			type: 'String'
		},
		//RELAZIONI
		
		
		//RELAZIONI ESTERNE
		
		sections: {
			type: Schema.ObjectId,
			ref : "course"
		},
		
	}
 * 
 */


//CRUD METHODS


//CRUD - CREATE


$app->post('/course',	function () use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'name'	=> isset($body->name)?$body->name:'',
		
		'sections' => isset($body->sections)?$body->sections:'',
	);

	$obj = makeQuery("INSERT INTO course (_id, name , sections )  VALUES ( null, :name , :sections   )", $params, false);
    
	
	echo json_encode($body);
	
});
	
//CRUD - REMOVE

$app->delete('/course/:id',	function ($id) use ($app){
	
	$params = array (
		'id'	=> $id,
	);

	makeQuery("DELETE FROM course WHERE _id = :id LIMIT 1", $params);

});
	
//CRUD - GET ONE
	
$app->get('/course/:id',	function ($id) use ($app){
	$params = array (
		'id'	=> $id,
	);
	
	$obj = makeQuery("SELECT * FROM course WHERE _id = :id LIMIT 1", $params, false);
	
	
	
	echo json_encode($obj);
	
});
	
	
//CRUD - GET LIST

$app->get('/course',	function () use ($app){
	makeQuery("SELECT * FROM course");
});


//CRUD - EDIT

$app->post('/course/:id',	function ($id) use ($app){

	$body = json_decode($app->request()->getBody());
	
	$params = array (
		'id'	=> $id,
		'name'	    => isset($body->name)?$body->name:'',
		'sections'      => isset($body->sections)?$body->sections:'' 
	);

	$obj = makeQuery("UPDATE course SET  name = :name  , sections=:sections  WHERE _id = :id LIMIT 1", $params, false);
    
	
	echo json_encode($body);
    	
});


/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>