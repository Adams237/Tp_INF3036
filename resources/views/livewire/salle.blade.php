<div >
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header text-center text-uppercase display-6">
                                    <strong class="card-title">{{ $nom_salle }}</strong>
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
                                                        <input wire::model.defer = "LUE7" type="text" value="{{ $ueL7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN7" type="text" value="{{ $fL7 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF7" type="text" value="{{ $ensL7 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE7" type="text" value="{{ $ueMA7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN7" type="text" value="{{ $fMA7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF7" type="text" value="{{ $ensMA7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE7" type="text" value="{{ $ueM7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN7" type="text" value="{{ $fM7 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF7" type="text" value="{{ $ensM7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE7" type="text" value="{{ $ueJ7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN7" type="text" value="{{ $fJ7 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF7" type="text" value="{{ $ensJ7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE7" type="text" value="{{ $ueV7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN7" type="text" value="{{ $fV7 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF7" type="text" value="{{ $ensV7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE7" type="text" value="{{ $ueS7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF7" type="text" value="{{ $fS7 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN7" type="text" value="{{ $ensS7 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE7" type="text" value="{{ $ueD7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF7" type="text" value="{{ $fD7 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN7" type="text" value="{{ $ensD7 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H-13h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE10" type="text" value="{{ $ueL10 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN10" type="text" value="{{ $fL10 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF10" type="text" value="{{ $ensL10 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE10" type="text" value="{{ $ueMA10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN10" type="text" value="{{ $fMA10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF10" type="text" value="{{ $ensMA10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE10" type="text" value="{{ $ueM10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN10" type="text" value="{{ $fM10 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF10" type="text" value="{{ $ensM10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE10" type="text" value="{{ $ueJ10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN10" type="text" value="{{ $fJ10 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF10" type="text" value="{{ $ensJ10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE10" type="text" value="{{ $ueV10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN10" type="text" value="{{ $fV10 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF10" type="text" value="{{ $ensV10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE10" type="text" value="{{ $ueS10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF10" type="text" value="{{ $fS10 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN10" type="text" value="{{ $ensS10 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE10" type="text" value="{{ $ueD10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF10" type="text" value="{{ $fD10 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN10" type="text" value="{{ $ensD10 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13H-15h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE13" type="text" value="{{ $ueL13 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN13" type="text" value="{{ $fL13 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF13" type="text" value="{{ $ensL13 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE13" type="text" value="{{ $ueMA13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN13" type="text" value="{{ $fMA13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF13" type="text" value="{{ $ensMA13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE13" type="text" value="{{ $ueM13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN13" type="text" value="{{ $fM13 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF13" type="text" value="{{ $ensM13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE13" type="text" value="{{ $ueJ13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN13" type="text" value="{{ $fJ13 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF13" type="text" value="{{ $ensJ13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE13" type="text" value="{{ $ueV13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN13" type="text" value="{{ $fV13 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF13" type="text" value="{{ $ensV13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE13" type="text" value="{{ $ueS13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF13" type="text" value="{{ $fS13 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN13" type="text" value="{{ $ensS13 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE13" type="text" value="{{ $ueD13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF13" type="text" value="{{ $fD13 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN13" type="text" value="{{ $ensD13 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H-18h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE16" type="text" value="{{ $ueL16 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN16" type="text" value="{{ $fL16 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF16" type="text" value="{{ $ensL16 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE16" type="text" value="{{ $ueMA16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN16" type="text" value="{{ $fMA16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF16" type="text" value="{{ $ensMA16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE16" type="text" value="{{ $ueM16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN16" type="text" value="{{ $fM16 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF16" type="text" value="{{ $ensM16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE16" type="text" value="{{ $ueJ16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN16" type="text" value="{{ $fJ16 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF16" type="text" value="{{ $ensJ16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE16" type="text" value="{{ $ueV16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN16" type="text" value="{{ $fV16 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF16" type="text" value="{{ $ensV16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE16" type="text" value="{{ $ueS16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF16" type="text" value="{{ $fS16 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN16" type="text" value="{{ $ensS16 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "DUE16" type="text" value="{{ $ueD16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DF16" type="text" value="{{ $fD16 }}" style="border: none ;">
                                                        <input wire::model.defer = "DN16" type="text" value="{{ $ensD16 }}" style="border: none ;">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H-21h55</th>
                                                    <td>
                                                        <input wire::model.defer = "LUE19" type="text" value="{{ $ueL19 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LN19" type="text" value="{{ $fL19 }}" style="border: none ; ">  
                                                        <input wire::model.defer = "LF19" type="text" value="{{ $ensL19 }}" style="border: none ; ">  
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MAUE19" type="text" value="{{ $ueMA19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAN19" type="text" value="{{ $fMA19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MAF19" type="text" value="{{ $ensMA19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "MUE19" type="text" value="{{ $ueM19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MN19" type="text" value="{{ $fM19 }}" style="border: none ;">
                                                        <input wire::model.defer = "MF19" type="text" value="{{ $ensM19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "JUE19" type="text" value="{{ $ueJ19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JN19" type="text" value="{{ $fJ19 }}" style="border: none ;">
                                                        <input wire::model.defer = "JF19" type="text" value="{{ $ensJ19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "VUE19" type="text" value="{{ $ueV19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VN19" type="text" value="{{ $fV19 }}" style="border: none ;">
                                                        <input wire::model.defer = "VF19" type="text" value="{{ $ensV19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "SUE19" type="text" value="{{ $ueS19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SF19" type="text" value="{{ $fS19 }}" style="border: none ;">
                                                        <input wire::model.defer = "SN19" type="text" value="{{ $ensS19 }}" style="border: none ;">
                                                    </td>
                                                    <td>
                                                        <input wire::model.defer = "ueD19" type="text" value="{{ $ueD19 }}" style="border: none ;">
                                                        <input wire::model.defer = "fD19" type="text" value="{{ $fD19 }}" style="border: none ;">
                                                        <input wire::model.defer = "ensD19" type="text" value="{{ $ensD19 }}" style="border: none ;">
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



