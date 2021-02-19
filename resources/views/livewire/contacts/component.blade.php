<div>
    <div class="row">
        <div class="col-md-6">
            @if($updateMode)
                @include('livewire.contacts.update')
            @else
                @include('livewire.contacts.create')
            @endif
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <table class="table table-bordered table-condensed">
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Phone</td>
                <td>Address</td>
                <td></td>
            </tr>
            @foreach($data as $row)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->phone_number }}</td>
                    <td>{{ $row->address }}</td>
                    <td width="150">
                        <button wire:click="edit({{ $row->id }})" class="btn btn-xs btn-primary">Edit</button>
                        <button wire:click="destroy({{ $row->id }})" class="btn btn-xs btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
