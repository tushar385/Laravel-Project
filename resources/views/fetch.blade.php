
<div>
    <ul>  
        @foreach($data as $i)<br>
        <li><h5>User Data</h5></li>
        date: {{$i->date}}<br>
        Username: {{$i->username}}<br>
        email: {{$i->email}}<br>
        password:{{$i->password}}<br>
        phone: {{$i->phone}}<br>
        country: {{$i->country}}<br>
        state: {{$i->state}}<br>
        gender:{{$i->gender}}<br>
        Identification: {{$i->Identification}}<br>
        Language: {{$i->Language}}<br>
        @endforeach
    </ul>

</div>




