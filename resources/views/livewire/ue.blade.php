<div>
    <select wire:model.defer="ue" id="ue"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
        <option  value="">UE</option>
        @foreach ($ues as $ue)
                
                <option value="{{ $ue }}">{{ $ue }}</option>
        @endforeach
    </select>
</div>
