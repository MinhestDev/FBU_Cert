@extends('layouts.login_master')

@section('content')
<div class="page-content">
    <div class="content-wrapper">
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title font-weight-bold text-center">ĐIỀU KHOẢN SỬ DỤNG</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div style="font-size: 16px;" class="col-md-10 offset-md-1">
                            <p>Chỉnh sửa lần cuối: 4 Tháng 11, 2019</p>

                            <h4 class="font-weight-semibold">Chấp nhận Điều Khoản Sử Dụng</h4>

                            <p>Các điều khoản sử dụng này được thực hiện bởi và giữa Bạn và {{ $app_name }} ("chúng tôi" hoặc "chúng tôi"). Các điều khoản và điều kiện sau đây và tất cả các tài liệu được tích hợp theo tham chiếu (tổng hợp, "Điều Khoản Sử Dụng"), quản lý quyền truy cập và sử dụng của bạn trên và thông qua <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a>, bao gồm bất kỳ nội dung, chức năng và dịch vụ nào được cung cấp trên hoặc thông qua <a target="_blank" href="{{ $app_url }}">{{ $app_url }}</a> (trang web này).</p>

                            <p>Vui lòng đọc kỹ các Điều Khoản Sử Dụng trước khi bạn bắt đầu sử dụng trang web. Bằng cách sử dụng trang web, bạn chấp nhận và đồng ý tuân thủ và tuân theo các Điều Khoản Sử Dụng này và Chính Sách Bảo Mật của chúng tôi, được tìm thấy tại <a target="_blank" href="{{ route('privacy_policy') }}">{{ route('privacy_policy') }}</a>, được tích hợp vào đây theo tham chiếu. Nếu bạn không muốn đồng ý với các Điều Khoản Sử Dụng này hoặc Chính Sách Bảo Mật, bạn phải ngưng truy cập hoặc sử dụng trang web.</p>

                            <h4 class="font-weight-semibold">Thay Đổi Trong Điều Khoản Sử Dụng</h4>

                            <p>Chúng tôi có thể sửa đổi và cập nhật các Điều Khoản Sử Dụng này từ thời gian này sang thời gian khác theo quyền kiểm soát của chúng tôi. Tất cả các thay đổi có hiệu lực ngay lập tức khi chúng tôi đăng chúng. Tuy nhiên, bất kỳ thay đổi nào đối với các quy định giải quyết tranh chấp được quy định trong Pháp Luật Áp Dụng và Tòa Án Sẽ Không Áp Dụng cho bất kỳ tranh chấp mà các bên đã có thông báo cụ thể trước ngày thay đổi được đăng trên Trang web.</p>

                            <p>Việc sử dụng tiếp tục của bạn trên trang web sau khi chúng tôi đăng các Điều Khoản Sử Dụng sửa đổi có nghĩa là bạn chấp nhận và đồng ý với các thay đổi. Bạn được mong đợi kiểm tra trang này từ thời gian này sang thời gian khác để bạn nhận biết bất kỳ thay đổi nào, vì chúng có tính ràng buộc đối với bạn.</p>

                            <h4 class="font-weight-semibold">Truy Cập Và Bảo Mật Tài Khoản Trên Trang Web</h4>
                            <p>Chúng tôi giữ quyền rút hoặc sửa đổi trang web này, và bất kỳ dịch vụ hoặc tài liệu nào chúng tôi cung cấp trên trang web, theo quyền kiểm soát của chúng tôi mà không cần thông báo trước. Chúng tôi sẽ không chịu trách nhiệm nếu vì bất kỳ lý do nào mà toàn bộ hoặc một phần của trang web không có sẵn vào bất kỳ thời điểm nào hoặc trong bất kỳ khoảng thời gian nào. Thỉnh thoảng, chúng tôi có thể hạn chế quyền truy cập vào một số phần của trang web, hoặc toàn bộ trang web, cho người dùng.</p>

                            <h3>Chương I</h3>
                            <p>Bạn chịu trách nhiệm cho:</p>

                            <ul>
                                <li>Đảm bảo tất cả các sắp xếp cần thiết để bạn có quyền truy cập vào trang web.</li>
                                <li>Đảm bảo rằng tất cả những người truy cập trang web thông qua kết nối internet của bạn đều biết về các Điều Khoản Sử Dụng này và tuân thủ chúng.</li>
                            </ul>

                            <p>Để truy cập vào trang web hoặc một số tài nguyên mà nó cung cấp, có thể yêu cầu bạn cung cấp một số chi tiết đăng ký hoặc thông tin khác. Điều kiện của việc bạn cung cấp thông tin như vậy sẽ được quy định trong Chính Sách Bảo Mật của chúng tôi.</p>

                            <h3>Chương II</h3>
                            <p>Bạn không được sử dụng dịch vụ của chúng tôi:</p>

                            <ul>
                                <li>Trong bất kỳ mục đích bất hợp pháp hoặc bất hợp pháp hoặc hủy diệt, hoặc trong kết nối với bất kỳ mục đích hoặc hoạt động bất hợp pháp hoặc bất hợp pháp nào;</li>
                                <li>Để gửi, nhận các tài liệu mà:</li>
                                <ul>
                                    <li>Vi phạm bản quyền, quyền tác giả hoặc quyền sở hữu trí tuệ của bất kỳ cá nhân hoặc tổ chức nào khác;</li>
                                    <li>Vi phạm bất kỳ tiêu chuẩn, quy tắc hoặc quy định nào của chúng tôi hoặc của bất kỳ mạng nào mà chúng tôi kết nối hoặc mạng nào mà bạn kết nối;</li>
                                    <li>Gây ra hại cho hoặc sử dụng trang web hoặc dịch vụ truy cập hoặc sử dụng thông tin cá nhân về người khác một cách không hợp pháp hoặc không đúng.</li>
                                </ul>
                                <li>Để tạo ra, gửi hoặc lưu trữ các chất liệu gian lận, phản động, đe dọa, thô tục, quấy rối, thô tục, không phù hợp, gây sỉ nhục, không đúng, thiếu chính xác hoặc bất hợp pháp hoặc bất hợp pháp;</li>
                                <li>Để truy cập hoặc kiểm soát bất kỳ phần nào của trang web hoặc dịch vụ mà bạn không được phép truy cập hoặc kiểm soát theo các phương tiện được cung cấp bởi chúng tôi; hoặc</li>
                                <li>Để gây ra quá tải không cần thiết cho hệ thống hoặc dịch vụ của chúng tôi hoặc cho các mạng hoặc dịch vụ kết nối với trang web của chúng tôi.</li>
                            </ul>

                            <h3>Chương III</h3>
                            <p>Chúng tôi có thể từ chối truy cập vào trang web của bạn vào bất kỳ thời điểm nào theo quyền kiểm soát của chúng tôi khi thấy rằng bạn đã vi phạm bất kỳ điều kiện nào trong các Điều Khoản Sử Dụng này hoặc bất kỳ luật pháp nào áp dụng.</p>

                            <h3>Chương IV</h3>
                            <p>Trang web này có thể chứa liên kết đến các trang web hoặc tài liệu của bên thứ ba mà không được quản lý bởi chúng tôi.</p>

                            <h3>Chương V</h3>
                            <p>Các quy định của pháp luật của quốc gia này sẽ áp dụng cho việc sử dụng của bạn của trang web này và bạn đồng ý với thẩm quyền độc quyền của tòa án.</p>

                            <p>Bằng cách sử dụng trang web này, bạn đồng ý với việc ràng buộc của những Điều Khoản Sử Dụng này. Nếu bạn không đồng ý với các Điều Khoản Sử Dụng này, xin vui lòng không sử dụng trang web của chúng tôi.</p>
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('register') }}" class="btn btn-info">Đăng Ký</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ route('login') }}" class="btn btn-primary">Đăng Nhập</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
