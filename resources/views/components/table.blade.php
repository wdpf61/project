


<tr>
    <td>{{$user->id}}</td>
    <td>
        <div class="d-flex align-items-center ">
            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 simple-table-avtar">
                <img src="{{asset('assets')}}/images/avtar//1.png" alt="" class="img-fluid">
            </div>
            <p class="mb-0 f-w-500 ">{{$user->name}}</p>
        </div>
    </td>
    <td class="f-w-500">Architect</td>
    <td class="text-secondary f-w-600">Edinburgh</td>
    <td><span class="badge text-light-primary">active</span></td>
    <td class="text-success f-w-500">$320,800</td>
    <td>+1 (025) {{$user->mobile}}</td>
</tr>