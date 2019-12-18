@extends('layouts.master')
@section ('css')
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
@endsection
@section('content')
<div>
        <h3>Category Manage</h3>
    </div>
    <hr width="100%">
    <button class="btn btn-primary" style="float:right;margin-right:10px" type="submit" id="addCategory">+ Add Category</button>
    <form action="{{route('category.index')}}">
      @csrf
      <div class="form-group">
        <input type="text" name="nameSrc" placeholder="Name category">
        <input type="text" name="descriptionSrc" placeholder="Description category">
        <button class="btn btn-primary">Sreach</button>
    </div>
    </form>
    <div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <th scope="col">Stt</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Banner</th>
                <th scope="col">Setting</th>
            </thead>
            <tbody>
              @foreach ($data as $dt)
                <tr>
                    <th scope="row">{{$dt->id}}</th>
                    <td>{{$dt->name}}</td>
                    <td>{{$dt->description}}</td>
                    <td>
                      <img src="/upload/banner/{{$dt->banner}}" height="70" width="150"> 
                    </td>
                    <td>
                      <form action="{{route('category.edit',$dt->id)}}" method="GET">
                        <button type="submit" class="btn btn-default btn-sm" class="editCategory">
                          <span class="octicon-pencil"></span> Edit
                        </button>
                      </form>
                      <form action="{{route('category.destroy',$dt->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-default btn-sm" onclick="return confirm('You want to delete the category {{$dt->name}}')">
                          <span class="octicon-pencil"></span> Delete
                        </button>
                      </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>

    <div id="myModal" class="modal">
    <form action="{{route('category.store')}}"  method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-content">
        <span class="close">&times;</span>
        <h4>Add Category </h4>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" >Name</span>
                </div>
                <input type="text" class="form-control" name="name" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"  id="inputGroup-sizing-default">Description</span>
                </div>
                <input type="text" class="form-control" name="description" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile04" name="banner">
                <label class="custom-file-label" for="inputGroupFile04">Choose image banner</label>
            </div>
            </div>
        </div>
        <button class="btn btn-primary">Submit</button>
    </div>      
    </form>
    </div>
    <script>
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("addCategory");
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
      modal.style.display = "block";
    }
    span.onclick = function() {
      modal.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
    </script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#loginForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
});
Setting op
  </script>
@endsection