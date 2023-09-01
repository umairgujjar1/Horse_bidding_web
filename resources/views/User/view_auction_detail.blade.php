@extends('User/user_layout')
@section('content')
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <style>
        /* #submit {
        margin: 20px;
        background: skyblue;
        padding: 10px;
        width: 150px;
        border-radius: 10px;
    }

    #submit:hover{
    background:green;
    } */
        .btnn {
            margin-top: 13px;
            padding: 6px;
            width: 90px;
            background: none;
            border: 2px solid #fff;
            font-size: 15px;
            color: #131313;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            border-radius: 12px;
            background-color: #ecd448;
            font-weight: bolder;
            box-shadow: 0 2px 0 2px #000;
        }

        .btnn:before {
            content: "";
            position: absolute;
            width: 100px;
            height: 120%;
            background-color: #ff6700;
            top: 50%;
            transform: skewX(30deg) translate(-150%, -50%);
            transition: all 0.5s;
        }

        .btnn:hover {
            background-color: #4cc9f0;
            color: #fff;
            box-shadow: 0 2px 0 2px #0d3b66;
        }

        .btnn:hover::before {
            transform: skewX(30deg) translate(150%, -50%);
            transition-delay: 0.1s;
        }

        .btnn:active {
            transform: scale(0.9);
        }
    </style>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6">
                <h1 style="color:dark-brown;">=>{{ $selected_auction[0]->title }}</h1>
                <img src="{{ asset('images/' . $selected_auction[0]->image) }}" width="100%"
                    style="border-radius:14px; box-shadow: 0px 14px 13px 5px #888888;">
            </div>

            <div class="col-md-6" style="margin-top: 140px; font-size:14px;">
                <table>
                    <tr>
                        <th>Categorey :</th>
                        <td>{{ $selected_auction[0]->categorey_name }}</td>
                    </tr>

                    <tr>
                        <th>Type :</th>
                        <td>{{ $selected_auction[0]->type }}</td>
                    </tr>
                    <tr>
                        <th>Age :</th>
                        <td>{{ $selected_auction[0]->age }}</td>
                    </tr>
                    <tr>
                        <th>Height :</th>
                        <td>{{ $selected_auction[0]->height }}</td>
                    </tr>
                    <tr>
                        <th>Weight :</th>
                        <td>{{ $selected_auction[0]->weight }}</td>
                    </tr>
                    <tr>
                        <th>Price :</th>
                        <td>${{ $selected_auction[0]->price }}</td>
                    </tr>
                    {{-- <tr>
                    <th>Image-Name :</th>
                    <td>{{$selected_auction[0]->image}}</td>
                </tr> --}}
                    <tr>
                        <th>Start Date :</th>
                        <td>{{ $selected_auction[0]->start_date }}</td>
                    </tr>

                    <tr>
                        <th>End Date :</th>
                        <td>{{ $selected_auction[0]->end_data }}</td>
                    </tr>

                    <tr>
                        <th>Status :</th>
                        <td>{{ $selected_auction[0]->status }}</td>
                    </tr>

                    <tr>

                        <th class="">Description :</th>

                        <td>{{ $selected_auction[0]->description }}</td>

                    </tr>
                    @if (Auth::user() != '')
                        <tr>
                            <th>
                                <h3 Style="color:Green">Enter Your Bid</h3>
                            </th>
                        </tr>

                        <tr>
                            <th>
                                <label>Amount</label>
                                <form action="{{ URL::to('user-save-bid') }}" method="post">

                                    @csrf

                                    <input type="hidden" value="{{ $selected_auction[0]->id }}" name="aution_id">
                                    <input type="hidden" value="{{ $selected_auction[0]->price }}" name="aution_price">
                                    <input type="hidden" value="{{ $selected_auction[0]->title }}"
                                        name="horse_name">
                                    <input type="number" name="amount" placeholder="Enter Amount"
                                        style="    border-radius: 7px;
    padding: 10px;">
                            <td><button type="submit" class="btnn mt-4" Style="width:80px !important;height:50px !important"> Submit Bid</button></td>

                            </th>
                        </tr>
                    @else
                        <tr>
                            <th>
                                <br><br>
                                <p>Please login for Bid.</p>

                                <ul>
                                    <li class="btnn"><a href="{{ url('login') }}"
                                            style="background:none !important ;color:white;font-weight:bold ; background-color: #5ba14f;">
                                            Login</a></li>

                                </ul>
                            </th>
                        </tr>
                    @endif
                </table>
            </div>


        </div>


    </div>

    <br><br>
@endsection
