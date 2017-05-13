<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
	<title>hahahahahaha</title>
</head>
<body>

        <form action="{{ url('testt') }}" method="POST">
	    {{ csrf_field() }}
        <input type="text" name="content">
        <button type="submit">留言</button>
        </form>

         @foreach($msgs as $message)
        <div>{{ $message->id }}.   {{ $message->content }}</div>
        <a href="{{ url('testt/'.$message->id) }}"><div>{{ $message->content }}</div></a>
        <form action="{{ url('testt/'.$message->id.'/edit') }}" method="GET">
        	<button type="submit" id="edit-message-{{ $message->id }}">
        		Edit
        	</button>
        </form>	
        <form action="{{ url('testt/'.$message->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}
            <button type="submit" id="delete-message-{{ $message->id }}">
                Delete
            </button>
        </form>



        @endforeach



</body>
</html>