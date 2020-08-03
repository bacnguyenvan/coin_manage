@extends('admin.layouts.app') 
@section('title','Home')
@section('content')
    {{-- content  --}}
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">Coins always make sounds, but paper money are always silent. 
                                <br>So when your value increases, keep yourself silent and humble.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Hope start" data-placement="bottom" class="btn-shadow mr-3 btn btn-info">
                        <i class="fa fa-star"></i>
                        </button>
                       
                    </div>    
                </div>
            </div>            
            <div class="row">
                
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Orders</div>
                                    <div class="widget-subheading">Coin</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total</div>
                                    <div class="widget-subheading">Number coin</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning">210</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total</div>
                                    <div class="widget-subheading">Profit</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-danger">45,9%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Income</div>
                                    <div class="widget-subheading">Expected totals</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-focus">$147</div>
                                </div>
                            </div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                </div>
                                <div class="progress-sub-label">
                                    <div class="sub-label-left">Expenses</div>
                                    <div class="sub-label-right">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Coin list
                           <div class="btn-actions-pane-right">
                                <div role="group" class="btn-group-sm btn-group">
                                    <a href="" class="btn btn-success">
                                        <i class="fa fa-plus"></i>
                                    Create new coin
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Buy</th>
                                        <th class="text-center">Sell</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="xrp_coin">
                                        <td class="text-center text-muted">1</td>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="assets/images/coin/xrp.png" alt=""></div>
                                                    </div>
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">XRP</div>
                                                        <div class="widget-subheading opacity-7">ripple</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center buyPrice">6.782</td>
                                        <td class="text-center sellPrice">6.557</td>
                                        <td class="text-center">
                                            <div class="badge badge-success profitCoin">
                                            +7.775</div>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Transaction</button>
                                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
            
        </div>
        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Stay hungry stay foolish
                                </a>
                            </li>
                           
                        </ul>
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

            setInterval(function() {
                
                getMarket();
            },10000); 

            function getMarket()
            {
                var buyPrice = '';
                var sellPrice = '';
                var profit = '';

                $.ajax({
                    url : '/getMarket',
                    method : 'get',
                    type : 'json',
                    success : function(object){
                        for(var item in object){
                            var data = object[item];
                            console.log(data);
                            for(var item in data){
                                if(data[item]['assetName'] == "XRP"){
                                    buyPrice = data[item]['buyPrice'];
                                    sellPrice = data[item]['sellPrice'];
                                    profit = data[item]['change24h'];

                                    break;
                                }
                            }
                            
                            
                        }
                      

                        $(".buyPrice").text(buyPrice);
                        $(".sellPrice").text(sellPrice);
                        $(".profitCoin").text(profit);
                    }
                });
            }
        })
    </script>
@endsection
        
                