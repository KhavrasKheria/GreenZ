@extends('layouts.client')

@section('title', 'Về chúng tôi')
@section('breadcrumb', 'Về chúng tôi')
@section('content')
    <!-- ABOUT US AREA START -->
    <div class="ltn__about-us-area pt-120--- pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-img-wrap about-img-left">
                        <img src="{{ asset('asset/clients/img/others/6.png') }}" alt="About Us Image">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="about-us-info-wrap">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">Khám Phá Nền Tảng</h6>
                            <h1 class="section-title">Cam Kết Hữu Cơ Sạch <br class="d-none d-md-block"> Cửa hàng thực phẩm
                            </h1>
                            <p>Chúng tôi cam kết mang đến nguồn thực phẩm hữu cơ đạt chuẩn, an toàn và tươi ngon nhất từ
                                nông trại đến tận tay gia đình bạn.</p>
                        </div>
                        <p>Nơi quy tụ những nhà bán hàng tâm huyết, tử tế và lan tỏa những giá trị tốt đẹp. Chúng tôi xây
                            dựng một nền tảng thương mại điện tử công bằng, tự vận hành và phát triển bền vững dựa trên niềm
                            tin, sự gắn kết cộng đồng cùng những nội dung chất lượng.</p>
                        <div class="about-author-info d-flex">
                            <div class="author-name-designation  align-self-center">
                                <h4 class="mb-0">Nguyễn Lê Anh Kiệt</h4>
                                <small>/ Giám đốc Nền tảng</small>
                            </div>
                            <div class="author-sign">
                                <img src="{{ asset('asset/clients/img/icons/icon-img/author-sign.png') }}" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ABOUT US AREA END -->

    <!-- FEATURE AREA START ( Feature - 6) -->
    <div class="ltn__feature-area section-bg-1 pt-115 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-area ltn__section-title-2 text-center">
                        <h6 class="section-subtitle ltn__secondary-color">// ƯU ĐIỂM NỔI BẬT //</h6>
                        <h1 class="section-title">Tại Sao Chọn Chúng Tôi<span>.</span></h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('asset/clients/img/icons/icon-img/21.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Đa Dạng Nhà Cung Cấp</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Đối tác chiến lược của các hợp tác xã và trang trại đạt chuẩn khắp cả nước, cam kết minh bạch
                                nguồn gốc trên từng sản phẩm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('asset/clients/img/icons/icon-img/22.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Sản Phẩm Tuyển Chọn</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Mỗi sản phẩm xuất hiện trên nền tảng đều trải qua quy trình kiểm duyệt nghiêm ngặt, đảm bảo
                                các tiêu chuẩn khắt khe về an toàn vệ sinh thực phẩm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-12">
                    <div class="ltn__feature-item ltn__feature-item-7">
                        <div class="ltn__feature-icon-title">
                            <div class="ltn__feature-icon">
                                <span><img src="{{ asset('asset/clients/img/icons/icon-img/23.png') }}"
                                        alt="#"></span>
                            </div>
                            <h3><a href="service-details.html">Thực Phẩm Không Hóa Chất</a></h3>
                        </div>
                        <div class="ltn__feature-info">
                            <p>Cam kết phân phối nông sản nói không với thuốc trừ sâu độc hại và chất kích thích tăng
                                trưởng, an toàn tuyệt đối cho sức khỏe cả gia đình.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FEATURE AREA END -->


@endsection
