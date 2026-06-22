@extends('layouts.client')

@section('title', 'Chi tiết đơn đặt hàng')
@section('breadcrumb', 'Chi tiết đơn đặt hàng')

@section('content')
    <div class="liton__shoping-cart-area mb-120">
        <div class="container mt-4">

            {{-- Tiêu đề trang --}}
            <div class="section-title-area mb-50">
                <h3 class="section-title">Chi tiết đơn hàng #{{ $order->id }}</h3>
            </div>

            {{-- Thông tin tổng quan đơn hàng --}}
            <div class="row mb-50">
                <div class="col-lg-8">
                    <div class="ltn__feature-item ltn__feature-item-3 white-bg">
                        <div class="ltn__feature-info">

                            <p><strong>Ngày đặt:</strong> {{ $order->created_at->format('d/m/Y') }}</p>

                            <p><strong>Trạng thái:</strong>
                                @if ($order->status == 'pending')
                                    <span class="badge bg-warning">Chờ xác nhận</span>
                                @elseif($order->status == 'processing')
                                    <span class="badge bg-primary">Đang xử lý</span>
                                @elseif($order->status == 'completed')
                                    <span class="badge bg-success">Hoàn thành</span>
                                @elseif($order->status == 'canceled')
                                    <span class="badge bg-danger">Đã hủy</span>
                                @endif
                            </p>

                            <p><strong>Phương thức thanh toán:</strong>
                                @if ($order->payment && $order->payment->payment_method == 'cash')
                                    <span class="badge bg-primary">Thanh toán khi nhận hàng</span>
                                @elseif($order->payment && $order->payment->payment_method == 'paypal')
                                    <span class="badge bg-primary">Thanh toán bằng PayPal</span>
                                @else
                                    <span class="badge bg-danger">Chưa xác định</span>
                                @endif
                            </p>

                            <p>
                                <strong>Tổng tiền:</strong>
                                <span class="product-price">
                                    {{ number_format($order->total_price, 0, ',', '.') }} đ
                                </span>
                            </p>

                        </div>
                    </div>
                </div>

                {{-- Thông tin giao hàng --}}
                <div class="col-lg-4">
                    <div class="ltn__time-schedule-widget section-bg-2">
                        <h3 class="footer-title">Thông tin giao hàng</h3>
                        <ul>
                            <li>
                                <i class="fas fa-user"></i>
                                {{ $order->shippingAddress->full_name }}
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                {{ $order->shippingAddress->address }}
                            </li>
                            <li>
                                <i class="fas fa-city"></i>
                                {{ $order->shippingAddress->city }}
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                {{ $order->shippingAddress->phone }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Bảng sản phẩm --}}
            <h4 class="title-2">Sản phẩm trong đơn hàng</h4>
            <div class="table-responsive shoping-cart-table mb-50">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->orderItems as $item)
                            <tr>
                                <td class="cart-product-image">
                                    <img src="{{ asset('storage/' . $item->product->image) }}"
                                        alt="{{ $item->product->name }}">
                                </td>
                                <td class="cart-product-info">
                                    <h4>{{ $item->product->name }}</h4>
                                </td>
                                <td>{{ number_format($item->price, 0, ',', '.') }} đ</td>
                                <td>{{ $item->quantity }}</td>
                                <td class="cart-product-subtotal">
                                    {{ number_format($item->price * $item->quantity, 0, ',', '.') }} đ
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Nút hủy đơn --}}
            @if ($order->status == 'pending')
                <div class="btn-wrapper">
                    <form action="{{ route('order.cancel', $order->id) }}
" method="POST"
                        onsubmit="return confirm('Bạn có chắc chắn muốn hủy đơn hàng này?');">
                        @csrf
                        <button type="submit" class="btn theme-btn-1 btn-effect-3">
                            <i class="fas fa-times"></i> Hủy đơn hàng
                        </button>
                    </form>
                </div>
            @endif

            {{-- Đánh giá sản phẩm --}}
            @if ($order->status == 'completed')
                <h4 class="title-2 mt-50">Đánh giá sản phẩm</h4>
                <div class="table-responsive shoping-cart-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderItems as $item)
                                <tr>
                                    <td class="cart-product-info">
                                        <h6>{{ $item->product->name }}</h6>
                                    </td>
                                    <td>
                                        <div class="btn-wrapper mt-0">
                                            <a href="{{ route('product.detail', $item->product->slug) }}"
                                                class="btn theme-btn-1 btn-sm btn-effect-3">
                                                <i class="fas fa-star"></i> Đánh giá
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
@endsection
