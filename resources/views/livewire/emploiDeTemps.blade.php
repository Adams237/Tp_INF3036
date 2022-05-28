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
                                                        <input wire::model.defer = "L7" type="text" value="{{ $L7 }}" style="border: none ; heigth: 10px;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA7" type="text" value="{{ $MA7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M7" type="text" value="{{ $M7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J7" type="text" value="{{ $J7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V7" type="text" value="{{ $V7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S7" type="text" value="{{ $S7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D7" type="text" value="{{ $D7 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H05-12H50</th>
                                                    <td>
                                                        <input wire::model.defer = "L10" type="text" value="{{ $L10 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA10" type="text" value="{{ $MA10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M10" type="text" value="{{ $M10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J10" type="text" value="{{ $J10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V10" type="text" value="{{ $V10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S10" type="text" value="{{ $S10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D10" type="text" value="{{ $D10 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13h-15H55</th>
                                                    <td>
                                                        <input wire::model.defer = "L13" type="text" value="{{ $L13 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA13" type="text" value="{{ $MA13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M13" type="text" value="{{ $M13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J13" type="text" value="{{ $J13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V13" type="text" value="{{ $V13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S13" type="text" value="{{ $S13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D13" type="text" value="{{ $D13 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H05-18H50</th>
                                                    <td>
                                                        <input wire::model.defer = "L16" type="text" value="{{ $L16 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA16" type="text" value="{{ $MA16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M16" type="text" value="{{ $M16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J16" type="text" value="{{ $J16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V16" type="text" value="{{ $V16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S16" type="text" value="{{ $S16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D16" type="text" value="{{ $D16 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H00-21H55</th>
                                                    <td>
                                                        <input wire::model.defer = "L19" type="text" value="{{ $L19 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA19" type="text" value="{{ $MA19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M19" type="text" value="{{ $M19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J19" type="text" value="{{ $J19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V19" type="text" value="{{ $V19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S19" type="text" value="{{ $S19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D19" type="text" value="{{ $D19 }}" style="border: none ;">
                                                    </td>
                                                </tr>
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

