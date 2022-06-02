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
                                                        <input wire::model.defer = "L7" type="text" value="{{ $L7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LE7" type="text" value="{{ $LE7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LS7" type="text" value="{{ $LS7 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA7" type="text" value="{{ $MA7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAE7" type="text" value="{{ $MAE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAS7" type="text" value="{{ $MAS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M7" type="text" value="{{ $M7 }}" style="border: none ;">
                                                        <input wire::model.defer = "ME7" type="text" value="{{ $ME7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MS7" type="text" value="{{ $MS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J7" type="text" value="{{ $J7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JE7" type="text" value="{{ $JE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JS7" type="text" value="{{ $JS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V7" type="text" value="{{ $V7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VE7" type="text" value="{{ $VE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VS7" type="text" value="{{ $VS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S7" type="text" value="{{ $S7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SE7" type="text" value="{{ $SE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SS7" type="text" value="{{ $SS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D7" type="text" value="{{ $D7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DE7" type="text" value="{{ $DE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DS7" type="text" value="{{ $DS7 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H05-12H50</th>
                                                    <td>
                                                        <input wire::model.defer = "L10" type="text" value="{{ $L10 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LE10" type="text" value="{{ $LE10 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LS10" type="text" value="{{ $LS10 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA10" type="text" value="{{ $MA10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAE10" type="text" value="{{ $MAE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAS10" type="text" value="{{ $MAS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M10" type="text" value="{{ $M10 }}" style="border: none ;">
                                                        <input wire::model.defer = "ME10" type="text" value="{{ $ME10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MS10" type="text" value="{{ $MS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J10" type="text" value="{{ $J10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JE10" type="text" value="{{ $JE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JS10" type="text" value="{{ $JS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V10" type="text" value="{{ $V10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VE10" type="text" value="{{ $VE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VS10" type="text" value="{{ $VS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S10" type="text" value="{{ $S10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SE10" type="text" value="{{ $SE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SS10" type="text" value="{{ $SS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D10" type="text" value="{{ $D10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DE10" type="text" value="{{ $DE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DS10" type="text" value="{{ $DS10 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13h-15H55</th>
                                                    <td>
                                                        <input wire::model.defer = "L13" type="text" value="{{ $L13 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LE13" type="text" value="{{ $LE13 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LS13" type="text" value="{{ $LS13 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA13" type="text" value="{{ $MA13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAE13" type="text" value="{{ $MAE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAS13" type="text" value="{{ $MAS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M13" type="text" value="{{ $M13 }}" style="border: none ;">
                                                        <input wire::model.defer = "ME13" type="text" value="{{ $ME13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MS13" type="text" value="{{ $MS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J13" type="text" value="{{ $J13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JE13" type="text" value="{{ $JE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JS13" type="text" value="{{ $JS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V13" type="text" value="{{ $V13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VE13" type="text" value="{{ $VE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VS13" type="text" value="{{ $VS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S13" type="text" value="{{ $S13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SE13" type="text" value="{{ $SE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SS13" type="text" value="{{ $SS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D13" type="text" value="{{ $D13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DE13" type="text" value="{{ $DE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DS13" type="text" value="{{ $DS13 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H05-18H50</th>
                                                    <td>
                                                        <input wire::model.defer = "L16" type="text" value="{{ $L16 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LE16" type="text" value="{{ $LE16 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LS16" type="text" value="{{ $LS16 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA16" type="text" value="{{ $MA16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAE16" type="text" value="{{ $MAE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAS16" type="text" value="{{ $MAS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M16" type="text" value="{{ $M16 }}" style="border: none ;">
                                                        <input wire::model.defer = "ME16" type="text" value="{{ $ME16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MS16" type="text" value="{{ $MS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J16" type="text" value="{{ $J16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JE16" type="text" value="{{ $JE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JS16" type="text" value="{{ $JS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V16" type="text" value="{{ $V16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VE16" type="text" value="{{ $VE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VS16" type="text" value="{{ $VS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S16" type="text" value="{{ $S16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SE16" type="text" value="{{ $SE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SS16" type="text" value="{{ $SS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D16" type="text" value="{{ $D16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DE16" type="text" value="{{ $DE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DS16" type="text" value="{{ $DS16 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H00-21H55</th>
                                                    <td>
                                                        <input wire::model.defer = "L19" type="text" value="{{ $L19 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LE19" type="text" value="{{ $LE19 }}" style="border: none ;">  
                                                        <input wire::model.defer = "LS19" type="text" value="{{ $LS19 }}" style="border: none ;">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MA19" type="text" value="{{ $MA19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAE19" type="text" value="{{ $MAE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAS19" type="text" value="{{ $MAS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "M19" type="text" value="{{ $M19 }}" style="border: none ;">
                                                        <input wire::model.defer = "ME19" type="text" value="{{ $ME19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MS19" type="text" value="{{ $MS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "J19" type="text" value="{{ $J19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JE19" type="text" value="{{ $JE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JS19" type="text" value="{{ $JS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "V19" type="text" value="{{ $V19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VE19" type="text" value="{{ $VE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VS19" type="text" value="{{ $VS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "S19" type="text" value="{{ $S19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SE19" type="text" value="{{ $SE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SS19" type="text" value="{{ $SS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "D19" type="text" value="{{ $D19 }}" style="border: none ;">
                                                        <input wire::model.defer = "DE19" type="text" value="{{ $DE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "DS19" type="text" value="{{ $DS19 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Valider emploi de temps") }}</button>
                                    </div>
                                </form>
                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div>

