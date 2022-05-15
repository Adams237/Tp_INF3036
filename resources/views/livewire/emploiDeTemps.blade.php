<div >
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center text-uppercase display-6">
                                    <strong class="card-title">{{ $filiere }}-@if ($niveau<4)L{{ $niveau }} @elseif($niveau==4) M1 @else M2 @endif-@if(!empty($specialite)) {{ $specialite }} @endif</strong>
                                </div>
                                <form wire:submit.prevent = "envoyer">
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Horaire</th>
                                                    <th scope="col">Lundi</th>
                                                    <th scope="col">Mardi</th>
                                                    <th scope="col">Mercredi</th>
                                                    <th scope="col">Jeudi</th>
                                                    <th scope="col">Vendredi</th>
                                                    <th scope="col">Samedi</th>
                                                    <th scope="col">Dimanche</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">7H-9h55</th>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H05-12H50</th>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"> 
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                    <td>
                                                        <livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13h-15H55</th>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs">r</td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H05-18H50</th>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H00-21H55</th>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                    <td><livewire:select :filiere="$tabs" :niveau="$tabs" :specialite="$tabs" :effectif="$tabs"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Créer emploi de temps") }}</button>
                                    </div>
                                </form>
                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div>

