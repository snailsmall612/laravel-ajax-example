<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Home</title>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script>
        	$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});
        	function register(){
        		$.ajax({
			        url: "user",
			        type: "post",
			        data: JSON.stringify({"account": $('#account').val(), "password": $('#password').val()}),
			        dataType: "json",
			        contentType: "application/json; charset=UTF-8",
			        success: function(data) {
			            console.log(data);
			        },
			        error: function(XMLHttpRequest, textStatus, errorThrown) {
			            console.log(errorThrown);
			        }
			    });
        	}
        </script>
    </head>
    <body>
        Account: <input id="account" type="text"/>
        Password: <input id="password" type="text"/>
        <input type="button" value="Register" onclick="register();"/>
    </body>
</html>
