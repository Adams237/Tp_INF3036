<div>
    <form wire:submit.prevent="send" enctype="multipart/form-data" >
        <input type="text" wire:model="name" class="border-gray-600 border-2 block my-2">
        <textarea wire:model="content"  cols="30" rows="10" class="border-gray-600 border-2 block my-2"></textarea>

        <label for="avatar">Entrer une image</label>
        <input type="file" wire:model="avatar" name="avatar" id="avatar" accept="image/*" class="border-gray-600 border-2 block my-2">
        @error('avatar')
            <span class="error">{{ $message }}</span>
        @enderror

        <button type="submit">créer</button>
    </form>
</div>
