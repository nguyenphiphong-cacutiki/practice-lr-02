<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem chi tiết</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap-5.3.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
</head>
<body>

    <div class="container">
        <div class="row">
            <h3 class="text-center text-success mt-3">Chi tiết kênh</h3>
            <table class="table table-dark table-striped align-middle">
                <thead>
                    <tr>
                        <th class="col-6" scope="col">Thuộc tính</th>
                        <th class="col-6" scope="col">Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mã kênh</td>
                        <td>{{$channel->ChannelID}}</td>
                    </tr>
                    <tr>
                        <td>Tên kênh</td>
                        <td>{{$channel->ChannelName}}</td>
                    </tr>
                    <tr>
                        <td>Mô tả</td>
                        <td>{{$channel->Description}}</td>
                    </tr>
                    <tr>
                        <td>Số lượt đăng ký</td>
                        <td>{{$channel->SubscribersCount}}</td>
                    </tr>
                    <tr>
                        <td>URL</td>
                        <td>{{$channel->URL}}</td>
                    </tr>
                    <tr>
                        <td>Thời gian tạo</td>
                        <td>{{$channel->created_at}}</td>
                    </tr>
                    <tr>
                        <td>Thời gian sửa</td>
                        <td>{{$channel->updated_at}}</td>
                    </tr>
                
                </tbody>
            </table>       
        </div>
       
        <p class="d-flex justify-content-end"><a href="{{route('channels.index', ['channel' => $channel->ChannelId, 'pageIndex' => $pageIndex])}}" class=""><button class="btn btn-primary fw-bold">Trở lại</button></a></p>
    </div>
    
    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>