<div>
    <select wire:model.defer="ue" id="ue"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
        <option  value="">UE</option>
        @foreach ($tabs as $tab)
                
                <option value="{{ $tab }}">{{ $tab }}</option>
        @endforeach
    </select>
    <select wire:model.defer="professeur" id="professeur"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
        <option  value="">Professeur</option>
        @foreach ($tabs as $tab)
                
                <option value="{{ $tab }}">{{ $tab }}</option>
        @endforeach
    </select>
    <select wire:model.defer="salle" id="salle"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
        <option value="">Salle</option>
        @foreach ($tabs as $tab)
                
                <option value="{{ $tab }}">{{ $tab }}</option>
        @endforeach
    </select>
</div>
