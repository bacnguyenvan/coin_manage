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
        <?php
        $total_number = 0;
        $total_sell_price = 0;
        ?>
        @foreach($list_sell as $key => $item)
        <?php
        $total_number += $item->number;
        $total_sell_price += ($item->number)*($item->sell_price);
        ?>
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->date_transaction}}</td>
            <td>{{$item->number}}</td>
            <td>{{number_format($item->sell_price)}}</td>
        </tr>
        @endforeach
        <tr>
            <th scope="row">Total</th>
            <td></td>
            <td>{{$total_number}}</td>
            <td>{{number_format($total_sell_price)}}</td>
        </tr>
    </tbody>
</table>