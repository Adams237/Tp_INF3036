<div>
        <select wire:change="updatedProfesseur" wire:model.defer="professeur" id="professeur"  style=" padding: 5px; width:150px; heigth:50px; margin-top: 1px; border:none; position:relative"  tabindex="1">
            <option  value="">Professeur</option>
            @foreach ($enseignants as $enseignant)
                    
                    <option value="{{ $enseignant }}">{{ $enseignant }}</option>
            @endforeach
        </select>
</div>
