<div >
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">Bordered Table</strong>
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
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">10H05-12H50</th>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select') 
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                    <td>
                                                        @livewire('select')
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">13h-15H55</th>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')r</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">16H05-18H50</th>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">19H00-21H55</th>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                    <td>@livewire('select')</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="submit">envoyer</button>
                                </form>
                            </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div>

