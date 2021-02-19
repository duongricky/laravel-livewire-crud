<div>
    <h2>Edit Contact</h2>
    <input type="hidden" wire:model="selected_id">
    <div class="form-group">
        <label for="email">Name:</label>
        <input wire:model="name" type="text" class="form-control">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Phone:</label>
        <input wire:model="phone" type="text" class="form-control">
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="pwd">Address:</label>
        <input wire:model="address" type="text" class="form-control">
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button wire:click="update()" class="btn btn-primary">Update</button>
    <button wire:click="cancel()" class="btn btn-default">Cancel</button>
</div>
