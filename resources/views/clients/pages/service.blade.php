@extends('layouts.client')

@section('title', 'Dịch vụ')
@section('breadcrumb', 'Dịch vụ')
@section('content')
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pb-115">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 align-self-center">
                    <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                        <img src="{{ asset('asset/clients/img/service/11.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-7 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ ĐÁNG TIN CẬY</h6>
                            <h1 class="section-title">Chúng Tôi Đạt Chuẩn & Chuyên Nghiệp<span>.</span></h1>
                            <p>Nền tảng cam kết cung ứng giải pháp thực phẩm an toàn, minh bạch và tiện lợi nhất cho mọi gia
                                đình.</p>
                        </div>

                        <div class="about-us-info-wrap-inner about-us-info-devide">
                            <p>Chúng tôi tự hào là cầu nối uy tín giữa các trang trại hữu cơ đạt chuẩn và người tiêu dùng.
                                Với quy trình kiểm duyệt khắt khe, hệ thống bảo quản hiện đại cùng đội ngũ chuyên môn cao,
                                chúng tôi không chỉ mang đến nông sản tươi ngon mỗi ngày mà còn kiến tạo một hệ sinh thái
                                tiêu dùng xanh, bảo vệ sức khỏe cộng đồng một cách bền vững.</p>

                            <div class="list-item-with-icon">
                                <ul>
                                    <li><a href="contact.html">Giao hàng tận nhà nhanh chóng</a></li>
                                    <li><a href="team.html">Đội ngũ chuyên gia nông sản</a></li>
                                    <li><a href="service-details.html">Quy trình bảo quản đạt chuẩn</a></li>
                                    <li><a href="shop.html">Danh mục sản phẩm đa dạng</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- SERVICE AREA START (Service 1) -->
    <div class="ltn__service-area section-bg-1 pt-115 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h1 class="section-title white-color---">Dịch Vụ & Danh Mục</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/1.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Rau Củ Hữu Cơ</a></h3>
                            <p>Cung cấp các loại rau củ tươi sạch chuẩn hữu cơ, được thu hoạch trực tiếp từ trang trại và
                                không dùng hóa chất độc hại.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/2.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Rau Củ Hữu Cơ</a></h3>
                            <p>Cung cấp các loại rau củ tươi sạch chuẩn hữu cơ, được thu hoạch trực tiếp từ trang trại và
                                không dùng hóa chất độc hại.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/3.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Trái Cây Tự Nhiên</a></h3>
                            <p>Trái cây chín cây tự nhiên, mọng nước, giàu vitamin và đạt đầy đủ các tiêu chuẩn kiểm nghiệm
                                an toàn thực phẩm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/3.jpg') }}"
                                    alt="#"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Rau Củ Hữu Cơ</a></h3>
                            <p>Cung cấp các loại rau củ tươi sạch chuẩn hữu cơ, được thu hoạch trực tiếp từ trang trại và
                                không dùng hóa chất độc hại.</p>
                        </div>
                    </div>
                </div>
                <!-- Cột 1 (Ảnh 1) -->
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/1.jpg') }}"
                                    alt="Trái cây tự nhiên"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Trái Cây Tự Nhiên</a></h3>
                            <p>Trái cây chín cây tự nhiên, mọng nước, giàu vitamin và đạt đầy đủ các tiêu chuẩn kiểm nghiệm
                                an toàn thực phẩm.</p>
                        </div>
                    </div>
                </div>
                <!-- Cột 2 (Ảnh 2) -->
                <div class="col-lg-4 col-sm-6">
                    <div class="ltn__service-item-1">
                        <div class="service-item-img">
                            <a href="service-details.html"><img src="{{ asset('asset/clients/img/service/2.jpg') }}"
                                    alt="Thực phẩm dinh dưỡng"></a>
                        </div>
                        <div class="service-item-brief">
                            <h3><a href="service-details.html">Thực Phẩm Dinh Dưỡng</a></h3>
                            <p>Các dòng sản phẩm thịt sạch, trứng hữu cơ và ngũ cốc thực dưỡng có nguồn gốc rõ ràng cho bữa
                                ăn lành mạnh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- SERVICE AREA END -->

    <!-- OUR JOURNEY AREA START -->
    <div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9" data-bg="img/bg/8.jpg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__our-journey-wrap ">
                        <ul>
                            <li><span class="ltn__journey-icon">2024</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('asset/clients/img/service/history-1.jpg') }}"
                                                    alt="Khởi nguồn ý tưởng">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Khởi Đầu Hành Trình</h3>
                                                <p>Nền tảng được nhen nhóm từ ý tưởng kết nối nông sản sạch trực tiếp từ
                                                    trang trại đến tay người tiêu dùng, cắt giảm các khâu trung gian.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="ltn__journey-icon">2025</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('asset/clients/img/service/history-1.jpg') }}"
                                                    alt="Mở rộng mạng lưới trang trại">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Mở Rộng Mạng Lưới</h3>
                                                <p>Hợp tác thành công với hơn 50 trang trại hữu cơ lớn nhỏ tại khu vực phía
                                                    Nam, đa dạng
                                                    hóa danh mục sản phẩm tươi sống.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="ltn__journey-icon">2026</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('asset/clients/img/service/history-1.jpg') }}"
                                                    alt="Giải thưởng thương hiệu xanh">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Thương Hiệu Uy Tín</h3>
                                                <p>Đạt chứng nhận hệ thống phân phối nông sản an toàn tiêu biểu và nhận được
                                                    sự tin dùng
                                                    từ hơn 10.000 khách hàng thân thiết.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><span class="ltn__journey-icon">Tương Lai</span>
                                <ul>
                                    <li>
                                        <div class="ltn__journey-history-item-info clearfix">
                                            <div class="ltn__journey-history-img">
                                                <img src="{{ asset('asset/clients/img/service/history-1.jpg') }}"
                                                    alt="#">
                                            </div>
                                            <div class="ltn__journey-history-info">
                                                <h3>Phát Triển Bền Vững</h3>
                                                <p>Hướng tới mục tiêu chuyển đổi 100% bao bì tự hủy sinh học, tối ưu chuỗi
                                                    cung ứng bằng
                                                    công nghệ để giảm thiểu lãng phí thực phẩm và đồng hành cùng sức khỏe
                                                    người Việt.
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- OUR JOURNEY AREA END -->
@endsection
