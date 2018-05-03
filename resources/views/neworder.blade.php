@extends('layout')

@section('content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Place New Orders</h1>
    </section>
    <section class="content">
   		 <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Order</h3>

        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              
            	<div class="form-group">

            	<div class="col-6 col-sm-4">
            		<label>Ordered By: </label>
            	</div>	
                <div class="col-6">
                <select class="form-control select2" disabled="disabled" style="width: 30%;">
                  <option selected="selected">Ward No 5</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
                </div>
              </div>
            

              <div class="form-group">
              	<div class="col-6 col-sm-4">
                <label>Incharge Personell</label>
            </div>
                <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Nurse Name</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
           <div class="col-6 col-sm-2">
               <label>Date:</label>
           </div>
           <div class="col-6">
                <div class="input-group date" style="width: 30%;">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" >
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              </div>
             </div>
              <!-- /.form-group -->


              <div class="col-md-6">
              <div class="form-group">
           <div class="col-6 col-sm-2">
               <label>Urgency:</label>
           </div>
           <div class="col-6">
                 <select class="form-control select2" style="width: 50%;">
                  <option selected="selected">Nurse Name</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              </div>
             </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>

    <!-- 	<div class="box">
    		<label>Requested For: </label><br>
    		<label>Order Date</label><input type="Date" name="">
    	</div>
     -->
</div>
    <script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>

<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
      
    })

  
  $('#datepicker').datepicker({
    minDate:new Date(),
 disabledDates: [new Date()]
  });


    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

@stop