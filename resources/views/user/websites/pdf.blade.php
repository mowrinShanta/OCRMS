

<h1 style="text-align:center;">Complainer Submited Information Copy</h1>


<table class="table">
    <thead>
    <tr>
        
        <th scope="col" style="padding: 10px;">Issue Date</th>
        <th scope="col" style="padding: 10px;">Issue Time</th>
        <th scope="col" style="padding: 10px;">Complainer Name</th>
        <th scope="col" style="padding: 10px;">Complainer Address</th>
        <th scope="col" style="padding: 10px;">Complainer Phone</th>
        <th scope="col" style="padding: 10px;">Complainer Email</th>
        <th scope="col" style="padding: 10px;">Complaint Type</th>
        <th scope="col" style="padding: 5px;">Complaint Details</th>
        <th scope="col" style="padding: 5px;">Problem Place Photo</th>
        
    </tr>
    </thead>
    <tbody>
    @foreach($informations as $key=>$information)
<tr>
   
    <td>{{$information->date}} </td>
    <td>{{$information->time}} </td>
    <td>{{$information->name}} </td>
    <td>{{$information->address}} </td>
    <td>{{$information->cell}} </td>
    <td>{{$information->email}} </td>
    <td>{{$information->complainttype}} </td>
    <td>{{$information->description}} </td>
    
    
    
    </tr>

@endforeach


    
    </tbody>
</table>
