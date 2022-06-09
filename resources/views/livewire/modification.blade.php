<div >
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center text-uppercase display-6">
                                    <strong class="card-title">{{ $filiere }}-@if ($niveau<4)L{{ $niveau }} @elseif($niveau==4) M1 @else M2 @endif-@if(!empty($specialite)) {{ $specialite }} @endif</strong>
                                </div>
                                <form wire:submit.prevent = "supprimer">
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
                                                        <select wire::model.defer = "L7" name="L7" id="L7" style="border: none;">
                                                            <option value="{{ $L7 }}">{{ $L7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LE7" name="LE7" id="LE7" style="border: none;">
                                                            <option value="{{ $LE7 }}">{{ $LE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LS7" name="LS7" id="LS7" style="border: none;">
                                                            <option value="{{ $LS7 }}">{{ $LS7 }}</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "MA7" name="MA7" id="MA7" style="border: none;">
                                                            <option value="{{ $MA7 }}">{{ $MA7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAE7" name="MAE7" id="MAE7" style="border: none;">
                                                            <option value="{{ $MAE7 }}">{{ $MAE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAS7" name="MAS7" id="MAS7" style="border: none;">
                                                            <option value="{{ $MAS7 }}">{{ $MAS7 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "M7" name="M7" id="M7" style="border: none;">
                                                            <option value="{{ $M7 }}">{{ $M7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "ME7" name="ME7" id="ME7" style="border: none;">
                                                            <option value="{{ $ME7 }}">{{ $ME7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MS7" name="MS7" id="MS7" style="border: none;">
                                                            <option value="{{ $MS7 }}">{{ $MS7 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "J7" name="J7" id="J7" style="border: none;">
                                                            <option value="{{ $J7 }}">{{ $J7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JE7" name="JE7" id="JE7" style="border: none;">
                                                            <option value="{{ $JE7 }}">{{ $JE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JS7" name="JS7" id="JS7" style="border: none;">
                                                            <option value="{{ $JS7 }}">{{ $JS7 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "V7" name="V7" id="V7" style="border: none;">
                                                            <option value="{{ $V7 }}">{{ $V7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VE7" name="VE7" id="VE7" style="border: none;">
                                                            <option value="{{ $VE7 }}">{{ $VE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VS7" name="VS7" id="VS7" style="border: none;">
                                                            <option value="{{ $VS7 }}">{{ $VS7 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "S7" name="S7" id="S7" style="border: none;">
                                                            <option value="{{ $S7 }}">{{ $S7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SE7" name="SE7" id="SE7" style="border: none;">
                                                            <option value="{{ $SE7 }}">{{ $SE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SS7" name="SS7" id="SS7" style="border: none;">
                                                            <option value="{{ $SS7 }}">{{ $SS7 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "D7" name="D7" id="D7" style="border: none;">
                                                            <option value="{{ $D7 }}">{{ $D7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DE7" name="DE7" id="DE7" style="border: none;">
                                                            <option value="{{ $DE7 }}">{{ $DE7 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DS7" name="DS7" id="DS7" style="border: none;">
                                                            <option value="{{ $DS7 }}">{{ $DS7 }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H05-12H50</th>
                                                    <td>
                                                        <select wire::model.defer = "L10" name="L10" id="L10" style="border: none;">
                                                            <option value="{{ $L10 }}">{{ $L10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LE10" name="LE10" id="LE10" style="border: none;">
                                                            <option value="{{ $LE10 }}">{{ $LE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LS10" name="LS10" id="LS10" style="border: none;">
                                                            <option value="{{ $LS10 }}">{{ $LS10 }}</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "MA10" name="MA10" id="MA10" style="border: none;">
                                                            <option value="{{ $MA10 }}">{{ $MA10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAE10" name="MAE10" id="MAE10" style="border: none;">
                                                            <option value="{{ $MAE10 }}">{{ $MAE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAS10" name="MAS10" id="MAS10" style="border: none;">
                                                            <option value="{{ $MAS10 }}">{{ $MAS10 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "M10" name="M10" id="M10" style="border: none;">
                                                            <option value="{{ $M10 }}">{{ $M10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "ME10" name="ME10" id="ME10" style="border: none;">
                                                            <option value="{{ $ME10 }}">{{ $ME10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MS10" name="MS10" id="MS10" style="border: none;">
                                                            <option value="{{ $MS10 }}">{{ $MS10 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "J10" name="J10" id="J10" style="border: none;">
                                                            <option value="{{ $J10 }}">{{ $J10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JE10" name="JE10" id="JE10" style="border: none;">
                                                            <option value="{{ $JE10 }}">{{ $JE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JS10" name="JS10" id="JS10" style="border: none;">
                                                            <option value="{{ $JS10 }}">{{ $JS10 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "V10" name="V10" id="V10" style="border: none;">
                                                            <option value="{{ $V10 }}">{{ $V10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VE10" name="VE10" id="VE10" style="border: none;">
                                                            <option value="{{ $VE10 }}">{{ $VE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VS10" name="VS10" id="VS10" style="border: none;">
                                                            <option value="{{ $VS10 }}">{{ $VS10 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "S10" name="S10" id="S10" style="border: none;">
                                                            <option value="{{ $S10 }}">{{ $S10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SE10" name="SE10" id="SE10" style="border: none;">
                                                            <option value="{{ $SE10 }}">{{ $SE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SS10" name="SS10" id="SS10" style="border: none;">
                                                            <option value="{{ $SS10 }}">{{ $SS10 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "D10" name="D10" id="D10" style="border: none;">
                                                            <option value="{{ $D10 }}">{{ $D10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DE10" name="DE10" id="DE10" style="border: none;">
                                                            <option value="{{ $DE10 }}">{{ $DE10 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DS10" name="DS10" id="DS10" style="border: none;">
                                                            <option value="{{ $DS10 }}">{{ $DS10 }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13h-15H55</th>
                                                    <td>
                                                        <select wire::model.defer = "L13" name="L13" id="L13" style="border: none;">
                                                            <option value="{{ $L13 }}">{{ $L13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LE13" name="LE13" id="LE13" style="border: none;">
                                                            <option value="{{ $LE13 }}">{{ $LE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LS13" name="LS13" id="LS13" style="border: none;">
                                                            <option value="{{ $LS13 }}">{{ $LS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "MA13" name="MA13" id="MA13" style="border: none;">
                                                            <option value="{{ $MA13 }}">{{ $MA13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAE13" name="MAE13" id="MAE13" style="border: none;">
                                                            <option value="{{ $MAE13 }}">{{ $MAE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAS13" name="MAS13" id="MAS13" style="border: none;">
                                                            <option value="{{ $MAS13 }}">{{ $MAS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "M13" name="M13" id="M13" style="border: none;">
                                                            <option value="{{ $M13 }}">{{ $M13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "ME13" name="ME13" id="ME13" style="border: none;">
                                                            <option value="{{ $ME13 }}">{{ $ME13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MS13" name="MS13" id="MS13" style="border: none;">
                                                            <option value="{{ $MS13 }}">{{ $MS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "J13" name="J13" id="J13" style="border: none;">
                                                            <option value="{{ $J13 }}">{{ $J13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JE13" name="JE13" id="JE13" style="border: none;">
                                                            <option value="{{ $JE13 }}">{{ $JE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JS13" name="JS13" id="JS13" style="border: none;">
                                                            <option value="{{ $JS13 }}">{{ $JS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "V13" name="V13" id="V13" style="border: none;">
                                                            <option value="{{ $V13 }}">{{ $V13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VE13" name="VE13" id="VE13" style="border: none;">
                                                            <option value="{{ $VE13 }}">{{ $VE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VS13" name="VS13" id="VS13" style="border: none;">
                                                            <option value="{{ $VS13 }}">{{ $VS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "S13" name="S13" id="S13" style="border: none;">
                                                            <option value="{{ $S13 }}">{{ $S13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SE13" name="SE13" id="SE13" style="border: none;">
                                                            <option value="{{ $SE13 }}">{{ $SE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SS13" name="SS13" id="SS13" style="border: none;">
                                                            <option value="{{ $SS13 }}">{{ $SS13 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "D13" name="D13" id="D13" style="border: none;">
                                                            <option value="{{ $D13 }}">{{ $D13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DE13" name="DE13" id="DE13" style="border: none;">
                                                            <option value="{{ $DE13 }}">{{ $DE13 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DS13" name="DS13" id="DS13" style="border: none;">
                                                            <option value="{{ $DS13 }}">{{ $DS13 }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H05-18H50</th>
                                                    <td>
                                                        <select wire::model.defer = "L16" name="L16" id="L16" style="border: none;">
                                                            <option value="{{ $L16 }}">{{ $L16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LE16" name="LE16" id="LE16" style="border: none;">
                                                            <option value="{{ $LE16 }}">{{ $LE16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LS16" name="LS16" id="LS16" style="border: none;">
                                                            <option value="{{ $LS16 }}">{{ $LS16 }}</option>
                                                        </select> 
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "MA16" name="MA16" id="MA16" style="border: none;">
                                                            <option value="{{ $MA16 }}">{{ $MA16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAE16" name="MAE16" id="MAE16" style="border: none;">
                                                            <option value="{{ $MAE16 }}">{{ $MAE16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAS16" name="MAS16" id="MAS16" style="border: none;">
                                                            <option value="{{ $MAS16 }}">{{ $MAS16 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "M16" name="M16" id="M16" style="border: none;">
                                                            <option value="{{ $M16 }}">{{ $M16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "ME16" name="ME16" id="ME16" style="border: none;">
                                                            <option value="{{ $ME16 }}">{{ $ME16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MS16" name="MS16" id="MS16" style="border: none;">
                                                            <option value="{{ $MS16 }}">{{ $MS16 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "J16" name="J16" id="J16" style="border: none;">
                                                            <option value="{{ $J16 }}">{{ $J16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JE16" name="JE16" id="JE16" style="border: none;">
                                                            <option value="{{ $JE16 }}">{{ $JE16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JS16" name="JS16" id="JS16" style="border: none;">
                                                            <option value="{{ $JS16 }}">{{ $JS16 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "V16" name="V16" id="V16" style="border: none;">
                                                            <option value="{{ $V16 }}">{{ $V16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VE16" name="VE16" id="VE16" style="border: none;">
                                                            <option value="{{ $VE16 }}">{{ $VE16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VS16" name="VS16" id="VS16" style="border: none;">
                                                            <option value="{{ $VS16 }}">{{ $VS16 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "S16" name="S16" id="S16" style="border: none;">
                                                            <option value="{{ $S16 }}">{{ $S16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SE16" name="SE16" id="SE16" style="border: none;">
                                                            <option value="{{ $SE16 }}">{{ $SE16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SS16" name="SS16" id="SS16" style="border: none;">
                                                            <option value="{{ $SS16 }}">{{ $SS16 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "D16" name="D16" id="D16" style="border: none;">
                                                            <option value="{{ $D16 }}">{{ $D16 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DE16" name="DE16" id="DE16" style="border: none;">
                                                            <option value="{{ $DE16 }}">{{ $DE16 }}</option>
                                                        </select>
                                                        <select wire::model.defer = "DS16" name="DS16" id="DS16" style="border: none;">
                                                            <option value="{{ $DS16 }}">{{ $DS16 }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H00-21H55</th>
                                                    <td>
                                                        <select wire::model.defer = "L19" name="L19" id="L19" style="border: none;">
                                                            <option value="{{ $L19 }}">{{ $L19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LE19" name="LE19" id="LE19" style="border: none;">
                                                            <option value="{{ $LE19 }}">{{ $LE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "LS19" name="LS19" id="LS19" style="border: none;">
                                                            <option value="{{ $LS19 }}">{{ $LS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "MA19" name="MA19" id="MA19" style="border: none;">
                                                            <option value="{{ $MA19 }}">{{ $MA19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAE19" name="MAE19" id="MAE19" style="border: none;">
                                                            <option value="{{ $MAE19 }}">{{ $MAE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MAS19" name="MAS19" id="MAS19" style="border: none;">
                                                            <option value="{{ $MAS19 }}">{{ $MAS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "M19" name="M19" id="M19" style="border: none;">
                                                            <option value="{{ $M19 }}">{{ $M19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "ME19" name="ME19" id="ME19" style="border: none;">
                                                            <option value="{{ $ME19 }}">{{ $ME19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "MS19" name="MS19" id="MS19" style="border: none;">
                                                            <option value="{{ $MS19 }}">{{ $MS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "J19" name="J19" id="J19" style="border: none;">
                                                            <option value="{{ $J19 }}">{{ $J19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JE19" name="JE19" id="JE19" style="border: none;">
                                                            <option value="{{ $JE19 }}">{{ $JE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "JS19" name="JS19" id="JS19" style="border: none;">
                                                            <option value="{{ $JS19 }}">{{ $JS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "V19" name="V19" id="V19" style="border: none;">
                                                            <option value="{{ $V19 }}">{{ $V19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VE19" name="VE19" id="VE19" style="border: none;">
                                                            <option value="{{ $VE19 }}">{{ $VE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "VS19" name="VS19" id="VS19" style="border: none;">
                                                            <option value="{{ $VS19 }}">{{ $VS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "S19" name="S19" id="S19" style="border: none;">
                                                            <option value="{{ $S19 }}">{{ $S19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SE19" name="SE19" id="SE19" style="border: none;">
                                                            <option value="{{ $SE19 }}">{{ $SE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "SS19" name="SS19" id="SS19" style="border: none;">
                                                            <option value="{{ $SS19 }}">{{ $SS19 }}</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select wire::model.defer = "D19" name="D19" id="D19" style="border: none;">
                                                            <option value="{{ $D19 }}">{{ $D19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DE19" name="DE19" id="DE19" style="border: none;">
                                                            <option value="{{ $DE19 }}">{{ $DE19 }}</option>
                                                        </select><br>
                                                        <select wire::model.defer = "DS19" name="DS19" id="DS19" style="border: none;">
                                                            <option value="{{ $DS19 }}">{{ $DS19 }}</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                        <div>
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Supprimer emploi de temps") }}</button>
                                        </div>
                                </form>
                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div>


