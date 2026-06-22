@extends('layouts.client')

@section('title', 'FAQ')
@section('breadcrumb', 'Những câu hỏi thường gặp')
@section('content')
    <!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
    <div class="ltn__faq-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ltn__faq-inner ltn__faq-inner-2">
                        <div id="accordion_2">
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1"
                                    aria-expanded="false">
                                    Làm thế nào để đặt mua sản phẩm trên nền tảng?
                                </h6>
                                <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Để đặt mua thực phẩm sạch, bạn chỉ cần thực hiện theo các bước đơn giản sau: <br>
                                            <strong>Bước 1:</strong> Tìm kiếm và chọn sản phẩm yêu thích (Rau củ, trái cây,
                                            thịt sạch...) rồi bấm "Thêm vào giỏ hàng". <br>
                                            <strong>Bước 2:</strong> Vào giỏ hàng, kiểm tra lại số lượng và bấm "Tiến hành
                                            thanh toán". <br>
                                            <strong>Bước 3:</strong> Điền đầy đủ thông tin giao hàng, chọn phương thức thanh
                                            toán (COD hoặc chuyển khoản) và xác nhận đơn hàng. <br>
                                            Hệ thống sẽ gửi email xác nhận và nhân viên sẽ liên hệ giao hàng cho bạn trong
                                            thời gian sớm nhất.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                    aria-expanded="true">
                                    Chính sách và quy trình hoàn tiền như thế nào?
                                </h6>
                                <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <div class="ltn__video-img alignleft">
                                            <img src="{{ asset('asset/clients/img/bg/17.jpg') }}"
                                                alt="Hướng dẫn đổi trả hoàn tiền">
                                            <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                                href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                                data-rel="lightcase:myCollection">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                        <p>Chúng tôi cam kết bảo vệ quyền lợi khách hàng tối đa với chính sách hoàn tiền
                                            minh bạch: <br>
                                            • <strong>Trường hợp áp dụng:</strong> Sản phẩm bị dập nát, hư hỏng, không đúng
                                            chủng loại hoặc lỗi từ nhà cung cấp. <br>
                                            • <strong>Thời gian tiếp nhận:</strong> Trong vòng 3 ngày kể từ khi nhận hàng
                                            thành công. <br>
                                            • <strong>Cách thức thực hiện:</strong> Bạn vui lòng chụp ảnh/quay video tình
                                            trạng sản phẩm và gửi về mục "Lịch sử đơn hàng" hoặc liên hệ Hotline để được xử
                                            lý hoàn tiền/đổi hàng mới trong vòng 24h.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-3" aria-expanded="false">
                                    Tôi là người dùng mới, tôi nên bắt đầu từ đâu?
                                </h6>
                                <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Chào mừng bạn đến với nền tảng của chúng tôi! Để có trải nghiệm mua sắm tuyệt vời
                                            nhất, bạn có thể bắt đầu bằng 3 bước đơn giản sau: <br>
                                            1. <strong>Đăng ký tài khoản:</strong> Bấm vào biểu tượng "Tài khoản" ở góc phải
                                            màn hình, điền số điện thoại hoặc email để kích hoạt. <br>
                                            2. <strong>Cập nhật sổ địa chỉ:</strong> Thêm trước địa chỉ nhận hàng trong phần
                                            quản lý tài khoản để hệ thống tự động tính toán phí vận chuyển chính xác nhất
                                            khi bạn thanh toán. <br>
                                            3. <strong>Nhận ưu đãi người mới:</strong> Kiểm tra mục "Ví voucher" hoặc trang
                                            chủ để thu thập các mã giảm giá dành riêng cho đơn hàng đầu tiên của bạn. Chúc
                                            bạn có những trải nghiệm đi chợ trực tuyến thật tiện lợi!</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-4" aria-expanded="false">
                                    Thời gian và hình thức nhận tiền hoàn trả như thế nào?
                                </h6>
                                <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Sau khi yêu cầu đổi trả của bạn được bộ phận CSKH phê duyệt, việc hoàn tiền sẽ
                                            được xử lý linh hoạt qua các hình thức sau: <br>
                                            • <strong>Chuyển khoản ngân hàng (Khuyên dùng):</strong> Tiền sẽ được hoàn về
                                            tài khoản của bạn trong vòng 24h đến 48h làm việc (không tính Thứ 7, Chủ Nhật).
                                            <br>
                                            • <strong>Ví điện tử / Ví thành viên:</strong> Hệ thống cộng số dư trực tiếp vào
                                            ví trên ứng dụng của bạn ngay lập tức để sử dụng cho lần mua hàng kế tiếp. <br>
                                            • <strong>Hoàn tiền mặt:</strong> Áp dụng trực tiếp thông qua shipper khi thực
                                            hiện thu hồi hàng lỗi và đổi trả hàng mới tại nhà cho bạn.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-5" aria-expanded="false">
                                    Thông tin cá nhân của tôi có được bảo mật không?
                                </h6>
                                <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p><strong>Có, an toàn tuyệt đối là ưu tiên hàng đầu của chúng tôi.</strong> Toàn bộ
                                            dữ liệu của bạn được bảo vệ nghiêm ngặt thông qua các tiêu chuẩn an ninh hiện
                                            đại: <br>
                                            • <strong>Mã hóa dữ liệu:</strong> Mọi thông tin giao dịch, mật khẩu và thông
                                            tin cá nhân đều được mã hóa bằng giao thức SSL/TLS an toàn trước khi truyền tải
                                            qua internet. <br>
                                            • <strong>Bảo mật thanh toán:</strong> Hệ thống không lưu trữ thông tin tài
                                            khoản ngân hàng hay thẻ tín dụng của bạn. Các cổng thanh toán trực tuyến đều qua
                                            đối tác trung gian được cấp phép chuẩn quốc tế. <br>
                                            • <strong>Cam kết quyền riêng tư:</strong> Chúng tôi tuyệt đối không chia sẻ,
                                            bán hoặc cung cấp thông tin cá nhân cũng như lịch sử mua hàng của bạn cho bất kỳ
                                            bên thứ ba nào vì mục đích quảng cáo.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-6" aria-expanded="false">
                                    Tại sao mã giảm giá (Voucher) của tôi không áp dụng được?
                                </h6>
                                <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Nếu bạn nhập mã giảm giá nhưng hệ thống báo lỗi hoặc không thay đổi giá tiền, vui
                                            lòng kiểm tra lại các trường hợp sau: <br>
                                            • <strong>Điều kiện đơn hàng:</strong> Một số mã chỉ áp dụng cho một số danh mục
                                            sản phẩm nhất định (ví dụ: chỉ áp dụng cho Rau củ) hoặc yêu cầu giá trị đơn hàng
                                            tối thiểu (ví dụ: đơn từ 200.000đ). <br>
                                            • <strong>Hạn sử dụng:</strong> Kiểm tra xem mã giảm giá đã hết hạn sử dụng hoặc
                                            hết lượt áp dụng trong ngày/chương trình chưa. <br>
                                            • <strong>Ký tự mã:</strong> Hãy chắc chắn rằng bạn không nhập thừa khoảng trắng
                                            hoặc sai các ký tự viết hoa/viết thường. <br>
                                            Nếu đã kiểm tra tất cả các yếu tố trên mà vẫn không áp dụng được, bạn vui lòng
                                            liên hệ ngay với bộ phận CSKH qua Hotline hoặc Ô chat trực tuyến để được hỗ trợ
                                            kiểm tra hệ thống.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- card -->
                            <div class="card">
                                <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                    data-bs-target="#faq-item-2-7" aria-expanded="false">
                                    Làm thế nào để thanh toán bằng thẻ tín dụng (Credit Card)?
                                </h6>
                                <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                    <div class="card-body">
                                        <p>Việc thanh toán bằng thẻ tín dụng hoặc thẻ ghi nợ (Visa/Mastercard/JCB) trên hệ
                                            thống được thực hiện rất đơn giản và an toàn qua các bước sau: <br>
                                            1. <strong>Chọn phương thức:</strong> Tại bước "Thanh toán", bạn chọn hình thức
                                            thanh toán bằng "Thẻ tín dụng/Thẻ ghi nợ quốc tế". <br>
                                            2. <strong>Nhập thông tin thẻ:</strong> Hệ thống sẽ chuyển hướng an toàn để bạn
                                            điền các thông tin gồm: Số thẻ, Tên in trên thẻ (không dấu), Tháng/Năm hết hạn
                                            và Mã bảo mật CVC/CVV (3 chữ số ở mặt sau thẻ). <br>
                                            3. <strong>Xác thực OTP:</strong> Nhập mã OTP được gửi về số điện thoại đăng ký
                                            thẻ ngân hàng của bạn để hoàn tất giao dịch. <br>
                                            <em>* Lưu ý: Hệ thống cam kết không lưu trữ thông tin thẻ của bạn nhằm đảm bảo
                                                an toàn tuyệt đối theo chuẩn quốc tế.</em>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="need-support text-center mt-100">
                            <h2>Bạn vẫn cần trợ giúp? Liên hệ với chúng tôi 24/7:</h2>
                            <div class="btn-wrapper mb-30">
                                <a href="contact.html" class="theme-btn-1 btn">Liên hệ</a>
                            </div>
                            <h3><i class="fas fa-phone"></i> 0776611573</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar-area ltn__right-sidebar">
                        <!-- Newsletter Widget -->
                        <div class="widget ltn__search-widget ltn__newsletter-widget">
                            <h6 class="ltn__widget-sub-title">// đăng ký</h6>
                            <h4 class="ltn__widget-title">Nhận bản tin</h4>
                            <form action="#">
                                <input type="text" name="search" placeholder="Nhập thông tin email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                            <div class="ltn__newsletter-bg-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>
                        <!-- Banner Widget -->
                        <div class="widget ltn__banner-widget">
                            <a href="shop.html"><img src="{{ asset('asset/clients/img/banner/banner-3.jpg') }}"
                                    alt="Hình ảnh Banner"></a>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ AREA START -->

    <!-- COUNTER UP AREA START -->
    <div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70" data-bg="img/bg/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon"> <img src="{{ asset('asset/clients/img/icons/icon-img/2.png') }}"
                                alt="#"> </div>
                        <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Khách hàng tích cực</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon"> <img src="{{ asset('asset/clients/img/icons/icon-img/3.png') }}"
                                alt="#"> </div>
                        <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                                class="counterUp-icon">+</span> </h1>
                        <h6>Tách cà phê</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon"> <img src="{{ asset('asset/clients/img/icons/icon-img/4.png') }}"
                                alt="#"> </div>
                        <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Nhận phần thưởng</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 align-self-center">
                    <div class="ltn__counterup-item-3 text-color-white text-center">
                        <div class="counter-icon"> <img src="{{ asset('asset/clients/img/icons/icon-img/5.png') }}"
                                alt="#"> </div>
                        <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                        <h6>Quốc gia bao phủ</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COUNTER UP AREA END -->
@endsection
