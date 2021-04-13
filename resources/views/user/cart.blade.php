@extends('user.layouts.master')

@section('title', 'Giỏ hàng')


@section('content')
<div class="container-fluid container-lg py-5">
    <div class="row">
        <div class="col-12 col-md-8 mb-5 pr-3 pr-md-5">
            <h4>Giỏ hàng</h4>
            <div class="d-flex flex-row">
                <div class="align-items-start mb-3">
                    <a href="#">
                        <img src="https://images.nike.com/is/image/DotCom/CZ1856_002_A_PREM?align=0,1&cropN=0,0,0,0&resMode=sharp&bgc=f5f5f5&wid=150&fmt=jpg" width="100px "/>
                    </a>
                </div>

                <div class="align-self-start ml-3">
                    <a href="#">Nike Wildhorse 7 </a>
                    <div class="mt-2">
                        <label>Size: 43</label>
                    </div>
                <a type="button" class="btn rounded pb-1 border-bottom text-muted">Xóa</a>    
                </div>
                
                <div class="align-self-start ml-auto">
                    <p class="text-right">100$</p>
                    <div class="input-group mb-3 input-group-sm mt-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary rounded-0 " type="button">-</button>
                        </div>

                        <div class="input-group-append ">
                            <span class="input-group-text" id="">1</span>
                        </div>

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary rounded-0" type="button">+</button>
                        </div>
                    </div>
                    
                </div>

            </div>

            <div class="d-flex flex-row">
                <div class=" align-items-start">
                    <a href="#">
                        <img src="https://images.nike.com/is/image/DotCom/CZ1856_002_A_PREM?align=0,1&cropN=0,0,0,0&resMode=sharp&bgc=f5f5f5&wid=150&fmt=jpg" width="100px "/>
                    </a>
                </div>

                <div class="align-self-start ml-3">
                    <a href="#">Nike Wildhorse 7 </a>
                    <div class="mt-2">
                        <label class="badge badge-secondary">Size: 43</label>
                    </div>
                     <a type="button" class="btn rounded pb-1 border-bottom text-muted">Xóa</a>
                </div>
                
               
                <div class="align-self-start ml-auto">
                    <p class="text-right">100$</p>
                    <div class="input-group mb-3 input-group-sm mt-3">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary rounded-0 " type="button">-</button>
                        </div>

                        <div class="input-group-append ">
                            <span class="input-group-text" id="">1</span>
                        </div>

                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary rounded-0" type="button">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <h4>Hóa đơn</h4>
            <div class="d-flex flex-row mb-3 mt-2">
                <div class="align-self-start font-weight-bold">
                    Tạm tính
                </div>
                
                <div class="align-self-start ml-auto">
                    100$
                </div>
            </div>

            <div class="d-flex flex-row mb-3">
                <div class="align-self-start font-weight-bold">
                    Ship
                </div>
                
                <div class="align-self-start ml-auto">
                    Free
                </div>
            </div>

            <div class="pb-2 border-bottom d-flex flex-row font-weight-bold">
               Thuế VAT đã bao gồm trong giá sản phẩm
            </div>

             <div class="pb-2 border-bottom d-flex flex-row mt-2">
                <div class="align-self-start font-weight-bold">
                    Tổng đơn
                </div>

                <div class="align-self-start ml-auto">
                    100$
                </div>
            </div>
            
            <div class="d-flex flex-row mb-3 mt-3">
                <a type="button" class="btn btn-dark ml-auto ">Thanh toán</a>
            </div>

        </div>
    </div>
    
</div>
@endsection