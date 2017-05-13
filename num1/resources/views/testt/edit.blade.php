<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
	<title></title>
</head>
<body>

        <form method="POST" action="{{ url('testt/'.$message->id) }}">
        	{{ csrf_field() }}
        	{{ method_field('PATCH') }}
        	<textarea name="content"> {{ $message->content }} </textarea>
        	<button type="submit"> 
        		Update Comment
        	</button>
        </form>	
    
</body>
</html>