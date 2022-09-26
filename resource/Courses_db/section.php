<?php
	require_once './db/dbCourses_dbManager.php';
	
/*
 * SCHEMA DB section
 * 
	{
		Name: {
			type: 'String', 
			required : true
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

	
//CRUD - GET LIST

$app->get('/section',	function () use ($app){
	makeQuery("SELECT * FROM section");
});



/*
 * CUSTOM SERVICES
 *
 *	These services will be overwritten and implemented in  Custom.js
 */

			
?>