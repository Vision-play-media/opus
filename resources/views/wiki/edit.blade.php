@extends('layouts.app')

@section('content')
	<div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <h3 style="margin: 0; margin-bottom: 10px;">Edit Wiki</h3>
        </div>
    </div>
	<div class="row">
	    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	    	<form action="{{ route('wikis.update', $wiki->slug) }}" method="POST" role="form" style="margin-bottom: 10px;">
             	{!! method_field('patch') !!}
                <div class="form-group @if($errors->has('wiki_name')) has-error  @endif">
                    <label for="organization_name" class="control-label">Wiki Name</label>
                    <input type="text" class="form-control" name="wiki_name" id="wiki_name" value="{{ $wiki->name }}">
                    @if($errors->has('wiki_name'))
                        <p class="text-danger">{{ $errors->first('wiki_name')  }}</p>
                    @endif
                </div>
            	<div class="form-group">
            		<label for="textarea" class="control-label">Description</label>
        			<textarea name="wiki_description" id="page-description" class="form-control">{{ $wiki->description }}</textarea>
            	</div>
            	<ul class="list-unstyled list-inline pull-right">
            		<li>
		                <input type="submit" class="btn btn-primary" value="Save">
            		</li>
            		<li>
		                <input type="submit" class="btn btn-default" value="Close">
            		</li>
            	</ul>
                <div class="clearfix"></div>
            </form>
	    </div>
	</div>
@endsection