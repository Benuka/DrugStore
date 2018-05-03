@extends('layout')

@section('content')
    
    <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Pending Orders</h1>
    </section>

    <!-- Main content -->
  <section>
   <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             <!--  <h3 class="box-title">Pending Orders</h3> -->

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-striped">
                <tr>
                  <th>ID</th>
                  <th>Date</th>
                  <th>Ordered for</th>
                  <th>Drugs Order</th>
                  <th>Status</th>                  
                </tr>
                <tr>
                  <td>Ord_0012</td>
                  <td>03-02-2018</td>
                  <td>Ward-02</td>
                  <td><ul>
                    <li>pheniramine - 10</li>
                    <li>Chlopheniramine Syup - 5 </li>
                    <li>Diclofinac Sodium - 200 </li>
                    <li>Dexamethazone - 75</li>
                  </ul></td>
                  <td><span class="label label-danger">Reject</span> <span class="label label-primary">Accept</span> </td>

                </tr>
                <tr>
                  <td>Ord_0011</td>
                  <td>03-02-2018</td>
                  <td>Indoor Dispensary</td>
                  <td><ul>
                    <li>pheniramine - 10</li>
                    <li>Chlopheniramine Syup - 5 </li>
                    <li>Diclofinac Sodium - 200 </li>
                    <li>Dexamethazone - 75</li>
                  </ul></td>
                  <td class="button_td"><button type="button" class="btn btn-block btn-danger btn-sm">Danger </button> <button type="button" class="btn btn-block btn-success btn-sm">Success</button> </td>

                </tr>

                <tr>
                  <td>Ord_0010</td>
                  <td>04-02-2018</td>
                  <td>Ward-03</td>
                  <td><ul>
                    <li>pheniramine - 10</li>
                    <li>Chlopheniramine Syup - 5 </li>
                    <li>Diclofinac Sodium - 200 </li>
                    <li>Dexamethazone - 75</li>
                  </ul></td>
                  <td><span class="label label-danger">Reject</span> <span class="label label-primary">Accept</span> </td>

                </tr>

                <tr>
                  <td>Ord_0001</td>
                  <td>31-01-2018</td>
                  <td>Ward-05</td>
                  <td><ul>
                    <li>pheniramine - 10</li>
                    <li>Chlopheniramine Syup - 5 </li>
                    <li>Diclofinac Sodium - 200 </li>
                    <li>Dexamethazone - 75</li>
                  </ul></td>
                  <td><span class="label label-danger">Reject</span> <span class="label label-primary">Accept</span> </td>

                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>

 </div>
@stop