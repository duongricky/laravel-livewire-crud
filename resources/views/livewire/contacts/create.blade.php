<div>
    <h2>New Contact</h2>
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
    <button wire:click="store()" class="btn btn-primary">Save</button>
</div>
