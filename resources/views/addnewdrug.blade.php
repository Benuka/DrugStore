@extends('layout')

@section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add Drug<small>  Enter Details Correctly</small></h1>
    </section>

    <!-- Main content -->
<section>
    <div class="box box-primary" style="width: 50%; margin-left:30%;">
            <div class="box-header with-border">
              <h3 class="box-title">New Drug</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="InputSRNo">SR No: </label>
                  <input type="text" class="form-control" id="srno" placeholder="SR Number" style="width:65%; border-width: 2px">
                </div>
                <div class="form-group">
                  <label for="InputDrugName">Drug Name:  </label>
                  <input type="text" class="form-control" id="InputDrugName" placeholder="Drug Name">
                </div>
                 <div class="form-group">
                <label>Brand Name</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
              <div class="form-group">
              	<div class="row">
              		<div class="col-xs-5">
              			<div class="input-group date">
                 			 <div class="input-group-addon">
                 			 	<label>MFD: </label>
                   				 <i class="fa fa-calendar"></i>
                 			 </div>
                  				<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                		</div>
              		</div>
                	<div class="col-xs-5">
                		<div class="input-group date">
                 			 <div class="input-group-addon">
                 			 	<label>EXP: </label>
                   				 <i class="fa fa-calendar"></i>
                 			 </div>
                  				<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                		</div>
                	</div>
              	</div>
               </div>
                <div class="form-group">
                	<label for="InputDrugDetails">Drug Details:  </label>
               		 <textarea class="form-control" rows="3" placeholder="Details"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
  
   
  </section>

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