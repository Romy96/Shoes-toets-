@extends('layout')

@section('content')


<h1>Shoe brands</h1>

<div class="container">
	<div class="row">
        <div class="col-md-6">
    		<h2>Search</h2>
    		<form method="get" action="index.php">
	            <div id="custom-search-input">
	                <div class="input-group col-md-12">
	                    <input type="text" name="shoe_brand" id="shoe_brand" class="form-control input-lg" placeholder="insert shoe brand here" />
		                    <span class="input-group-btn">
		                        <button class="btn btn-info btn-lg" type="submit">
		                            <i class="glyphicon glyphicon-search"></i>
		                        </button>
		                    </span>
	                </div>
	            </div>
            </form>
        </div>
	</div>
</div>

<div class="table-responsive">
  <table class="table">
  		<thead>
	    	<tr>
	    		<th><a href="index.php">Shoe brand</a></th>
	    		<th>Shoe size</th>
	    		<th>Amount of size</th>
	    		<th></th>
	    	</tr>
    	</thead>
    	<tbody>
			@if(isset($shoes))
				@foreach ($shoes as $row)
					<tr>
						<td>
							{{$row['shoe_brand']}}
						</td>
						<td>
							{{$row['shoe_size']}}
						</td>
						<td>
							{{$row['amount_of_size']}}
						</td>
						<td>
                            <div class="btn-group">
                            	<a href="edit.php?id={{$row['id']}}">Edit</a>
                                <a href="delete_action.php?id={{$row['id']}}" onclick="return confirm('Weet je het zeker?')">Delete</a>
                            </div>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
  </table>

  							@if(isset($shoe_sizes))
	  							<form method="post" action="index.php">
				                    <div class="input-group">
					                    <div class="dropdown">
										  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Shoe sizes
										  <span class="caret"></span></button>
										  <ul class="dropdown-menu">
										  	@foreach ($shoe_sizes as $row_2)
										    	<li><a href="index.php">{{$row_2['shoe_size']}}</a></li>
										    @endforeach
										  </ul>
										</div>
									</div>
								</form>
							@endif
</div>

@endsection