@if ($errors -> any())
    <div class="w3-container w3-red w3-margin">
        <span onclick="this.parentElement.style.display='none'" class="w3-closebtn">&times;</span>
        <h3>Failed!!!!</h3>
          <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>

@endif

