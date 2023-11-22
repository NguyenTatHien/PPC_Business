@extends('fullcontractlayout')
@section('content')
<div class="container-fluid">
    <div class="row header">
        <div class="col-md-2 admin-info" style="background-color: #EC808D;">
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-user" style="font-size: 35px; margin-left: 7px;"></i>
                    <p><b>ADMIN</b></p>
                </div>
                <div class="col-md-9">
                    <p><b>Lý Thị Huyền Châu</b></p>
                    <img src="./imgs/online.jpg" width="15px" alt="">
                    <b style="color: lightgreen;">online</b>
                    <a href="" style="float: right; margin-top: 16px; color: white">ĐĂNG XUẤT</a>
                </div>
            </div>

        </div>
        <div class="col-md-10 ppc-info" style="background-color: #FACD91;">
            <div class="logo col-md-1">
                <img src="./imgs/logo.jpg" class="img-responsive" alt="">
            </div>
            <div class="logo-content col-md-11">
                <h4>BẤT ĐỘNG SẢN PPC</h4>
                <p>Xây những giá trị, dựng những ước mơ</p>
            </div>
        </div>
    </div>
    <div class="row main-content">
        <div class="col-md-2 menu" style="background-color: #8B8171;">
            <button class="tablink" onclick="openCity('full-contract', this, '#555')" id="defaultOpen">Danh sách hợp đồng</button><br>
            <button class="tablink" onclick="openCity('listofproperty', this, '#555')">Danh sách bất động sản</button><br>
        </div>
        <div class="col-md-10 view-content">
            <div id="full-contract" class="tabcontent">
                <button name="add_fullcontract" id="btnAdd" data-toggle="modal" data-target="#myModal">Thêm</button>
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Giao diện thêm hợp đồng</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{route('fullcontract.store')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="ID">Loại bất động sản: </label>
                                        <select name="Property_ID" class="form-select">
                                            <option selected>Chọn loại bất động sản</option>
                                            @foreach ($property as $id)
                                                <option value="{{$id->ID}}">{{$id->Property_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Customer_Name">Tên khách hàng:</label>
                                        <input type="text" class="form-control" id="Customer_Name" name="Customer_Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="Mobile">Số di động:</label>
                                        <input type="tel" class="form-control" id="Mobile" name="Mobile">
                                    </div>
                                    <div class="form-group">
                                        <label for="Year_Of_Birth">Năm sinh:</label>
                                        <input type="number" class="form-control" id="Year_Of_Birth" name="Year_Of_Birth">
                                    </div>
                                    <div class="form-group">
                                        <label for="Customer_Address">Địa chỉ:</label>
                                        <input type="text" class="form-control" id="Customer_Address" name="Customer_Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="SSN">SSN:</label>
                                        <input type="text" name="SSN" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="Date_Of_Contract">Ngày lập hợp đồng:</label>
                                        <input type="date" class="form-control" id="Date_Of_Contract" name="Date_Of_Contract">
                                    </div>
                                    <div class="form-group">
                                        <label for="Price">Giá:</label>
                                        <input type="number" class="form-control" id="Price" name="Price">
                                    </div>
                                    <div class="form-group">
                                        <label for="Deposit">Số tiền đã cọc:</label>
                                        <input type="number" class="form-control" id="Deposit" name="Deposit">
                                    </div>
                                    <div class="form-group">
                                        <label for="Remain">Số tiền còn lại:</label>
                                        <input type="number" class="form-control" id="Remain" name="Remain">
                                    </div>
                                    <div class="checkbox">
                                        <label for="Status"><input type="checkbox" name="Status" value="1">Kích hoạt trạng thái</label>
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                <button class="fasearch"><i class="fa fa-search"></i></button>
                <input type="search" name="search" id="search" placeholder="Tìm kiếm">
                <div class="danhsach">
                    <table border="1px">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Mã hợp đồng</th>
                                <th>Giá</th>
                                <th>Ngày lập hợp đồng</th>
                                <th>Khách hàng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fullcontract as $value) 
                                <tr>
                                    <td>{{++$i}}</td>
                                    <td>{{$value->Full_Contract_Code}}</td>
                                    <td>{{$value->Price}}</td>
                                    <td>{{$value->Date_Of_Contract}}</td>
                                    <td>{{$value->Customer_Name}}</td>
                                    <td>
                                        <button class="btn btn-info">Chi tiết</button>
                                        <button class="btn btn-info">Sửa</button>
                                        <button class="btn btn-info">In</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="listofproperty" class="tabcontent">
                
            </div>
        </div>
    </div>
    <footer class="row" style="background-color: #FACD91;">
        <div class="logo col-md-1">
            <img src="./imgs/logo.jpg" class="img-responsive" alt="">
        </div>
        <div class="logo-content col-md-9">
            <h5><b>Bất động sản PPC</b></h5>
            <p><b>Xây những giá trị, dựng những ước mơ</b></p>
        </div>
        <div class="copyright col-md-2">
            &commat;Copyright by FLAMES
        </div>
    </footer>
@endsection