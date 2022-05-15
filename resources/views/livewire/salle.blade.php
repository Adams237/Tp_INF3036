<div>
    <select wire:model.defer="salle" id="salle"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
        <option value="">Salle</option>
        @foreach ($salles as $salle)
                
                <option value="{{ $salle }}">{{ $salle }}</option>
        @endforeach
    </select>
</div>
