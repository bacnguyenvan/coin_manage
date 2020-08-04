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
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
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
                                            {{-- <h5 class="card-title">Table with hover</h5> --}}
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
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info"> <i class="fa fa-plus"></i> Add </button>
                                </div>
                                <div class="tab-pane tab-sell" id="tab-animated1-1" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            {{-- <h5 class="card-title">Table with hover</h5> --}}
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
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info"> <i class="fa fa-plus"></i> Add </button>
                                </div>
                                <div class="tab-pane tab-profit" id="tab-animated1-2" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            {{-- <h5 class="card-title">Table with hover</h5> --}}
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
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                
                                                <tr>
                                                    <th scope="row">Total</th>
                                                    <td></td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <button class="btn btn-info"> <i class="fa fa-plus"></i> Add </button>
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
        });
        
    </script>
@endsection