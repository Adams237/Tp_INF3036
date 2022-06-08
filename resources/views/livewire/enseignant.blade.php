<div >
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center text-uppercase display-6">
                                    <strong class="card-title">{{ $enseignant }}</strong>
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
                                                        <input wire::model.defer = "LUE7" type="text" value="{{ $LUE7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN7" type="text" value="{{ $LN7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF7" type="text" value="{{ $LF7 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE7" type="text" value="{{ $MAUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN7" type="text" value="{{ $MAN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF7" type="text" value="{{ $MAF7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE7" type="text" value="{{ $MUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN7" type="text" value="{{ $MN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF7" type="text" value="{{ $MF7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE7" type="text" value="{{ $JUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN7" type="text" value="{{ $JN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF7" type="text" value="{{ $JF7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE7" type="text" value="{{ $VUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN7" type="text" value="{{ $VN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF7" type="text" value="{{ $VF7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE7" type="text" value="{{ $SUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF7" type="text" value="{{ $SN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN7" type="text" value="{{ $SF7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE7" type="text" value="{{ $DUE7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF7" type="text" value="{{ $DN7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN7" type="text" value="{{ $DF7 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H-13h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE10" type="text" value="{{ $LUE10 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN10" type="text" value="{{ $LN10 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF10" type="text" value="{{ $LF10 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE10" type="text" value="{{ $MAUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN10" type="text" value="{{ $MAN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF10" type="text" value="{{ $MAF10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE10" type="text" value="{{ $MUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN10" type="text" value="{{ $MN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF10" type="text" value="{{ $MF10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE10" type="text" value="{{ $JUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN10" type="text" value="{{ $JN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF10" type="text" value="{{ $JF10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE10" type="text" value="{{ $VUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN10" type="text" value="{{ $VN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF10" type="text" value="{{ $VF10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE10" type="text" value="{{ $SUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF10" type="text" value="{{ $SN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN10" type="text" value="{{ $SF10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE10" type="text" value="{{ $DUE10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF10" type="text" value="{{ $DN10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN10" type="text" value="{{ $DF10 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13H-15h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE13" type="text" value="{{ $LUE13 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN13" type="text" value="{{ $LN13 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF13" type="text" value="{{ $LF13 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE13" type="text" value="{{ $MAUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN13" type="text" value="{{ $MAN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF13" type="text" value="{{ $MAF13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE13" type="text" value="{{ $MUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN13" type="text" value="{{ $MN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF13" type="text" value="{{ $MF13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE13" type="text" value="{{ $JUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN13" type="text" value="{{ $JN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF13" type="text" value="{{ $JF13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE13" type="text" value="{{ $VUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN13" type="text" value="{{ $VN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF13" type="text" value="{{ $VF13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE13" type="text" value="{{ $SUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF13" type="text" value="{{ $SN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN13" type="text" value="{{ $SF13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE13" type="text" value="{{ $DUE13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF13" type="text" value="{{ $DN13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN13" type="text" value="{{ $DF13 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H-18h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE16" type="text" value="{{ $LUE16 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN16" type="text" value="{{ $LN16 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF16" type="text" value="{{ $LF16 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE16" type="text" value="{{ $MAUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN16" type="text" value="{{ $MAN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF16" type="text" value="{{ $MAF16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE16" type="text" value="{{ $MUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN16" type="text" value="{{ $MN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF16" type="text" value="{{ $MF16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE16" type="text" value="{{ $JUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN16" type="text" value="{{ $JN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF16" type="text" value="{{ $JF16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE16" type="text" value="{{ $VUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN16" type="text" value="{{ $VN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF16" type="text" value="{{ $VF16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE16" type="text" value="{{ $SUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF16" type="text" value="{{ $SN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN16" type="text" value="{{ $SF16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE16" type="text" value="{{ $DUE16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF16" type="text" value="{{ $DN16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN16" type="text" value="{{ $DF16 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H-21h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE19" type="text" value="{{ $LUE19 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN19" type="text" value="{{ $LN19 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF19" type="text" value="{{ $LF19 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE19" type="text" value="{{ $MAUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN19" type="text" value="{{ $MAN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF19" type="text" value="{{ $MAF19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE19" type="text" value="{{ $MUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN19" type="text" value="{{ $MN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF19" type="text" value="{{ $MF19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE19" type="text" value="{{ $JUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN19" type="text" value="{{ $JN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF19" type="text" value="{{ $JF19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE19" type="text" value="{{ $VUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN19" type="text" value="{{ $VN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF19" type="text" value="{{ $VF19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE19" type="text" value="{{ $SUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF19" type="text" value="{{ $SN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN19" type="text" value="{{ $SF19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE19" type="text" value="{{ $DUE19 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF19" type="text" value="{{ $DN19 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN19" type="text" value="{{ $DF19 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div>
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{ __("Valider emploi de temps") }}</button>
                                    </div> -->
                                </form>
                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div>


