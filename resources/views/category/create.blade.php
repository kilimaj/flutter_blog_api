@extends('layout')
@section('dashboard-content')
    <h1>Create category form</h1>

    <form>
        <div class="form-group">
          <label for="categoryName">Category Name</label>
          <input type="text" class="form-control" id="categoryName" aria-describedby="categoryName" placeholder="Enter category name" name="categoryName">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@stop