@extends('exam::layouts.app')
@section('main-content')
   <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <!-- <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button> -->
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>SCHEDULE EXAM<small></small></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Test Name <span class="required">*</span>
                        </label>
                        <div class='input-group date col-sm-5'>
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Date <span class="required">*</span><br><br>Start Time <span class="required">*</span>
                        </label>
                        <div class='input-group date col-sm-2'>
                          <input type="date" id="start_date" onblur="auto_end_date()" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="time" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">End Date <span class="required">*</span><br><br>End Time <span class="required">*</span>
                        </label>
                        <div class='input-group date col-sm-2'>
                          <input type="date" id="end_date" required="required" class="form-control col-md-7 col-xs-12">
                          <input type="time" id="" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Select Class  <span class="required">*</span></label>
                        <div class='input-group date col-sm-5'>
                          <select class="form-control" required="">
                            <option></option>
                            <option>CLASS - XI</option>
                            <option>CLASS - XII</option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Test Duration <span class="required">*</span>
                        </label>
                        <div class='input-group date col-sm-1'>
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12"><span >Minutes</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="" >Set Sections <span class="required">*</span>
                        </label>
                        <div class='input-group date col-sm-8' >
                          Yes <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck">
                          No <input type="radio" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck">
                          <div id="ifYes" style="visibility:hidden">

                            <div class="row">
                              <div class="col-md-10 col-sm-12 col-xs-12">
                                  <div class="x_panel">
                                    <div class="x_title">
                                      <input type="text" id="sname" placeholder="Section Name">
                                      <input type="number" id="cans" placeholder="Correct Answer">
                                      <input type="number" id="wans" placeholder="Wrong Answer">&emsp;
                                      <button type="button" class="add-row btn-small btn-success"><i class="fa fa-plus"></i></button>
                                      <button type="button" class="delete-row btn-small btn-danger"><i class="fa fa-trash"></i></button>
                                    </div>
                      <div class="x_content">
                        <table class="table table-hover">
                          <thead>
                              <tr>
                                  <th width=7%></th>
                                  <th width=43%>Section Name</th>
                                  <th width=25%>Correct Answer</th>
                                  <th width=25%>Wrong Answer</th>
                              </tr>
                          </thead>
                          <tbody>
                              <TR>
                                  <!-- <TD><input type="checkbox" name="record"></TD>
                                  <TD>GROUP - A</TD>
                                  <TD>1</TD>
                                  <TD>0.25</TD> -->
                              </TR>
                          </tbody>
                      </table>


                                    </div>
                                  </div>
                                </div>
                              </div>


                                            </div>
                                          </div>
                                        </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>








          </div>
        </div>
        <!-- /page content -->

@endsection
