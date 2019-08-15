<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
        <div class="action-list"></div>
        <div data-role="page" data-add-back-btn="true" data-theme="c">
            <div data-role="header">
                <h1>Notice Details</h1>
            </div>
            <div data-role="content">
                <div class="employee-details"></div>
                    <form method="post" action="/notice/{{ $note->id }}" class="form-horizontal">
                      @csrf
                      @method('PUT')
                <ul data-role="listview" data-inset="true" class="action-list">
                    <li><h4>{{ $note->title }}</h4></li>
                    <li><h4>公告時間</h4><h3>{{ $note->noticetime }}</h3></li>
                    <li><h4>公告部門</h4><h3>{{ $note->department["departmentname"] }}</h3></li>
                    <li><h4>公告內容</h4><h3>{{ $note->content }}</h3></li>
                </ul>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-remove"></span> 刪除</button>
            </div>
        </div>
      </form>
    </body>
    
</body>
</html>