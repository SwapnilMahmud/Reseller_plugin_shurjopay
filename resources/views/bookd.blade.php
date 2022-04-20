

@extends('table')
    @section('content')   
<div class="container">
    <!-- <h1>task 1</h1>
    <a class="btn btn-success" href="javascript:void(0)" id="createNewBook"> Create New Book</a><br><br> -->
    <table class="table table-bordered data-table table-striped ">
        <thead>
            <tr>
                <!-- <th>name</th>
                <th>address</th>
                <th>email</th>
                <th>city</th>
                <th>country</th>  
            <th>Name</th>              -->
                 <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Country</th>
                <th>City</th>
                <th>Post code</th>
				<th>Order id</th>
                <th>Bank Status</th>
                <th>Bank Trx Id</th>
				<th>Payment method</th>
                <th>Invoice no</th>
                <th>Sp message</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>   
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="bookForm" name="bookForm" class="form-horizontal">
                   <input type="hidden" name="book_id" id="book_id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Details</label>
                        <div class="col-sm-12">
                            <textarea id="author" name="author" required="" placeholder="Enter Author" class="form-control"></textarea>
                        </div>
                    </div>      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



