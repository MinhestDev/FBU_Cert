@extends('layouts.login_master')

@section('content')

<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title font-weight-bold text-center">CHÍNH SÁCH BẢO MẬT</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                            <p>Chỉnh sửa lần cuối: 4 tháng 11, 2019</p>

                            <h4 class="font-weight-semibold">Giới thiệu</h4>

                            <p>{{ $app_name }} ("Chúng tôi") tôn trọng quyền riêng tư của bạn và cam kết bảo vệ nó thông qua việc tuân thủ chính sách này.</p>

                            <p>Chính sách này mô tả các loại thông tin chúng tôi có thể thu thập từ bạn hoặc bạn có thể cung cấp khi bạn truy cập trang web
                                <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> (trang web của chúng tôi) và các thực hành của chúng tôi trong việc thu thập, sử dụng, bảo vệ và tiết lộ thông tin đó.</p>

                            <p>Chính sách này áp dụng cho thông tin chúng tôi thu thập:</p>

                            <ul>
                                <li>Trên trang web này.</li>
                                <li>Trong email, tin nhắn văn bản và các tin nhắn điện tử khác giữa bạn và trang web này.</li>
                            </ul>

                           <p> Vui lòng đọc chính sách này cẩn thận để hiểu rõ các chính sách và thực hành của chúng tôi đối với thông tin của bạn và cách chúng tôi sẽ xử lý nó. Nếu bạn không đồng ý với các chính sách và thực hành của chúng tôi, lựa chọn của bạn là không sử dụng trang web của chúng tôi. Bằng cách truy cập hoặc sử dụng trang web này, bạn đồng ý với chính sách bảo mật này. Chính sách này có thể thay đổi từ thời gian này sang thời gian khác (xem Thay đổi chính sách bảo mật của chúng tôi). Việc sử dụng tiếp tục trang web này sau khi chúng tôi thực hiện các thay đổi được coi là chấp nhận của những thay đổi đó, vì vậy vui lòng kiểm tra chính sách định kỳ cho các cập nhật.</p>

                            <h4 class="font-weight-semibold">Trẻ em Dưới 13 Tuổi</h4>

                           <p> Chúng tôi không có ý định thu thập thông tin cá nhân từ trẻ em dưới 13 tuổi. Nếu bạn dưới 13 tuổi, đừng cung cấp bất kỳ thông tin nào trên trang web này hoặc qua bất kỳ tính năng nào của nó mà không trước tiên có được sự đồng ý của phụ huynh. Nếu chúng tôi phát hiện chúng tôi đã thu thập hoặc nhận thông tin cá nhân từ một đứa trẻ dưới 13 tuổi mà không xác minh được sự đồng ý của phụ huynh, chúng tôi sẽ xóa thông tin đó. Nếu bạn tin rằng chúng tôi có thể có bất kỳ thông tin nào từ hoặc về một đứa trẻ dưới 13 tuổi, vui lòng gọi {{ $contact_phone }}</p>

                            <h4 class="font-weight-semibold">Thông Tin Chúng Tôi Thu Thập Về Bạn và Cách Chúng Tôi Thu Thập Nó</h4>

                            <p>Chúng tôi thu thập một số loại thông tin từ và về người dùng của trang web của chúng tôi, bao gồm thông tin:</p>

                            <ul>
                                <li>Mà bạn có thể được nhận dạng cá nhân ("thông tin cá nhân");</li>
                                <li>Về bạn nhưng cá nhân không nhận diện bạn; và / hoặc</li>
                                <li>Về kết nối internet của bạn, thiết bị bạn sử dụng để truy cập trang web của chúng tôi và chi tiết sử dụng.</li>
                            </ul>

                            <p>Chúng tôi thu thập thông tin này:</p>

                            <ul>
                                <li>Trực tiếp từ bạn khi bạn cung cấp thông tin cho chúng tôi.</li>
                                <li>Tự động khi bạn duyệt qua trang web. Thông tin thu thập tự động có thể bao gồm chi tiết về việc sử dụng, địa chỉ IP và thông tin thu thập thông qua cookie hoặc các công nghệ theo dõi khác.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Thông Tin Bạn Cung Cấp Cho Chúng Tôi. Thông tin chúng tôi thu thập trên trang web của chúng tôi có thể bao gồm:</h4>

                            <ul>
                                <li>Thông tin bạn cung cấp bằng cách điền vào các biểu mẫu hoặc cuộc khảo sát trên trang web của chúng tôi. Thông tin cá nhân được gửi sẽ không được chuyển đến bất kỳ bên thứ ba không liên quan nào trừ khi có quy định khác tại thời điểm thu thập. Khi bạn gửi thông tin cá nhân, nó chỉ được sử dụng cho mục đích đã nêu tại thời điểm thu thập.</li>
                                <li>Bản ghi và bản sao của tài liệu tương tác (bao gồm địa chỉ email), nếu bạn liên hệ với chúng tôi.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Thông Tin Chúng Tôi Thu Thập Thông Qua Các Công Nghệ Tự Động Thu Thập Dữ Liệu:</h4>

                            <p>Khi bạn duyệt qua và tương tác với trang web của chúng tôi, chúng tôi có thể sử dụng các công nghệ tự động thu thập dữ liệu để thu thập một số thông tin về thiết bị, hành động duyệt web và mẫu, bao gồm:</p>

                            <ul>
                                <li>Chi tiết về lượt truy cập trang web của chúng tôi, bao gồm dữ liệu lưu lượng, dữ liệu vị trí, nhật ký và dữ liệu giao tiếp khác và các nguồn tài nguyên mà bạn truy cập và sử dụng trên trang web.</li>
                                <li>Thông tin về máy tính và kết nối internet của bạn, bao gồm địa chỉ IP, hệ điều hành và loại trình duyệt.</li>
                            </ul>

                            <p>Thông tin chúng tôi thu thập tự động là dữ liệu thống kê và có thể bao gồm thông tin cá nhân và chúng tôi có thể duy trì hoặc kết hợp nó với thông tin cá nhân chúng tôi thu thập theo cách khác hoặc nhận được từ bên thứ ba. Nó giúp chúng tôi cải thiện trang web của chúng tôi và cung cấp dịch vụ tốt hơn và cá nhân hóa hơn, bao gồm bằng cách cho phép chúng tôi:</p>

                            <ul>
                                <li>Ước lượng kích thước đối tượng của khán giả và mẫu sử dụng.</li>
                                <li>Tăng tốc độ tìm kiếm của bạn.</li>
                                <li>Nhận dạng bạn khi bạn quay lại trang web của chúng tôi.</li>
                            </ul>

                            <p>Các công nghệ chúng tôi sử dụng cho việc thu thập tự động dữ liệu này có thể bao gồm:</p>

                            <ul>
                                <li><strong>Cookies</strong> (hoặc cookie trình duyệt). Cookie là một tệp nhỏ được đặt trên ổ đĩa cứng của máy tính của bạn. Bạn có thể từ chối chấp nhận cookie của trình duyệt bằng cách kích hoạt cài đặt phù hợp trên trình duyệt của bạn. Tuy nhiên, nếu bạn chọn cài đặt này, bạn có thể không thể truy cập được một số phần của trang web của chúng tôi. Trừ khi bạn đã điều chỉnh cài đặt trình duyệt của mình để từ chối cookie, hệ thống của chúng tôi sẽ phát hành cookie khi bạn hướng trình duyệt của mình đến trang web của chúng tôi.</li>
                                <li><strong>Cookie Flash.</strong> Một số tính năng của trang web của chúng tôi có thể sử dụng các đối tượng lưu trữ cục bộ (hoặc cookie Flash) để thu thập và lưu trữ thông tin về sở thích và lịch sử điều hướng của bạn đến, từ và trên trang web của chúng tôi. Cookie Flash không được quản lý bằng cách cài đặt trình duyệt giống như được sử dụng cho cookie trình duyệt. Để biết thông tin về cách quản lý cài đặt bảo mật và riêng tư của bạn cho cookie Flash, hãy xem Trình duyệt của bạn và Cài đặt riêng tư của Adobe.</li>
                                <li><strong>Web Beacons.</strong> Các trang của trang web của chúng tôi có thể chứa các tệp điện tử nhỏ được biết đến là web beacon (cũng được gọi là clear gifs, pixel tags và single-pixel gifs) cho phép chúng tôi, ví dụ, đếm số người dùng đã ghé thăm các trang đó và cho các thống kê trang web liên quan khác (ví dụ, ghi lại sự phổ biến của một số nội dung trang web và xác minh tính toàn vẹn của hệ thống và máy chủ).</li>
                            </ul>

                            <h4 class="font-weight-semibold">Cách Chúng Tôi Sử Dụng Thông Tin Của Bạn</h4>

                            <p>Chúng tôi sử dụng thông tin mà chúng tôi thu thập về bạn hoặc bạn cung cấp cho chúng tôi, bao gồm bất kỳ thông tin cá nhân nào:</p>

                            <ul>
                                <li>Để hiển thị trang web của chúng tôi và nội dung của nó cho bạn.</li>
                                <li>Để cho phép bạn tham gia các tính năng tương tác trên trang web của chúng tôi.</li>
                                <li>Bất kỳ cách nào khác chúng tôi có thể mô tả khi bạn cung cấp thông tin.</li>
                                <li>Cho mục đích khác với sự đồng ý của bạn.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Tiết Lộ Thông Tin Của Bạn</h4>

                            <p>Chúng tôi có thể tiết lộ thông tin được tập hợp về người dùng của chúng tôi và thông tin không nhận diện bất kỳ cá nhân nào, mà không có hạn chế.</p>

                            <p>Chúng tôi có thể tiết lộ thông tin cá nhân mà chúng tôi thu thập hoặc bạn cung cấp như được mô tả trong chính sách bảo mật này:</p>

                            <ul>
                                <li>Để thực hiện mục đích bạn cung cấp nó.</li>
                                <li>Cho bất kỳ mục đích khác được tiết lộ bởi chúng tôi khi bạn cung cấp thông tin đó.</li>
                                <li>Với sự đồng ý của bạn.</li>
                            </ul>

                            <p>Chúng tôi cũng có thể tiết lộ thông tin cá nhân của bạn:</p>

                            <ul>
                                <li>Để tuân thủ bất kỳ lệnh tòa án, luật pháp hoặc quy trình pháp lý nào, bao gồm để đáp ứng yêu cầu của bất kỳ cơ quan chính phủ hoặc cơ quan quản lý nào.</li>
                                <li>Để thực hiện hoặc áp dụng <a target="_blank" href="{{ route('terms_of_use') }}">Điều Khoản Sử Dụng</a> của chúng tôi.</li>
                                <li>Nếu chúng tôi tin rằng tiết lộ là cần thiết hoặc thích hợp để bảo vệ quyền lợi, tài sản hoặc an toàn của học viên hoặc người khác.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Lựa Chọn Về Cách Chúng Tôi Sử Dụng và Tiết Lộ Thông Tin Của Bạn</h4>
                            <p>Chúng tôi cố gắng cung cấp cho bạn các lựa chọn về thông tin cá nhân bạn cung cấp cho chúng tôi. Chúng tôi đã tạo ra các cơ chế để cung cấp cho bạn sự kiểm soát sau đây đối với thông tin của bạn:</p>

                            <ul>
                                <li><strong>Công Nghệ Theo Dõi và Quảng Cáo</strong>. Bạn có thể cài đặt trình duyệt của mình để từ chối tất cả hoặc một số cookie trình duyệt, hoặc để cảnh báo bạn khi cookie được gửi đi. Để tìm hiểu cách bạn có thể quản lý cài đặt cookie Flash của mình, hãy truy cập trang cài đặt trình phát Flash trên trang web của Adobe. Nếu bạn tắt hoặc từ chối cookie, hãy lưu ý rằng một số phần của trang web này có thể không thể truy cập hoặc hoạt động không đúng cách.</li>
                            </ul>

                            <h4 class="font-weight-semibold">Bảo Mật Dữ Liệu</h4>

                            <p>Chúng tôi đã triển khai các biện pháp nhằm bảo vệ thông tin cá nhân của bạn khỏi mất mát không cố ý và truy cập, sử dụng, sửa đổi và tiết lộ không được ủy quyền.</p>

                            <h4 class="font-weight-semibold">Thay Đổi Trong Chính Sách Bảo Mật Của Chúng Tôi</h4>

                           <p>Chính sách của chúng tôi là đăng bất kỳ thay đổi nào chúng tôi thực hiện đối với chính sách bảo mật của chúng tôi trên trang này. Nếu chúng tôi thực hiện các thay đổi quan trọng về cách chúng tôi xử lý thông tin cá nhân của người dùng của chúng tôi, chúng tôi sẽ thông báo cho bạn thông qua thông báo trên trang chủ của trang web. Ngày chính sách bảo mật được sửa đổi lần cuối được xác định ở đầu trang. Bạn có trách nhiệm kiểm tra trang web của chúng tôi và chính sách bảo mật này định kỳ để kiểm tra các thay đổi.</p>

                            <h4 class="font-weight-semibold">Thông Tin Liên Hệ</h4>

                            <p>Để đặt câu hỏi hoặc bình luận về chính sách bảo mật này và các thực hành bảo mật của chúng tôi, vui lòng gọi {{ $contact_phone }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>
</div>
@endsection
