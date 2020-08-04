@extends('admin.layouts.app')
@section('title','Transaction')
@section('content')
    {{-- content  --}}
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-wallet icon-gradient bg-plum-plate">
                            </i>
                        </div>
                        <div>Transaction
                            <div class="page-title-subheading">Tabs are used to split content between multiple sections. Wide variety available.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Hoping start" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                XRP
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>            
            
            
            <div class="row">
               <div class="col-md-12">
                    <div class="mb-3 card">
                        <div class="card-body">
                            <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                                <li class="nav-item tab-block">
                                    <a role="tab" class="nav-link active" data-toggle="tab"  tab-name ="tab-buy" >
                                        <span class="nav-text">BUY</span>
                                    </a>
                                </li>
                                <li class="nav-item tab-block">
                                    <a role="tab" class="nav-link" data-toggle="tab" tab-name ="tab-sell">
                                        <span class="nav-text">SELL</span>
                                    </a>
                                </li>
                                <li class="nav-item tab-block">
                                    <a role="tab" class="nav-link" data-toggle="tab" tab-name ="tab-profit">
                                        <span class="nav-text">PROFIT</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane tab-buy active" id="tab-animated1-0" role="tabpanel">

                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            {{-- <h5 class="card-title">XRP</h5> --}}
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Number</th>
                                                    <th>Price ( 1 coin )</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    $total_number = 0;
                                                    $total_buy_price = 0;
                                                 ?>
                                                @foreach($list_buy as $key => $item)
                                                <?php 
                                                    $total_number += $item->number;
                                                    $total_buy_price += ($item->number)*($item->buy_price);
                                                 ?>
                                                <tr>
                                                    <th scope="row">{{$key + 1}}</th>
                                                    <td>{{$item->date_transaction}}</td>
                                                    <td>{{$item->number}}</td>
                                                    <td>{{number_format($item->buy_price)}}</td>
                                                </tr>
                                                @endforeach
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>{{$total_number}}</td>
                                                    <td>{{number_format($total_buy_price)}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info mb-4 add_buy_coin_btn"> <i class="fa fa-plus"></i> Add </button>
                                    <div class="main-card mb-3 card add_form_buy_coin">
                                        <div class="card-body"><h5 class="card-title">Add coin buy</h5>
                                            <form class="" method="POST">
                                                @csrf
                                                <input type="hidden" name="coin_id" value="1">
                                                <input type="hidden" name="user_id" value="{{Auth::guard('admin')->user()->id}}">
                                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10"><input required="" name="date_transaction" id="exampleEmail" placeholder="Enter date transaction" type="datetime-local" class="form-control"></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10"><input required="" name="number" id="examplePassword" placeholder="Enter number coin buy" type="number" min="0" class="form-control"></div>
                                                </div>
                                                
                                               
                                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10"><input required="" name="buy_price" id="exampleText" class="form-control" placeholder="Enter price buy 1 coin">
                                                    </div>
                                                </div>
                                               
                                                
                                                
                                                <div class="position-relative row form-group">
                                                    <div class="col-sm-10 offset-sm-2">
                                                        <button class="btn btn-secondary">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                        
                                </div>
                                <div class="tab-pane tab-sell" id="tab-animated1-1" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            {{-- <h5 class="card-title">XRP</h5> --}}
                                            <table class="mb-0 table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Number</th>
                                                    <th>Price</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>25</td>
                                                    <td>6.700</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info mb-4 add_sell_coin_btn"> <i class="fa fa-plus"></i> Add </button>
                                    <div class="main-card mb-3 card add_form_sell_coin">
                                        <div class="card-body"><h5 class="card-title">Add coin sell</h5>
                                            <form class="" method="POST">
                                                @csrf
                                                <input type="hidden" name="coin_id" value="1">
                                                <input type="hidden" name="user_id" value="{{Auth::guard('admin')->user()->id}}">
                                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10"><input name="date" id="exampleEmail" placeholder="Enter date transaction" type="datetime" class="form-control"></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10"><input name="number" id="examplePassword" placeholder="Enter number coin sell" type="number" min="0" class="form-control"></div>
                                                </div>
                                                
                                               
                                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10"><input name="sell_price" id="exampleText" class="form-control" placeholder="Enter price sell 1 coin">
                                                    </div>
                                                </div>
                                               
                                                
                                                
                                                <div class="position-relative row form-group">
                                                    <div class="col-sm-10 offset-sm-2">
                                                        <button type="button" class="btn btn-secondary save_sell_coin">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane tab-profit" id="tab-animated1-2" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            {{-- <h5 class="card-title">XRP</h5> --}}
                                            <h5 class="card-title">Date: 04/08/2020</h5>
                                            <div class="">
                                                <p>Keeping: ? coins</p>
                                                <p>Profit: </p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
            
        </div>
    </div>
    {{--  --}}
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".tab-block").click(function(){

                $(".tab-block").children().removeClass('active');
                $(this).children().addClass('active');

                var tab_name = $(this).children().attr('tab-name');
                $(".tab-pane").removeClass('active');
                $("."+tab_name).addClass('active');

            });

            $('.add_buy_coin_btn').click(function(){
                $('.add_form_buy_coin').css('display','block');
            })

            $('.add_sell_coin_btn').click(function(){
                $('.add_form_sell_coin').css('display','block');
            })

            
            $('.toast-top-right').fadeOut(5000);

            // add sell coin 
            $('.save_sell_coin').click(function(){
                alert('ok');
            });

        });
        
    </script>
@endsection

@section('css')
    <style type="text/css">
        .add_form_buy_coin,.add_form_sell_coin{
            display: none;
        }
    </style>
    
@endsection