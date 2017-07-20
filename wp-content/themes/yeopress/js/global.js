require.config({
	"baseUrl": "wp-content/themes/yeopress/js",
	"paths": {
		"jquery": "vendor/jquery/jquery",
		"bootstrap": "vendor/bootstrap/bootstrap.min" 
	}
});

require(['jquery', 'bootstrap'], function($) {
	console.log('Working!!');
});
