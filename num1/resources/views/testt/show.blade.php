<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

	<title></title>
</head>
<body>
       <div>Content:{{ $message->content }}</div>
       <div>Post at:{{ $message->created_at }}</div>
       <div>Edit at:{{ $message->updated_at }}</div>
</body>
</html>