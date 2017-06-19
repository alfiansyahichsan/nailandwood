@extends('layouts.admin')


@section('judul')
Event - Home
@stop

@section('nav5')
class="active"
@stop


@section('js')
<script src="{{asset('js/meeepo.js')}}"></script>

@section('konten')
<p>Form untuk input data Event yang akan ditampilkan pada tampilan HOME</p>
@if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif
 <div align="left" style="margin-top: 20px; margin-right: 25px;">
        <button type="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal" class="btn btn-success">Add</button>
     
    </div>
 <div class="table-responsive" style="margin-top: 20px;">
 <form>
     <table class="table table-striped table-hover">
         <thead>
         <tr>
             <th>ID</th>
             <th>Date</th>
             <th>Event Name</th>
             <th>Venue</th>
             <th>Location</th>
             <th>Ticket</th>
             <th>Link</th>
             <th colspan="3">Actions</th>
         </tr>
         </thead>
         <tbody>
                @foreach(\App\Event::Event() as $acara)
                <tr>
                    <td>{{ $acara->id }}</td>
                    <td>{{ $acara->date }}</td>
                    <td>{{ $acara->eventname }}</td>
                    <td>{{ $acara->venue }}</td>
                    <td>{{ $acara->location }}</td>
                    <td>{{ $acara->tickets }}</td>
                    <td>{{ $acara->link }}</td>
                    <td><a href="" class="btn btn-info">Edit</a></td>
                    <td><a href="" class="btn btn-danger">Delete</a></td>
                    
                </tr>
                @endforeach

         </tbody>
 </table>
 </form>
 </div>


    <div id="add_data_Modal" class="modal fade">
         <div class="modal-dialog">
          <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Insert Data Event</h4>
           </div>
           <div class="modal-body" style="padding-left: 30px; padding-right: 35px;">
            <form action="/acara" method="POST" id="insert_form">
            {{ csrf_field() }}
                 <label>Date</label>
                 <input type="datetime-local" name="date" id="date" class="form-control" required/>
                 <br />
                 <label>Event Name</label>
                 <input type="eventname" name="eventname" id="eventname" class="form-control" required></input>
                 <br />
                 <label>Venue</label>
                 <input type="venue" name="venue" id="venue" class="form-control" required></input>
                 <br />
                 <label>Location</label>
                 <input type="location" name="location" id="location" class="form-control" required />
                 <br />  
                 <label>Ticket/Free</label>
                 <input type="tickets" name="tickets" id="tickets" class="form-control" required/>
                 <br />
                 <label>Link</label>
                 <input type="link" name="link" id="link" class="form-control" />
                 <br /> 

                 <input type="submit" value="Submit" class="btn btn-success" />

            </form>
           </div>
           <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           </div>
          </div>
         </div>
    </div>
    
<script>  
    $(document).ready(function(){
     $('#insert_form').on("submit", function(event){  
      event.preventDefault();  
      if($('#date').val() == "")  
      {  
       alert("Name is required");  
      }  
      else if($('#address').val() == '')  
      {  
       alert("Address is required");  
      }  
      else if($('#designation').val() == '')
      {  
       alert("Designation is required");  
      }
       
      else  
      {  
       $.ajax({  
        url:"insert.php",  
        method:"POST",  
        data:$('#insert_form').serialize(),  
        beforeSend:function(){  
         $('#insert').val("Inserting");  
        },  
        success:function(data){  
         $('#insert_form')[0].reset();  
         $('#add_data_Modal').modal('hide');  
         $('#employee_table').html(data);  
        }  
       });  
      }  
     });




     $(document).on('click', '.view_data', function(){
      //$('#dataModal').modal();
      var employee_id = $(this).attr("id");
      $.ajax({
       url:"select.php",
       method:"POST",
       data:{employee_id:employee_id},
       success:function(data){
        $('#employee_detail').html(data);
        $('#dataModal').modal('show');
       }
      });
     });
    });  
 </script>

@stop
@endsection