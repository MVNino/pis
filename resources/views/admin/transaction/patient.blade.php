@extends('admin.layouts.app')

@section('breadcrumb')
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">News</h4>
	</div>
	<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-home"></i></a></li>
			<li>Transaction</li>
			<li>
				<a class="active" href="{{ route('maintenance.news') }}">All Patients</a>
			</li>
		</ol>
	</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Medical Record</h3>
            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
					<thead>
						<tr>
							<th>Patient Name</th>
							<th>Medical History Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                            <td>Leki Romero</td>
                            <td> October 02, 2009</td>
                            <td>
                                <a role="button" href="#" class="btn btn-sm btn-info">
								<i class="fa fa-eye"></i>
                                </a>
                            </td>
					<tfoot>
						<tr>
							<td colspan="6">
								<div class="text-right">
									<ul class="pagination"> </ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
            <div class="col-sm-12">
                <div class="col-md-3">
                <label class="col-md-12">Last Name</label>
                <div class="col-md-12">
                    <p>1</p>
                </div>
                </div>
                <div class="col-md-3">
                <label class="col-md-12">Last Name</label>
                <div class="col-md-12">
                    <p>1</p>
                </div>
                </div>
                <div class="col-md-3">
                <label class="col-md-12">Middle Name</label>
                <div class="col-md-12">
                    <p>1</p>
                </div>
                </div>
                <div class="col-md-12">
                <label class="col-md-12">Medical History Date</label>
                <div class="col-md-12">
                    <p>1</p>
                </div>
                </div>
            </div>
            <form class="form-material form-horizontal">
                    <div class="col-md-6 form-group">
                        <label class="col-md-12" for="weight">Weight
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="weight" name="weight" class="form-control"> </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label class="col-md-12" for="height">Height
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="height" name="height" class="form-control"> </div>
                    </div>
                <div class="form-group">
                    <label class="col-md-12" for="medicalHistoryDetail">Medical History Detail
                    </label>
                    <div class="col-md-12">
                        <textarea id="medicalHistoryDetail" name="medicalHistoryDetail" rows="5"></textarea> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="temperature">Temperature</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="temperature" name="temperature" class="form-control"> </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12" for="treatment">Treatment</span>
                    </label>
                    <div class="col-md-12">
                        <input type="text" id="treatment" name="treatment" class="form-control"> </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-12">Image</label>
                    <div class="col-sm-12">
                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                            <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                    </div>
                    </div>
                <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection