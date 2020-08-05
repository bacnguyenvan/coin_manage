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
                            <div class="page-title-subheading">Stay hungry stay foolish.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Hoping start" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                {{$name_coin}}
                            </button>
                            
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
                                                    $key = 0;
                                                    $total_number_buy = 0;
                                                    $total_buy_price = 0;
                                                 ?>
                                                @foreach($list_buy as  $item)
                                                <?php 
                                                    $key +=1;
                                                    $total_number_buy += $item->number;
                                                    $total_buy_price += ($item->number)*($item->buy_price);
                                                 ?>
                                                <tr>
                                                    <th scope="row">{{$key}}</th>
                                                    <td>{{$item->date_transaction}}</td>
                                                    <td>{{$item->number}}</td>
                                                    <td>{{number_format($item->buy_price)}}</td>
                                                </tr>
                                                @endforeach
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>{{$total_number_buy}}</td>
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
                                                <input type="hidden" name="transaction_id" value="{{$transaction_id}}">
                                                <input type="hidden" name="user_id" value="{{Auth::guard('admin')->user()->id}}">
                                                <input type="hidden" name="form_name" value="form_add_coin_buy">

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
                                        <div class="card-body table_coin_sell">
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
                                                    $total_number_sell = 0;
                                                    $total_sell_price = 0;
                                                    $key = 0;
                                                ?>
                                                @foreach($list_sell as  $item)
                                                <?php 
                                                $key += 1;
                                                    $total_number_sell += $item->number;
                                                    $total_sell_price += ($item->number)*($item->sell_price);
                                                 ?>
                                                <tr>
                                                    <th scope="row">{{$key}}</th>
                                                    <td>{{$item->date_transaction}}</td>
                                                    <td>{{$item->number}}</td>
                                                    <td>{{number_format($item->sell_price)}}</td>
                                                </tr>
                                                @endforeach
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>{{$total_number_sell}}</td>
                                                    <td>{{number_format($total_sell_price)}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info mb-4 add_sell_coin_btn"> <i class="fa fa-plus"></i> Add </button>
                                    <div class="main-card mb-3 card add_form_sell_coin">
                                        <div class="card-body"><h5 class="card-title">Add coin sell</h5>
                                            <form class="" method="POST" id="form_add_coin_sell">
                                                @csrf
                                                <input type="hidden" name="transaction_id" value="{{$transaction_id}}">
                                                <input type="hidden" name="user_id" value="{{Auth::guard('admin')->user()->id}}">
                                                <input type="hidden" name="form_name" value="form_add_coin_sell" required="">
                                                <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Date</label>
                                                    <div class="col-sm-10"><input name="date_transaction" id="exampleEmail" placeholder="Enter date transaction" type="datetime-local" class="form-control" required=""></div>
                                                </div>
                                                <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Number</label>
                                                    <div class="col-sm-10"><input name="number" id="examplePassword" placeholder="Enter number coin sell" type="number" min="0" class="form-control" required=""></div>
                                                </div>
                                                
                                               
                                                <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10"><input name="sell_price" id="exampleText" class="form-control" placeholder="Enter price sell 1 coin">
                                                    </div>
                                                </div>
                                               
                                                
                                                <div class="alert message_save">
                                                    
                                                </div>
                                                <div class="position-relative row form-group">
                                                    <div class="col-sm-10 offset-sm-2">
                                                        <button type="submit" class="btn btn-secondary ">Save</button>
                                                        {{-- <button type="button" class="btn btn-secondary save_sell_coin">Save</button> --}}
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
                                            <h5 class="card-title">Date: {{date('d/m/Y')}}</h5>
                                            <div class="">
                                                <p><b>Keeping</b>: <b style="color: #3f6ad8">{{$total_number_buy-$total_number_sell}}</b> coins</p>
                                                <p><b>Profit</b>: 
                                                    <?php 
                                                        $profit = $total_sell_price-$total_buy_price;
                                                        if($profit > 0){ 
                                                    ?>
                                                        <b style="color: green">+{{number_format($profit)}}</b>
                                                    <?php }else{ ?>
                                                        <b style="color: red">-{{number_format($profit)}}</b>
                                                    <?php  } ?>
                                                </p>
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
                var data = $("#form_add_coin_sell").serialize();
                $.ajax({
                    url: '/addCoinSell',
                    type : 'post',
                    data : data,
                    success : function(data){
                        $('.message_save').css('display','block');

                        if(data == "-1"){
                            $('.message_save').removeClass('alert-success');
                            $('.message_save').addClass('alert-danger');
                            $('.message_save').text('plese enter all field !');
                            $('.message_save').fadeOut(10000);
                        }else{
                            $('.table_coin_sell').html(data);

                            $('.message_save').removeClass('alert-danger');
                            $('.message_save').addClass('alert-success');
                            $('.message_save').text('Save coin sell success');
                            $('.message_save').fadeOut(10000);
                        }
                    }

                });
            });

            
        });
        
    </script>
@endsection

@section('css')
    <style type="text/css">
        .add_form_buy_coin,.add_form_sell_coin,.message_save{
            display: none;
        }
    </style>
    
@endsection