@extends('layout')

@section('content')

@if(isset($shoe))
@foreach ($shoe as $row)

<h1>Edit</h1>

 <div class="row">
        <form role="form" method="post" action="edit_action.php">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">   <!-- white background -->
                        <div class="box-body">      <!-- some whitespace -->
                            <div class="box-body">  
                                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                                <div class="form-group">
                                    <label for="brand">Shoe brand:</label>
                                    <div class="input-group">
                                    	<input type="hidden" name="id" value="{{$row['id']}}">
                                        <input type="text" class="form-control" id="brand" name="brand"  value="{{$row['shoe_brand']}}" required>
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="size">Shoe size:</label>
                                     <div class="input-group">
                                        <input type="number" class="form-control" data-slug="source" value="{{$row['shoe_size']}}" id="size" name="size">
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="amount">Amount of shoe size:</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" data-slug="source" value="{{$row['amount_of_size']}}" id="amount" name="amount">
                                	</div>
                                </div>
                                <input type="submit" name="btn-submit" id="submit" value="Submit" class="btn btn-info pull-right">
                            </div>
                        </div>
                    </div>
            </div>
        </form>
    </div>

@endforeach
@endif

@endsection