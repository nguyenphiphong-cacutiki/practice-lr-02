<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa</title>
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2/css/bootstrap.min.css')}}">
</head>
<body>
   <div class="container">
    <div class="row p-3">
        <h4 class="text-uppercase text-decoration-underline text-center fw-bold text-success">Sửa kênh</h4>
        <form class="bg-info border border-2 border-success rounded-3" method="POST" action="{{route('channels.update', ['channel' => $channel->ChannelID, 'pageIndex' => $pageIndex])}}">
            @csrf
            @method('PUT')
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Tên kênh</span>
                <input value="{{$channel->ChannelName}}" required name = '$channelName' type="text" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Mô tả</span>
                <input value="{{$channel->Description}}" required name = 'Description' type="text" class="form-control" placeholder="">
            </div>
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">Số lượt đăng ký</span>
                <input value="{{$channel->SubscribersCount}}" required name = 'SubscribersCount' type="number" class="form-control" placeholder="">
            </div>
            
            <div class="input-group mt-3">
                <span class="input-group-text fw-bold bg-light">URL</span>
                <input value="{{$channel->URL}}" required name = 'URL' type="text" class="form-control" placeholder="">
            </div>
        
            <button type="submit" class="btn btn-primary my-3 ">sửa</button> 
        </form>
    </div>
   </div>

    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/jquery-3.7.1.min.js')}}"></script>
</body>
</html>